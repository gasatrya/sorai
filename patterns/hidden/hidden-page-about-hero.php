<?php
/**
 * Title: Page about hero section
 * Slug: sorai/hidden-page-about-hero
 * Inserter: no
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background"
	style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
	<!-- wp:columns {"verticalAlignment":"bottom","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-bottom">
		<!-- wp:column {"verticalAlignment":"bottom"} -->
		<div class="wp-block-column is-vertically-aligned-bottom">
			<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"muted","fontSize":"normal"} -->
			<h2 class="wp-block-heading has-muted-color has-text-color has-normal-font-size"
				style="font-style:normal;font-weight:400">
				<?php esc_html_e( 'Design, code, and clarity for the web.', 'sorai' ); ?>
			</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.25","fontStyle":"normal","fontWeight":"500","letterSpacing":"-0.025em"}},"fontSize":"xx-large"} -->
			<p class="has-xx-large-font-size"
				style="font-style:normal;font-weight:500;letter-spacing:-0.025em;line-height:1.25">
				<?php
				echo sprintf(
					/* translators: %1$s = "conversion-focused websites", %2$s = "communicate clearly and perform with purpose" */
					esc_html__( 'We\'re a small web studio crafting modern, <strong>%1$s</strong> and digital experiences. Our work blends thoughtful design, solid engineering, and strategic thinking—helping brands <strong>%2$s</strong>.', 'sorai' ),
					esc_html__( 'conversion-focused websites', 'sorai' ),
					esc_html__( 'communicate clearly and perform with purpose', 'sorai' )
				);
				?>
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"bottom"} -->
		<div class="wp-block-column is-vertically-aligned-bottom">
			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|duotone-1"}}} -->
			<figure class="wp-block-image size-full">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.png"
					alt="Placeholder image" style="aspect-ratio:1;object-fit:cover" />
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
