<?php
/**
 * Title: Blogging home grid template
 * Slug: sorai/template-home-blog-grid
 * Template Types: index, home
 * Viewport width: 1400
 * Inserter: no
 */
?>

<!-- wp:template-part {"slug":"header-cta","area":"header"} /-->

<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
<div style="height: var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group">

	<!-- wp:pattern {"slug":"sorai/hidden-post-sticky-home-blog-grid"} /-->

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

<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height: var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
