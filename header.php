<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	// Add the blog name.
	bloginfo( 'name' );
	
	wp_title( '&raquo;', true, 'left' );

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?> &mdash; Project Echo</title>
	
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/screen.css" media="screen, projection">
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/print.css" media="print">
<!--[if lt IE 8]><link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/ie.css" media="screen, projection"><![endif]-->
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/style.css" media="screen, projection">
<link rel="shortcut icon" href="images/favicon.gifh" /> 

<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	wp_head();
?>

</head>
<body>
	
	<div id="dashboard">
		
		<div id="dashboard-wrapper">
			
			<div id="db-logo">
			<h1><a href="http://localhost/project-echo"><img src="<?php bloginfo( 'template_directory' ); ?>/images/echo-logo.png" alt=""></a></h1>
			</div>
			
			<div class="db-menu">
				
				<ul>
					<li><a href="#">Browse</a></li>
					<li><a href="#">Create</a></li>
					<li><a href="#">FAQ</a></li>
					<li><a href="#">Blog</a></li>
				</ul>
				</div>
				
				
				
				<div class="network-search">
					<ul>
						
				
					<li><?php wp_loginout(); ?></li>
					<li><span> | </span></li>
					<li><?php wp_register(); ?></li>
				</ul>
					
				
				</div>
					<?php get_search_form(); ?>

			
			</div>
		</div>
	
	<div class="wrapper">
		
		
		
		<header>
			
			<?php $result = mysql_query ('SELECT meta FROM wp_signups'); ?>
		<?php if ($result = ('meta=a:0:{}')): ?>
			
			<?php else:  ?>
				This is a campaign
				<?php endif; ?>
				
			<?php if (is_page('Profile')): ?>
				
					<div id="logo">
			<h1><img src="<?php bloginfo( 'template_directory' ); ?>/images/Julio.jpg" width="50" height="50" alt="Julio"><?php $user_info = get_userdata(2); echo($user_info->first_name . " " . $user_info->last_name . "\n"); ?></h1>
			
	
			</div>

		</header>
				
	<div class="container showgrid">
				
			
			<?php else:  ?>
				
			<div id="logo">
			<h1><a href="#"><?php bloginfo( 'name' ); ?></a></h1>
			<h4><?php bloginfo('description'); ?></h4>
			<!--
				TODO Querty pulls info from user2 table.  Needs to pull from profile creater
			-->
			<span>Created by <a href="<?php bloginfo( 'url' ); ?>/profile"><?php $user_info = get_userdata(2); echo($user_info->first_name . " " . $user_info->last_name . "\n"); ?></a></span>

			</div>

		</header>
				
	<div class="container showgrid">
		
		<nav>
			
			<ul>
	
				<li<?php if (is_home()) {echo " class=\"current\""; }?>><a href="<?php bloginfo('url') ?>">Home</a></li>
				<li<?php if (is_page('Comments')) {echo " class=\"current\""; }?>><a href="<?php bloginfo('url') ?>/comments">Comments <span><?php $numcomms = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->comments WHERE comment_approved = '1' AND comment_post_id='5'"); if (0 < $numcomms) $numcomms = number_format($numcomms); echo $numcomms; ?></span></a></li>
				<li<?php if (is_page('Updates')) {echo " class=\"current\""; }?>><a href="<?php bloginfo('url') ?>/updates">Updates <span><?php $numcomms = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->posts WHERE post_type = 'updates' AND post_status='publish'"); if (0 < $numcomms) $numcomms = number_format($numcomms); echo $numcomms; ?></span></a></li>
				<li<?php if (is_page('Blog')) {echo " class=\"current\""; }?>><a href="<?php bloginfo('url') ?>/blog">Blog <span><?php echo $published_posts = wp_count_posts()->publish; ?></span></a></li>
				<li<?php if (is_page('Supporters')) {echo " class=\"current\""; }?>><a href="<?php bloginfo('url') ?>/supporters">Supporters <span>10</span></a></li>
			</ul>
		</nav>
		<?php endif; ?>