<?php
/**
 * Title: Blogging home default
 * Slug: sorai/template-home-blogging
 * Template Types: front-page, index, home
 * Viewport width: 1400
 * Inserter: no
 */
?>

<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
<div style="height: var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group">

	<!-- wp:group {"align":"wide","layout":{"type":"constrained","justifyContent":"left","contentSize":"880px"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.25","fontStyle":"normal","fontWeight":"500","letterSpacing":"-0.025em"}},"fontSize":"xx-large"} -->
		<p class="has-xx-large-font-size"
			style="font-style:normal;font-weight:500;line-height:1.25;letter-spacing:-0.025em">
			<?php esc_html_e( 'Sorai is a WordPress block theme defined by clarity and character—minimalist in form, bold in presence, and built for a focused publishing experience. ', 'sorai' ); ?>
		</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
	<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:pattern {"slug":"sorai/hidden-post-sticky-home-blogging"} /-->

	<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
	<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:pattern {"slug":"sorai/hidden-latest-posts-title"} /-->
		<!-- wp:pattern {"slug":"sorai/posts-grid-3-columns"} /-->
	</div>
	<!-- /wp:group -->

</main>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
<div style="height: var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
