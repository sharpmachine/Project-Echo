<?php
/**
 * The main template file.
 *Template Name: Blog
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<div class="span-15">	
<hr>
			
		<?php query_posts('posts_per_page=10')?>
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div class="box blog-excerpt">
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( is_front_page() ) { ?>
						
						<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						
					<?php } else { ?>
						<h2 class="entry-title"><?php the_title(); ?></h2>
					<?php } ?>
<div class="pimp-entry-meta">
	<span class="month"><?php the_time('M') ?></span>
	<span class="day"><?php the_time('d') ?></span>
	<span class="year"><?php the_time('y') ?></span>


					</div><!-- .entry-meta -->
					<div class="entry-content">
						<?php the_excerpt(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

				<?php comments_template( '', true ); ?>
</div>
<?php endwhile; ?>
			
		
		
		</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
