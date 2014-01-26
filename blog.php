<?php 
/*
Template Name: Blog
*/
?>
<?php get_header();?>
<h1 aria-level="1" role="heading" class="section">Page répertoriant mes articles.</h1>
<?php include('nav.php'); ?>
<section role="main" id="main" class="main">
  <h2 aria-level="2" role="heading" class="section">Partie principale de la page</h2>
  <section class="listArticles wrapper">
   <h3 class="titleIndex" aria-level="3" role="heading">Mes articles</h3>
   <hr/>

   <?php if ( have_posts() ) : ?>
     <? $args = array(
      'posts_per_page' => 10,
      'paged' => $paged
      );?>

      <?php query_posts($args); ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <article itemscope itemtype="http://schema.org/BlogPosting" class="lastBlog wrapper">

          <div itemprop="text" class="article">
           <h3 aria-level="3" role="heading" itemprop="headline"> <a href="<?php the_permalink(); ?>" title="Voir l'article en entier"><?php the_title(); ?></a></h3>
           <?php the_excerpt(); ?>
           <p><a class="btn" itemprop="url" href="<?php the_permalink(); ?>" title="Lire la suite de l'article">Lire la suite</a></p>
         </div>
         <footer role="contentinfo" class="infoSupp">
          <h1 aria-level="1" role="heading" class="section">Informations suppplémentaires de l'article</h1>
          <div class="imageTheme">
            <a href="<?php the_permalink(); ?>" title="Voir l'article">
              <?php if(has_post_thumbnail()): the_post_thumbnail(); endif; ?>
            </a>
          </div>
          <time class="inf" datetime="<?php the_time('c'); ?>" itemprop="datePublished"><?php the_time('j F Y'); ?></time>
          <span itemprop="comment" class="commentaire inf"><i class="fa fa-comments">&nbsp;</i><a href="<?php the_permalink(); echo '#comments'; ?>"><?php comments_number('Pas de commentaire', '1 commentaire', '% commentaires' );?></a></span>      
          <span class="inf social"><span>J'aime</span><iframe src="//www.facebook.com/plugins/like.php?href=<?php the_permalink();?>&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=35" style="border:none; overflow:hidden; height:35px;"></iframe></span> 


        </footer>
      </article> 
      
    <?php endwhile; ?>
    <section class="pagination wrapper">
      <h1 aria-level="1" role="heading" class="section">Voir l'article suivant ou précédent</h1>
      <div class="next"><?php previous_posts_link('Articles plus récent'); ?></div>
      <div class="previous"><?php next_posts_link('Articles plus anciens'); ?></div>
    </section>

  <?php else : ?>
    <?php get_template_part( 'content', 'none' ); ?>

  <?php endif; // end have_posts() check ?>
</section>
</section>
<?php include('footer.php'); ?>



<?php get_footer(); ?>