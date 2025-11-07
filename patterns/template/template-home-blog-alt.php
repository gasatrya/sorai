<?php
/**
 * Title: Blogging home alternative template
 * Slug: sorai/template-home-blog-alt
 * Template Types: index, home
 * Viewport width: 1400
 * Inserter: no
 */
?>

<!-- wp:template-part {"slug":"header-cta","area":"header"} /-->

<!-- wp:spacer {"height":"var:preset|spacing|5"} -->
<div style="height:var(--wp--preset--spacing--5)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group">

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"880px"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"style":{"typography":{"letterSpacing":"-0.05em"}},"fontSize":"display-large"} -->
		<h2 class="wp-block-heading has-display-large-font-size" style="letter-spacing:-0.05em">
			<?php esc_html_e( 'Journal and Stories', 'sorai' ); ?>
		</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>
			<?php esc_html_e( 'Stories and insights from my work across design, engineering, and web strategy—exploring how purposeful
			websites are built, refined, and brought to life.', 'sorai' ); ?>
		</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:separator {"align":"wide","className":"is-style-default","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
	<hr class="wp-block-separator alignwide has-alpha-channel-opacity is-style-default"
		style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)" />
	<!-- /wp:separator -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"20%"} -->
		<div class="wp-block-column" style="flex-basis:20%">
			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
				<h3 class="wp-block-heading has-medium-font-size">
					<?php esc_html_e( 'Categories', 'sorai' ) ?>
				</h3>
				<!-- /wp:heading -->

				<!-- wp:categories /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"80%"} -->
		<div class="wp-block-column" style="flex-basis:80%">
			<!-- wp:pattern {"slug":"sorai/hidden-post-sticky-home-blog-alt"} /-->

			<!-- wp:separator {"align":"wide","className":"is-style-default","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
			<hr class="wp-block-separator alignwide has-alpha-channel-opacity is-style-default"
				style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)" />
			<!-- /wp:separator -->

			<!-- wp:pattern {"slug":"sorai/posts-grid-2-columns"} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

</main>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height: var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
