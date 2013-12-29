<?php get_header();?>
<h1 aria-level="1" role="heading" class="section">Page d'accueil du portfolio de Julien Roland designer et développeur web.</h1>
<?php include('nav.php'); ?>
<section role="main" id="main" class="main">
    <h2 aria-level="2" role="heading" class="section">Partie principale de la page</h3>
        <section class="intro">
            <div class="wrapper">
                <h1 aria-level="1" role="heading">Hello ! Je m'appelle Julien Roland</h1>
                <span class="underTitle">Je suis web designer &  web developpeur </span>
            </div>
        </section>
        <section class="lastProject wrapper" itemscope itemtype="http://schema.org/Article">
            <h3 class="titleIndex" aria-level="3" role="heading">Mes derniers projets</h3>
            <hr/>
            <?php $args = array( 'post_type' => 'projets', 'posts_per_page' => 2 );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
            get_template_part( 'projet', get_post_format() ); 
            endwhile;?>

        </section>
        <section class="lastArticles" role="content">
            <div class="wrapper">
             <h3 class="titleIndex" aria-level="3" role="heading">Mes derniers articles</h3>
             <hr/>
             <?php if ( have_posts() ) : ?>
                 <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', get_post_format() ); ?>
                <?php endwhile; ?>

            <?php else : ?>
                <?php get_template_part( 'content', 'none' ); ?>

            <?php endif; // end have_posts() check ?>
        </div>
    </section>
</section>
<?php get_footer(); ?>



