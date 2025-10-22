<?php
/**
 * Title: Post meta
 * Slug: sorai/hidden-post-meta
 * Inserter: no
 */
?>

<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Post meta', 'Name of Post meta pattern', 'sorai' ); ?>"},"style":{"spacing":{"blockGap":"0.1rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
	<!-- wp:post-author {"showBio":false,"isLink":true,"style":{"color":{"duotone":"var:preset|duotone|primary"}}} /-->

	<!-- wp:paragraph {"style":{"layout":{"selfStretch":"fit","flexSize":null},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"contrast-muted"} -->
	<p class="has-contrast-muted-color has-text-color" style="font-style: normal; font-weight: 400">
		—
	</p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"0.2rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"tiny"} -->
		<p class="has-contrast-muted-color has-text-color has-tiny-font-size">
			<?php echo esc_html_x( 'on', 'Prefix for the post date block: On post date', 'twentytwentyfour' ); ?>
		</p>
		<!-- /wp:paragraph -->

		<!-- wp:post-date /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
