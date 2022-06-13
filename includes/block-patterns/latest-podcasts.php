<?php
/**
 * Latest podcast block pattern template
 *
 * @package tenup_podcasting
 */

$podcast_terms = get_terms(
	array(
		'taxonomy'      => TAXONOMY_NAME,
		'hide_empty'    => false,
		'fields'        => 'ids',
		'no_found_rows' => true,
	)
);
?>

<!-- wp:query {"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"podcasting_podcasts": <?php echo json_encode( $podcast_terms ); ?> }}} -->
<div class="wp-block-query">
	<!-- wp:post-template -->
		<!-- wp:post-featured-image /-->
		<!-- wp:post-title /-->
		<!-- wp:post-date /-->
		<!-- wp:post-excerpt /-->
	<!-- /wp:post-template -->
	<!-- wp:query-no-results -->
	<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when the query returns no results."} -->
	<p></p>
	<!-- /wp:paragraph -->
	<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->