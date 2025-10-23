<?php
/**
 * Title: Blogging home
 * Slug: sorai/page-home-blogging
 * Categories: sorai-page
 * Keywords: starter
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Viewport width: 1400
 * Description: A blogging home page with a hero text section, a sticky/featured post section, and a blog section.
 */
?>

<!-- wp:group {"align":"wide","layout":{"type":"constrained","justifyContent":"left","contentSize":"880px"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.25","fontStyle":"normal","fontWeight":"500"}},"fontSize":"xxxxx-large"} -->
	<p class="has-xxxxx-large-font-size" style="font-style:normal;font-weight:500;line-height:1.25">
		<?php esc_html_e( 'Sorai is a WordPress block theme defined by clarity and character—minimalist in form, bold in presence, and built for a focused publishing experience. ', 'sorai' ); ?>
	</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
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
