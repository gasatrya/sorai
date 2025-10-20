<?php
/**
 * Title: Blogging home
 * Slug: sorai/page-home-blogging
 * Categories: sorai-page
 * Keywords: page, starter
 * Post Types: page, wp_template
 * Template Types: front-page, home, index
 * Description: A blogging home page with a hero text section, a sticky/featured post section, and a blog section.
 */
?>

<!-- wp:group {"metadata":{"name":"Hero"},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"880px","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.25","fontStyle":"normal","fontWeight":"550"}},"fontSize":"xxxxx-large"} -->
		<p class="has-xxxxx-large-font-size" style="font-style:normal;font-weight:550;line-height:1.25">
			<?php esc_html_e( 'Sorai is a WordPress block theme defined by clarity and character—minimalist in form, bold in presence, and built for a focused publishing experience. ', 'sorai' ); ?>
		</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:pattern {"slug":"sorai/post-sticky"} /-->

<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:pattern {"slug":"sorai/posts-grid-3-columns-title"} /-->
