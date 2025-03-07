<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Henrik Sonnergård</title>
  <meta name="description" content="Portfolio of Swedish web/graphic designer Henrik Sonnergård.">
  <meta name="keywords" content="henrik, sonnergård, sonnergard, sweden, swedish, music, web, design, warpfuz">
  <meta name="author" content="Henrik Sonnergård">

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- CSS
  ================================================== -->
  <link rel="stylesheet" href="stylesheets/base.css">
  <link rel="stylesheet" href="stylesheets/skeleton.css">
  <link rel="stylesheet" href="stylesheets/layout.css">
  <link rel="stylesheet"href="stylesheets/lightbox.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet"> 

  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- Favicons
  ================================================== -->
  <link rel="shortcut icon" href="images/favicon.ico">
  <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

</head>
<body>

  <!-- Primary Page Layout
  ================================================== -->
  <header class="sixteen columns">
    <div class="container">
      <h1 class="remove-bottom site-logo"><a href="index"><img src="images/logo.png" alt="Henrik Sonnergård" /></a></h1>
      <a href="#nav" id="toggle">Menu</a>
      <br class="clear" />
      <div id="nav">
        <ul>
          <li><a <?php if (strpos($_SERVER['PHP_SELF'], 'index.php')) echo 'class="current"';?> href="index">portfolio<br /><img src="images/navicon-portfolio.png" alt=""></a></li>
          <li><a <?php if (strpos($_SERVER['PHP_SELF'], 'hobbies.php')) echo 'class="current"';?> href="hobbies">hobbies<br /><img src="images/navicon-hobbies.png" alt=""></a></li>
          <li><a <?php if (strpos($_SERVER['PHP_SELF'], 'about.php')) echo 'class="current"';?> href="about">about<br /><img src="images/navicon-about.png" alt=""></a></li>
          <li><a <?php if (strpos($_SERVER['PHP_SELF'], 'contact.php')) echo 'class="current"';?> href="contact">contact<br /><img src="images/navicon-contact.png" alt=""></a></li>
        </ul>
      </div>
    </div>
  </header>