<!-- =========================
 SECTION: TEAM   
============================== -->
<?php

$llorix_one_lite_our_team_show       = get_theme_mod( 'llorix_one_lite_our_team_show' );
$llorix_one_lite_our_team_title      = get_theme_mod( 'llorix_one_lite_our_team_title', esc_html__( 'Our Team', 'llorix-one-companion' ) );
$llorix_one_lite_our_team_background = get_theme_mod( 'llorix_one_lite_our_team_background', llorix_one_lite_get_file( '/images/background-images/parallax-img/team-img.jpg' ) );
$llorix_one_lite_our_team_subtitle   = get_theme_mod( 'llorix_one_lite_our_team_subtitle', esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'llorix-one-companion' ) );
$default                             = llorix_one_companion_team_get_default_content();
$llorix_one_lite_team_content        = get_theme_mod( 'llorix_one_lite_team_content', $default );
$section_is_empty                    = ! isset( $llorix_one_lite_our_team_show ) || $llorix_one_lite_our_team_show == 1 || ( empty( $llorix_one_lite_our_team_title ) && empty( $llorix_one_lite_our_team_subtitle ) && llorix_one_lite_general_repeater_is_empty( $llorix_one_lite_team_content ) ); ?>


<section class="team <?php if ( $section_is_empty ) {
	echo 'llorix_one_lite_only_customizer';
} ?>" id="team" role="region" aria-label="<?php esc_attr_e( 'Team', 'llorix-one-companion' ); ?>" <?php echo ! empty( $llorix_one_lite_our_team_background ) ? 'style="background:url(' . esc_url( $llorix_one_lite_our_team_background ) . ');"' : ''; ?>>
    <div class="section-overlay-layer">
        <div class="container">
            <!-- SECTION HEADER -->
			<?php
			if ( ! empty( $llorix_one_lite_our_team_title ) || ! empty( $llorix_one_lite_our_team_subtitle ) ) { ?>
                <div class="section-header">
	                <?php
	                if ( ! empty( $llorix_one_lite_our_team_title ) ) {  ?>
                        <h2 class="dark-text"><?php echo esc_attr( $llorix_one_lite_our_team_title ); ?></h2><div class="colored-line"></div>
		                <?php
	                } elseif ( is_customize_preview() ) { ?>
                        <h2 class="dark-text paralax_one_only_customizer"></h2><div class="colored-line paralax_one_only_customizer"></div>
		                <?php
	                }

	                if ( ! empty( $llorix_one_lite_our_team_subtitle ) ) {  ?>
                        <div class="sub-heading"><?php echo esc_attr( $llorix_one_lite_our_team_subtitle ); ?></div>
		                <?php
	                } elseif ( is_customize_preview() ) { ?>
                        <div class="sub-heading llorix_one_lite_only_customizer"></div>
		                <?php
	                } ?>
                </div>
				<?php
			}


			if ( ! empty( $llorix_one_lite_team_content ) ) { ?>
				<div class="row team-member-wrap">
                    <?php
				    $llorix_one_lite_team_decoded = json_decode( $llorix_one_lite_team_content );
				    foreach ( $llorix_one_lite_team_decoded as $llorix_one_lite_team_member ) {
					    $title = ! empty( $llorix_one_lite_team_member->title ) ? apply_filters( 'llorix_one_lite_translate_single_string', $llorix_one_lite_team_member->title, 'Team section' ) : '';
					    $subtitle = ! empty( $llorix_one_lite_team_member->subtitle ) ? apply_filters( 'llorix_one_lite_translate_single_string', $llorix_one_lite_team_member->subtitle, 'Team section' ) : '';
					    $image = ! empty( $llorix_one_lite_team_member->image_url ) ? apply_filters( 'llorix_one_lite_translate_single_string', $llorix_one_lite_team_member->image_url, 'Team section' ) : '';
					    $section_is_empty = empty( $image ) && empty( $title ) && empty( $subtitle );
					    if ( ! $section_is_empty ) { ?>
                            <div class="col-md-3 team-member-box">
                                <div class="team-member border-bottom-hover">
                                    <div class="member-pic">
	                                    <?php
	                                    if ( ! empty( $image ) ) {  ?>
                                            <img src="<?php echo esc_url( $image ); ?>" <?php echo ( ! empty( $title ) ? 'alt="' . $title . '"' : esc_html__( 'Avatar','llorix-one-companion' ) ); ?>>
		                                    <?php
	                                    } else {
		                                    $default_url = llorix_one_lite_get_file( '/images/team/default.png' ); ?>
                                            <img src="<?php echo esc_url( $default_url ); ?>" alt="<?php esc_html_e( 'Avatar','llorix-one-companion' ); ?>">
		                                    <?php
	                                    } ?>
                                    </div><!-- .member-pic -->

								    <?php
								    if ( ! empty( $title ) || ! empty( $subtitle ) ) { ?>
                                        <div class="member-details">
                                            <div class="member-details-inner">
	                                            <?php
	                                            if ( ! empty( $title ) ) {  ?>
                                                    <h5 class="colored-text"> <?php echo esc_attr( $title ); ?></h5>
		                                            <?php
	                                            }

	                                            if ( ! empty( $subtitle ) ) {  ?>
                                                    <div class="small-text"><?php echo esc_attr( $subtitle ); ?></div>
		                                            <?php
	                                            } ?>
                                            </div><!-- .member-details-inner -->
                                        </div><!-- .member-details -->
								        <?php
								    } ?>
                                </div><!-- .team-member -->
                            </div><!-- .team-member -->
                            <!-- MEMBER -->
						    <?php
					    }
				    } ?>
				</div>
                <?php
			} ?>
        </div>
    </div><!-- container  -->
</section><!-- #section9 -->
