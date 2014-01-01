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
            <h1 aria-level="1" role="heading" class="section">Page répertoriant mes articles.</h1>
            <?php include('nav.php'); ?>
            <section role="main" id="main" class="main">
                <h2 aria-level="2" role="heading" class="section">Partie principale de la page</h3>
                        <section>
                         <h4 class="section" role="heading" aria-level="4">Les 5 derniers articles que j'ai postés</h4>
                         <article itemscope itemtype="http://schema.org/BlogPosting" class="lastBlog wrapper">

                            <div itemprop="text" class="article">
                                <h3 aria-level="3" role="heading" itemprop="headline">Découverte de Modernizr</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora temporibus quod distinctio cupiditate autem. Doloribus, suscipit, vitae nulla quas commodi consectetur eum at ipsa voluptate minima deserunt id repellat molestias.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, unde, laudantium, cumque, voluptatem error dolore aperiam soluta numquam tempore amet natus impedit quia obcaecati laboriosam saepe labore quod beatae tenetur?
                                </p>
                                <div class="image">
                                    <img src="http://placehold.it/350x150" alt="">
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, magni, assumenda dignissimos quo corporis eligendi temporibus doloribus molestias quas similique molestiae obcaecati alias itaque. Amet repellat velit alias commodi nisi.
                                </p>
                                <p><a class="btn" itemprop="url" href="voirArticle.php" title="Lire la suite de l'article">Lire la suite</a></p>
                            </div>
                            <footer role="contentinfo" class="infoSupp">
                                <time class="inf" datetime="" date="2013-10-28" itemprop="datePublished">Mardi 28 Octobre</time>

                                <span itemprop="comment" class="commentaire inf"><i class="fa fa-comments">&nbsp;</i>3 commentaires</span>      
                                <span class="inf social"><a href="" title="Aller sur l'article en entier"><span>J'aime</span><iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fjulien-roland.be&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:35px;" allowTransparency="true"></iframe></a></span> 
                                <span class="inf social"><a href="" title="Aller sur l'article en entier"><span>Partager</span></a></span>  
                            </footer>
                        </article> 
                        <article class="lastBlog wrapper" >
                            <div class="article">
                                <h3 aria-level="3" role="heading">Node.js</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora temporibus quod distinctio cupiditate autem. Doloribus, suscipit, vitae nulla quas commodi consectetur eum at ipsa voluptate minima deserunt id repellat molestias.
                                </p>
                                <div class="image">
                                    <img src="http://placehold.it/350x150" alt="">
                                </div> 
                                <div class="image">
                                    <img src="http://placehold.it/350x150" alt="">
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, magni, assumenda dignissimos quo corporis eligendi temporibus doloribus molestias quas similique molestiae obcaecati alias itaque. Amet repellat velit alias commodi nisi.
                                </p>
                                <p><a class="btn" href="voirArticle.php" title="Lire la suite de l'article">Lire la suite</a></p>
                            </div>

                            <footer role="contentinfo" class="infoSupp">
                                <time class="inf" datetime="" >Jeudi 30 Décembre</time>
                                <span class="commentaire inf"><i class="fa fa-comments">&nbsp;</i>30 commentaires</span>   
                                <span class="inf social"><a href="" title="Aller sur l'article en entier"><span>J'aime</span><iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fjulien-roland.be&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:35px;" allowTransparency="true"></iframe></a></span> 
                                <span class="inf social"><a href="" title="Aller sur l'article en entier"><span>Partager</span></a></span>   
                            </footer>
                        </article>
                    </section>
                </section>
                <?php include('footer.php'); ?>


         </section>
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
