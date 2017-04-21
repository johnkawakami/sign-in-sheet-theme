<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

$THEMEURL = get_template_directory_uri();
?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta charset="utf-8" />
    <meta name="MobileOptimized" content="width" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="msvalidate.01" content="5296E0A6459E2EAAA42442F1C14D804A" />
    <link href="<?php echo $THEMEURL ?>/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo $THEMEURL ?>/css/bootswatch.css" rel="stylesheet" />
    <link href="<?php echo $THEMEURL ?>/css/main.css" rel="stylesheet" />
    <link href="<?php echo $THEMEURL ?>/style.css" rel="stylesheet" />
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
<?php wp_head(); ?>
</head>
<body>
<nav id="site-navigation" class="main-navigation" role="navigation">
    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">&#9776;</button>
    <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
</nav><!-- #site-navigation -->

<div id="pagearea" class="container">
    <div class="span2" style="float:right">
    </div>

<header class="jumbotron subhead" id="overview">
  <div class="row">

    <div class="span6">
        <?php if (is_front_page()): ?>
            <h1><?php bloginfo('name'); ?></h1>
            <h2 class="lead"><?php bloginfo('description') ?></h2>
        <?php else: ?>
            <h4><?php bloginfo('name'); ?></h4>
            <h5 class="blog-description"><?php bloginfo('description') ?></h5>
        <?php endif; ?>
    </div>

  </div>
</header>
