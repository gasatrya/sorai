<?php
/**
 * Title: Header
 * Slug: sorai/header
 * Categories: header
 * Block Types: core/template-part/header
 * Description: A header section with a site logo, title, and navigation.
 */
?>

<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|base-muted","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"inherit":"true","type":"constrained"}} -->
<div class="wp-block-group" style="
	border-bottom-color: var(--wp--preset--color--base-muted);
	border-bottom-width: 1px;
	">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20","top":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide" style="
		padding-top: var(--wp--preset--spacing--20);
		padding-bottom: var(--wp--preset--spacing--20);
	">
		<!-- wp:group {"style":{"layout":{"selfStretch":"fit"},"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"flex"}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":64} /-->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"},"layout":{"selfStretch":"fit"}}} -->
			<div class="wp-block-group"><!-- wp:site-title /--></div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"style":{"spacing":{"margin":{"top":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right","orientation":"horizontal"},"ariaLabel":"<?php esc_attr_e( 'Primary', 'sorai' ); ?>"} -->

		<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Visual', 'sorai' ); ?>","url":"#"} /-->
		<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Design', 'sorai' ); ?>","url":"#"} /-->
		<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Strategy', 'sorai' ); ?>","url":"#"} /-->
		<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Creative', 'sorai' ); ?>","url":"#"} /-->

		<!-- /wp:navigation -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height: var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
