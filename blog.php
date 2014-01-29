<?php 
/*
Template Name: Blog
*/
?>
<?php get_header();?>
<h1 aria-level="1" role="heading" class="section">Mon blog, page répertoriant mes articles.</h1>
<?php get_template_part('nav'); ?>
<section role="main" id="main" class="main">
  <h2 aria-level="2" role="heading" class="section">Mon blog, mon dernier tutoriel, mes trois derniers articles sur les technologies et la liste de tous mes articles</h2>

  <div class="introBlog" >
    <img src="<?php bloginfo('template_directory'); ?>/img/introBlog2.jpg" alt="Image d'introduction à mon blog" >
    <span class="title">Mon blog</span>
  </div>
  <div class="content">
    <section class="articlesCategories wrapper">
      <h3 class="section" aria-level="3" role="heading">Mon dernier tutoriel et mes deux derniers articles sur les technologies</h3>
      <? $args = array(
        'posts_per_page' => 1,
        'category_name' => 'tuto'
        );?>
        <?php query_posts($args); ?>
        <?php if ( have_posts() ) :?>
          <section class="tuto">
            <h3 class="titleIndex" aria-level="3" role="heading">Mon dernier tutoriel</h3>
            <hr/>

            <?php query_posts($args); ?>
            <?php while ( have_posts() ) : the_post(); ?>

              <article itemscope itemtype="http://schema.org/BlogPosting" class="lastBlog wrapper">
                <footer role="contentinfo" class="infoSupp">
                  <div class="imageTheme">
                    <a href="<?php the_permalink(); ?>" title="Voir l'article <?php the_title(); ?>">
                      <figure itemprop="image"><?php if(has_post_thumbnail()): the_post_thumbnail(); endif; ?></figure>
                    </a>
                  </div>
                  <time class="inf date" datetime="<?php the_time('c'); ?>" itemprop="datePublished"><?php the_time('j F Y'); ?></time>
                  <span itemprop="comment" class="commentaire inf"><i class="fa fa-comments">&nbsp;</i><a href="<?php the_permalink(); echo '#comments'; ?>" title="Voir le(s) commentaire(s) de l'article <?php the_title(); ?>"><?php comments_number('Pas de commentaire', '1 commentaire', '% commentaires' );?></a></span>      
                  <span class="inf social"><span>J'aime</span><iframe title="Aimez et partager l'article <?php the_title();  ?> sur Facebook" src="//www.facebook.com/plugins/like.php?href=<?php the_permalink();?>&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=35"  style="border:none; overflow:hidden; height:35px;" ></iframe></span> 


                </footer>
                <div itemprop="text" class="article">
                  <h4 aria-level="4" role="heading" itemprop="headline" class="titreArticle"><a href="<?php the_permalink(); ?>" title="Voir l'article <?php the_title(); ?> en entier"><?php the_title(); ?></a></h4>

                  <?php the_excerpt(); ?>

                  <p class="button"> <a class="btn" itemprop="url" href="<?php the_permalink(); ?>" title="Lire la suite de l'article <?php the_title(); ?>">Lire la suite</a></p>
                </div>

              </article> 

            <?php endwhile; ?>


          </section>
        <?php endif; 
        wp_reset_query(); ?>

        <? $args = array(
          'posts_per_page' => 3,
          'category_name' => 'techno'
          );?>
          <?php query_posts($args); ?>
          <?php if ( have_posts() ) :?>
            <section class="techno">
              <h3 class="titleIndex" aria-level="3" role="heading">Mes derniers articles sur les technologies</h3>
              <hr/>

              <?php query_posts($args); ?>
              <?php while ( have_posts() ) : the_post(); ?>

                <article itemscope itemtype="http://schema.org/BlogPosting" class="lastBlog wrapper">
                  <footer role="contentinfo" class="infoSupp">
                    <div class="imageTheme">
                      <a href="<?php the_permalink(); ?>" title="Voir l'article <?php the_title(); ?>">
                        <figure itemprop="image"><?php if(has_post_thumbnail()): the_post_thumbnail(); endif; ?></figure>
                      </a>
                    </div>
                    <time class="inf date" datetime="<?php the_time('c'); ?>" itemprop="datePublished"><?php the_time('j F Y'); ?></time>
                    <span itemprop="comment" class="commentaire inf"><i class="fa fa-comments">&nbsp;</i><a href="<?php the_permalink(); echo '#comments'; ?>" title="Voir le(s) commentaire(s) de l'article <?php the_title(); ?>"><?php comments_number('Pas de commentaire', '1 commentaire', '% commentaires' );?></a></span>      
                    <span class="inf social"><span>J'aime</span><iframe title="Aimez et partager l'article <?php the_title();  ?> sur Facebook" src="//www.facebook.com/plugins/like.php?href=<?php the_permalink();?>&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=35"  style="border:none; overflow:hidden; height:35px;" ></iframe></span> 


                  </footer>
                  <div itemprop="text" class="article">
                    <h4 aria-level="4" role="heading" itemprop="headline" class="titreArticle"><a href="<?php the_permalink(); ?>" title="Voir l'article <?php the_title(); ?> en entier"><?php the_title(); ?></a></h4>

                    <?php the_excerpt(); ?>

                    <p class="button"> <a class="btn" itemprop="url" href="<?php the_permalink(); ?>" title="Lire la suite de l'article <?php the_title(); ?>">Lire la suite</a></p>
                  </div>

                </article> 

              <?php endwhile; ?>


            </section>
          <?php endif; 
          wp_reset_query(); ?>
        </section>


        <section class="listArticles wrapper" id="articles">
         <h3 class="titleIndex" aria-level="3" role="heading">Tous mes articles</h3>
         <hr/>

         <?php if ( have_posts() ) : ?>
           <? $args = array(
            'posts_per_page' => 4,
            'paged' => $paged
            );?>

            <?php query_posts($args); ?>
            <?php while ( have_posts() ) : the_post(); ?>

              <article itemscope itemtype="http://schema.org/BlogPosting" class="lastBlog wrapper">
                <footer role="contentinfo" class="infoSupp">
                  <div class="imageTheme">
                    <a href="<?php the_permalink(); ?>" title="Voir l'article <?php the_title(); ?>">
                      <figure itemprop="image"><?php if(has_post_thumbnail()): the_post_thumbnail(); endif; ?></figure>
                    </a>
                  </div>
                  <time class="inf date" datetime="<?php the_time('c'); ?>" itemprop="datePublished"><?php the_time('j F Y'); ?></time>
                  <span itemprop="comment" class="commentaire inf"><i class="fa fa-comments">&nbsp;</i><a href="<?php the_permalink(); echo '#comments'; ?>" title="Voir le(s) commentaire(s) de l'article <?php the_title(); ?>"><?php comments_number('Pas de commentaire', '1 commentaire', '% commentaires' );?></a></span>      
                  <span class="inf social"><span>J'aime</span><iframe title="Aimez et partager l'article <?php the_title();  ?> sur Facebook" src="//www.facebook.com/plugins/like.php?href=<?php the_permalink();?>&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=35"  style="border:none; overflow:hidden; height:35px;" ></iframe></span> 


                </footer>
                <div itemprop="text" class="article">
                  <h4 aria-level="4" role="heading" itemprop="headline" class="titreArticle"><a href="<?php the_permalink(); ?>" title="Voir l'article <?php the_title(); ?> en entier"><?php the_title(); ?></a></h4>

                    <?php the_excerpt(); ?>


                  <p class="button"> <a class="btn" itemprop="url" href="<?php the_permalink(); ?>" title="Lire la suite de l'article <?php the_title(); ?>">Lire la suite</a></p>
                </div>

              </article> 

            <?php endwhile; ?>
            <section class="pagination wrapper">
              <h4 aria-level="4" role="heading" class="section">Voir l'article suivant ou précédent</h4>
             <?php  reverie_pagination();?>
            </section>

          <?php else : ?>
            <?php get_template_part( 'content', 'none' ); ?>

          <?php endif; // end have_posts() check ?>
        </section>

      </div>
      <?php get_template_part('foot'); ?>

    </section>
    
    <?php get_footer(); ?>


