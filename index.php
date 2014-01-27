<?php get_header();?>
<h1 aria-level="1" role="heading" class="section">Page d'accueil du portfolio de Julien Roland, designer et développeur web.</h1>
<?php include('nav.php'); ?>
<section role="main" id="main" class="main">
    <h2 aria-level="2" role="heading" class="section">Qui suis-je, mes deux derniers projets et mes derniers articles</h2>
    <section class="intro">
        <div class="wrapper">
            <h3 aria-level="3" role="heading" class="title">Hello ! Je m'appelle Julien Roland</h3>
            <span class="underTitle">Je suis web designer &  web developpeur </span>
        </div>
    </section>
    <section class="lastProject" itemscope itemtype="http://schema.org/Article">
        <div class="wrapper">
            <h3 class="titleIndex" aria-level="3" role="heading">Mes deux derniers projets</h3>
            <hr/>
            <?php $args = array( 'post_type' => 'projets', 'posts_per_page' => 2 );
            $loop = new WP_Query( $args );
            if($loop->have_posts()):
                while ( $loop->have_posts() ) : $loop->the_post();
            get_template_part( 'projet', get_post_format() ); 
            endwhile;
            else:?>
            <p>Il n'y a aucun projet...</p>
        <?php endif;
        wp_reset_query();
        ?>
    </div>
</section>
<section class="lastArticles">
    <div class="wrapper">
       <h3 class="titleIndex" aria-level="3" role="heading">Mes derniers articles</h3>
       <hr/>
       <?php if ( have_posts() ) : ?>
           <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content', get_post_format() ); ?>
        <?php endwhile; ?>

    <?php else : ?>
        <p>Aucun article...</p>

    <?php endif;
    wp_reset_query(); ?>
</div>
</section>
<?php $args = array( 'post_type' => 'projets', 'posts_per_page' => 10 ,'category_name' =>'personnel');
$loop = new WP_Query( $args );
if($loop->have_posts()):?>
<section class="projetsPersonnels" data-parallax="go" data-speed="10">
    <div class="wrapper">
        <h3 class="titleIndex" aria-level="3" role="heading">Mes projets personnels</h3>
        <ul>
            <?php while ( $loop->have_posts() ) : $loop->the_post();
            get_template_part( 'projet-personnel', get_post_format() ); 
            endwhile;?>
        </ul>


    </div>
</section>
<?php endif;
wp_reset_query();
?>

</section>
<?php get_footer(); ?>



