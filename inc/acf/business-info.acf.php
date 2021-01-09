<?php
acf_add_local_field_group(array(
	'key' => 'group_business_information',
	'title' => 'Business information',
	'fields' => array(
		// about title
		array(
			'key' => 'field_business_info_title',
			'label' => 'footer_about title',
			'name' => 'footer_about_title',
			'type' => 'text',
			
		),
		// about text
		array(
			'key' => 'field_footer_about_description',
			'label' => 'footer about description',
			'name' => 'footer_about_description',
			'type' => 'text',
		),

		array(
			'key' => 'field_footer_link',
			'label' => 'footer link',
			'name' => 'footer_link',
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
	'menu_order' => 5,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	)
);