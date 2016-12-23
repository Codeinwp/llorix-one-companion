<!-- =========================
 SECTION: TEAM   
============================== -->
<?php
	global $wp_customize;
	
	$llorix_one_lite_our_team_show = get_theme_mod('llorix_one_lite_our_team_show');
	
	$llorix_one_lite_our_team_title = get_theme_mod('llorix_one_lite_our_team_title',esc_html__('Our Team','llorix-one-companion'));
	$llorix_one_lite_our_team_background = get_theme_mod('llorix_one_lite_our_team_background',llorix_one_lite_get_file('/images/background-images/parallax-img/team-img.jpg'));
	$llorix_one_lite_our_team_subtitle = get_theme_mod('llorix_one_lite_our_team_subtitle',esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','llorix-one-companion'));
	$llorix_one_lite_team_content = get_theme_mod('llorix_one_lite_team_content',
		json_encode(
			array(
					array('image_url' => llorix_one_lite_get_file('/images/team/1.jpg'),'title' => esc_html__('Albert Jacobs','llorix-one-companion'),'subtitle' => esc_html__('Founder & CEO','llorix-one-companion')),
					array('image_url' => llorix_one_lite_get_file('/images/team/2.jpg'),'title' => esc_html__('Tonya Garcia','llorix-one-companion'),'subtitle' => esc_html__('Account Manager','llorix-one-companion')),
					array('image_url' => llorix_one_lite_get_file('/images/team/3.jpg'),'title' => esc_html__('Linda Guthrie','llorix-one-companion'),'subtitle' => esc_html__('Business Development','llorix-one-companion'))
			)
		)
	);

	/* If section is not disabled */
	if( isset($llorix_one_lite_our_team_show) && $llorix_one_lite_our_team_show != 1 ) {
	
		if( !empty($llorix_one_lite_our_team_title) || !empty($llorix_one_lite_our_team_subtitle) || !llorix_one_lite_general_repeater_is_empty($llorix_one_lite_team_content) ){
			
			if( !empty($llorix_one_lite_our_team_background) ) {
				echo '<section class="team" id="team" role="region" aria-label="'.esc_html__('Team','llorix-one-companion').'" style="background:url('.$llorix_one_lite_our_team_background.');">';
			}
			else {
				echo '<section class="team" id="team" role="region" aria-label="'.esc_html__('Team','llorix-one-companion').'">';
			}
	?>
				<div class="section-overlay-layer">
					<div class="container">

						<!-- SECTION HEADER -->
						<?php 
							if( !empty($llorix_one_lite_our_team_title) || !empty($llorix_one_lite_our_team_subtitle)){ ?>
								<div class="section-header">
								<?php
									if( !empty($llorix_one_lite_our_team_title) ){
										echo '<h2 class="dark-text">'.esc_attr($llorix_one_lite_our_team_title).'</h2><div class="colored-line"></div>';
									} elseif ( isset( $wp_customize )   ) {
										echo '<h2 class="dark-text llorix_one_lite_only_customizer"></h2><div class="colored-line llorix_one_lite_only_customizer"></div>';
									}

								?>

								<?php
									if( !empty($llorix_one_lite_our_team_subtitle) ){
										echo '<div class="sub-heading">'.esc_attr($llorix_one_lite_our_team_subtitle).'</div>';
									} elseif ( isset( $wp_customize )   ) {
										echo '<div class="sub-heading llorix_one_lite_only_customizer"></div>';
									}
								?>
								</div>
						<?php 
							}
				

							if(!empty($llorix_one_lite_team_content)){
								echo '<div class="row team-member-wrap">';
								$llorix_one_lite_team_decoded = json_decode($llorix_one_lite_team_content);
								foreach($llorix_one_lite_team_decoded as $llorix_one_lite_team_member){
									if( !empty($llorix_one_lite_team_member->image_url) ||  !empty($llorix_one_lite_team_member->title) || !empty($llorix_one_lite_team_member->subtitle)){?>
										<div class="col-md-3 team-member-box">
											<div class="team-member border-bottom-hover">
												<div class="member-pic">
													<?php
														if( !empty($llorix_one_lite_team_member->image_url)){
															if( !empty($llorix_one_lite_team_member->title) ){
																echo '<img src="'.esc_url($llorix_one_lite_team_member->image_url).'" alt="'.esc_attr($llorix_one_lite_team_member->title).'">';
															} else {
																echo '<img src="'.esc_url($llorix_one_lite_team_member->image_url).'" alt="'.esc_html__('Avatar','llorix-one-companion').'">';
															}
														} else {
															$default_url = llorix_one_lite_get_file('/images/team/default.png');
															echo '<img src="'.$default_url.'" alt="'.esc_html__('Avatar','llorix-one-companion').'">';
														}
													?>
												</div><!-- .member-pic -->

												<?php if(!empty($llorix_one_lite_team_member->title) || !empty($llorix_one_lite_team_member->subtitle)){?>
												<div class="member-details">
													<div class="member-details-inner">
														<?php 
														if( !empty($llorix_one_lite_team_member->title) ){
															if(function_exists('icl_t')){
																echo '<h5 class="colored-text">'.icl_t('Team',$llorix_one_lite_team_member->id.'_team_title',esc_attr($llorix_one_lite_team_member->title)).'</h5>';
															} else {
																echo '<h5 class="colored-text">'.esc_attr($llorix_one_lite_team_member->title).'</h5>';
															}
														}
														if( !empty($llorix_one_lite_team_member->subtitle) ){ ?>
															<div class="small-text">
																<?php
																	if(function_exists('icl_t')){
																		echo icl_t('Team',$llorix_one_lite_team_member->id.'_team_subtitle',esc_attr($llorix_one_lite_team_member->subtitle));
																	} else {
																		echo esc_attr($llorix_one_lite_team_member->subtitle);
																	}
																?>	
															</div>

														<?php
														}
														?>
													</div><!-- .member-details-inner -->
												</div><!-- .member-details -->
												<?php } ?>
											</div><!-- .team-member -->
										</div><!-- .team-member -->         
										<!-- MEMBER -->
							<?php
									}
								}
								echo '</div>';
							}?>
					</div>
				</div><!-- container  -->
			</section><!-- #section9 -->
			
	<?php
		}
	/* If section is disabled, but we are in Customize, display section with class llorix_one_lite_only_customizer */	
	} elseif( isset( $wp_customize ) ) {
		
		if( !empty($llorix_one_lite_our_team_background) ) {
			echo '<section class="team llorix_one_lite_only_customizer" id="team" role="region" aria-label="'.esc_html__('Team','llorix-one-companion').'" style="background:url('.$llorix_one_lite_our_team_background.');">';
		}
		else {
			echo '<section class="team llorix_one_lite_only_customizer" id="team" role="region" aria-label="'.esc_html__('Team','llorix-one-companion').'">';
		}
?>
			<div class="section-overlay-layer">
				<div class="container">

					<!-- SECTION HEADER -->
					<?php 
						if( !empty($llorix_one_lite_our_team_title) || !empty($llorix_one_lite_our_team_subtitle)){ ?>
							<div class="section-header">
							<?php
								if( !empty($llorix_one_lite_our_team_title) ){
									echo '<h2 class="dark-text">'.esc_attr($llorix_one_lite_our_team_title).'</h2><div class="colored-line"></div>';
								} elseif ( isset( $wp_customize )   ) {
									echo '<h2 class="dark-text llorix_one_lite_only_customizer"></h2><div class="colored-line llorix_one_lite_only_customizer"></div>';
								}

							?>

							<?php
								if( !empty($llorix_one_lite_our_team_subtitle) ){
									echo '<div class="sub-heading">'.esc_attr($llorix_one_lite_our_team_subtitle).'</div>';
								} elseif ( isset( $wp_customize )   ) {
									echo '<div class="sub-heading llorix_one_lite_only_customizer"></div>';
								}
							?>
							</div>
					<?php 
						}
			

						if(!empty($llorix_one_lite_team_content)){
							echo '<div class="row team-member-wrap">';
							$llorix_one_lite_team_decoded = json_decode($llorix_one_lite_team_content);
							foreach($llorix_one_lite_team_decoded as $llorix_one_lite_team_member){
								if( !empty($llorix_one_lite_team_member->image_url) ||  !empty($llorix_one_lite_team_member->title) || !empty($llorix_one_lite_team_member->subtitle)){?>
									<div class="col-md-3 team-member-box">
										<div class="team-member border-bottom-hover">
											<div class="member-pic">
												<?php
													if( !empty($llorix_one_lite_team_member->image_url)){
														if( !empty($llorix_one_lite_team_member->title) ){
															echo '<img src="'.esc_url($llorix_one_lite_team_member->image_url).'" alt="'.esc_attr($llorix_one_lite_team_member->title).'">';
														} else {
															echo '<img src="'.esc_url($llorix_one_lite_team_member->image_url).'" alt="'.esc_html__('Avatar','llorix-one-companion').'">';
														}
													} else {
														$default_url = llorix_one_lite_get_file('/images/team/default.png');
														echo '<img src="'.$default_url.'" alt="'.esc_html__('Avatar','llorix-one-companion').'">';
													}
												?>
											</div><!-- .member-pic -->

											<?php if(!empty($llorix_one_lite_team_member->title) || !empty($llorix_one_lite_team_member->subtitle)){?>
											<div class="member-details">
												<div class="member-details-inner">
													<?php 
													if( !empty($llorix_one_lite_team_member->title) ){
														if(function_exists('icl_t')){
															echo '<h5 class="colored-text">'.icl_t('Team',$llorix_one_lite_team_member->id.'_team_title',esc_attr($llorix_one_lite_team_member->title)).'</h5>';
														} else {
															echo '<h5 class="colored-text">'.esc_attr($llorix_one_lite_team_member->title).'</h5>';
														}
													}
													if( !empty($llorix_one_lite_team_member->subtitle) ){ ?>
														<div class="small-text">
															<?php
																if(function_exists('icl_t')){
																	echo icl_t('Team',$llorix_one_lite_team_member->id.'_team_subtitle',esc_attr($llorix_one_lite_team_member->subtitle));
																} else {
																	echo esc_attr($llorix_one_lite_team_member->subtitle);
																}
															?>	
														</div>

													<?php
													}
													?>
												</div><!-- .member-details-inner -->
											</div><!-- .member-details -->
											<?php } ?>
										</div><!-- .team-member -->
									</div><!-- .team-member -->         
									<!-- MEMBER -->
						<?php
								}
							}
							echo '</div>';
						}?>
				</div>
			</div><!-- container  -->
		</section><!-- #section9 -->
		<?php
	}	
?>