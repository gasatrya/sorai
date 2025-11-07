<?php
/**
 * Title: List of posts, default
 * Slug: sorai/posts-list
 * Categories: sorai-post
 * Block Types: core/query
 * Description: A list of posts with a title, and excerpt.
 */
?>

<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query">
	<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->

		<!-- wp:template-part {"slug":"post-meta"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:post-excerpt /-->

	<!-- wp:read-more /-->
	<!-- /wp:post-template -->

	<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
	<div style="height: var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
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
