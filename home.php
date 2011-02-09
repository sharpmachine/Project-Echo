<?php get_header(); ?>

<div class="page span-15">
	
		<iframe title="YouTube video player" class="youtube-player" type="text/html" width="569" height="456" src="http://www.youtube.com/embed/ZNNIg4zO5dM?rel=0" frameborder="0" allowFullScreen></iframe>
			
			<div class="box share-campaign">
				<a href="#"><img src="http://www.indiegogo.com/images/button_share_facebook.PNG?1288825226" alt="" width="131"></a>
				<a href="#"><img src="http://www.indiegogo.com/images/button_share_twitter.PNG?1288825226" alt="" width="131"></a>
				<a href="#"><img src="http://www.indiegogo.com/images/button_share_email.PNG?1288825226" alt="" width="131"></a>
				<a href="#"><img src="http://www.indiegogo.com/images/button_share_widget.PNG?1288825226" alt="" width="131"></a>

				<hr>
				<h4>Share this campaign:<input type="text" value="<?php bloginfo('url'); ?>"><span>Copy &amp; paste away!</span></h4>
		</div>

		<h1 class="box-title">The Lowdown</h1>
				<div class="box">			
		<p>I have been called to embark on a journey with Jason Westerfield and Kingdom Reality Ministries. God divinely opened the door to this amazing opportunity to be transformed and ultimately transform Gods people, Gods cities, and Gods nations. Previously I was on a journey of training in the business arena for the last seven years; however, two years ago I had an encounter with Jesus Christ.  I encountered the love and grace of our Father. Since then, I have been learning who I am and Who's I am, a new nature filled with daily adventure and expression of His love. With my life on an agenda and being completely saturated with daily work, I would have never expected these sovereign encounters that have led me down a path to move to another country and travel the world sharing the love and power of Jesus. But I know that this is the call of God on my life.</p> 
 
<p>Kingdom Reality Ministries is located in a city called Christchurch in New Zealand. The founders of New Zealand were the Maori tribe who named it after the "white cloud of glory." Christchurch is one of the farthest cities from Jerusalem; the birthplace of Jesus. Acts 1:8 states "But you will receive power when the Holy Spirit comes on you; and you will be my witnesses in Jerusalem, and in all Judea and Samaria, and to all the ends of the earth." We will meet God at the ends of the Earth!</p> 
 
<p>The goal of our ministries is the decipleship of nations. We desire to fulfill the cry of new Zealand to preach love and truth to man and work out Thy glorious plan. We will work to establish cultural and social transformations in the Nations. God is our mentor who will help us build up Kingdom leaders at all levels of society including government, church, business, education, family, media, and arts/entertainment etc.</p> 
 
<p>The mission statement for Kingdom Realities is revealing the King and His Kingdom. Our whole aim in everything is the Lord's Prayer, "Your Kingdom Come, Your Will Be Done On Earth As it Is In Heaven." We will bring Heaven to Earth with the glory of God in New Zealand.</p> 
		</div>
		
		<h1 class="box-title">Recent Blog Post</h1>
		<div class="box blog-excerpt">
			
		<?php query_posts('posts_per_page=1')?>
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

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

<?php endwhile; ?>
			
		</div>

		</div>
<?php get_sidebar(); ?> 
<?php get_footer(); ?>