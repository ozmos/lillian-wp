<?php
acf_add_local_field_group(array(
	'key' => 'group_about_options',
	'title' => 'About options',
	'fields' => array(
		// about title
		array(
			'key' => 'field_about_title',
			'label' => 'about title',
			'name' => 'about_title',
			'type' => 'text',
			
		),
		// about text
		array(
			'key' => 'field_about_description',
			'label' => 'about description',
			'name' => 'about_description',
			'type' => 'text',
			'instructions' => 'Enter the first paragraph for your about section',
			'default_value' => 'Lorem ipsum endo',
			
			
		),

		array(
			'key' => 'field_action_button_url',
			'label' => 'action button url',
			'name' => 'action_button_url',
			'type' => 'link',
			'return_format' => 'array'
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
	'menu_order' => 2,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	)
);