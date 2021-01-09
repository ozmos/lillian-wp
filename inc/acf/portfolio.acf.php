<?php
acf_add_local_field_group(array(
'key' => 'group_portfolio_options',
	'title' => 'Portfolio options',
	'fields' => array(
		// portfolio title
		array(
			'key' => 'field_portfolio_title',
			'label' => 'Portfolio title',
			'name' => 'portfolio_title',
			'type' => 'text',
			
		),
		// item 1
		array(
			'key' => 'field_title_1',
			'label' => 'Title 1',
			'name' => 'title_1',
			'type' => 'text',
		),
		array(
			'key' => 'field_description_1',
			'label' => 'Description 1',
			'name' => 'description_1',
			'type' => 'textarea',
		
		),
		array(
			'key' => 'field_image_1',
			'label' => 'Image 1',
			'name' => 'image_1',
			'type' => 'image',
			'return_format' => 'url',
			'preview_size' => 'medium',
			'library' => 'all',
		),
		array(
			'key' => 'field_pricing_1',
			'label' => 'Pricing 1',
			'name' => 'pricing_1',
			'type' => 'text',
		),
		// Item 2
		array(
			'key' => 'field_title_2',
			'label' => 'Title 2',
			'name' => 'title_2',
			'type' => 'text',
			
		),
		array(
			'key' => 'field_description_2',
			'label' => 'Description 2',
			'name' => 'description_2',
			'type' => 'textarea',
		
		),
		array(
			'key' => 'field_image_2',
			'label' => 'Image 2',
			'name' => 'image_2',
			'type' => 'image',
			'return_format'=>'url',
			'preview_size' => 'medium',
			'library' => 'all',
		),
		array(
			'key' => 'field_pricing_2',
			'label' => 'Pricing 2',
			'name' => 'pricing_2',
			'type' => 'text',
		),
		// Item 3
		array(
			'key' => 'field_title_3',
			'label' => 'Title 3',
			'name' => 'title_3',
			'type' => 'text',
			
		),
		array(
			'key' => 'field_description_3',
			'label' => 'Description 3',
			'name' => 'description_3',
			'type' => 'textarea',
		
		),
		array(
			'key' => 'field_image_3',
			'label' => 'Image 3',
			'name' => 'image_3',
			'type' => 'image',
			'return_format'=>'url',
			'preview_size' => 'medium',
			'library' => 'all',
		),	
		array(
			'key' => 'field_pricing_3',
			'label' => 'Pricing 3',
			'name' => 'pricing_3',
			'type' => 'text',
		),
		// Item 4
		array(
			'key' => 'field_title_4',
			'label' => 'Title 4',
			'name' => 'title_4',
			'type' => 'text',
			
		),
		array(
			'key' => 'field_description_4',
			'label' => 'Description 4',
			'name' => 'description_4',
			'type' => 'textarea',
		
		),
		array(
			'key' => 'field_image_4',
			'label' => 'Image 4',
			'name' => 'image_4',
			'type' => 'image',
			'return_format'=>'url',
			'preview_size' => 'medium',
			'library' => 'all',
		),	
		array(
			'key' => 'field_pricing_4',
			'label' => 'Pricing 4',
			'name' => 'pricing_4',
			'type' => 'text',
		),
		// Item 5
		array(
			'key' => 'field_title_5',
			'label' => 'Title 5',
			'name' => 'title_5',
			'type' => 'text',
			
		),
		array(
			'key' => 'field_description_5',
			'label' => 'Description 5',
			'name' => 'description_5',
			'type' => 'textarea',
		
		),
		array(
			'key' => 'field_image_5',
			'label' => 'Image 5',
			'name' => 'image_5',
			'type' => 'image',
			'return_format'=>'url',
			'preview_size' => 'medium',
			'library' => 'all',
		),	
		array(
			'key' => 'field_pricing_5',
			'label' => 'Pricing 5',
			'name' => 'pricing_5',
			'type' => 'text',
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
	'menu_order' => 1,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	)
);