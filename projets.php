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
            <h1 aria-level="1" role="heading" class="section">Présentation de mes projets.</h1>
            <?php include('nav.php'); ?>
            <section role="main" id="main" class="main">
                <h2 aria-level="2" role="heading" class="section">Partie principale de la page</h3>
                    <section class="tri">
                        <h3 aria-level="3" role="heading" class="section">Système de tri des projects</h4>
                            <ul>
                                <li class="active"><a href="">Tout</a></li>
                                <li><a href="">Web</a></li>
                                <li><a href="">Print</a></li>
                            </ul>
                        </section>
                        <section class="projets wrapper" itemscope itemtype="http://schema.org/Article">
                            <h3 aria-level="3" role="heading" class="section">Présentation de mes projets</h4>

                                <div class="p">
                                    <h4 aria-level="4" role="heading" class="section" itemprop="name">titre du projet</h4>
                                    <div class="web triage">Web</div>
                                    <div class="image" itemprop="image">
                                        <img src="./img/test.jpg" alt="">
                                    </div>
                                    <div class="caption">
                                        <div class="legend" itemprop="description">
                                            <span>Je suis une légende.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, corporis beatae eos placeat delectus soluta facilis voluptatem atque rerum quo eius reiciendis dolor omnis laborum necessitatibus amet doloremque. Laudantium, deserunt.
                                            </span>
                                        </div>
                                        <div class="tools">
                                            <a href="voirProjet.php" title="Aller sur la page du projet en question"><i class="fa fa-share"></i><span>Voir la fiche du projet</span></a>
                                            <a href="./img/example.jpg" class="thumbnail" title="Afficher l'image en grand"><i class="fa fa-expand"></i><span>Agrandir l'image</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="p">
                                    <h4 aria-level="4" role="heading" class="section">titre du projet</h4>
                                    <div class="print triage">Print</div>
                                    <div class="image" itemprop="image">
                                        <img src="./img/test.jpg" alt="">
                                    </div>
                                    <div class="caption">
                                        <div class="legend" itemprop="description">
                                            Je suis une légende.
                                        </div>
                                        <div class="tools">
                                            <a href="voirProjet.php" title="Aller sur la page du projet en question"><i class="fa fa-share"></i><span>Voir la fiche du projet</span></a>
                                            <a href="./img/example.jpg" class="thumbnail" title="Afficher l'image en grand"><i class="fa fa-expand"></i><span>Agrandir l'image</span></a>
                                        </div>
                                    </div>
                                </div>  
                                <div class="p impair">
                                    <h4 aria-level="4" role="heading" class="section">titre du projet</h4>
                                    <div class="print triage">Print</div>
                                    <div class="image" itemprop="image">
                                        <img src="./img/test.jpg" alt="">
                                    </div>
                                    <div class="caption">
                                        <div class="legend" itemprop="description">
                                            Je suis une légende.
                                        </div>
                                        <div class="tools">
                                            <a href="voirProjet.php" title="Aller sur la page du projet en question"><i class="fa fa-share"></i><span>Voir la fiche du projet</span></a>
                                            <a href="./img/example.jpg" class="thumbnail" title="Afficher l'image en grand"><i class="fa fa-expand"></i><span>Agrandir l'image</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="p ">
                                    <h4 aria-level="4" role="heading" class="section">titre du projet</h4>
                                    <div class="print triage">Print</div>
                                    <div class="image" itemprop="image">
                                        <img src="./img/test.jpg" alt="">
                                    </div>
                                    <div class="caption">
                                        <div class="legend" itemprop="description">
                                            Je suis une légende.
                                        </div>
                                        <div class="tools">
                                            <a href="voirProjet.php" title="Aller sur la page du projet en question"><i class="fa fa-share"></i><span>Voir la fiche du projet</span></a>
                                            <a href="./img/example.jpg" class="thumbnail" title="Afficher l'image en grand"><i class="fa fa-expand"></i><span>Agrandir l'image</span></a>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        </section>
                        <?php include('footer.php'); ?>
                    </section>
                    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
                    <script src="js/plugins.js"></script>
                    <script src="js/main.js"></script>
                    <script src="js/jquery.heplbox.js"></script>
                    <script>
                        jQuery( function() {
                            jQuery( ' .caption a.thumbnail' ).heplbox();
                    //jQuery( '#many a.thumbnail' ).heplbox();
                } );

                    </script>
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
