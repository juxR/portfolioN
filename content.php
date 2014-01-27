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