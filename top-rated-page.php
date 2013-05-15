<?php
/**
 * Template Name: Rating-Widget Top Rated Template
 * Description: A Page Template that adds top rated posts list
 *
 */

?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

		<div id="primary">
			<div id="content" role="main">

                <?php global $rwp; echo $rwp->GetTopRated(); ?>
                
				<?php comments_template( '', true ); ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>