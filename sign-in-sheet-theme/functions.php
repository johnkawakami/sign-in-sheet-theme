<?php


function blank_theme_init() {
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', '_s' ),
	) );
}

add_action( 'after_setup_theme', 'blank_theme_init' );

/**
 * Enqueue scripts and styles.
 */
function _s_scripts() {
	wp_enqueue_style( '_s-style', get_stylesheet_uri() );
	wp_enqueue_script( '_s-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( '_s-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', '_s_scripts' );

/**
 * ACF Fields
 */
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_document',
		'title' => 'Document',
		'fields' => array (
			array (
				'key' => 'field_58e6c45d5ac3b',
				'label' => 'Preview Thumbnail',
				'name' => 'preview_thumbnail',
				'type' => 'image',
				'instructions' => 'Preview image up to 300x300.',
				'required' => 1,
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'uploadedTo',
			),
			array (
				'key' => 'field_58e6c4e65ac3c',
				'label' => 'PDF Version',
				'name' => 'pdf_version',
				'type' => 'file',
				'save_format' => 'url',
				'library' => 'uploadedTo',
			),
			array (
				'key' => 'field_58e6c5135ac3d',
				'label' => 'OpenOffice Text Version',
				'name' => 'openoffice_text_version',
				'type' => 'file',
				'save_format' => 'url',
				'library' => 'uploadedTo',
			),
			array (
				'key' => 'field_58e6c5695ac3f',
				'label' => 'Word Text Version',
				'name' => 'word_text_version',
				'type' => 'file',
				'save_format' => 'url',
				'library' => 'uploadedTo',
			),
			array (
				'key' => 'field_58e6c53b5ac3e',
				'label' => 'OpenOffice Spreadsheet Version',
				'name' => 'openoffice_spreadsheet_version',
				'type' => 'file',
				'save_format' => 'url',
				'library' => 'uploadedTo',
			),
			array (
				'key' => 'field_58e6c5855ac40',
				'label' => 'Excel Spreadsheet Version',
				'name' => 'excel_spreadsheet_version',
				'type' => 'file',
				'save_format' => 'url',
				'library' => 'uploadedTo',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

