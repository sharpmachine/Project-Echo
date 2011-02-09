<?php
/**
 * The template for displaying all pages.
 * Template Name: Updates
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		
<div class="span-15">
	<hr>
	<?php query_posts('post_type=updates&posts_per_page=10&orderby=meta_value&order=DSC'); ?>
<?php if(have_posts()): ?>
<?php while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				

					<div class="entry-content box">
						<h3><?php the_title(); ?></h3>
						
						<?php the_content(); ?>
						<span><?php echo time_ago(); ?></span>
						
						
					
					</div><!-- .entry-content -->
				</div><!-- #post-## -->
<?php comments_template( '', true ); ?>

			

<?php endwhile; ?>

<?php else:  ?>
	<p>No Updates</p>
<?php endif; ?>
			</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
