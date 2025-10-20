<?php
/**
 * Title: Sticky post, featured image and excerpt
 * Slug: sorai/post-sticky
 * Categories: sorai-post
 * Block Types: core/query
 * Description: A post sticky with featured image and excerpt.
 */
?>

<!-- wp:group {"metadata":{"name":"Sticky Post"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull">
		<!-- wp:query {"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false,"parents":[],"format":[]},"align":"full"} -->
		<div class="wp-block-query alignfull"><!-- wp:post-template {"layout":{"type":"default","columnCount":3}} -->
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"color":{"duotone":"var:preset|duotone|primary"}}} /-->

			<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
			<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"},"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-columns alignwide"
					style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
					<!-- wp:column {"width":"","layout":{"type":"default"}} -->
					<div class="wp-block-column">
						<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
						<div class="wp-block-group">
							<!-- wp:post-title {"isLink":true,"style":{"typography":{"lineHeight":"1.3"}},"fontSize":"xxxx-large"} /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"width":""} -->
					<div class="wp-block-column">
						<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
						<div class="wp-block-group">
							<!-- wp:post-excerpt {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-muted"}}},"typography":{"lineHeight":"1.5"}},"textColor":"muted"} /-->

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
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
