<?php 
/*
Template Name: Projet
*/
?>
<?php get_header();?>
<h1 aria-level="1" role="heading" class="section">Liste de mes projets trié par catégories</h1>
<?php get_template_part('nav'); ?>
<section role="main" id="main" class="main">
	<h2 aria-level="2" role="heading" class="section">Mes projets et le système de tri</h2>
	<div class="introProjets" >
		<img src="<?php bloginfo('template_directory'); ?>/img/introBlog2.jpg" alt="Image d'introduction à mes projets" >
		<span class="title">Mes projets</span>
	</div>
	<div class="content">
		<section class="projets wrapper" itemscope itemtype="http://schema.org/Article">
			<h3 class="titleIndex" aria-level="3" role="heading">Mes derniers projets</h3>
			<hr/>
			<section class="tri">
				<h3 aria-level="3" role="heading" class="section">Système de tri entre les catéories</h3>
				<ul>
					<li class="active toutt"><a href="">Tout</a></li>
					<li class="webt"><a title="Voir les projets de la catégorie web" href="<?php bloginfo('url') ?>/category/web">Web</a></li>
					<li class="printt"><a title="Voir les projets de la catégorie print" href="<?php bloginfo('url') ?>/category/print">Print</a></li>
				</ul>
			</section>
			<div class="contentProjets">   
				<?php
				
				$loop = new WP_Query( array(
					'post_type' => 'projets',
					) ); 

				$template = array(
					'1'=> array('6','6'),
					'2'=> array('4','8'),
					'3'=> array('8','4'),
					'4'=> array('5','7'),
					'5'=> array('7','5'),
					);

				$i=0;
				$oldTemplate;
				while ( $loop->have_posts() ) : $loop->the_post();?>

				<?php if($i > 1){
					$i=0;
				} ?>
				<?php

				if($i % 2 != 0 ):

					?>
				<div class="p show col-<?php echo $thisTemplate[$i]; ?>">
					<h4 aria-level="4" role="heading" class="section" itemprop="name"><?php the_title(); ?></h4>
					<?php 

					$cat_name = get_the_category( $post->ID );
					?>
					<div class="<?php foreach($cat_name as $cat): echo "$cat->slug "; endforeach; ?> triage"><?php foreach($cat_name as $cat): echo "$cat->slug "; endforeach; ?> </div>
					<div class="image" itemprop="image">
						<?php 
						if(has_post_thumbnail()){

							the_post_thumbnail();
						}
						?>
					</div>

					<div class="caption">
						<div class="legend" itemprop="description">
							<span>
								<?php the_field('legende'); ?>
							</span>
						</div>
						<div class="tools">
							<a href="<?php the_permalink(); ?>" title="Aller sur la page du projet <?php the_title(); ?>"><i class="fa fa-share"></i><span>Voir la fiche du projet</span></a>
							<?php $image_id = get_post_thumbnail_id();
							$image_url = wp_get_attachment_image_src($image_id,'large', true);
							?>
							<a href="<?php echo $image_url[0]; ?>" class="thumbnail" title="Afficher l'image du projet <?php the_title(); ?> en grand"><i class="fa fa-expand"></i><span>Agrandir l'image</span></a>
						</div>
					</div>

				</div>
			<?php elseif($i === 0):
			$val = rand(1,5);
			while($oldTemplate == $val){
				$val = rand(1,5);
			}
			$thisTemplate = $template[$val]; 
			$oldTemplate = $val;
			?>
			<div class="p show col-<?php echo $thisTemplate[$i]; ?>">
				<h4 aria-level="4" role="heading" class="section" itemprop="name"><?php the_title(); ?></h4>
				<?php 

				$cat_name = get_the_category( $post->ID );
				?>
				<div class="<?php foreach($cat_name as $cat): echo "$cat->slug "; endforeach; ?> triage"><?php foreach($cat_name as $cat): echo "$cat->slug "; endforeach; ?> </div>
				<div class="image" itemprop="image">
					<?php 
					if(has_post_thumbnail()){

						the_post_thumbnail();
					}
					?>
				</div>

				<div class="caption">
					<div class="legend" itemprop="description">
						<span>
							<?php the_field('legende'); ?>
						</span>
					</div>
					<div class="tools">
						<a href="<?php the_permalink(); ?>" title="Aller sur la page du projet <?php the_title(); ?>"><i class="fa fa-share"></i><span>Voir la fiche du projet</span></a>
						<?php $image_id = get_post_thumbnail_id();
						$image_url = wp_get_attachment_image_src($image_id,'large', true);
						?>
						<a href="<?php echo $image_url[0]; ?>" class="thumbnail" title="Afficher l'image du projet <?php the_title(); ?> en grand"><i class="fa fa-expand"></i><span>Agrandir l'image</span></a>
					</div>
				</div>

			</div>
			<?php 
			endif;
			$i++;
			endwhile;?>
			
		</div>

	</section>
</div>	
</section>

<?php get_template_part('foot'); ?>

<?php get_footer(); ?>	