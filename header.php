<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php wp_title('|',true); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="<?php
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
                               ?>">
                               <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

                               <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.css">
                               <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/screen.css">
                               <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css">
                               <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/animate.css">
                               <script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
                           </head> 
                           <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->