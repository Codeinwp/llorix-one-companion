<?php

function llorix_one_companion_customize_register( $wp_customize ) {
	
	if( class_exists('Llorix_One_Lite_General_Repeater') ) {
		
		/********************************************************/
		/****************** SERVICES OPTIONS  *******************/
		/********************************************************/
		
		/* SERVICES SECTION */
		$wp_customize->add_section( 'llorix_one_lite_services_section' , array(
			'title'       => esc_html__( 'Services section', 'llorix-one-companion' ),
			'priority'    => 40,
			'panel'       => 'llorix_one_lite_front_page_sections',
			'active_callback' => 'llorix_one_lite_show_on_front',
		));
		
		/* Services show/hide */
		$wp_customize->add_setting( 'llorix_one_lite_our_services_show', array(
			'sanitize_callback' => 'llorix_one_lite_sanitize_text',
			'transport' => 'postMessage'
		));
		
		$wp_customize->add_control( 'llorix_one_lite_our_services_show', array(
			'type' => 'checkbox',
			'label' => __('Disable the Services section?','llorix-one-companion'),
			'section' => 'llorix_one_lite_services_section',
			'priority'    => 1,
		));
		
		/* Services title */
		$wp_customize->add_setting( 'llorix_one_lite_our_services_title', array(
			'default' => esc_html__('Our Services','llorix-one-companion'),
			'sanitize_callback' => 'llorix_one_lite_sanitize_text',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control( 'llorix_one_lite_our_services_title', array(
			'label'    => esc_html__( 'Main title', 'llorix-one-companion' ),
			'section'  => 'llorix_one_lite_services_section',
			'priority'    => 10
		));
		
		/* Services subtitle */
		$wp_customize->add_setting( 'llorix_one_lite_our_services_subtitle', array(
			'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','llorix-one-companion'),
			'sanitize_callback' => 'llorix_one_lite_sanitize_text',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control( 'llorix_one_lite_our_services_subtitle', array(
			'label'    => esc_html__( 'Subtitle', 'llorix-one-companion' ),
			'section'  => 'llorix_one_lite_services_section',
			'priority'    => 20
		));
		
		
		/* Services content */
		$wp_customize->add_setting( 'llorix_one_lite_services_content', array(
			'sanitize_callback' => 'llorix_one_lite_sanitize_repeater',
			'default' => json_encode(
								array(
									array('choice'=>'llorix_one_lite_icon','icon_value' => 'fa-cogs','title' => esc_html__('Lorem Ipsum','llorix-one-companion'),'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo.','llorix-one-companion')),
									array('choice'=>'llorix_one_lite_icon','icon_value' => 'fa-bar-chart-o','title' => esc_html__('Lorem Ipsum','llorix-one-companion'),'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo.','llorix-one-companion')),
									array('choice'=>'llorix_one_lite_icon','icon_value' => 'fa-globe','title' => esc_html__('Lorem Ipsum','llorix-one-companion'),'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo.','llorix-one-companion'))
								)
							)
		));
		$wp_customize->add_control( new Llorix_One_Lite_General_Repeater( $wp_customize, 'llorix_one_lite_services_content', array(
			'label'   => esc_html__('Add new service box','llorix-one-companion'),
			'section' => 'llorix_one_lite_services_section',
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
			'title'       => esc_html__( 'Team section', 'llorix-one-companion' ),
			'priority'    => 60,
			'panel'       => 'llorix_one_lite_front_page_sections',
			'active_callback' => 'llorix_one_lite_show_on_front',
		));
		
		/* Team show/hide */
		$wp_customize->add_setting( 'llorix_one_lite_our_team_show', array(
			'sanitize_callback' => 'llorix_one_lite_sanitize_text',
			'transport' => 'postMessage'
		));
		
		$wp_customize->add_control( 'llorix_one_lite_our_team_show', array(
			'type' => 'checkbox',
			'label' => __('Disable the Team section?','llorix-one-companion'),
			'section' => 'llorix_one_lite_team_section',
			'priority'    => 1,
		));
		
		/* Team title */
		$wp_customize->add_setting( 'llorix_one_lite_our_team_title', array(
			'default' => esc_html__('Our Team','llorix-one-companion'),
			'sanitize_callback' => 'llorix_one_lite_sanitize_text',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control( 'llorix_one_lite_our_team_title', array(
			'label'    => esc_html__( 'Main title', 'llorix-one-companion' ),
			'section'  => 'llorix_one_lite_team_section',
			'priority'    => 10,
		));
		
		/* Team subtitle */
		$wp_customize->add_setting( 'llorix_one_lite_our_team_subtitle', array(
			'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','llorix-one-companion'),
			'sanitize_callback' => 'llorix_one_lite_sanitize_text',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control( 'llorix_one_lite_our_team_subtitle', array(
			'label'    => esc_html__( 'Subtitle', 'llorix-one-companion' ),
			'section'  => 'llorix_one_lite_team_section',
			'priority'    => 20,
		));
		
		/* Team Background	*/
		$wp_customize->add_setting( 'llorix_one_lite_our_team_background', array(
			'default' 				=> llorix_one_lite_get_file('/images/background-images/parallax-img/team-img.jpg'),
			'sanitize_callback'		=> 'esc_url',
		));
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'llorix_one_lite_our_team_background', array(
			'label'    			=> esc_html__( 'Team Background', 'llorix-one-lite' ),
			'section'  			=> 'llorix_one_lite_team_section',
			'priority'    		=> 30
		)));
		
		/* Team content */
		$wp_customize->add_setting( 'llorix_one_lite_team_content', array(
			'sanitize_callback' => 'llorix_one_lite_sanitize_repeater',
			'default' => json_encode(
								array(
									array('image_url' => llorix_one_lite_get_file('/images/team/1.jpg'),'title' => esc_html__('Albert Jacobs','llorix-one-companion'),'subtitle' => esc_html__('Founder & CEO','llorix-one-companion')),
									array('image_url' => llorix_one_lite_get_file('/images/team/2.jpg'),'title' => esc_html__('Tonya Garcia','llorix-one-companion'),'subtitle' => esc_html__('Account Manager','llorix-one-companion')),
									array('image_url' => llorix_one_lite_get_file('/images/team/3.jpg'),'title' => esc_html__('Linda Guthrie','llorix-one-companion'),'subtitle' => esc_html__('Business Development','llorix-one-companion'))
								)
							)
		));
		$wp_customize->add_control( new Llorix_One_Lite_General_Repeater( $wp_customize, 'llorix_one_lite_team_content', array(
			'label'   => esc_html__('Add new team member','llorix-one-companion'),
			'section' => 'llorix_one_lite_team_section',
			'priority' => 40,
			'llorix_one_lite_image_control' => true,
			'llorix_one_lite_title_control' => true,
			'llorix_one_lite_subtitle_control' => true
		) ) );
		
		/********************************************************/
		/********** TESTIMONIALS OPTIONS  ***********************/
		/********************************************************/
		
		$wp_customize->add_section( 'llorix_one_lite_testimonials_section' , array(
			'title'       => esc_html__( 'Testimonials section', 'llorix-one-companion' ),
			'priority'    => 70,
			'panel'       => 'llorix_one_lite_front_page_sections',
			'active_callback' => 'llorix_one_lite_show_on_front',
		));
		
		/* Testimonials show/hide */
		$wp_customize->add_setting( 'llorix_one_lite_happy_customers_show', array(
			'sanitize_callback' => 'llorix_one_lite_sanitize_text',
			'transport' => 'postMessage'
		));
		
		$wp_customize->add_control( 'llorix_one_lite_happy_customers_show', array(
			'type' => 'checkbox',
			'label' => __('Disable the Testimonials section?','llorix-one-companion'),
			'section' => 'llorix_one_lite_testimonials_section',
			'priority'    => 1,
		));
		
		/* Testimonials title */
		$wp_customize->add_setting( 'llorix_one_lite_happy_customers_title', array(
			'default' => esc_html__('Happy Customers','llorix-one-companion'),
			'sanitize_callback' => 'llorix_one_lite_sanitize_text',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control( 'llorix_one_lite_happy_customers_title', array(
			'label'    => esc_html__( 'Main title', 'llorix-one-companion' ),
			'section'  => 'llorix_one_lite_testimonials_section',
			'priority'    => 10,
		));
		
		/* Testimonials subtitle */
		$wp_customize->add_setting( 'llorix_one_lite_happy_customers_subtitle', array(
			'default' => esc_html__('Cloud computing subscription model out of the box proactive solution.','llorix-one-companion'),
			'sanitize_callback' => 'llorix_one_lite_sanitize_text',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control( 'llorix_one_lite_happy_customers_subtitle', array(
			'label'    => esc_html__( 'Subtitle', 'llorix-one-companion' ),
			'section'  => 'llorix_one_lite_testimonials_section',
			'priority'    => 20,
		));
		
		
		/* Testimonials content */
		$wp_customize->add_setting( 'llorix_one_lite_testimonials_content', array(
			'sanitize_callback' => 'llorix_one_lite_sanitize_repeater',
			'default' => json_encode(
								array(
										array('image_url' => llorix_one_lite_get_file('/images/clients/1.jpg'),'title' => esc_html__('Happy Customer','llorix-one-companion'),'subtitle' => esc_html__('Lorem ipsum','llorix-one-companion'),'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo. Fusce malesuada vulputate faucibus. Integer in hendrerit nisi. Praesent a hendrerit urna. In non imperdiet elit, sed molestie odio. Fusce ac metus non purus sollicitudin laoreet.','llorix-one-companion')),
										array('image_url' => llorix_one_lite_get_file('/images/clients/2.jpg'),'title' => esc_html__('Happy Customer','llorix-one-companion'),'subtitle' => esc_html__('Lorem ipsum','llorix-one-companion'),'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo. Fusce malesuada vulputate faucibus. Integer in hendrerit nisi. Praesent a hendrerit urna. In non imperdiet elit, sed molestie odio. Fusce ac metus non purus sollicitudin laoreet.','llorix-one-companion')),
										array('image_url' => llorix_one_lite_get_file('/images/clients/3.jpg'),'title' => esc_html__('Happy Customer','llorix-one-companion'),'subtitle' => esc_html__('Lorem ipsum','llorix-one-companion'),'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo. Fusce malesuada vulputate faucibus. Integer in hendrerit nisi. Praesent a hendrerit urna. In non imperdiet elit, sed molestie odio. Fusce ac metus non purus sollicitudin laoreet.','llorix-one-companion'))
								)
							)
		));
		$wp_customize->add_control( new Llorix_One_Lite_General_Repeater( $wp_customize, 'llorix_one_lite_testimonials_content', array(
			'label'   => esc_html__('Add new testimonial','llorix-one-companion'),
			'section' => 'llorix_one_lite_testimonials_section',
			'priority' => 30,
			'llorix_one_lite_image_control' => true,
			'llorix_one_lite_title_control' => true,
			'llorix_one_lite_subtitle_control' => true,
			'llorix_one_lite_text_control' => true
		) ) );
	
	}
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