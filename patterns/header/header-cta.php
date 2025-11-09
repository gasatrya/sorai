<?php
/**
 * Title: Header with CTA Button
 * Slug: sorai/header-cta
 * Categories: header
 * Block Types: core/template-part/header
 * Description: A header section with a site logo, title, navigation, and CTA button.
 */
?>

<!-- wp:group {"backgroundColor":"secondary","layout":{"inherit":"true","type":"constrained"}} -->
<div class="wp-block-group has-secondary-background-color has-background">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|10","top":"var:preset|spacing|10"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide"
		style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">
		<!-- wp:group {"style":{"layout":{"selfStretch":"fit"},"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"flex"}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":64} /-->

			<!-- wp:site-title /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:navigation {"style":{"spacing":{"margin":{"top":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right","orientation":"horizontal"},"ariaLabel":"<?php esc_attr_e( 'Primary', 'sorai' ); ?>"} -->
			<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Visual', 'sorai' ); ?>","url":"#"} /-->
			<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Design', 'sorai' ); ?>","url":"#"} /-->
			<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Strategy', 'sorai' ); ?>","url":"#"} /-->
			<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Creative', 'sorai' ); ?>","url":"#"} /-->
			<!-- /wp:navigation -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-fill"} -->
				<div class="wp-block-button is-style-fill">
					<a class="wp-block-button__link wp-element-button" href="#">
						<?php esc_html_e( 'Book Today', 'sorai' ); ?>
					</a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
