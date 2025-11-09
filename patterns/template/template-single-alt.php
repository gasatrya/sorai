<!-- wp:template-part {"slug":"header-cta","theme":"sorai","area":"header","align":"wide"} /-->

<!-- wp:group {"tagName":"article","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
<article class="wp-block-group" style="margin-top:0">
	<!-- wp:cover {"useFeaturedImage":true,"dimRatio":70,"overlayColor":"contrast-darker","isUserOverlayColor":true,"minHeight":80,"minHeightUnit":"vh","contentPosition":"bottom center","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":""}} -->
	<div class="wp-block-cover has-custom-content-position is-position-bottom-center"
		style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);min-height:80vh">
		<span aria-hidden="true"
			class="wp-block-cover__background has-contrast-darker-background-color has-background-dim-70 has-background-dim"></span>
		<div class="wp-block-cover__inner-container"><!-- wp:columns {"align":"wide"} -->
			<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
				<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:post-title /-->

					<!-- wp:post-excerpt {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-muted"}}},"typography":{"lineHeight":"1.4"}},"textColor":"base-muted","fontSize":"medium"} /-->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"33.33%"} -->
				<div class="wp-block-column" style="flex-basis:33.33%"></div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
	</div>
	<!-- /wp:cover -->

	<!-- wp:spacer {"height":"var:preset|spacing|5"} -->
	<div style="height:var(--wp--preset--spacing--5)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1050px"}} -->
	<div class="wp-block-group">
		<!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|30"}}}} -->
		<div class="wp-block-columns alignwide are-vertically-aligned-top">
			<!-- wp:column {"verticalAlignment":"top","width":"75%","layout":{"type":"default"}} -->
			<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:75%">
				<!-- wp:post-content {"layout":{"type":"constrained","contentSize":"680px","justifyContent":"center"}} /-->

				<!-- wp:separator -->
				<hr class="wp-block-separator has-alpha-channel-opacity" />
				<!-- /wp:separator -->

				<!-- wp:template-part {"slug":"post-navigation","theme":"sorai","area":"uncategorized"} /-->

				<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
				<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

				<!-- wp:template-part {"slug":"comments","theme":"sorai","area":"uncategorized"} /-->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"top","width":"25%"} -->
			<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:25%">
				<!-- wp:group {"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:template-part {"slug":"post-meta","theme":"sorai","area":"uncategorized"} /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|base-muted","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|5"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
				<div class="wp-block-group"
					style="border-top-color:var(--wp--preset--color--base-muted);border-top-width:1px;padding-top:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5)">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"tiny"} -->
					<p class="has-tiny-font-size" style="font-style:normal;font-weight:600">Categories:</p>
					<!-- /wp:paragraph -->

					<!-- wp:post-terms {"term":"category","textAlign":"left"} /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|5"},"border":{"top":{"color":"var:preset|color|base-muted","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
				<div class="wp-block-group"
					style="border-top-color:var(--wp--preset--color--base-muted);border-top-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5)">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"tiny"} -->
					<p class="has-tiny-font-size" style="font-style:normal;font-weight:600">Tags:</p>
					<!-- /wp:paragraph -->

					<!-- wp:post-terms {"term":"post_tag","className":"is-style-hash"} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
	<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
</article>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","theme":"sorai","area":"footer"} /-->
