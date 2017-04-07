<?php


function blank_theme_init() {
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', '_s' ),
	) );
}

add_action( 'after_setup_theme', 'blank_theme_init' );


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

