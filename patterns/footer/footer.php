<?php
/**
 * Title: Footer
 * Slug: sorai/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: A 4 column footer section.
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"backgroundColor":"secondary","textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-contrast-color has-secondary-background-color has-text-color has-background"
	style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"width":"35%"} -->
			<div class="wp-block-column" style="flex-basis: 35%">
				<!-- wp:group {"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group">
						<!-- wp:site-logo {"width":35,"shouldSyncIcon":true,"style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->

						<!-- wp:site-title {"level":0} /-->
					</div>
					<!-- /wp:group -->

					<!-- wp:site-tagline /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"25%"} -->
			<div class="wp-block-column" style="flex-basis: 25%"></div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"40%"} -->
			<div class="wp-block-column" style="flex-basis: 40%">
				<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":3,"className":"is-style-widget"} -->
						<h3 class="wp-block-heading is-style-widget">
							<?php esc_html_e( 'About', 'sorai' ); ?>
						</h3>
						<!-- /wp:heading -->

						<!-- wp:navigation {"textColor":"muted","overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"flex","orientation":"vertical"},"ariaLabel":"<?php esc_attr_e( 'About', 'sorai' ); ?>"} -->
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'About Us', 'sorai' ); ?>","url":"#"} /-->
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'History', 'sorai' ); ?>","url":"#"} /-->
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Careers', 'sorai' ); ?>","url":"#"} /-->
						<!-- /wp:navigation -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":3,"className":"is-style-widget"} -->
						<h3 class="wp-block-heading is-style-widget">
							<?php esc_html_e( 'Social', 'sorai' ); ?>
						</h3>
						<!-- /wp:heading -->

						<!-- wp:navigation {"textColor":"muted","overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"flex","orientation":"vertical"},"ariaLabel":"<?php esc_attr_e( 'Social', 'sorai' ); ?>"} -->
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Facebook', 'sorai' ); ?>","url":"#"} /-->
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Instagram', 'sorai' ); ?>","url":"#"} /-->
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Twitter/X', 'sorai' ); ?>","url":"#"} /-->
						<!-- /wp:navigation -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":3,"className":"is-style-widget"} -->
						<h3 class="wp-block-heading is-style-widget">
							<?php esc_html_e( 'Privacy', 'sorai' ); ?>
						</h3>
						<!-- /wp:heading -->

						<!-- wp:navigation {"textColor":"muted","overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"flex","orientation":"vertical"},"ariaLabel":"<?php esc_attr_e( 'Privacy', 'sorai' ); ?>"} -->
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Privacy Policy', 'sorai' ); ?>","url":"#"} /-->
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Terms & Conditions', 'sorai' ); ?>","url":"#"} /-->
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Contact Us', 'sorai' ); ?>","url":"#"} /-->
						<!-- /wp:navigation -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
		<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:group {"align":"wide","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"tiny"} -->
			<p class="has-tiny-font-size" style="font-style: normal; font-weight: 400">
				<?php
				/* Translators: WordPress link. */
				$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'sorai' ) ) . '" rel="nofollow">WordPress</a>';
				echo sprintf(
					/* Translators: Designed with WordPress by Ga Satrya */
					esc_html__( 'Designed with %1$s by %2$s', 'sorai' ),
					$wordpress_link,
					'<a href="https://nurrin.studio/" rel="nofollow">Ga Satrya</a>'
				);
				?>
			</p>
			<!-- /wp:paragraph -->

			<!-- wp:social-links {"openInNewTab":true,"size":"has-small-icon-size","className":"is-style-outline","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|5","left":"var:preset|spacing|5"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
			<ul class="wp-block-social-links has-small-icon-size is-style-outline">
				<!-- wp:social-link {"url":"#","service":"facebook"} /-->

				<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

				<!-- wp:social-link {"url":"#","service":"x"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
