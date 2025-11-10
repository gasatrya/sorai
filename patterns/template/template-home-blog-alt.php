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

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="margin-top:0">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide has-secondary-background-color has-background"
		style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained","contentSize":"680px","justifyContent":"left"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:heading {"style":{"typography":{"letterSpacing":"-0.05em"}},"fontSize":"display-small"} -->
			<h2 class="wp-block-heading has-display-small-font-size" style="letter-spacing:-0.05em">
				<?php esc_html_e( 'Journal and Stories', 'sorai' ); ?>
			</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>
				<?php esc_html_e( 'Stories and insights from my work across design, engineering, and web strategy—exploring how purposeful websites are built, refined, and brought to life.', 'sorai' ); ?>
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
	<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|30"}}}} -->
		<div class="wp-block-columns alignwide"><!-- wp:column {"width":"20%"} -->
			<div class="wp-block-column" style="flex-basis:20%">
				<!-- wp:group {"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":3,"className":"is-style-widget"} -->
					<h3 class="wp-block-heading is-style-widget">
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
	</div>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height: var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
