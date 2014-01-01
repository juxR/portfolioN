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
    <link rel="stylesheet" href="css/animate.css">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head> 
<body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
            
            <h1 aria-level="1" role="heading" class="section">Souhaitez-vous me contacter ?</h1>
            <?php include('nav.php'); ?>
            <section role="main" id="main" class="main">
                <h2 aria-level="2" role="heading" class="section">Partie principale de la page</h3>
                    <section class="form wrapper" role="form">
                        <h3 class="titleIndex" aria-level="3" role="heading">Me Contacter</h3>
                        <hr/>
                        <form action="" role="form">
                            <fieldset>
                                <label for="nom">Entrez votre nom</label>
                                <input required type="text" id="nom"  placeholder="Votre nom">

                                <label for="mail">Entrez votre adresse e-mail</label>
                                <input required type="email" id="mail"  placeholder="Votre e-mail">

                                <label for="message">Ecrivez votre message</label>
                                <textarea name="message" id="message" required></textarea>

                                <input type="submit" value="Envoyer">
                            </fieldset>
                        </form>
                    </section>
                    <section class="map wrapper">
                        <h3 class="titleIndex" aria-level="3" role="heading">Où me trouver</h3>
                        <hr/>
                        <div id="gmap">
                            <img src="http://maps.googleapis.com/maps/api/staticmap?center=50.4329476,4.855422999999973&zoom=13&size=600x300&maptype=roadmap
                            &markers=color:blue%7Clabel:S%7C50.4329476,4.855422999999973&sensor=false" alt="">
                        </div>
                        <div role="form" class="control-map">
                            <label for="map">Et vous, vous habitez où?</label>
                            <input type="text" name="map" value="" id="map" placeholder="Rue Basse-Montagne 40, 5100 Wépion, Belgique">
                            <button id="btn" value="Me localiser">Me localiser</button>
                        </div>

                    </section>
                    
                </section>
                <?php include('footer.php'); ?>
            </section>


            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
            <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDHJ3p-sn1Y5tJGrzH9MF5cbR5sdsDmhfg&sensor=false"></script>
            <script src="js/map-ck.js"></script>
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
