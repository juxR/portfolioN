<?php 
/*
Template Name: Apropos
*/
?>
<?php get_header();?>
<h1 aria-level="1" role="heading" class="section">Page de ma présentation personnelle.</h1>
<?php include('nav.php'); ?>
<section role="main" id="main" class="main apropos" itemscope itemtype="http://schema.org/Person">
  <h2 aria-level="2" role="heading" class="section">Partie principale de la page</h3>

    <section class="wrapper">
      <?php $args = array( 'post_type' => 'apropos' );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();?>
      <div class="vcard">
        <h3 class="section" aria-level="3" role="heading">Ma vcard</h3>
        <address>
          <span class="name contact " itemprop="name"><i class="fa fa-user"></i>&nbsp;<?php the_field('prenom/nom'); ?></span>
          <meta itemprop="name" content="http://www.julien-roland.be"/>
          <span class="mail contact email" itemprop="email"><i class="fa fa-envelope"></i>&nbsp;<?php the_field('email'); ?></span>
          <span class="mail contact" itemprop="url"><i class="fa fa-globe"></i>&nbsp;<a href="<?php the_field('site_web'); ?>" title="Aller sur mon site"><?php the_field('site_web'); ?></a></span>
          <span class="tel contact" itemprop="telephone"><i class="fa fa-mobile-phone"></i>&nbsp;<?php the_field('tel'); ?></span>
          <span class="adress contact" itemprop="homeLocation"><i class="fa fa-map-marker"></i>&nbsp;<?php the_field('localisation'); ?></span>
          <meta itemprop="address" class="adr hide">
          <meta itemprop="streetAddress" class="street-address" content="<?php the_field('rue'); ?>"/>
          <meta itemprop="addressLocality"class="locality" content="<?php the_field('ville'); ?>"/>
          <meta itemprop="addressRegion"class="region" content="<?php the_field('region'); ?>"/>
          <meta itemprop="postalCode" class="postal-code" content="<?php the_field('postal'); ?>"/>
          <meta itemprop="addressCountry"class="country-name" content="<?php the_field('pays'); ?>"/>
        </meta>
        <meta itemprop="birthDate" class="bday hide" content="<?php the_field('naissance'); ?>">
        <meta class="category" content="<?php the_field('portfolio  '); ?>">

      </address>
      <div class="cv"><a href="http://julien-roland.be/cv/" title="Voir mon Curriculum Vitae">CV</a></div>
    </div>
    <div class="photo">
      <img src="<?php the_field('photo'); ?>" alt="Image de moi">
    </div>

  </section>
  <article class="wrapper qui">
   <div class="presentation" itemprop="description">
    <h3 aria-level="3" role="heading">Qui suis-je ?</h3>
    <?php the_content(); ?>
  </div>
</article>
<?php endwhile;?>
</section>
<?php get_footer(); ?>