<?php
/**
 * The Template for displaying all single posts
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

      <div class="main-content">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<article>

	<h2><?php the_title(); ?></h2>
	<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> 
	<?php the_content(); ?>			

	<?php if ( get_the_author_meta( 'description' ) ) : ?>
	<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
	<h3>About <?php echo get_the_author() ; ?></h3>
	<?php the_author_meta( 'description' ); ?>
	<?php endif; ?>

</article>
<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>