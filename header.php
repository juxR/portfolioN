<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>  
  <meta charset="<?php bloginfo('charset'); ?>" />
  <!--[if lt IE 9]>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/responsive-ie.css">
<![endif]-->
<title>Julien Roland Portfolio <?php wp_title('|',true); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php
if (function_exists('is_tag') && is_tag()) {
 single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
 elseif (is_archive()) {
   wp_title(''); echo ' Archive - '; }
   elseif (is_search()) {
     echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
     elseif (!(is_404()) && (is_single()) || (is_page())) {
       wp_title(''); echo ' - '; }
       elseif (is_404()) {
         echo 'Not Found - '; }
         if (is_home()) {
           bloginfo('name'); echo ' - '; bloginfo('description'); }
           else {
            bloginfo('name'); }
            if ($paged>1) {
             echo ' - page '. $paged; }
             ?> julien roland web webdesigner webdeveloper namur belgique hepl inpres julien-roland julien-roland.be">
             <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
             <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/img/favicon.png" />
             <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/screen.css" />
             <script src="<?php bloginfo('template_directory') ?>/js/vendor/modernizr-2.6.2.min.js"></script>
           </head> 
           <div itemscope itemtype="http://schema.org/Person" class="section">
             <meta itemprop="name" content="Julien Roland">
             <meta itemprop="familyName" content="Roland">
             <meta itemprop="givenName" content="Julien">
             <meta itemprop="jobTitle" content="Student">
             <meta itemprop="nationality" content="Belgian">
             <meta itemprop="url" content="http://julien-roland.be/">
             <meta itemprop="birthDate" content="1992-02-28">

           </div>
           <?php if ( is_singular() && get_option( 'thread_comments' ) )
           wp_enqueue_script( 'comment-reply' );?>
           <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->