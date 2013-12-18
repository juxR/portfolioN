<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/screen.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
            <h1 aria-level="1" role="heading" class="section">Page de ma présentation personnelle.</h1>
            <?php include('nav.php'); ?>
            <section role="main" id="main" class="main" itemscope itemtype="http://schema.org/Person">
              <h2 aria-level="2" role="heading" class="section">Partie principale de la page</h3>

                <section class="wrapper">
                  <div class="vcard">
                    <h3 class="section" aria-level="3" role="heading">Ma vcard</h3>
                    <address>
                      <span class="name contact " itemprop="name"><i class="fa fa-user"></i>&nbsp;<a class="url fn" href="http://julien-roland.be" title="Aller sur mon site">Julien Roland</a></span>
                      <meta itemprop="name" content="http://www.julien-roland.be"/>
                      <span class="mail contact email" itemprop="email"><i class="fa fa-envelope"></i>&nbsp;roland.julien@perso@gmail.com</span>
                      <span class="mail contact" itemprop="url"><i class="fa fa-globe"></i>&nbsp;<a href="<?php echo $user->user_url ; ?>" title="Aller sur mon site">julien-roland.be</a></span>
                      <span class="tel contact" itemprop="telephone"><i class="fa fa-mobile-phone"></i>&nbsp;+32 495/94.51.93</span>
                      <span class="adress contact" itemprop="homeLocation"><i class="fa fa-map-marker"></i>&nbsp;Namur (Belgique)</span>
                      <meta itemprop="address" class="adr hide">
                      <meta itemprop="streetAddress" class="street-address" content="Rue Basse Montagne"/>
                      <meta itemprop="addressLocality"class="locality" content="Namur"/>
                      <meta itemprop="addressRegion"class="region" content="BE"/>
                      <meta itemprop="postalCode" class="postal-code" content="5100"/>
                      <meta itemprop="addressCountry"class="country-name" content="Belgique"/>
                    </meta>
                    <meta itemprop="birthDate" class="bday hide" content="1992-02-28">
                    <meta class="category" content="Infographiste">

                  </address>
                  <div class="cv"><a href="http://julien-roland.be/cv/" title="Voir mon Curriculum Vitae">CV</a></div>
                </div>
                <div class="photo">
                  <img src="http://placehold.it/350x150" alt="">
                </div>

              </section>
              <article class="wrapper qui">
               <div class="presentation" itemprop="description">
                <h3 aria-level="3" role="heading">Qui suis-je ?</h3>
                <p>
                  Bonjour à tous !</p>

                  <p>Julien Roland, étudiant en troisième et dernière année d’infographie à orientation web à la Haute École de la Province de Liège vous souhaite la bienvenue sur son portfolio !</p>
                  <p>
                    Passionné depuis toujours par la création et la réalisation de sites web, Julien Roland n’a jamais hésité à mettre ses connaissances au service des autres.Curieux et souhaitant avant tout se perfectionner, à ses 17 ans, Julien choisit de se diriger vers des études techniques dans le but d’approfondir ses connaissances.</p>

                    <p>Durant ses études il se rend vite compte de la voie qu’il doit emprunter : l’infographie. Après 3 années d’études à la Haute École de la Province de Liège à Seraing, Julien Roland a maintenant la fierté de vous présenter son portfolio et de vous en souhaiter une bonne lecture !
                    </p>
                  </div>
                </article>
              </section>
              <?php include('footer.php'); ?>
              <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
              <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
              <script src="js/plugins.js"></script>
              <script src="js/main.js"></script>

              <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
              <script>
                (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
                  function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
                e=o.createElement(i);r=o.getElementsByTagName(i)[0];
                e.src='//www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
                ga('create','UA-XXXXX-X');ga('send','pageview');
              </script>
              <div id="fb-root"></div>
              <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
              }(document, 'script', 'facebook-jssdk'));</script>
            </body>
            </html>
