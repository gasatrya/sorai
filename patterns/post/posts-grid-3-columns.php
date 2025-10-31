<?php
/**
 * Title: Grid of posts, 3 columns
 * Slug: sorai/posts-grid-3-columns
 * Categories: sorai-query
 * Block Types: core/query
 * Description: A grid of posts, 3 columns.
 */
?>

<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts"},"align":"wide"} -->
<div class="wp-block-query alignwide">
	<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
	<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|10"}}},"layout":{"inherit":false}} -->
	<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--10)">
		<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","sizeSlug":"large","style":{"shadow":"var:preset|shadow|md"}} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:post-title {"isLink":true,"style":{"typography":{"lineHeight":"1.35"}},"fontSize":"large"} /-->

				<!-- wp:post-excerpt {"showMoreOnNewLine":false,"style":{"typography":{"lineHeight":"1.5"}},"fontSize":"small"} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:template-part {"slug":"post-meta"} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- /wp:post-template -->

	<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
	<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<!-- wp:query-pagination-previous /-->
	<!-- wp:query-pagination-numbers /-->
	<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->

	<!-- wp:query-no-results -->
	<!-- wp:pattern {"slug":"sorai/hidden-no-results"} /-->
	<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
