<?php
/**
 * Title: List of posts, 1 column
 * Slug: sorai/posts-list
 * Categories: sorai-query
 * Block Types: core/query
 * Description: A list of posts with a featured image, title, and excerpt.
 */
?>

<!-- wp:query {"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide">
	<!-- wp:post-template -->
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","sizeSlug":"large","style":{"shadow":"var:preset|shadow|md"}} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:post-title {"isLink":true,"fontSize":"xxxxx-large"} /-->

				<!-- wp:post-excerpt /-->

				<!-- wp:template-part {"slug":"post-meta"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- /wp:post-template -->

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
