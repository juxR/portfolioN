<?php
        // Translations can be filed in the /languages/ directory
load_theme_textdomain( 'html5reset', TEMPLATEPATH . '/languages' );

$locale = get_locale();
$locale_file = TEMPLATEPATH . "/languages/$locale.php";
if ( is_readable($locale_file) )
	require_once($locale_file);

/* FILTER */
add_filter('excerpt_more', 'new_excerpt_more');
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );
add_filter('the_content', 'addlightboxrel_replace');

/* SUPPORT */
if (function_exists('add_theme_support')) {
  add_theme_support( 'post-thumbnails');
  add_theme_support('menus');
  add_theme_support('html5');
}
/* ACTION */
add_action( 'init', 'register_my_menus' );
add_action( 'init', 'create_post_type' );
add_action( 'restrict_manage_posts', 'olab_add_image_category_filter' );

function remove_width_attribute( $html ) {
 $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
 return $html;
}
function olab_add_image_category_filter() {
  $screen = get_current_screen();
  if ( 'upload' == $screen->id ) {
    $dropdown_options = array( 'show_option_all' => __( 'View all categories', 'olab' ), 'hide_empty' => false, 'hierarchical' => true, 'orderby' => 'name', );
    wp_dropdown_categories( $dropdown_options );
  }
}
function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      )
    );
}
function new_excerpt_more( $more ) {
  return '...';   
}
function addlightboxrel_replace ($content)
{ global $post;
  $pattern = "/<a(.*?)href=('|\")(.*?).(bmp|gif|jpeg|jpg|png)('|\")(.*?)>/i";
  $replacement = '<a$1class="thumbnail" href=$2$3.$4$5$6</a>';
  $content = preg_replace($pattern, $replacement, $content);
  $content = str_replace("%LIGHTID%", $post->ID, $content);
  return $content;
}
function create_post_type() {
	register_post_type( 'projets',
    array(
      'labels' => array(
        'name' => __( 'Projets' ),
        'singular_name' => __( 'Projet' )
        ),
      'public' => true,
      'has_archive' => true,
      'show_in_menu'=> true,
      'show_in_nav_menus' => true,
      'rewrite'=>true,
      'taxonomies' => array( 'category', 'post_tag' ),
      'supports' => array('title','editor','thumbnail','custom-fields','pagination')
      )
    );
  register_post_type( 'apropos',
    array(
     'labels' => array(
      'name' => __( 'A propos' ),
      'singular_name' => __( 'A propos' )
      ),
     'public' => true,
     'has_archive' => true,
     'show_in_menu'=> true,
     'rewrite'=>true,
     'show_in_nav_menus' => true,
     'supports' => array('title','editor','custom-fields')
     )
    );
}

/*==================================
=            Pagination            =
==================================*/

// Pagination
function reverie_pagination() {
	global $wp_query;

  $big = 999999999; // This needs to be an unlikely integer

  // For more options and info view the docs for paginate_links()
  // http://codex.wordpress.org/Function_Reference/paginate_links
  $paginate_links = paginate_links( array(
  	'base' => str_replace( $big, '%#%', get_pagenum_link($big) ),
  	'current' => max( 1, get_query_var('paged') ),
  	'total' => $wp_query->max_num_pages,
  	'mid_size' => 5,
  	'prev_next' => True,
  	'prev_text' => __('&laquo;'),
  	'next_text' => __('&raquo;'),
  	'type' => 'list'
  	) );

  // Display the pagination if more than one page is found
  if ( $paginate_links ) {
  	echo '<div class="pagination-centered">';
  	echo $paginate_links;
  	echo '</div><!--// end .pagination -->';
  }
}
function jc_post_by_category($atts, $content = null) {
  extract(shortcode_atts(array(
    "nb" => '5',
    "orderby" => 'post_date',
    "order" => 'DESC',
    "category" => '1'
    ), $atts));
  global $post;
  $tmp_post = $post;
  $myposts = get_posts('showposts='.$nb.'&orderby='.$orderby.'&category='.$category);
  $out = '<ul>';
  foreach($myposts as $post){
    setup_postdata( $post );
    $out .= '<li><a href="'.get_permalink().'">'.the_title("","",false).'</a></li>';
  }
  $out .= '</ul>';
  wp_reset_postdata();
  $post = $tmp_post;
  return $out;
}
add_shortcode("post-by-category", "jc_post_by_category");
/*-----  End of Pagination  ------*/
/*Nav personnaliser*/
class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
  function start_el ( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    // Copy all the start_el code from source, and modify
    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

    $class_names = $value = '';

    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    $classes[] = 'menu-item-' . $item->ID;

    $class_names = in_array("current_page_item",$item->classes) ? ' active' : '';
    //$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
    $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

    /*$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
    $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';*/

    $output .= $indent . '<li' /*. $id */. $value . $class_names .'>';

    $atts = array();
    $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
    $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
    $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
    $atts['href']   = ! empty( $item->url )        ? $item->url        : '';

    $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );

    $attributes = '';
    foreach ( $atts as $attr => $value ) {
      if ( ! empty( $value ) ) {
        $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
        $title = 'Aller sur cette page';
        $attributes .= ' ' . $attr . '="' . $value . '"'. 'title="'. $title .'"';
      }
    }

    switch ($item->title) {
      case 'Accueil':
      $icon = '<i class="logo"></i>';
      break;
      case 'Blog':
      $icon = '<i class="fa fa-comments"></i>';
      
      break;
      case 'Projets':
      $icon = '<i class="fa fa-briefcase"></i>';
      break;
      case 'A propos':
      
      $icon = '<i class="fa fa-male"></i>';
      break;
      case 'Contact':
      $icon = '<i class="fa fa-globe"></i>';
      break;

    }

    $item_output = $args->before;
    $item_output .= '<a'. $attributes .'>';
    $item_output .= '<span>'.$args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after.'</span>';
    $item_output .= $icon;
    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }
}