<?php
/**
 * Title: 404
 * Slug: sorai/hidden-404
 * Inserter: no
 */
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:heading {"fontSize":"xxxx-large"} -->
	<h2 class="wp-block-heading has-xxxx-large-font-size" id="page-not-found">
		<?php esc_html_e( 'Page Not Found', 'sorai' ); ?>
	</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"textColor":"muted"} -->
	<p class="has-muted-color has-text-color">
		<?php esc_html_e( 'The page you are looking for does not exist, or it has been moved. Please try searching using the form below.', 'sorai' ); ?>
	</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
