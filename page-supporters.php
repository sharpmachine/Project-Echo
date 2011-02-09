<?php
/**
 * The template for displaying all pages.
 * Template Name: Supporters
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
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
					
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

				


<?php endwhile; ?>

<div class="supporter-list">
<a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/Shelly Kade.jpg" width="50" height="50" alt="Shelly Kade"></a>
<div class="meta">
	<h4><a href="#">Shelly Kade</a></h4>
	<span>Jan 24</span>
</div>
</div>

<div class="supporter-list">
<img src="<?php bloginfo( 'template_directory' ); ?>/images/Roxanne Grace.jpg" width="50" height="50" alt="Roxanne Grace">
<div class="meta">
	<h4><a href="#">Roxanne Grace</a></h4>
	<span>Dec 8</span>
</div>
</div>

<div class="supporter-list">
<img src="<?php bloginfo( 'template_directory' ); ?>/images/Nathan Pratt.jpg" width="50" height="50" alt="Nathan Pratt">
<div class="meta">
	<h4>Nathan Pratt</h4>
	<span>Jun 11</span>
</div>
</div>

<div class="supporter-list">
<img src="<?php bloginfo( 'template_directory' ); ?>/images/Nicki Dutton.jpg" width="50" height="50" alt="Nicki Dutton">
<div class="meta">
	<h4>Nicki Dutton</h4>
	<span>Nov 7</span>
</div>
</div>

<div class="supporter-list">
<img src="<?php bloginfo( 'template_directory' ); ?>/images/Mary Skelton.jpg" width="50" height="50" alt="Mary Skelton">
<div class="meta">
	<h4>Mary Skelton</h4>
	<span>Jul 9</span>
</div>
</div>

<div class="supporter-list">
<img src="<?php bloginfo( 'template_directory' ); ?>/images/Damaris Rothlisberger.jpg" width="50" height="50" alt="Damaris Rothlisberger">
<div class="meta">
	<h4>Damaris Rothlisberger</h4>
	<span>Oct 13</span>
</div>
</div>

<div class="supporter-list">
<img src="<?php bloginfo( 'template_directory' ); ?>/images/Barbara Kealiinohomoku.jpg" width="50" height="50" alt="Barbara Kealiinohomoku">
<div class="meta">
	<h4>Barbara Kealiinohomoku</h4>
	<span>Jan 17</span>
</div>
</div>

<div class="supporter-list">
<img src="<?php bloginfo( 'template_directory' ); ?>/images/jessekadegettinpaid.jpg" width="50" height="50" alt="Jessekadegettinpaid">
<div class="meta">
	<h4>Jesse Kade</h4>
	<span>Jan 24</span>
</div>
</div>

<div class="supporter-list">
<img src="<?php bloginfo( 'template_directory' ); ?>/images/Shannen Kuntz.jpg" width="50" height="50" alt="Shannen Kuntz">	
<div class="meta">
	<h4>Shannen Kuntz</h4>
	<span>Dec 9</span>
</div>
</div>

<div class="supporter-list">
<img src="<?php bloginfo( 'template_directory' ); ?>/images/Mark A.jpg" width="50" height="50" alt="Mark A">
<div class="meta">
	<h4>Mark Kuntz</h4>
	<span>Jun 19</span>
</div>
</div>

			
			
			</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
