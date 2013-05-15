<?php
/**
 * Template Name: Archives
 * Description: A Page Template that displays Archives
 *The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts() 
 *
 * @package 	WordPress
 * @subpackage 	Starkers 
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div class="sidebar"><!--THIS IS THE SIDEBAR NAV AREA-->

        <nav class="style-1 archives">
			<?php 
			if ( dynamic_sidebar('home_right_1') ) : 
			else : 
			?>
			<?php endif; ?>
		</nav>

		<div class="sidebar-ad monetize">
      place ad here
        </div>

      </div><!--THIS ENDS THE SIDEBAR NAV AREA-->

    </div><!--THIS ENDS COLUMN ONE-->

    <div class="grid-2-2"><!--THIS BEGINS COLUMN TWO-->

    	<div class="responsive-header display-none grid">

        <div class="responsive-ad monetize">
          place ad here
        </div>

      </div>

      <div class="social social-header">
        <a href="#" class="icon-twitter"></a>
        <a href="#" class="icon-facebook"></a>
        <a href="#" class="icon-gplus"></a>
      </div>

      <nav class="nav-header style-1">
				<a href="/post-some-stupid-shit/">post some stupid shit</a>
				<span> &nbsp |  &nbsp</span>
				<a href="/about-her/">about her</a>
			</nav>

			<div class="content-ad-top monetize">
		 place ad here
	      </div>

	      <div class="archive-content">

<?php if ( have_posts() ): ?>

<?php if ( is_day() ) : ?>
<h2>archive: <?php echo  get_the_date( 'D M Y' ); ?></h2>							
<?php elseif ( is_month() ) : ?>
<h2>archive: <?php echo  get_the_date( 'M Y' ); ?></h2>	
<?php elseif ( is_year() ) : ?>
<h2>archive: <?php echo  get_the_date( 'Y' ); ?></h2>								
<?php else : ?>
<h2>archive</h2>	
<?php endif; ?>

<?php while ( have_posts() ) : the_post(); ?>

					<h2><?php the_title(); ?></h2>
					<div class="inline">
						<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> near
						<?php echo get_post_meta( $post->ID, 'where', true ); ?>
						<?php the_content(); ?>
					</div>

			<?php endwhile; ?>

        <nav class="pagination">
        	<?php if(function_exists('tw_pagination')) tw_pagination(); ?>
        </nav>

				<?php else: ?>
				<h2>No posts to display</h2>
				<?php endif; ?>



<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>