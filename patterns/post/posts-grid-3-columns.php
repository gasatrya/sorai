<?php
/**
 * Title: Grid of posts, 3 columns
 * Slug: sorai/posts-grid-3-columns
 * Categories: sorai-post
 * Block Types: core/query
 * Description: A grid of posts, 3 columns.
 */
?>

<!-- wp:group {"metadata":{"name":"Posts"},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Grid"},"align":"wide"} -->
		<div class="wp-block-query alignwide">
			<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
			<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|10","left":"0"}}},"layout":{"inherit":false}} -->
			<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--10);padding-left:0">
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","sizeSlug":"large","style":{"color":{"duotone":"var:preset|duotone|primary"},"shadow":"var:preset|shadow|md"}} /-->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:post-title {"isLink":true,"style":{"typography":{"lineHeight":"1.35"}},"fontSize":"x-large"} /-->

						<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":20,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-muted"}}},"typography":{"lineHeight":"1.55"}},"textColor":"muted","fontSize":"tiny"} /-->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
					<div class="wp-block-group"><!-- wp:read-more /--></div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- /wp:post-template -->

			<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
			<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:query-pagination {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
				<!-- wp:query-pagination-previous /-->

				<!-- wp:query-pagination-numbers /-->

				<!-- wp:query-pagination-next /-->
				<!-- /wp:query-pagination -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
