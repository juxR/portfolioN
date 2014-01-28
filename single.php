<?php get_header();?>
<h1 aria-level="1" role="heading" class="section">Page de l'article <?php the_title(); ?> du portfolio de Julien Roland designer et développeur web.</h1>
<?php get_template_part('nav'); ?>
<section role="main" id="main" class="main">
	<h2 aria-level="2" role="heading" class="section">Fiche de l'article <?php the_title(); ?>, ses commentaires et un formulaire pour commenter.</h2>
		<section class="introBlog" >
			<h3 aria-level="3" role="heading" class="section">l'article <?php the_title(); ?> fait partie de mon blog</h3>
			<img src="<?php bloginfo('template_directory'); ?>/img/introBlog2.jpg" alt="Image d'introduction à mon blog" >
			<span class="title">Mon blog</span>
		</section>
		<div class="content">
			<div class="one">

				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'contentOne', get_post_format() ); ?>
					<?php endwhile; ?>

				<?php else : ?>
					<?php get_template_part( 'contentOne', 'none' ); ?>

				<?php endif; // end have_posts() check ?>
				<?php comments_template('', true);?>
			</div>

		</div>
		<?php get_template_part('foot'); ?>
	</section>
	<?php get_footer(); ?>



