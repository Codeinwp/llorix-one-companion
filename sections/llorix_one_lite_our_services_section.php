<!-- =========================
 SECTION: SERVICES
============================== -->
<?php
	global $wp_customize;
	
	$llorix_one_lite_our_services_show = get_theme_mod('llorix_one_lite_our_services_show');
	
	$llorix_one_lite_our_services_title = get_theme_mod('llorix_one_lite_our_services_title',esc_html__('Our Services','llorix-one-companion'));
	$llorix_one_lite_our_services_subtitle = get_theme_mod('llorix_one_lite_our_services_subtitle',esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','llorix-one-companion'));
	$llorix_one_lite_services = get_theme_mod('llorix_one_lite_services_content',
		json_encode(
			array(
					array('choice'=>'llorix_one_lite_icon','icon_value' => 'fa-cogs','title' => esc_html__('Lorem Ipsum','llorix-one-companion'),'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo.','llorix-one-companion')),
					array('choice'=>'llorix_one_lite_icon','icon_value' => 'fa-bar-chart-o','title' => esc_html__('Lorem Ipsum','llorix-one-companion'),'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo.','llorix-one-companion')),
					array('choice'=>'llorix_one_lite_icon','icon_value' => 'fa-globe','title' => esc_html__('Lorem Ipsum','llorix-one-companion'),'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo.','llorix-one-companion'))
			)
		)
	);
	
	/* If section is not disabled */
	if( isset($llorix_one_lite_our_services_show) && $llorix_one_lite_our_services_show != 1 ) {

		if(!empty($llorix_one_lite_our_services_title) || !empty($llorix_one_lite_our_services_subtitle) || !llorix_one_lite_general_repeater_is_empty($llorix_one_lite_services)){
	?>
			<section class="services" id="services" role="region" aria-label="<?php esc_html_e('Services','llorix-one-companion') ?>">
				<div class="section-overlay-layer">
					<div class="container">

						<!-- SECTION HEADER -->
						<div class="section-header">
							<?php
								if( !empty($llorix_one_lite_our_services_title) ){
									echo '<h2 class="dark-text">'.esc_attr($llorix_one_lite_our_services_title).'</h2><div class="colored-line"></div>';
								} elseif ( isset( $wp_customize ) ) {
									echo '<h2 class="dark-text llorix_one_lite_only_customizer"></h2><div class="colored-line llorix_one_lite_only_customizer"></div>';
								}
							?>

							<?php
								if( !empty($llorix_one_lite_our_services_subtitle) ){
									echo '<div class="sub-heading">'.esc_attr($llorix_one_lite_our_services_subtitle).'</div>';
								} elseif ( isset( $wp_customize ) ) {
									echo '<div class="sub-heading llorix_one_lite_only_customizer"></div>';
								}
							?>
						</div>


						<?php
							if( !empty($llorix_one_lite_services) ){
								$llorix_one_lite_services_decoded = json_decode($llorix_one_lite_services);
								echo '<div id="our_services_wrap" class="services-wrap">';
									foreach($llorix_one_lite_services_decoded as $llorix_one_lite_service_box){
										if( (!empty($llorix_one_lite_service_box->icon_value) && $llorix_one_lite_service_box->icon_value!='No Icon' && $llorix_one_lite_service_box->choice == 'llorix_one_lite_icon')  || (!empty($llorix_one_lite_service_box->image_url)  && $llorix_one_lite_service_box->choice == 'llorix_one_lite_image') || !empty($llorix_one_lite_service_box->title) || !empty($llorix_one_lite_service_box->text) ){
											echo '<div class="service-box"><div class="single-service border-bottom-hover">';
												if( !empty($llorix_one_lite_service_box->choice) && $llorix_one_lite_service_box->choice !== 'llorix_one_lite_none'  ){
													if ( $llorix_one_lite_service_box->choice == 'llorix_one_lite_icon' ){
														if( !empty($llorix_one_lite_service_box->icon_value) ) {
															if( !empty($llorix_one_lite_service_box->link) ){
																if (function_exists ( 'icl_t' ) && !empty($llorix_one_lite_service_box->id)){
																	
																	$llorix_one_lite_link_services = icl_t('Featured Area',$llorix_one_lite_service_box->id.'_services_link',$llorix_one_lite_service_box->link);
																	
																	echo '<div class="service-icon colored-text"><a href="'.esc_url($llorix_one_lite_link_services).'"><i class="fa '.esc_attr($llorix_one_lite_service_box->icon_value).'"></i></a></div>';
																} else {
																
																	echo '<div class="service-icon colored-text"><a href="'.esc_url($llorix_one_lite_service_box->link).'"><i class="fa '.esc_attr($llorix_one_lite_service_box->icon_value).'"></i></a></div>';
																}
															} else {
																echo '<div class="service-icon colored-text"><i class="fa '.esc_attr($llorix_one_lite_service_box->icon_value).'"></i></div>';
															}
														}
													}
													if( $llorix_one_lite_service_box->choice == 'llorix_one_lite_image' ){
														if( !empty($llorix_one_lite_service_box->image_url)){
															if( !empty($llorix_one_lite_service_box->link) ){
																if(!empty($llorix_one_lite_service_box->title)){
																	
																	if (function_exists ( 'icl_t' ) && !empty($llorix_one_lite_service_box->id)){
																	
																		$llorix_one_lite_title_services = icl_t('Featured Area',$llorix_one_lite_service_box->id.'_services_title',$llorix_one_lite_service_box->title);
																		$llorix_one_lite_link_services = icl_t('Featured Area',$llorix_one_lite_service_box->id.'_services_link',$llorix_one_lite_service_box->link);
															
																		echo '<a href="'.esc_url($llorix_one_lite_link_services).'"><img src="'.esc_url($llorix_one_lite_service_box->image_url).'" alt="'.$llorix_one_lite_title_services.'"/></a>';
																		
																	} else {
																		
																		echo '<a href="'.esc_url($llorix_one_lite_service_box->link).'"><img src="'.esc_url($llorix_one_lite_service_box->image_url).'" alt="'.$llorix_one_lite_service_box->title.'"/></a>';
																	}	
																	
																} else {
																	
																	if (function_exists ( 'icl_t' ) && !empty($llorix_one_lite_service_box->id)){
																		
																		$llorix_one_lite_link_services = icl_t('Featured Area',$llorix_one_lite_service_box->id.'_services_link',$llorix_one_lite_service_box->link);
																		
																		echo '<a href="'.esc_url($llorix_one_lite_link_services).'"><img src="'.esc_url($llorix_one_lite_service_box->image_url).'" alt="'.esc_html__('Featured Image','llorix-one-companion').'"/></a>';
																		
																	} else {
																		
																		echo '<a href="'.esc_url($llorix_one_lite_service_box->link).'"><img src="'.esc_url($llorix_one_lite_service_box->image_url).'" alt="'.esc_html__('Featured Image','llorix-one-companion').'"/></a>';
																	}	
																	
																}
															} else {
																if(!empty($llorix_one_lite_service_box->title)){
																	echo '<img src="'.esc_url($llorix_one_lite_service_box->image_url).'" alt="'.$llorix_one_lite_service_box->title.'"/>';
																} else {
																	echo '<img src="'.esc_url($llorix_one_lite_service_box->image_url).'" alt="'.esc_html__('Featured Image','llorix-one-companion').'"/>';
																}
															}
														}
													}
												}
												if(!empty($llorix_one_lite_service_box->title)){
													if( !empty($llorix_one_lite_service_box->link) ){
														if (function_exists ( 'icl_t' ) && !empty($llorix_one_lite_service_box->id)){
															$llorix_one_lite_title_services = icl_t('Featured Area',$llorix_one_lite_service_box->id.'_services_title',$llorix_one_lite_service_box->title);
															$llorix_one_lite_link_services = icl_t('Featured Area',$llorix_one_lite_service_box->id.'_services_link',$llorix_one_lite_service_box->link);
															echo '<h3 class="colored-text"><a href="'.esc_url($llorix_one_lite_link_services).'">'.esc_attr($llorix_one_lite_title_services).'</a></h3>';
														} else {
															echo '<h3 class="colored-text"><a href="'.esc_url($llorix_one_lite_service_box->link).'">'.esc_attr($llorix_one_lite_service_box->title).'</a></h3>';
														}
													} else {
														if (function_exists ( 'icl_t' ) && !empty($llorix_one_lite_service_box->id)){
															$llorix_one_lite_title_services = icl_t('Featured Area',$llorix_one_lite_service_box->id.'_services_title',$llorix_one_lite_service_box->title);
															echo '<h3 class="colored-text">'.esc_attr($llorix_one_lite_title_services).'</h3>';
														} else {
															echo '<h3 class="colored-text">'.esc_attr($llorix_one_lite_service_box->title).'</h3>';
														}
													}
												}
												if(!empty($llorix_one_lite_service_box->text)){
													if (function_exists ( 'icl_t' ) && !empty($llorix_one_lite_service_box->id)){
														echo '<p>'.icl_t('Featured Area',$llorix_one_lite_service_box->id.'_services_text',html_entity_decode($llorix_one_lite_service_box->text)).'</p>';
													} else {
														echo '<p>'.html_entity_decode($llorix_one_lite_service_box->text).'</p>';
													}
												}
											echo '</div></div>';
										}
									}
								echo '</div>';
							}
						?>
					</div>	
				</div>
			</section>
	<?php
		}
		
	/* If section is disabled, but we are in Customize, display section with class llorix_one_lite_only_customizer */	
	} elseif( isset( $wp_customize ) ) {
		?>
		<section class="services llorix_one_lite_only_customizer" id="services" role="region" aria-label="<?php esc_html_e('Services','llorix-one-companion') ?>">
			<div class="section-overlay-layer">
				<div class="container">

					<!-- SECTION HEADER -->
					<div class="section-header">
						<?php
							if( !empty($llorix_one_lite_our_services_title) ){
								echo '<h2 class="dark-text">'.esc_attr($llorix_one_lite_our_services_title).'</h2><div class="colored-line"></div>';
							} elseif ( isset( $wp_customize ) ) {
								echo '<h2 class="dark-text llorix_one_lite_only_customizer"></h2><div class="colored-line llorix_one_lite_only_customizer"></div>';
							}
						?>

						<?php
							if( !empty($llorix_one_lite_our_services_subtitle) ){
								echo '<div class="sub-heading">'.esc_attr($llorix_one_lite_our_services_subtitle).'</div>';
							} elseif ( isset( $wp_customize ) ) {
								echo '<div class="sub-heading llorix_one_lite_only_customizer"></div>';
							}
						?>
					</div>


					<?php
						if( !empty($llorix_one_lite_services) ){
							$llorix_one_lite_services_decoded = json_decode($llorix_one_lite_services);
							echo '<div id="our_services_wrap" class="services-wrap">';
								foreach($llorix_one_lite_services_decoded as $llorix_one_lite_service_box){
									if( (!empty($llorix_one_lite_service_box->icon_value) && $llorix_one_lite_service_box->icon_value!='No Icon' && $llorix_one_lite_service_box->choice == 'llorix_one_lite_icon')  || (!empty($llorix_one_lite_service_box->image_url)  && $llorix_one_lite_service_box->choice == 'llorix_one_lite_image') || !empty($llorix_one_lite_service_box->title) || !empty($llorix_one_lite_service_box->text) ){
										echo '<div class="service-box"><div class="single-service border-bottom-hover">';
											if( !empty($llorix_one_lite_service_box->choice) && $llorix_one_lite_service_box->choice !== 'llorix_one_lite_none'  ){
												if ( $llorix_one_lite_service_box->choice == 'llorix_one_lite_icon' ){
													if( !empty($llorix_one_lite_service_box->icon_value) ) {
														if( !empty($llorix_one_lite_service_box->link) ){
															if (function_exists ( 'icl_t' ) && !empty($llorix_one_lite_service_box->id)){
																
																$llorix_one_lite_link_services = icl_t('Featured Area',$llorix_one_lite_service_box->id.'_services_link',$llorix_one_lite_service_box->link);
																
																echo '<div class="service-icon colored-text"><a href="'.esc_url($llorix_one_lite_link_services).'"><i class="fa '.esc_attr($llorix_one_lite_service_box->icon_value).'"></i></a></div>';
															} else {
															
																echo '<div class="service-icon colored-text"><a href="'.esc_url($llorix_one_lite_service_box->link).'"><i class="fa '.esc_attr($llorix_one_lite_service_box->icon_value).'"></i></a></div>';
															}
														} else {
															echo '<div class="service-icon colored-text"><i class="fa '.esc_attr($llorix_one_lite_service_box->icon_value).'"></i></div>';
														}
													}
												}
												if( $llorix_one_lite_service_box->choice == 'llorix_one_lite_image' ){
													if( !empty($llorix_one_lite_service_box->image_url)){
														if( !empty($llorix_one_lite_service_box->link) ){
															if(!empty($llorix_one_lite_service_box->title)){
																
																if (function_exists ( 'icl_t' ) && !empty($llorix_one_lite_service_box->id)){
																
																	$llorix_one_lite_title_services = icl_t('Featured Area',$llorix_one_lite_service_box->id.'_services_title',$llorix_one_lite_service_box->title);
																	$llorix_one_lite_link_services = icl_t('Featured Area',$llorix_one_lite_service_box->id.'_services_link',$llorix_one_lite_service_box->link);
														
																	echo '<a href="'.esc_url($llorix_one_lite_link_services).'"><img src="'.esc_url($llorix_one_lite_service_box->image_url).'" alt="'.$llorix_one_lite_title_services.'"/></a>';
																	
																} else {
																	
																	echo '<a href="'.esc_url($llorix_one_lite_service_box->link).'"><img src="'.esc_url($llorix_one_lite_service_box->image_url).'" alt="'.$llorix_one_lite_service_box->title.'"/></a>';
																}	
																
															} else {
																
																if (function_exists ( 'icl_t' ) && !empty($llorix_one_lite_service_box->id)){
																	
																	$llorix_one_lite_link_services = icl_t('Featured Area',$llorix_one_lite_service_box->id.'_services_link',$llorix_one_lite_service_box->link);
																	
																	echo '<a href="'.esc_url($llorix_one_lite_link_services).'"><img src="'.esc_url($llorix_one_lite_service_box->image_url).'" alt="'.esc_html__('Featured Image','llorix-one-companion').'"/></a>';
																	
																} else {
																	
																	echo '<a href="'.esc_url($llorix_one_lite_service_box->link).'"><img src="'.esc_url($llorix_one_lite_service_box->image_url).'" alt="'.esc_html__('Featured Image','llorix-one-companion').'"/></a>';
																}	
																
															}
														} else {
															if(!empty($llorix_one_lite_service_box->title)){
																echo '<img src="'.esc_url($llorix_one_lite_service_box->image_url).'" alt="'.$llorix_one_lite_service_box->title.'"/>';
															} else {
																echo '<img src="'.esc_url($llorix_one_lite_service_box->image_url).'" alt="'.esc_html__('Featured Image','llorix-one-companion').'"/>';
															}
														}
													}
												}
											}
											if(!empty($llorix_one_lite_service_box->title)){
												if( !empty($llorix_one_lite_service_box->link) ){
													if (function_exists ( 'icl_t' ) && !empty($llorix_one_lite_service_box->id)){
														$llorix_one_lite_title_services = icl_t('Featured Area',$llorix_one_lite_service_box->id.'_services_title',$llorix_one_lite_service_box->title);
														$llorix_one_lite_link_services = icl_t('Featured Area',$llorix_one_lite_service_box->id.'_services_link',$llorix_one_lite_service_box->link);
														echo '<h3 class="colored-text"><a href="'.esc_url($llorix_one_lite_link_services).'">'.esc_attr($llorix_one_lite_title_services).'</a></h3>';
													} else {
														echo '<h3 class="colored-text"><a href="'.esc_url($llorix_one_lite_service_box->link).'">'.esc_attr($llorix_one_lite_service_box->title).'</a></h3>';
													}
												} else {
													if (function_exists ( 'icl_t' ) && !empty($llorix_one_lite_service_box->id)){
														$llorix_one_lite_title_services = icl_t('Featured Area',$llorix_one_lite_service_box->id.'_services_title',$llorix_one_lite_service_box->title);
														echo '<h3 class="colored-text">'.esc_attr($llorix_one_lite_title_services).'</h3>';
													} else {
														echo '<h3 class="colored-text">'.esc_attr($llorix_one_lite_service_box->title).'</h3>';
													}
												}
											}
											if(!empty($llorix_one_lite_service_box->text)){
												if (function_exists ( 'icl_t' ) && !empty($llorix_one_lite_service_box->id)){
													echo '<p>'.icl_t('Featured Area',$llorix_one_lite_service_box->id.'_services_text',html_entity_decode($llorix_one_lite_service_box->text)).'</p>';
												} else {
													echo '<p>'.html_entity_decode($llorix_one_lite_service_box->text).'</p>';
												}
											}
										echo '</div></div>';
									}
								}
							echo '</div>';
						}
					?>
				</div>	
			</div>
		</section>
		<?php
	}	
	?>