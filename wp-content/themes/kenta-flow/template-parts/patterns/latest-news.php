<!-- wp:group {"ploverBlockID":"f1dd9e58-79fb-401d-a45a-a5f2029a563b","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)"><!-- wp:columns {"ploverBlockID":"bc80876f-f3c9-40aa-b0ca-7f11cfb624a5","align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%","ploverBlockID":"57a59ff9-3769-4c8c-bf5c-1c503181287b"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:heading {"ploverBlockID":"ae5c94f9-2a4e-4ddc-8656-b130cff19590","align":"wide","style":{"typography":{"textTransform":"capitalize"},"spacing":{"margin":{"top":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|xx-small"}}},"fontSize":"4x-large"} -->
<h2 class="wp-block-heading alignwide has-4-x-large-font-size" style="margin-top:var(--wp--preset--spacing--xx-small);margin-bottom:var(--wp--preset--spacing--xx-small);text-transform:capitalize"><?php esc_html_e( 'Latest News', 'kenta-flow' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%","ploverBlockID":"44d1d7b4-d4dd-462a-9262-383a1a78dad7"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"align":"right","ploverBlockID":"e7addeef-f737-4faf-a320-53e371692b44","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.2px"}},"fontSize":"small"} -->
<p class="has-text-align-right has-small-font-size" style="letter-spacing:1.2px;text-transform:uppercase"><a href="#"><?php esc_html_e( 'Read our blogs', 'kenta-flow' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:query {"queryId":37,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]},"ploverBlockID":"d8cbc4af-c1cc-4b16-9437-807f9d74dc8f","align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"ploverBlockID":"8f2170ab-91aa-4e9f-a39a-b5c634067c5c","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"ploverBlockID":"699943a6-9397-4a98-bfe6-662b534b7711","style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":3,"isLink":true,"ploverBlockID":"fa1c2940-c0dc-4100-a561-ceacbf7be109","style":{"typography":{"textDecoration":"underline"}}} /-->

<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"ploverBlockID":"e6b8c790-a016-42e0-bc2d-19072ff02c45","fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"","excerptLength":24,"ploverBlockID":"5cacaa9e-65a8-4fd9-a301-96ed5ab6ace8"} /-->

<!-- wp:read-more {"content":"Read More","linkTarget":"_blank","ploverBlockID":"5a3ea92d-d254-4141-86aa-4471e5f2e762","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.2px","textDecoration":"underline"}},"fontSize":"x-small"} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results {"ploverBlockID":"7ac12e0d-978b-4dd1-b51b-444ab3109046"} -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results.","ploverBlockID":"431e2c0b-2fcd-4f81-be60-71b4c189845c"} -->
<p><?php esc_html_e( 'No Posts.', 'kenta-flow' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
