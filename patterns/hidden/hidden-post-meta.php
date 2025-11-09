<?php
/**
 * Title: Post meta
 * Slug: sorai/hidden-post-meta
 * Inserter: no
 */
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"0.1rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
	<!-- wp:post-author {"showBio":false,"isLink":true} /-->

	<!-- wp:paragraph {"style":{"layout":{"selfStretch":"fit","flexSize":null},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"muted"} -->
	<p class="has-muted-color has-text-color" style="font-style: normal; font-weight: 400">
		—
	</p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"0.2rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"textColor":"muted","fontSize":"tiny"} -->
		<p class="has-muted-color has-text-color has-tiny-font-size">
			<?php echo esc_html_x( 'on', 'Prefix for the post date block: On post date', 'sorai' ); ?>
		</p>
		<!-- /wp:paragraph -->

		<!-- wp:post-date /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
