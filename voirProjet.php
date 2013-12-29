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
            <h1 aria-level="1" role="heading" class="section">Présentation de mon projet: .</h1>
            <?php include('nav.php'); ?>
            <section role="main" id="main" class="main">
                <h2 aria-level="2" role="heading" class="section">Partie principale de la page</h3>
                    <section class="projet wrapper" itemscope itemtype="http://schema.org/Article">
                        <div class="headerProjet">
                            <h3 itemprop="name" aria-level="3" role="heading">Voici le titre de mon projet</h4>
                                <span class="projetLive"><a href="julien-roland.be/portfolio">Voir le projet</a></span>
                            </div>
                            <h4 role="heading" aria-level="4">Introduction</h4>
                            <p>
                                <img src="http://placehold.it/350x150" alt="">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, quisquam ut dolores facere architecto reprehenderit commodi pariatur accusamus placeat quam dolorem minus quod quidem ea autem maxime quos tempore eligendi.
                            </p> 
                            <h4 role="heading" aria-level="4">Le design</h4>
                            <p>
                                <img src="http://placehold.it/350x150" alt="">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, molestias, necessitatibus, reiciendis, quo voluptate quisquam temporibus atque praesentium cum fugiat voluptatibus dolores illum aperiam voluptates nesciunt quas consequuntur placeat dignissimos.
                            </p>
                            <footer>
                                <div class="wrapper">
                                    <span class="social"><span>J'aime</span><iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fjulien-roland.be&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:35px;" allowTransparency="true"></iframe></a></span> 
                                    <span><a href="projets.html">Revenir aux projets</a></span>
                                </div>
                                <div class="wrapper">

                                    <span class="previous"><a href="projets.html" title="Voir le projet précédent: Jean n'aime pas les moules">Voir le projet précédent: Jean n'aime pas les moules</a></span>
                                    <span class="next"><a href="projets.html" title="Voir le projet suivant: Le chat et le cochon">Voir le projet suivant: Le chat et le cochon</a></span>
                                    
                                </div>
                            </footer>
                        </section>

                    </section>
                    <?php include('footer.php'); ?>
                </section>
                <script src="js/vendor/jquery.min.js"></script>
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
