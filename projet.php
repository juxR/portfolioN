    <div class="p">
    <a href="<?php the_permalink(); ?>" title="Aller sur la fiche du projet <?php the_title(); ?>">
        <h4 aria-level="4" role="heading" class="section" itemprop="name"><?php the_title(); ?></h4>
        <div class="image" itemprop="image">
            <?php 
            if(has_post_thumbnail()){

                the_post_thumbnail();
            }
            ?>
        </div>
    </a>
    <div class="caption">
        <div class="legend" itemprop="description">
            <span>
                <?php the_field('legende'); ?>
            </span>
        </div>
        <div class="tools">
        <a href="<?php the_permalink(); ?>" title="Aller sur la page du projet <?php the_title(); ?>"><i class="fa fa-eye"></i><span>Voir la fiche du projet</span></a>
            <?php $image_id = get_post_thumbnail_id();
            $image_url = wp_get_attachment_image_src($image_id,'large', true);
            ?>
            <a href="<?php echo $image_url[0]; ?>" class="thumbnail" title="Afficher l'image du projet <?php the_title(); ?> en grand"><i class="fa fa-expand"></i><span>Agrandir l'image</span></a>
        </div>
    </div>
    
</div>