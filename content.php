<article itemscope itemtype="http://schema.org/BlogPosting" class="lastBlog wrapper">
  <footer role="contentinfo" class="infoSupp">
    <div class="imageTheme">
      <a href="<?php the_permalink(); ?>" title="Voir l'article">
        <figure itemprop="image"><?php if(has_post_thumbnail()): the_post_thumbnail(); endif; ?></figure>
      </a>
    </div>
    <time class="inf date" datetime="<?php the_time('c'); ?>" itemprop="datePublished"><?php the_time('j F Y'); ?></time>
    <span itemprop="comment" class="commentaire inf"><i class="fa fa-comments">&nbsp;</i><a href="<?php the_permalink(); echo '#comments'; ?>"><?php comments_number('Pas de commentaire', '1 commentaire', '% commentaires' );?></a></span>      
    <span class="inf social"><a href="<?php the_permalink(); ?>" title="Aller sur l'article en entier"><span>J'aime</span><iframe src="//www.facebook.com/plugins/like.php?href=<?php the_permalink();?>&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:35px;" allowTransparency="true"></iframe></a></span> 
    
    
  </footer>
  <div itemprop="text" class="article">
    <h3 aria-level="3" role="heading" itemprop="headline" class="titreArticle"><a href="<?php the_permalink(); ?>" title="Voir l'article en entier"><?php the_title(); ?></a></h3>

     <?php the_excerpt(); ?>

   <a class="btn" itemprop="url" href="<?php the_permalink(); ?>" >Lire la suite</a>
 </div>

</article> 