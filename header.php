<!DOCTYPE html >
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head itemscope itemtype="http://schema.org/Person" >  
  <meta charset="<?php bloginfo('charset'); ?>" />
  <!--[if lt IE 9]>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/responsive-ie.css">
<![endif]-->
<title><?php bloginfo('name'); ?><?php wp_title('|',true); ?><?php if(is_home()): ?> | Accueil <?php endif; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php if ( is_single() ) {
        single_post_title('', true);
        the_field('extrait'); 
    } else {
        bloginfo('name'); echo " - "; bloginfo('description');
    }
    ?>">
             <meta name="keywords" content="julien roland web webdesigner webdeveloper namur belgique hepl inpres julien-roland julien-roland.be">
             <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
             <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/img/favicon.png" />
             <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/screen.css" />
             <script src="<?php bloginfo('template_directory') ?>/js/vendor/modernizr-2.6.2.min.js"></script>


             <meta itemprop="name" content="Julien Roland">
             <meta itemprop="familyName" content="Roland">
             <meta itemprop="givenName" content="Julien">
             <meta itemprop="jobTitle" content="Student">
             <meta itemprop="nationality" content="Belgian">
             <meta itemprop="url" content="http://julien-roland.be/">
             <meta itemprop="birthDate" content="1992-02-28">


           <?php if ( is_singular() && get_option( 'thread_comments' ) )
           wp_enqueue_script( 'comment-reply' );?>
           <?php  wp_head();?>
           <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->