<?php
##========================================================================================
##                                                                                      ##
##                                         TODO                                         ##
##                                                                                      ##
##========================================================================================
// Add automatic git deployment https://medium.com/@ridbay/how-to-deploy-your-github-repositories-to-cpanel-the-easier-way-16ec6e6cc7ee
// Remove dead code
// Separate portfolio items from title and description
// Add copyright to footer DONE 1/1/2020
// Change location of pricing info DONE 1/1/2020


##========================================================================================
##                                                                                      ##
##                                 INHERIT PARENT STYLES                                ##
##                                                                                      ##
##========================================================================================

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

##========================================================================================
##                                                                                      ##
##                            THIRD PARTY SCRIPTS AND STYLES                            ##
##                                                                                      ##
##========================================================================================

// font awesome
add_action( 'wp_enqueue_scripts', 'tthq_add_custom_fa_css' );

function tthq_add_custom_fa_css() {
wp_enqueue_style( 'custom-fa', 'https://use.fontawesome.com/releases/v5.0.6/css/all.css' );
}


// google fonts
function google_fonts() {
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,700', false );
	 wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic', false );
}
add_action( 'wp_enqueue_scripts', 'google_fonts' );

##========================================================================================
##                                                                                      ##
##                                      ACF FIELDS                                      ##
##                                                                                      ##
##========================================================================================

if( function_exists('acf_add_local_field_group') ):
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

/* PORTFOLIO */

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

/* ABOUT */
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

##========================================================================================
##                                                                                      ##
##                                        FOOTER                                        ##
##                                                                                      ##
##========================================================================================

/* LOCATION */
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


/* SOCIAL MEDIA */
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

/* footer about */
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

endif;