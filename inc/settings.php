<?php

function llorix_one_companion_customize_register( $wp_customize ) {
	
	/********************************************************/
	/****************** SERVICES OPTIONS  *******************/
	/********************************************************/
	
	/* SERVICES SECTION */
	$wp_customize->add_section( 'llorix_one_lite_services_section' , array(
		'title'       => esc_html__( 'Services section', 'llorix-companion' ),
		'priority'    => 40,
	));
	
	/* Services title */
	$wp_customize->add_setting( 'llorix_one_lite_our_services_title', array(
		'default' => esc_html__('Our Services','llorix-companion'),
		'sanitize_callback' => 'llorix_one_lite_sanitize_text',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'llorix_one_lite_our_services_title', array(
		'label'    => esc_html__( 'Main title', 'llorix-companion' ),
		'section'  => 'llorix_one_lite_services_section',
		'active_callback' => 'llorix_one_lite_show_on_front',
		'priority'    => 10
	));
	
	/* Services subtitle */
	$wp_customize->add_setting( 'llorix_one_lite_our_services_subtitle', array(
		'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','llorix-companion'),
		'sanitize_callback' => 'llorix_one_lite_sanitize_text',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'llorix_one_lite_our_services_subtitle', array(
		'label'    => esc_html__( 'Subtitle', 'llorix-companion' ),
		'section'  => 'llorix_one_lite_services_section',
		'active_callback' => 'llorix_one_lite_show_on_front',
		'priority'    => 20
	));
    
    
    /* Services content */
	$wp_customize->add_setting( 'llorix_one_lite_services_content', array(
		'sanitize_callback' => 'llorix_one_lite_sanitize_repeater',
		'default' => json_encode(
							array(
								array('choice'=>'llorix_one_lite_icon','icon_value' => 'fa-cogs','title' => esc_html__('Lorem Ipsum','llorix-companion'),'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo.','llorix-companion')),
								array('choice'=>'llorix_one_lite_icon','icon_value' => 'fa-bar-chart-o','title' => esc_html__('Lorem Ipsum','llorix-companion'),'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo.','llorix-companion')),
								array('choice'=>'llorix_one_lite_icon','icon_value' => 'fa-globe','title' => esc_html__('Lorem Ipsum','llorix-companion'),'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo.','llorix-companion'))
							)
						)
	));
	$wp_customize->add_control( new Llorix_One_Lite_General_Repeater( $wp_customize, 'llorix_one_lite_services_content', array(
		'label'   => esc_html__('Add new service box','llorix-companion'),
		'section' => 'llorix_one_lite_services_section',
		'active_callback' => 'llorix_one_lite_show_on_front',
		'priority' => 30,
        'llorix_one_lite_image_control' => true,
        'llorix_one_lite_icon_control' => true,
		'llorix_one_lite_title_control' => true,
        'llorix_one_lite_text_control' => true,
		'llorix_one_lite_link_control' => true
	) ) );
	
	/********************************************************/
	/*******************  TEAM OPTIONS  *********************/
	/********************************************************/

	$wp_customize->add_section( 'llorix_one_lite_team_section' , array(
			'title'       => esc_html__( 'Team section', 'llorix-companion' ),
			'priority'    => 50,
	));
	
	/* Team title */
	$wp_customize->add_setting( 'llorix_one_lite_our_team_title', array(
		'default' => esc_html__('Our Team','llorix-companion'),
		'sanitize_callback' => 'llorix_one_lite_sanitize_text',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'llorix_one_lite_our_team_title', array(
		'label'    => esc_html__( 'Main title', 'llorix-companion' ),
		'section'  => 'llorix_one_lite_team_section',
		'active_callback' => 'llorix_one_lite_show_on_front',
		'priority'    => 10,
	));
	
	/* Team subtitle */
	$wp_customize->add_setting( 'llorix_one_lite_our_team_subtitle', array(
		'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','llorix-companion'),
		'sanitize_callback' => 'llorix_one_lite_sanitize_text',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'llorix_one_lite_our_team_subtitle', array(
		'label'    => esc_html__( 'Subtitle', 'llorix-companion' ),
		'section'  => 'llorix_one_lite_team_section',
		'active_callback' => 'llorix_one_lite_show_on_front',
		'priority'    => 20,
	));
	
	
    /* Team content */
	$wp_customize->add_setting( 'llorix_one_lite_team_content', array(
		'sanitize_callback' => 'llorix_one_lite_sanitize_repeater',
		'default' => json_encode(
							array(
								array('image_url' => llorix_one_lite_get_file('/images/team/1.jpg'),'title' => esc_html__('Albert Jacobs','llorix-companion'),'subtitle' => esc_html__('Founder & CEO','llorix-companion')),
								array('image_url' => llorix_one_lite_get_file('/images/team/2.jpg'),'title' => esc_html__('Tonya Garcia','llorix-companion'),'subtitle' => esc_html__('Account Manager','llorix-companion')),
								array('image_url' => llorix_one_lite_get_file('/images/team/3.jpg'),'title' => esc_html__('Linda Guthrie','llorix-companion'),'subtitle' => esc_html__('Business Development','llorix-companion'))
							)
						)
	));
	$wp_customize->add_control( new Llorix_One_Lite_General_Repeater( $wp_customize, 'llorix_one_lite_team_content', array(
		'label'   => esc_html__('Add new team member','llorix-companion'),
		'section' => 'llorix_one_lite_team_section',
		'active_callback' => 'llorix_one_lite_show_on_front',
		'priority' => 30,
        'llorix_one_lite_image_control' => true,
		'llorix_one_lite_title_control' => true,
		'llorix_one_lite_subtitle_control' => true
	) ) );
	
	/********************************************************/
	/********** TESTIMONIALS OPTIONS  ***********************/
	/********************************************************/
	
	$wp_customize->add_section( 'llorix_one_lite_testimonials_section' , array(
		'title'       => esc_html__( 'Testimonial section', 'llorix-companion' ),
		'priority'    => 55,
	));
	
	/* Testimonials title */
	$wp_customize->add_setting( 'llorix_one_lite_happy_customers_title', array(
		'default' => esc_html__('Happy Customers','llorix-companion'),
		'sanitize_callback' => 'llorix_one_lite_sanitize_text',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'llorix_one_lite_happy_customers_title', array(
		'label'    => esc_html__( 'Main title', 'llorix-companion' ),
		'section'  => 'llorix_one_lite_testimonials_section',
		'active_callback' => 'llorix_one_lite_show_on_front',
		'priority'    => 10,
	));
	
	/* Testimonials subtitle */
	$wp_customize->add_setting( 'llorix_one_lite_happy_customers_subtitle', array(
		'default' => esc_html__('Cloud computing subscription model out of the box proactive solution.','llorix-companion'),
		'sanitize_callback' => 'llorix_one_lite_sanitize_text',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'llorix_one_lite_happy_customers_subtitle', array(
		'label'    => esc_html__( 'Subtitle', 'llorix-companion' ),
		'section'  => 'llorix_one_lite_testimonials_section',
		'active_callback' => 'llorix_one_lite_show_on_front',
		'priority'    => 20,
	));
	
	
    /* Testimonials content */
	$wp_customize->add_setting( 'llorix_one_lite_testimonials_content', array(
		'sanitize_callback' => 'llorix_one_lite_sanitize_repeater',
		'default' => json_encode(
							array(
									array('image_url' => llorix_one_lite_get_file('/images/clients/1.jpg'),'title' => esc_html__('Happy Customer','llorix-companion'),'subtitle' => esc_html__('Lorem ipsum','llorix-companion'),'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo. Fusce malesuada vulputate faucibus. Integer in hendrerit nisi. Praesent a hendrerit urna. In non imperdiet elit, sed molestie odio. Fusce ac metus non purus sollicitudin laoreet.','llorix-companion')),
									array('image_url' => llorix_one_lite_get_file('/images/clients/2.jpg'),'title' => esc_html__('Happy Customer','llorix-companion'),'subtitle' => esc_html__('Lorem ipsum','llorix-companion'),'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo. Fusce malesuada vulputate faucibus. Integer in hendrerit nisi. Praesent a hendrerit urna. In non imperdiet elit, sed molestie odio. Fusce ac metus non purus sollicitudin laoreet.','llorix-companion')),
									array('image_url' => llorix_one_lite_get_file('/images/clients/3.jpg'),'title' => esc_html__('Happy Customer','llorix-companion'),'subtitle' => esc_html__('Lorem ipsum','llorix-companion'),'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo. Fusce malesuada vulputate faucibus. Integer in hendrerit nisi. Praesent a hendrerit urna. In non imperdiet elit, sed molestie odio. Fusce ac metus non purus sollicitudin laoreet.','llorix-companion'))
							)
						)
	));
	$wp_customize->add_control( new Llorix_One_Lite_General_Repeater( $wp_customize, 'llorix_one_lite_testimonials_content', array(
		'label'   => esc_html__('Add new testimonial','llorix-companion'),
		'section' => 'llorix_one_lite_testimonials_section',
		'active_callback' => 'llorix_one_lite_show_on_front',
		'priority' => 30,
        'llorix_one_lite_image_control' => true,
		'llorix_one_lite_title_control' => true,
		'llorix_one_lite_subtitle_control' => true,
		'llorix_one_lite_text_control' => true
	) ) );
	
	
}
add_action( 'customize_register', 'llorix_one_companion_customize_register', 999 );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function llorix_companion_customize_preview_js() {
	wp_enqueue_script( 'llorix_companion_customizer', LLORIX_ONE_COMPANION_URL . '/js/llorix-companion-customizer.js', array( 'customize-preview' ), '1.0.2', true );
}
add_action( 'customize_preview_init', 'llorix_companion_customize_preview_js', 10);

?>