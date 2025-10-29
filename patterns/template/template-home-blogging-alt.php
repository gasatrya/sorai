<?php
/**
 * Title: Blogging home alternative
 * Slug: sorai/template-home-blogging-alt
 * Template Types: front-page, index, home
 * Viewport width: 1400
 * Inserter: no
 */
?>

<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group">

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"880px"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"level":2,"fontSize":"display-large"} -->
		<h2 class="wp-block-heading has-display-large-font-size">
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

	<!-- wp:separator {"align":"wide","className":"is-style-default","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
	<hr class="wp-block-separator alignwide has-alpha-channel-opacity is-style-default"
		style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)" />
	<!-- /wp:separator -->

	<!-- wp:columns {"align":"wide"} -->
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
			<!-- wp:pattern {"slug":"sorai/hidden-post-sticky-home-blogging-alt"} /-->

			<!-- wp:separator {"align":"wide","className":"is-style-default","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
			<hr class="wp-block-separator alignwide has-alpha-channel-opacity is-style-default"
				style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)" />
			<!-- /wp:separator -->

			<!-- wp:pattern {"slug":"sorai/posts-grid-2-columns"} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
