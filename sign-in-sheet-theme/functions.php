<?php



function blank_theme_init() {
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', '_s' ),
	) );
}

add_action( 'after_setup_theme', 'blank_theme_init' );
