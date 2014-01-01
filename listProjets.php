<div class="p show impair">
	<h4 aria-level="4" role="heading" class="section" itemprop="name">titre du projet</h4>
	<?php 
	$i=0;
	$cat_name = get_the_category( $post->ID );
	?>
	<div class="<?php echo $cat_name[0]->slug; ?> triage"><?php echo $cat_name[0]->name; ?></div>
	<div class="image" itemprop="image">
		<?php 
		if(has_post_thumbnail()){

			the_post_thumbnail();
		}
		?>
	</div>
	<?php echo $i; ?>
	<div class="caption">
		<div class="legend" itemprop="description">
			<span>
				<?php the_field('legende'); ?>
			</span>
		</div>
		<div class="tools">
			<a href="<?php the_permalink(); ?>" title="Aller sur la page du projet en question"><i class="fa fa-share"></i><span>Voir la fiche du projet</span></a>
			<?php $image_id = get_post_thumbnail_id();
			$image_url = wp_get_attachment_image_src($image_id,'large', true);
			?>
			<a href="<?php echo $image_url[0]; ?>" class="thumbnail" title="Afficher l'image en grand"><i class="fa fa-expand"></i><span>Agrandir l'image</span></a>
		</div>
	</div>
	
</div>
<?php $i++; ?>