<?php
/**
 * The template for displaying all pages.
 * Template Name: Comments
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
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
					
					</div><!-- .entry-content -->
				</div><!-- #post-## -->
<?php comments_template( '', true ); ?>
				

<?php endwhile; ?>

			</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
