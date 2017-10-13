<?php
/**
 * Real E State Theme Customizer
 *
 * @package real_e_state
 * @version  1.0.0 [<description>]
 * @since  1.0.0 [<description>]
 * 
 */
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function real_e_state_customize_register( $wp_customize ) {

	/**
	 * 
	 * Main Header Section
	 * @since  1.0.0 [<description>]
	 * 
	 */
	// Adding customizer section for main header section
	$wp_customize->add_section( 'main_header_section' , array(
		'title'				=> __( 'Main Header Section', 'real-e-state' ),
		'priority'		=> 29,
	) );

	// Main Header Image Setting
	$wp_customize->add_setting( 'featured_header_image' , array(
		'default'   => '',
		'transport' => 'refresh',
	) );

	// Main Header Image Control
	$wp_customize->add_control( new WP_Customize_Media_Control( 
		$wp_customize, 
		'featured_header_image', 
		array(
		'label'      	=> __( 'Featured Header Image ', 'real-e-state' ),
		'section'    	=> 'main_header_section',
		'setting'   	=> 'featured_header_image',
		'description'	=> 'Choose an image for header section',
	) ) );

		// Main header Message Setting
	$wp_customize->add_setting( 'header_message' , array(
		'default'   => '',
		'transport' => 'refresh',
	) );

		// Main header Message Control
	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'header_message', 
		array(
		'label'      	=> __( 'Header Message ', 'real-e-state' ),
		'section'    	=> 'main_header_section',
		'setting'   	=> 'header_message',
		'type'			 	=> 'textarea',
		'description'	=> 'Input a message for header section',
	) ) );

		// Main header CTA (Call To Action) Setting
	$wp_customize->add_setting( 'header_cta_text' , array(
		'default'   => '',
		'transport' => 'refresh',
	) );

		// Main header CTA (Call To Action) Control
	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'header_cta_text', 
		array(
		'label'      	=> __( 'Header Button(CTA) Text', 'real-e-state' ),
		'section'    	=> 'main_header_section',
		'setting'   	=> 'header_cta_text',
		'type'			 	=> 'text',
		'description'	=> 'Input CTA (Button) Text here',
	) ) );

		// Main header CTA (Call To Action) Link
	$wp_customize->add_setting( 'header_cta_link' , array(
		'default'   => '',
		'transport' => 'refresh',
	) );

		// Main header CTA (Call To Action) Link Control
	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'header_cta_link', 
		array(
		'label'      	=> __( 'Header Button(CTA) Link', 'real-e-state' ),
		'section'    	=> 'main_header_section',
		'setting'   	=> 'header_cta_link',
		'type'			 	=> 'dropdown-pages',
		'description'	=> 'Select the page for CTA',
	) ) );
	
	/**
	 * End of Main Header Section
	 */
	
	/**
	 * 
	 * First Section under the fold
	 * @since 1.0.0 [<First Section under the fold>]
	 * 
	 */
	// Add First Section
	$wp_customize->add_section( 'first_section' , array(
		'title'				=> __( 'First Section', 'real-e-state' ),
		'priority'		=> 30,
	) );

	// First Section Title Setting
	$wp_customize->add_setting( 'first_section_title' , array(
		'default'   => '',
		'transport' => 'refresh',
	) );

	// First Section Title Control
	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'first_section_title', 
		array(
			'label'      	=> __( 'Featured Section Title', 'real-e-state' ),
			'section'    	=> 'first_section',
			'setting'   	=> 'first_section_title',
			'type'				=> 'text',
			'description'	=> 'Input the title for the first section',
		) ) );

	// First Section Message Setting
	$wp_customize->add_setting( 'first_section_message' , array(
		'default'   => '',
		'transport' => 'refresh',
	) );

	// First Section Message Control
	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'first_section_message', 
		array(
			'label'      	=> __( 'First Section Message', 'real-e-state' ),
			'section'    	=> 'first_section',
			'setting'   	=> 'first_section_message',
			'type'				=> 'textarea',
			'description'	=> 'Input the first section message',
		) ) );

	// First Section Social Twiiter Setting
	$wp_customize->add_setting( 'first_section_twitter' , array(
		'default'   => '',
		'transport' => 'refresh',
	) );

	// First Section Social Twitter Control
	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'first_section_twitter', 
		array(
			'label'      	=> __( 'Twitter', 'real-e-state' ),
			'section'    	=> 'first_section',
			'setting'   	=> 'first_section_twitter',
			'type'				=> 'text',
			'description'	=> 'Input your Twitter URL',
		) ) );

	// First Section Social Facebook Setting
	$wp_customize->add_setting( 'first_section_facebook' , array(
		'default'   => '',
		'transport' => 'refresh',
	) );

	// First Section Social Facebook Control
	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'first_section_facebook', 
		array(
			'label'      	=> __( 'Facebook', 'real-e-state' ),
			'section'    	=> 'first_section',
			'setting'   	=> 'first_section_facebook',
			'type'				=> 'text',
			'description'	=> 'Input your Facebook URL',
		) ) );

	// First Section Social Instagram Setting
	$wp_customize->add_setting( 'first_section_instagram' , array(
		'default'   => '',
		'transport' => 'refresh',
	) );

	// First Section Social Facebook Control
	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'first_section_instagram',
		array(
			'label'      	=> __( 'Instagram', 'real-e-state' ),
			'section'    	=> 'first_section',
			'setting'   	=> 'first_section_instagram',
			'type'				=> 'text',
			'description'	=> 'Input your Instagram URL',
		) ) );

	// First Section Social Instagram Setting
	$wp_customize->add_setting( 'first_section_yelp' , array(
		'default'   => '',
		'transport' => 'refresh',
	) );

	// First Section Social Facebook Control
	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'first_section_yelp', 
		array(
			'label'      	=> __( 'Yelp', 'real-e-state' ),
			'section'    	=> 'first_section',
			'setting'   	=> 'first_section_Yelp',
			'type'				=> 'text',
			'description'	=> 'Input your Yelp URL',
		) ) );

/**
 * End of First Section
 */

/**
 * 
 * Search Section
 * @since 1.0.0 [<Start of Search Section>]
 * 
 */
// Add Search Section
$wp_customize->add_section( 'search_section' , array(
	'title'				=> __( 'Search Section', 'real-e-state' ),
	'priority'		=> 31,
) );

	// Search Section Title Setting
$wp_customize->add_setting( 'search_section_title' , array(
	'default'   => '',
	'transport' => 'refresh',
) );

	// Search Section Title Control
$wp_customize->add_control( new WP_Customize_Control( 
	$wp_customize, 
	'search_section_title', 
	array(
		'label'      	=> __( 'Search Section Title ', 'real-e-state' ),
		'section'    	=> 'search_section',
		'setting'   	=> 'search_section_title',
		'type'				=> 'text',
		'description'	=> 'Input the title for the search section - Search Features in widget area',
	) ) );
/**
 * End of Search Section
 */

/**
 *
 * Add featured client brands section
 * @since  1.0.0 [<Add Featured Client brands section>]
 * 
 */
$wp_customize->add_section( 'client_brand_section' , array(
	'title'				=> __( 'Client Brand Section', 'real-e-state' ),
	'priority'		=> 31,
) );

	// Branding Section Title Setting
$wp_customize->add_setting( 'client_brand_section_title' , array(
	'default'   => '',
	'transport' => 'refresh',
) );

	// Branding Section Title Control
$wp_customize->add_control( new WP_Customize_Control( 
	$wp_customize, 
	'client_brand_section_title', 
	array(
		'label'      	=> __( 'Branding Section Title ', 'real-e-state' ),
		'section'    	=> 'client_brand_section',
		'setting'   	=> 'client_brand_section_title',
		'type'				=> 'text',
		'description'	=> 'Input the title for the client branding section',
	) ) );

	// Branding Section Message Setting
$wp_customize->add_setting( 'client_brand_section_message' , array(
	'default'   => '',
	'transport' => 'refresh',
) );

	// Branding Section Message Control
$wp_customize->add_control( new WP_Customize_Control( 
	$wp_customize, 
	'client_brand_section_message', 
	array(
		'label'      	=> __( 'Branding Section Message ', 'real-e-state' ),
		'section'    	=> 'client_brand_section',
		'setting'   	=> 'client_brand_section_message',
		'type'				=> 'textarea',
		'description'	=> 'Input the title for the client branding section',
	) ) );

for ($i=1; $i < 5; $i++) { 

// Branding Section Logo Setting
$wp_customize->add_setting( 'client_brand_section_logo_'.$i , array(
	'default'   => '',
	'transport' => 'refresh',
) );

	// Branding Section Logo Control
$wp_customize->add_control( new WP_Customize_Image_Control( 
	$wp_customize, 
	'client_brand_section_logo_'.$i, 
	array(
		'label'      	=> __( 'Client Logo '.$i, 'real-e-state' ),
		'section'    	=> 'client_brand_section',
		'setting'   	=> 'client_brand_section_logo_'.$i,
		'description'	=> 'Add client Logo '.$i.' for the client branding section',
	) ) );
}

/**
 * End of featured client brands section
 */

/**
 *
 * Add Financing Section
 * @since  1.0.0 [<Add Financing Section>]
 * 
 */
$wp_customize->add_section( 'financing_section' , array(
	'title'				=> __( 'Financing Section', 'real-e-state' ),
	'priority'		=> 32,
) );

	// Financing Section Title Setting
$wp_customize->add_setting( 'financing_section_title' , array(
	'default'   => '',
	'transport' => 'refresh',
) );

	// Financing Section Title Control
$wp_customize->add_control( new WP_Customize_Control( 
	$wp_customize, 
	'financing_section_title', 
	array(
		'label'      	=> __( 'Financing Section Title ', 'real-e-state' ),
		'section'    	=> 'financing_section',
		'setting'   	=> 'financing_section_title',
		'type'				=> 'text',
		'description'	=> 'Input the title for the financing section',
	) ) );

	// Financing Section Message Setting
$wp_customize->add_setting( 'financing_section_message' , array(
	'default'   => '',
	'transport' => 'refresh',
) );

	// Financing Section Message Control
$wp_customize->add_control( new WP_Customize_Control( 
	$wp_customize, 
	'financing_section_message', 
	array(
		'label'      	=> __( 'Financing Section Message ', 'real-e-state' ),
		'section'    	=> 'financing_section',
		'setting'   	=> 'financing_section_message',
		'type'				=> 'textarea',
		'description'	=> 'Input the message for the financing section',
	) ) );

// Financing Section CTA Text Setting
$wp_customize->add_setting( 'financing_section_cta_text' , array(
	'default'   => '',
	'transport' => 'refresh',
) );

	// Financing Section CTA Text Control
$wp_customize->add_control( new WP_Customize_Control( 
	$wp_customize, 
	'financing_section_cta_text', 
	array(
		'label'      	=> __( 'Financing Section CTA Text ', 'real-e-state' ),
		'section'    	=> 'financing_section',
		'setting'   	=> 'financing_section_cta_text',
		'type'				=> 'text',
		'description'	=> 'Input the CTA(Button) Text',
	) ) );

// Financing Section CTA Link Setting
$wp_customize->add_setting( 'financing_section_cta_link' , array(
	'default'   => '',
	'transport' => 'refresh',
) );

	// Financing Section CTA Link Control
$wp_customize->add_control( new WP_Customize_Control( 
	$wp_customize, 
	'financing_section_cta_link', 
	array(
		'label'      	=> __( 'Financing Section CTA Link ', 'real-e-state' ),
		'section'    	=> 'financing_section',
		'setting'   	=> 'financing_section_cta_link',
		'type'				=> 'text',
		'description'	=> 'Input the CTA(Button) Link',
	) ) );

/**
 * End of Financing Section
 */


/**
 *
 * Add Information Section 1 & 2
 * @since  1.0.0 [<Add Information Section>]
 * 
 */

for ( $i=1; $i < 3 ; $i++ ) { 

	$wp_customize->add_section( 'information_section_'.$i , array(
		'title'				=> __( 'Information Section '.$i, 'real-e-state' ),
		'priority'		=> 34,
	) );

	// Information Section Title Setting
	$wp_customize->add_setting( 'information_section_title_'.$i , array(
		'default'   => '',
		'transport' => 'refresh',
	) );

	// Information Section Title Control
	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'information_section_title_'.$i, 
		array(
			'label'      	=> __( 'Information Section Title '.$i, 'real-e-state' ),
			'section'    	=> 'information_section_'.$i,
			'setting'   	=> 'information_section_title_'.$i,
			'type'				=> 'text',
			'description'	=> 'Input the title for the information section '.$i,
		) ) );

		// Information Section Message Setting
	$wp_customize->add_setting( 'information_section_message_'.$i, array(
		'default'   => '',
		'transport' => 'refresh',
	) );

		// Information Section Message Control
	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'information_section_message_'.$i, 
		array(
			'label'      	=> __( 'Information Section Message '.$i, 'real-e-state' ),
			'section'    	=> 'information_section_'.$i,
			'setting'   	=> 'information_section_message_'.$i,
			'type'				=> 'textarea',
			'description'	=> 'Input the message for the information section '.$i,
		) ) );

	// Information Section CTA Text Setting
	$wp_customize->add_setting( 'information_section_cta_text_'.$i , array(
		'default'   => '',
		'transport' => 'refresh',
	) );

		// Information Section CTA Text Control
	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'information_section_cta_text_'.$i, 
		array(
			'label'      	=> __( 'Information Section CTA Text '.$i, 'real-e-state' ),
			'section'    	=> 'information_section_'.$i,
			'setting'   	=> 'information_section_cta_text_'.$i,
			'type'				=> 'text',
			'description'	=> 'Input the CTA(Button) Text '.$i,
		) ) );

	// Information Section CTA Link Setting
	$wp_customize->add_setting( 'information_section_cta_link_'.$i, array(
		'default'   => '',
		'transport' => 'refresh',
	) );

		// Information Section CTA Link Control
	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'information_section_cta_link_'.$i, 
		array(
			'label'      	=> __( 'Information Section CTA Link '.$i, 'real-e-state' ),
			'section'    	=> 'information_section_'.$i,
			'setting'   	=> 'information_section_cta_link_'.$i,
			'type'				=> 'text',
			'description'	=> 'Input the CTA(Button) Link '.$i,
		) ) );
}

/**
 * End of Information Section
 */

/**
 *
 * Add Testimonials section
 * @since  1.0.0 [<Add Testimonials section>]
 * 
 */
$wp_customize->add_section( 'testimonial_section' , array(
	'title'				=> __( 'Testimonial Section', 'real-e-state' ),
	'priority'		=> 34,
) );

	// Testimonial Section Title Setting
$wp_customize->add_setting( 'testimonial_section_title' , array(
	'default'   => '',
	'transport' => 'refresh',
) );

	// Testimonial Section Title Control
$wp_customize->add_control( new WP_Customize_Control( 
	$wp_customize, 
	'testimonial_section_title', 
	array(
		'label'      	=> __( 'Testimonial Section Title ', 'real-e-state' ),
		'section'    	=> 'testimonial_section',
		'setting'   	=> 'testimonial_section_title',
		'type'				=> 'text',
		'description'	=> 'Input the title for the testimonial section',
	) ) );

	// Testimonial Section Message Setting
$wp_customize->add_setting( 'testimonial_section_message' , array(
	'default'   => '',
	'transport' => 'refresh',
) );

	// Testimonial Section Message Control
$wp_customize->add_control( new WP_Customize_Control( 
	$wp_customize, 
	'testimonial_section_message', 
	array(
		'label'      	=> __( 'Testimonial Section Message ', 'real-e-state' ),
		'section'    	=> 'testimonial_section',
		'setting'   	=> 'testimonial_section_message',
		'type'				=> 'textarea',
		'description'	=> 'Input the message for the testimonial section',
	) ) );

for ($i=1; $i < 4; $i++) { 

// Testimonial Section Image Setting
$wp_customize->add_setting( 'testimonial_section_image_'.$i , array(
	'default'   => '',
	'transport' => 'refresh',
) );

	// Testimonial Section Image Control
$wp_customize->add_control( new WP_Customize_Image_Control( 
	$wp_customize, 
	'testimonial_section_image_'.$i, 
	array(
		'label'      	=> __( 'Client Image '.$i, 'real-e-state' ),
		'section'    	=> 'testimonial_section',
		'setting'   	=> 'testimonial_section_image_'.$i,
		'description'	=> 'Add profile image '.$i.' for the client testimonial section',
	) ) );

// Testimonial Section Client Message Setting
$wp_customize->add_setting( 'testimonial_section_client_message_'.$i , array(
	'default'   => '',
	'transport' => 'refresh',
) );

	// Testimonial Section Client Message Control
$wp_customize->add_control( new WP_Customize_Control( 
	$wp_customize, 
	'testimonial_section_client_message_'.$i, 
	array(
		'label'      	=> __( 'Client Message '.$i, 'real-e-state' ),
		'section'    	=> 'testimonial_section',
		'setting'   	=> 'testimonial_section_client_message_'.$i,
		'type'				=> 'text',
		'description'	=> 'Add client '.$i.' message',
	) ) );

}

/**
 * End of Testimonials section
 */


/**
 *
 * Add About Me Section
 * @since 1.0.0 [<Add About Me Section>]
 * 
 */

$wp_customize->add_section( 'about_section' , array(
	'title'				=> __( 'About Section', 'real-e-state' ),
	'priority'		=> 35,
) );

	// Financing Section Title Setting
$wp_customize->add_setting( 'about_section_title' , array(
	'default'   => '',
	'transport' => 'refresh',
) );

	// Financing Section Title Control
$wp_customize->add_control( new WP_Customize_Control( 
	$wp_customize, 
	'about_section_title', 
	array(
		'label'      	=> __( 'About Section Title ', 'real-e-state' ),
		'section'    	=> 'about_section',
		'setting'   	=> 'about_section_title',
		'type'				=> 'text',
		'description'	=> 'Input the title for the about section',
	) ) );

for ($i=1; $i < 5; $i++) { 

// About Section Paragraph Setting
$wp_customize->add_setting( 'about_section_paragraph_'.$i , array(
	'default'   => '',
	'transport' => 'refresh',
) );

// About Section Paragraph Control
$wp_customize->add_control( new WP_Customize_Control( 
	$wp_customize, 
	'about_section_paragraph_'.$i, 
	array(
		'label'      	=> __( 'About Section Paragraph '.$i, 'real-e-state' ),
		'section'    	=> 'about_section',
		'setting'   	=> 'about_section_paragraph_'.$i,
		'type'				=> 'textarea',
		'description'	=> 'Input paragraph '.$i.' for the about section',
	) ) );
}

/**
 * End of About Me Section
 */


$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'real_e_state_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'real_e_state_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'real_e_state_customize_register' );
/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function real_e_state_customize_partial_blogname() {
	bloginfo( 'name' );
}
/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function real_e_state_customize_partial_blogdescription() {
	bloginfo( 'description' );
}
/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function real_e_state_customize_preview_js() {
	wp_enqueue_script( 'real-e-state-customizer', get_template_directory_uri() . 'assets/js/customizer.js', array( 'customize-preview' ), '20171012', true );
}
add_action( 'customize_preview_init', 'real_e_state_customize_preview_js' );