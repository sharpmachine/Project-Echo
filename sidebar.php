<!--start sidebar-->
		<div class="sidebar span-9 last">
			
			<div class="box funding">
		<div class="num">10<span>Supporters</span></div>
		<div class="num">$2,133<span>pledged of $3,500 goal</span></div>
		<div class="num"><a href="funding" class="button">Support This</a></div>
		</div>
		
		<div class="box funding" style="display: none;">
				<h3>Mission Trip</h3>
		<div class="num">46<span>Supporters</span></div>
		<div class="num">$500<span>pledged of $2,000 goal</span></div>
		<div class="num"><a href="funding" class="button">Support This</a></div>
		</div>
		
		<h1 class="box-title">Campaign By:</h1>
		
		<div class="box bio">
				
				<!--
					TODO Pulls from specific table rather then profile creator
				-->
				<img src="<?php bloginfo( 'template_directory' ); ?>/images/Julio.jpg" width="80" height="80" alt="Julio" class="bio-thumb">
				<h4><a href="<?php bloginfo( 'url' ); ?>/profile"><?php $user_info = get_userdata(2); echo($user_info->first_name . " " . $user_info->last_name . "\n"); ?></a></h4>
				<span class="location"><img src="<?php bloginfo( 'template_directory' ); ?>/images/location.png" alt="Location">Christchurch, NZ</span>
				<span class="send-message"><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/email.png" alt="Location" width="20" height="20">Send Me a Message</a></span>
				<span class="social"></span>
				<p class="clear"><?php $user_info = get_userdata(2); echo($user_info->description); ?></p>
				
					
					<a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/facebook.png" alt="Facebook" width="20" height="20"></a>
					<a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/twitter.png" alt="Twitter" width="20" height="20"></a><br \>
					<a href="<?php $user_info = get_userdata(2); echo($user_info->user_url); ?>"><?php $user_info = get_userdata(2); echo($user_info->user_url); ?></a>
				
				
		</div>
		<h1 class="box-title">Supporters</h1>
		<div class="box supporters">
				
		
			
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/Shelly Kade.jpg" width="50" height="50" alt="Shelly Kade">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/Roxanne Grace.jpg" width="50" height="50" alt="Roxanne Grace">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/Nathan Pratt.jpg" width="50" height="50" alt="Nathan Pratt">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/Nicki Dutton.jpg" width="50" height="50" alt="Nicki Dutton">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/Mary Skelton.jpg" width="50" height="50" alt="Mary Skelton">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/Damaris Rothlisberger.jpg" width="50" height="50" alt="Damaris Rothlisberger">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/Barbara Kealiinohomoku.jpg" width="50" height="50" alt="Barbara Kealiinohomoku">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/Shannen Kuntz.jpg" width="50" height="50" alt="Shannen Kuntz">	
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/Mark A.jpg" width="50" height="50" alt="Mark A">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/jessekadegettinpaid.jpg" width="50" height="50" alt="Jessekadegettinpaid">
			
			<a href="<?php bloginfo('url'); ?>/supporters">See All</a>
			
		</div>
		
		<?php query_posts('post_type=updates&posts_per_page=1&orderby=meta_value&order=DSC'); ?>
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					
					<h1 class="box-title">Lastest Update</h1>
		<div class="box">
				<!--
					TODO Lastest Udates should have a character limit like twitter does
				-->
				<h3><?php the_title(); ?></h3>
				<span><?php echo time_ago(); ?></span>
						<?php the_content(); ?>
		<a href="<?php bloginfo('url'); ?>/updates">See All</a>
		</div>
			<?php endwhile; ?>
		
		<h1 class="box-title">Recent Comments</h1>
		<div class="box">
				
				
		<?php 
$comments = get_comments('post_id=5&number=3&status=approved'); foreach($comments as $comment) : 
echo('<p>' .  $comment->comment_content  . '<br><em>&mdash; ' . $comment->comment_author . '&nbsp;' . time_ago() . '</em></p>'); endforeach; ?>
		
			<a href="<?php bloginfo('url'); ?>/comments">See All</a>	
		
		</div>
			
		</div><!--end sidebar-->