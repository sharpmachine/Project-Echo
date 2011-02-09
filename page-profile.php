<?php
/**
 * The template for displaying all pages.
	 * Template Name: Profile
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
<h3>My Current Campaigns</h3>

<h4><img src="<?php bloginfo( 'template_directory' ); ?>/images/animal.jpg" width="90" height="90" alt="Shelly Kade" style="float: left;"><a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a></h4>
<p><?php bloginfo('description'); ?></p>
<hr>

<h3>Campaigns I'm Funding</h3>

<h4><img src="<?php bloginfo( 'template_directory' ); ?>/images/puppy.jpg" width="90" height="90" alt="Shelly Kade"><a href="#">Homes for Puppies</a></h4>
<p>Every puppy needs a home</p>
<hr>
<h3>About Me</h3>
<p class="clear"><?php $user_info = get_userdata(2); echo($user_info->description); ?></p>

<a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/facebook.png" alt="Facebook" width="20" height="20"></a>
					<a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/twitter.png" alt="Twitter" width="20" height="20"></a><br \>
					<a href="<?php $user_info = get_userdata(2); echo($user_info->user_url); ?>"><?php $user_info = get_userdata(2); echo($user_info->user_url); ?></a>
				
			</div>

<div class="sidebar span-9 last">
	<h3>My Recent Activity</h3>
	
	<div class="supporter-list">
<a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/animal.jpg" width="50" height="50" alt="Shelly Kade"></a>
<div class="meta">
	<span>Referred Someone to</span>
	<h4><a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a></h4>
	<span>9 hours ago</span>
</div>
</div>

	<div class="supporter-list">
<a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/animal.jpg" width="50" height="50" alt="Shelly Kade"></a>
<div class="meta">
	<span>Referred Someone to</span>
	<h4><a href="#"><?php bloginfo( 'name' ); ?></a></h4>
	<span>9 hours ago</span>
</div>
</div>

<div class="supporter-list">
<a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/puppy.jpg" width="50" height="50" alt="Shelly Kade"></a>
<div class="meta">
	<span>Referred Someone to</span>
	<h4><a href="#">Homes for Puppies</a></h4>
	<span>9 hours ago</span>
</div>
</div>

	</div>
<?php get_footer(); ?>
