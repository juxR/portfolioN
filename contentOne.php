 <article itemscope itemtype="http://schema.org/BlogPosting" class="listBlog wrapper">
    <div itemprop="text" class="article">
        <div class="wrapper">
            <h4 aria-level="4" role="heading" itemprop="headline" class="titleOneArticle"><?php the_title(); ?></h4>
            <span class="date">Posté le <time  datetime="<?php the_time('c'); ?>" itemprop="datePublished"><?php the_time('j F Y'); ?></time></span>
            <?php the_content(); ?>
        </div>
        
    </div>
</article>      