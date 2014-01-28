<?php 
/*
Template Name: Projet
*/
?>
<?php get_header();?>
<h1 aria-level="1" role="heading" class="section">Présentation de mes projets.</h1>
<?php include('nav.php'); ?>
<section role="main" id="main" class="main">
	<h2 aria-level="2" role="heading" class="section">Partie principale de la page</h3>
		
		<section class="projets wrapper" itemscope itemtype="http://schema.org/Article">
			<h3 class="titleIndex" aria-level="3" role="heading">Mes derniers projets</h3>
			<hr/>
			<section class="tri">
				<h3 aria-level="3" role="heading" class="section">Système de tri des projects</h4>
					<ul>
						<li class="active toutt"><a href="">Tout</a></li>
						<li class="webt"><a title="Voir les projets de la catégorie web" href="<?php bloginfo('template_directory') ?>/category/web">Web</a></li>
						<li class="printt"><a title="Voir les projets de la catégorie print" href="<?php bloginfo('template_directory') ?>/category/print">Print</a></li>
					</ul>
				</section>
				<?php $args = array( 'post_type' => 'projets' );
				$pref1 = array('3','9');
				$pref2 = array('4','8');
				$pref2 = array('4','4','4');
				$pref3 = array('5','7');
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();?>

				<div class="p show">
					<h4 aria-level="4" role="heading" class="section" itemprop="name">titre du projet</h4>
					<?php 

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

				<?php 
				$i++;
				endwhile;?>


			</section>

		</section>
	</section>
	<?php get_footer(); ?>



