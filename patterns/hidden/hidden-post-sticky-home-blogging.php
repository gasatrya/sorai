<?php
/**
 * Title: Sticky post for home blogging
 * Slug: sorai/hidden-post-sticky-home-blogging
 * Inserter: no
 */
?>

<!-- wp:query {"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false,"parents":[],"format":[]},"align":"wide"} -->
<div class="wp-block-query alignwide">
	<!-- wp:post-template {"layout":{"type":"default","columnCount":3}} -->
	<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"shadow":"var:preset|shadow|md"}} /-->

	<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
	<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"},"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-columns alignwide"
			style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
				<div class="wp-block-group">
					<!-- wp:post-title {"isLink":true,"style":{"typography":{"lineHeight":"1.3"}},"fontSize":"x-large"} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"},"style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
				<div class="wp-block-group">
					<!-- wp:post-excerpt {"style":{"typography":{"lineHeight":"1.5"}}} /-->

					<!-- wp:read-more /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
	<!-- /wp:post-template -->
</div>
<!-- /wp:query -->
