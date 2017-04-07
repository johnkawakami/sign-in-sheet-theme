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
<link href="<?php echo $THEMEURL ?>/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo $THEMEURL ?>/css/bootswatch.css" rel="stylesheet" />
<link href="<?php echo $THEMEURL ?>/css/main.css" rel="stylesheet" />
<link href="<?php echo $THEMEURL ?>/style.css" rel="stylesheet" />
<title>Sign-in Sheet</title>
<meta name="description" content="A free repository of common paper sign-in sheets and business forms for your company, organization, church, faith organization, or club to print." />
<meta name="keywords" content="paper, printed, free, sign-in sheet, business forms, openoffice, open office, libre office, pdf" />
<meta name="geo.placename" content="Los Angeles, California" />
<?php wp_head(); ?>
</head>
<body>
<nav id="site-navigation" class="main-navigation" role="navigation">
    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', '_s' ); ?></button>
    <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
</nav><!-- #site-navigation -->

<div id="pagearea" class="container">
    <div class="span2" style="float:right">
    </div>

<header class="jumbotron subhead" id="overview">
  <div class="row">

    <div class="span6">
      <h1>Sign-in Sheet</h1>
      <p class="lead">Free sign-in sheets and business templates.  <br />In OpenOffice / Libre Office format.</p>
    </div>

  </div>
</header>
