<?php
acf_add_local_field_group(array(
	'key' => 'group_social_options',
	'title' => 'Social media options',
	'fields' => array(
		// socials title
		array(
			'key' => 'field_socials_title',
			'label' => 'socials title',
			'name' => 'socials_title',
			'type' => 'text',
			
		),
		// social media accounts
		// facebook
		array(
			'key' => 'field_facebook_url',
			'label' => 'facebook url',
			'name' => 'facebook',
			'type' => 'text',
			
		),
		// twitter
		array(
			'key' => 'field_twitter_url',
			'label' => 'twitter url',
			'name' => 'twitter',
			'type' => 'link',
			'return_format' => 'url'
		),
		// linkedin
		array(
			'key' => 'field_linkedin_url',
			'label' => 'linkedin url',
			'name' => 'linkedin',
			'type' => 'link',
			'return_format' => 'url'
		),
		// instagram
		array(
			'key' => 'field_instagram_url',
			'label' => 'instagram url',
			'name' => 'instagram',
			'type' => 'link',
			'return_format' => 'url'
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
	'menu_order' => 4,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	)
);