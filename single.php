<?php get_header();?>
<h1 aria-level="1" role="heading" class="section">Page d'article du portfolio de Julien Roland designer et développeur web.</h1>
<?php include('nav.php'); ?>
<section role="main" id="main" class="main">
    <h2 aria-level="2" role="heading" class="section">Partie principale de la page</h3>
            <section class="one" role="content">
               <h4 class="section" role="heading" aria-level="4">Un article</h4>
               <?php if ( have_posts() ) : ?>
                   <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'contentOne', get_post_format() ); ?>
                <?php endwhile; ?>

            <?php else : ?>
                <?php get_template_part( 'contentOne', 'none' ); ?>

            <?php endif; // end have_posts() check ?>
        </section>
        <?php comments_template(); ?>
    </section>
    <?php get_footer(); ?>



