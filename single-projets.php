<?php get_header(); ?>
<h1 aria-level="1" role="heading" class="section">Présentation de mon projet: .</h1>
<?php include('nav.php'); ?>
<section role="main" id="main" class="main">
    <h2 aria-level="2" role="heading" class="section">Partie principale de la page</h3>
       <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <section class="projet wrapper" itemscope itemtype="http://schema.org/Article">
            <div class="headerProjet">
                <h3 itemprop="name" aria-level="3" role="heading"><?php the_title(); ?></h4>
                    <span class="projetLive"><a href="<?php the_field('link'); ?>">Voir le projet</a></span>
                </div>
                
                <?php the_content(); ?>
                <span class="projetLive"><a href="<?php the_field('link'); ?>">Voir le projet</a></span>
                <footer class="projetInfos">
                    <div class="wrapper">
                        <span class="social"><span>J'aime</span><iframe src="//www.facebook.com/plugins/like.php?href=<?php the_permalink(); ?>&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:35px;" allowTransparency="true"></iframe></a></span> 
                        <span><a href="<?php echo home_url($path = '/projet',$scheme = relative); ?>">Revenir aux projets</a></span>
                    </div>
                    <div class="wrapper">

                        <span class="previous"><?php previous_post_link('%link', 'Précédent'); ?></span>
                        <span class="next"> <?php next_post_link('%link', 'Suivant'); ?></span>

                    </div>
                </footer>
            </section>

        </section>
    <?php endwhile; endif; ?>
        <?php include('footer.php'); ?>
    </section>

    <?php get_footer(); ?>