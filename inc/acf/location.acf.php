<?php
acf_add_local_field_group(array(
	'key' => 'group_location_options',
	'title' => 'footer location',
	'fields' => array(
		array(
			'key' => 'field_location_title',
			'label' => 'footer location title',
			'name' => 'footer_location_title',
			'type' => 'text',
		),
		array(
			'key' => 'field_address_line_1',
			'label' => 'address line 1',
			'name' => 'address_line_1',
			'type' => 'text'
		),
		array(
			'key' => 'field_address_line_2',
			'label' => 'address line 2',
			'name' => 'address_line_2',
			'type' => 'text'
		),
		array(
			'key' => 'field_city',
			'label' => 'city',
			'name' => 'city',
			'type' => 'text'
		),
		array(
			'key' => 'field_state',
			'label' => 'state',
			'name' => 'state',
			'type' => 'text'
		),
		array(
			'key' => 'field_post_code',
			'label' => 'post code',
			'name' => 'post_code',
			'type' => 'text'
		)
	),
	'location' => array(
		array(
			array(
				'param' => 'page_type',
				'operator' => '==',
				'value' => 'front_page',
			),
		)
	),
	'menu_order' => 3,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => ''
)
);