<?php
/**
 * Title: Grid of posts, 2 columns
 * Slug: sorai/posts-grid-2-columns
 * Categories: sorai-query
 * Block Types: core/query
 * Description: A grid of posts, 2 columns.
 */
?>

<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts"},"align":"wide"} -->
<div class="wp-block-query alignwide">
	<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
	<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|10","left":"0"}}},"layout":{"inherit":false}} -->
	<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--10);padding-left:0">
		<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","sizeSlug":"large","style":{"color":{"duotone":"var:preset|duotone|primary"},"shadow":"var:preset|shadow|md"}} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:post-title {"isLink":true,"style":{"typography":{"lineHeight":"1.35"}},"fontSize":"x-large"} /-->

			<!-- wp:post-excerpt {"style":{"typography":{"lineHeight":"1.55"}},"fontSize":"tiny"} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:read-more /-->
	</div>
	<!-- /wp:group -->
	<!-- /wp:post-template -->

	<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
	<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:template-part {"slug":"post-pagination"} /-->

	<!-- wp:query-no-results -->
	<!-- wp:pattern {"slug":"sorai/hidden-no-results"} /-->
	<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
