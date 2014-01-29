<?php get_header(); ?>
    <h1 aria-level="1" role="heading" class="section">Présentation de mon projet: <?php the_title(); ?></h1>
<?php get_template_part('nav'); ?>
<section role="main" id="main" class="main">
    <h2 aria-level="2" role="heading" class="section">La fiche complète de mon projet <?php the_title(); ?></h2>
    <div class="introProjet">
        <img src="<?php the_field('intro'); ?>" alt="Image d'introduction à <?php the_title(); ?>">

        <h3 role="heading" aria-level="3" class="title"><?php the_title(); ?></h3>
    </div>
    <div class="content">
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <section class="projet wrapper" itemscope itemtype="http://schema.org/Article">
        <h4 aria-level="4" role="heading" class="section">Informations introductive et supplémentaire au
            projet <?php the_title(); ?></h4>
        <section class="infoIntro">
            <div class="addContentText">
                <span class="projetLive"><a class="btn" href="<?php the_field('link'); ?>">Voir le projet</a></span>
            </div>
            <h5 aria-level="5" role="heading" class="titleIndex">Introduction</h4>

                <div class="contentText">
                    <?php the_field('description')?>
                    <?php the_field('details');?>
                </div>


        </section>
        <section class="galerie">
            <h5 aria-level="5" role="heading" class="section">Galerie d'image sur le projet <?php the_title();?></h5>
            <?php the_field('galerie');?>
        </section>
        <section class="matiere">
            <h5 aria-level="5" role="heading" class="titleIndex">Table des matière</h5>
            <?php the_field('matiere');?>
        </section>
        <section class="moreInfos">
            <h5 aria-level="5" role="heading" class="titleIndex">Description et informations supplémentaires</h5>
            <?php the_content(); ?>
        </section>
        <footer class="projetInfos">
            <div class="wrapper">
                <span class="social"><span>J'aime</span><iframe
                        src="//www.facebook.com/plugins/like.php?href=<?php the_permalink(); ?>&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=35"
                        scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:35px;"
                        allowTransparency="true"></iframe>
                    </a></span>
                <span><a href="<?php echo home_url($path = '/projet', $scheme = relative); ?>">Revenir aux
                        projets</a></span>
            </div>
            <div class="wrapper">

                <span class="previous"><?php previous_post_link('%link', 'Précédent'); ?></span>
                <span class="next"> <?php next_post_link('%link', 'Suivant'); ?></span>

            </div>
        </footer>

    </section>

    </section>
<?php endwhile; endif; ?>
    </div>
<?php get_template_part('foot'); ?>
    </section>

<?php get_footer(); ?>