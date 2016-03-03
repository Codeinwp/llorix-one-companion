<?php

function llorix_one_companion_customize_register( $wp_customize ) {
	
	/********************************************************/
	/****************** SERVICES OPTIONS  *******************/
	/********************************************************/
	
	
	/* SERVICES SECTION */
	$wp_customize->add_section( 'llorix_one_services_section' , array(
			'title'       => esc_html__( 'Services section', 'llorix-one' ),
			'priority'    => 40,
	));
	
	/* Services title */
	$wp_customize->add_setting( 'llorix_one_our_services_title', array(
		'default' => esc_html__('Our Services','llorix-one'),
		'sanitize_callback' => 'llorix_one_sanitize_text',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'llorix_one_our_services_title', array(
		'label'    => esc_html__( 'Main title', 'llorix-one' ),
		'section'  => 'llorix_one_services_section',
		'active_callback' => 'llorix_one_lite_show_on_front',
		'priority'    => 10
	));
	
	/* Services subtitle */
	$wp_customize->add_setting( 'llorix_one_our_services_subtitle', array(
		'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','llorix-one'),
		'sanitize_callback' => 'llorix_one_sanitize_text',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'llorix_one_our_services_subtitle', array(
		'label'    => esc_html__( 'Subtitle', 'llorix-one' ),
		'section'  => 'llorix_one_services_section',
		'active_callback' => 'llorix_one_lite_show_on_front',
		'priority'    => 20
	));
    
    
    /* Services content */
	$wp_customize->add_setting( 'llorix_one_services_content', array(
		'sanitize_callback' => 'llorix_one_sanitize_repeater',
		'default' => json_encode(
							array(
									array('choice'=>'parallax_icon','icon_value' => 'icon-basic-webpage-multiple','title' => esc_html__('Lorem Ipsum','llorix-one'),'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo.','llorix-one')),
									array('choice'=>'parallax_icon','icon_value' => 'icon-ecommerce-graph3','title' => esc_html__('Lorem Ipsum','llorix-one'),'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo.','llorix-one')),
									array('choice'=>'parallax_icon','icon_value' => 'icon-basic-geolocalize-05','title' => esc_html__('Lorem Ipsum','llorix-one'),'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo.','llorix-one'))
							)
						)
	));
	$wp_customize->add_control( new Llorix_One_Lite_General_Repeater( $wp_customize, 'llorix_one_services_content', array(
		'label'   => esc_html__('Add new service box','llorix-one'),
		'section' => 'llorix_one_services_section',
		'active_callback' => 'llorix_one_lite_show_on_front',
		'priority' => 30,
        'parallax_image_control' => true,
        'parallax_icon_control' => true,
		'parallax_title_control' => true,
        'parallax_text_control' => true,
		'parallax_link_control' => true
	) ) );
	
	/********************************************************/
	/*******************  TEAM OPTIONS  *********************/
	/********************************************************/

	
	$wp_customize->add_section( 'llorix_one_team_section' , array(
			'title'       => esc_html__( 'Team section', 'llorix-one' ),
			'priority'    => 50,
	));
	
	/* Team title */
	$wp_customize->add_setting( 'llorix_one_our_team_title', array(
		'default' => esc_html__('Our Team','llorix-one'),
		'sanitize_callback' => 'llorix_one_sanitize_text',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'llorix_one_our_team_title', array(
		'label'    => esc_html__( 'Main title', 'llorix-one' ),
		'section'  => 'llorix_one_team_section',
		'active_callback' => 'llorix_one_lite_show_on_front',
		'priority'    => 10,
	));
	
	/* Team subtitle */
	$wp_customize->add_setting( 'llorix_one_our_team_subtitle', array(
		'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','llorix-one'),
		'sanitize_callback' => 'llorix_one_sanitize_text',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'llorix_one_our_team_subtitle', array(
		'label'    => esc_html__( 'Subtitle', 'llorix-one' ),
		'section'  => 'llorix_one_team_section',
		'active_callback' => 'llorix_one_lite_show_on_front',
		'priority'    => 20,
	));
	
	
    /* Team content */
	$wp_customize->add_setting( 'llorix_one_team_content', array(
		'sanitize_callback' => 'llorix_one_sanitize_repeater',
		'default' => json_encode(
							array(
									array('image_url' => llorix_one_lite_get_file('/images/team/1.jpg'),'title' => esc_html__('Albert Jacobs','llorix-one'),'subtitle' => esc_html__('Founder & CEO','llorix-one')),
									array('image_url' => llorix_one_lite_get_file('/images/team/2.jpg'),'title' => esc_html__('Tonya Garcia','llorix-one'),'subtitle' => esc_html__('Account Manager','llorix-one')),
									array('image_url' => llorix_one_lite_get_file('/images/team/3.jpg'),'title' => esc_html__('Linda Guthrie','llorix-one'),'subtitle' => esc_html__('Business Development','llorix-one'))
							)
						)
	));
	$wp_customize->add_control( new Llorix_One_Lite_General_Repeater( $wp_customize, 'llorix_one_team_content', array(
		'label'   => esc_html__('Add new team member','llorix-one'),
		'section' => 'llorix_one_team_section',
		'active_callback' => 'llorix_one_lite_show_on_front',
		'priority' => 3,
        'parallax_image_control' => true,
		'parallax_title_control' => true,
		'parallax_subtitle_control' => true
	) ) );
	
	/* Team Background	*/
	$wp_customize->add_setting( 'llorix_one_team_background', array(
		'default' 				=> llorix_one_lite_get_file('/images/background-images/parallax-img/team-img.jpg'),
		'sanitize_callback'		=> 'esc_url',
		'transport' 			=> 'postMessage'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'llorix_one_team_background', array(
	      	'label'    			=> esc_html__( 'Team Background', 'llorix-one' ),
	      	'section'  			=> 'llorix_one_team_section',
			'active_callback' 	=> 'llorix_one_lite_show_on_front',
			'priority'    		=> 10
	)));
	
	/********************************************************/
	/********** TESTIMONIALS OPTIONS  ***********************/
	/********************************************************/
	
	
	$wp_customize->add_section( 'llorix_one_testimonials_section' , array(
			'title'       => esc_html__( 'Testimonial section', 'llorix-one' ),
			'priority'    => 55,
	));
	
	
	/* Testimonials title */
	$wp_customize->add_setting( 'llorix_one_happy_customers_title', array(
		'default' => esc_html__('Happy Customers','llorix-one'),
		'sanitize_callback' => 'llorix_one_sanitize_text',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'llorix_one_happy_customers_title', array(
		'label'    => esc_html__( 'Main title', 'llorix-one' ),
		'section'  => 'llorix_one_testimonials_section',
		'active_callback' => 'llorix_one_lite_show_on_front',
		'priority'    => 10,
	));
	
	/* Testimonials subtitle */
	$wp_customize->add_setting( 'llorix_one_happy_customers_subtitle', array(
		'default' => esc_html__('Cloud computing subscription model out of the box proactive solution.','llorix-one'),
		'sanitize_callback' => 'llorix_one_sanitize_text',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'llorix_one_happy_customers_subtitle', array(
		'label'    => esc_html__( 'Subtitle', 'llorix-one' ),
		'section'  => 'llorix_one_testimonials_section',
		'active_callback' => 'llorix_one_lite_show_on_front',
		'priority'    => 20,
	));
	
	
    /* Testimonials content */
	$wp_customize->add_setting( 'llorix_one_testimonials_content', array(
		'sanitize_callback' => 'llorix_one_sanitize_repeater',
		'default' => json_encode(
							array(
									array('image_url' => llorix_one_lite_get_file('/images/clients/1.jpg'),'title' => esc_html__('Happy Customer','llorix-one'),'subtitle' => esc_html__('Lorem ipsum','llorix-one'),'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo. Fusce malesuada vulputate faucibus. Integer in hendrerit nisi. Praesent a hendrerit urna. In non imperdiet elit, sed molestie odio. Fusce ac metus non purus sollicitudin laoreet.','llorix-one')),
									array('image_url' => llorix_one_lite_get_file('/images/clients/2.jpg'),'title' => esc_html__('Happy Customer','llorix-one'),'subtitle' => esc_html__('Lorem ipsum','llorix-one'),'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo. Fusce malesuada vulputate faucibus. Integer in hendrerit nisi. Praesent a hendrerit urna. In non imperdiet elit, sed molestie odio. Fusce ac metus non purus sollicitudin laoreet.','llorix-one')),
									array('image_url' => llorix_one_lite_get_file('/images/clients/3.jpg'),'title' => esc_html__('Happy Customer','llorix-one'),'subtitle' => esc_html__('Lorem ipsum','llorix-one'),'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo. Fusce malesuada vulputate faucibus. Integer in hendrerit nisi. Praesent a hendrerit urna. In non imperdiet elit, sed molestie odio. Fusce ac metus non purus sollicitudin laoreet.','llorix-one'))
							)
						)
	));
	$wp_customize->add_control( new Llorix_One_Lite_General_Repeater( $wp_customize, 'llorix_one_testimonials_content', array(
		'label'   => esc_html__('Add new testimonial','llorix-one'),
		'section' => 'llorix_one_testimonials_section',
		'active_callback' => 'llorix_one_lite_show_on_front',
		'priority' => 30,
        'parallax_image_control' => true,
		'parallax_title_control' => true,
		'parallax_subtitle_control' => true,
		'parallax_text_control' => true
	) ) );
	
	
}
add_action( 'customize_register', 'llorix_one_companion_customize_register', 999 );

?>