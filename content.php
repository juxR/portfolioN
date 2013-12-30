<article itemscope itemtype="http://schema.org/BlogPosting" class="lastBlog wrapper">

    <div itemprop="text" class="article">
        <h3 aria-level="3" role="heading" itemprop="headline"><?php the_title(); ?></h3>
        <?php the_excerpt(); ?>
        <p><a class="btn" itemprop="url" href="<?php the_permalink(); ?>" title="Lire la suite de l'article">Lire la suite</a></p>
    </div>
    <footer role="contentinfo" class="infoSupp">
      <div class="imageTheme">
      <a href="<?php the_permalink(); ?>" title="Voir l'article">
        <?php if(has_post_thumbnail()): the_post_thumbnail(); endif; ?>
        </a>
    </div>
    <time class="inf" datetime="<?php the_time('c'); ?>" date="<?php the_time('Y-m-d'); ?>" itemprop="datePublished"><?php the_time('j F Y'); ?></time>
    <span itemprop="comment" class="commentaire inf"><i class="fa fa-comments">&nbsp;</i><?php comments_number('Pas de commentaire', '1 commentaire', '% commentaires' );?></span>      
    <span class="inf social"><a href="<?php the_permalink(); ?>" title="Aller sur l'article en entier"><span>J'aime</span><iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fjulien-roland.be".<?php the_permalink();?>."&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:35px;" allowTransparency="true"></iframe></a></span> 
   
    
</footer>
</article> 