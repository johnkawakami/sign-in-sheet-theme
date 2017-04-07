# Blank Theme

Based on _s, mainly the comment block at the top.

This starter theme is for porting an HTML website to WordPress.

The footer can probably be copied verbatim.  The header
probably contains a menu.  To port the menu, just copy
the original over, and then paste in the menu code
below the existing menu.  As the site is rebuilt,
the old menu can be removed.

## Fixing up the CSS links

Normally, a theme uses PHP code in insert links to CSS.  Rather than go
through that, you can hardcode the links for now.  For example:

    <link href="/wp-content/themes/blank-theme/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/wp-content/themes/blank-theme/css/bootswatch.css" rel="stylesheet" />
    <link href="/wp-content/themes/blank-theme/css/main.css" rel="stylesheet" />
    <link href="/wp-content/themes/blank-theme/style.css" rel="stylesheet" />

Copy the relevant CSS files into the css directory.

## Menus

To add menu support, add this to funcitons.php

	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', '_s' ),
	) );

Here's the standard code to insert a menu into the header template:

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', '_s' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->

Here is the CSS code for menus:

<pre>
/*--------------------------------------------------------------
## Menus
--------------------------------------------------------------*/
.main-navigation {
	clear: both;
	display: block;
	float: left;
	width: 100%;
}

.main-navigation ul {
	display: none;
	list-style: none;
	margin: 0;
	padding-left: 0;
}

.main-navigation li {
	float: left;
	position: relative;
}

.main-navigation a {
	display: block;
	text-decoration: none;
}

.main-navigation ul ul {
	box-shadow: 0 3px 3px rgba(0, 0, 0, 0.2);
	float: left;
	position: absolute;
	top: 1.5em;
	left: -999em;
	z-index: 99999;
}

.main-navigation ul ul ul {
	left: -999em;
	top: 0;
}

.main-navigation ul ul a {
	width: 200px;
}

.main-navigation ul ul li {

}

.main-navigation li:hover > a,
.main-navigation li.focus > a {
}

.main-navigation ul ul :hover > a,
.main-navigation ul ul .focus > a {
}

.main-navigation ul ul a:hover,
.main-navigation ul ul a.focus {
}

.main-navigation ul li:hover > ul,
.main-navigation ul li.focus > ul {
	left: auto;
}

.main-navigation ul ul li:hover > ul,
.main-navigation ul ul li.focus > ul {
	left: 100%;
}

.main-navigation .current_page_item > a,
.main-navigation .current-menu-item > a,
.main-navigation .current_page_ancestor > a,
.main-navigation .current-menu-ancestor > a {
}

/* Small menu. */
.menu-toggle,
.main-navigation.toggled ul {
	display: block;
}

@media screen and (min-width: 37.5em) {
	.menu-toggle {
		display: none;
	}
	.main-navigation ul {
		display: block;
	}
}

.site-main .comment-navigation,
.site-main .posts-navigation,
.site-main .post-navigation {
	margin: 0 0 1.5em;
	overflow: hidden;
}

.comment-navigation .nav-previous,
.posts-navigation .nav-previous,
.post-navigation .nav-previous {
	float: left;
	width: 50%;
}

.comment-navigation .nav-next,
.posts-navigation .nav-next,
.post-navigation .nav-next {
	float: right;
	text-align: right;
	width: 50%;
}
</pre>

### Enabling it

When you're set up, you need to 

### Menu CSS

You will probably need to copy the CSS, and then use the
.menu-navigation and other WP-centric selectors to 
replicate the menu appearance.

## Replicating links

Settings->Permalinks.  Use the permalinks features to
make URLs that match the existing site.

## Hiding the standard widget block

Delete the call to get_sidebar() in the index.php and archive.php templates.

## Enabling the admin header

Put a call to wp_head() in the header, just before the </head> closing tag.

Put a call to wp_footer() in the footer, just before the </body> closing tag.
