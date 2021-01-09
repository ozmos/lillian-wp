<?php
/* MASTHEAD */


acf_add_local_field_group(array(
	'key' => 'group_masthead_options',
	'title' => 'Masthead options',
	'fields' => array(
		array(
			'key' => 'field_avatar_image',
			'label' => 'avatar',
			'name' => 'avatar',
			'type' => 'image',
			'instructions' => 'upload profile picture or avatar svg',
			'required' => 0,
			'conditional_logic' => 0,
			'return_format' => 'array',
			'preview_size' => 'medium',
			'library' => 'all',
			
		),
		array(
			'key' => 'field_page_title',
			'label' => 'Page title',
			'name' => 'page_title',
			'type' => 'text',
			'instructions' => 'Enter title of page',
			'required' => 1,
			'conditional_logic' => 0,
			
		),
		array(
			'key' => 'field_tag_line',
			'label' => 'Tag line',
			'name' => 'tag_line',
			'type' => 'text',
			'instructions' => 'tag line for masthead section',
			
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_type',
				'operator' => '==',
				'value' => 'front_page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));