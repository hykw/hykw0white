<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=8" />
<title><?php wp_title( '|', true, 'right' ); bloginfo('name') ?></title>
<!--[if lt IE 9]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?v=20140601" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_enqueue_script('jquery'); ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="page" class="hfeed">
    <header id="header">
      <div id="masthead">
        <h1 id="site-title">
          <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
        </h1>
        <div id="site-description"><?php bloginfo( 'description' ); ?></div>

        <?php wp_nav_menu(array('container_class' => 'navi_area1', 'theme_location' => 'navi_area1')); ?>

      </div><!-- #masthead -->
    </header><!-- #header -->
    <div id="main">
