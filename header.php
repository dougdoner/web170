<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <title><?php echo bloginfo("title"); wp_title("|", true, left); if (is_home() ): ?> | <?php bloginfo(description); endif; ?></title>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="robots" content="noindex, nofollow" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <link href='http://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>

<!-- Remy Sharp Shim --> 
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
  <?php wp_head(); ?>
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" /> 
</head>
<body <?php body_class(); ?>>
  <div class="header-wrap">
    <header id="header-main">
      <h1><a href="<?php echo home_url(); ?>"><span><?php bloginfo('title'); ?></span><img class="header-logo" src="<?php bloginfo('template_url'); ?>/images/wiselogowhites.png" alt="<?php bloginfo('title'); ?>"></a></h1>
      <nav id="main-nav">
        <a class="mobile-nav" href="#menu-main">
          &#9776; Menu
        </a>
          <?php wp_nav_menu(array( 'theme_location' => 'main-menu')); ?>
      </nav>
    </header>
  </div><!-- end header -->
  
  <div class="middle-wrap">
    <div id="middle">