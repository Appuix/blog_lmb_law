<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

		<meta name="description" content="<?php echo site_description(); ?>">

		<link rel="stylesheet" href="<?php echo theme_url('/css/reset.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/css/small.css'); ?>" media="(max-width: 400px)">

		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
		<link rel="shortcut icon" href="http://lmblawfirm.com/assets/img/logos/favicon_32.png">

		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<script>var base = '<?php echo theme_url(); ?>';</script>
		<script src="<?php echo asset_url('/js/zepto.js'); ?>"></script>
		<script src="<?php echo theme_url('/js/main.js'); ?>"></script>

		<script type="text/javascript">var switchTo5x=true;</script>
		<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
		<script type="text/javascript">stLight.options({publisher: "2fd0c238-0374-4a52-8545-86402f637479", doNotHash: false, doNotCopy: false, hashAddressBar: true});</script>
	    
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="generator" content="Anchor CMS">

	    <meta property="og:title" content="<?php echo site_name(); ?>">
	    <meta property="og:type" content="website">
	    <meta property="og:url" content="<?php echo e(current_url()); ?>">
	    <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
	    <meta property="og:site_name" content="<?php echo site_name(); ?>">
	    <meta property="og:description" content="<?php echo site_description(); ?>">

		<?php if(customised()): ?>
		    <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>

    		<!--  Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
		<?php endif; ?>
	</head>
	<body class="<?php echo body_class(); ?>">
		<div class="main-wrap">
			<div class="slidey" id="tray">
				<div class="wrap">
					<form id="search" action="<?php echo search_url(); ?>" method="post">
						<label for="term">Search:</label>
						<input type="search" id="term" name="term" placeholder="Search" value="<?php echo search_term(); ?>">
						<button type="input">Submit</button>
					</form>

					<aside>
						<b>Categories</b>
						<ul>
						<?php while(categories()): ?>
							<li>
								<a href="<?php echo category_url(); ?>" title="<?php echo category_description(); ?>">
									<?php echo category_title(); ?> <span><?php echo category_count(); ?></span>
								</a>
							</li>
						<?php endwhile; ?>
						</ul>
					</aside>

					<!-- <form id="search" action="http://textingbase.com/subscribe_to_blog" method="post">
						<label for="term">Receive Updates:</label>
						<input type="search" id="term" name="email" placeholder="Enter Your Email">
						<p>Please check your inbox once you click 'submit' for verification.</p>
						<button type="input">Submit</button>
					</form>

					<aside class="social_links">
						<b>Follow Us</b>
						<ul>
							<li><a href="http://www.twitter.com/textingbase" class="twitter"></a></li>
							<li><a href="https://www.facebook.com/pages/Texting-Base-Inc/632453720206310" class="facebook"></a></li>
							<li><a href="http://www.linkedin.com/company/texting-base-inc-?trk=tyah&trkInfo=tarId%3A1410917710230%2Ctas%3ATexting%2Cidx%3A1-7-7" class="linkedin"></a></li>
							<li><a href="https://www.youtube.com/channel/UCTfAZymkmBmniq0HsLP5L5Q" class="youtube"></a></li>
						</ul>
					</aside> -->
				</div>
			</div>

			<header id="top">
				<a id="escape" href="http://lmblawfirm.com"></a><p>lmblawfirm.com</p>

				<div id="logo_container">
					<a id="logo" href="http://lmblawfirm.com"><img src="<?php echo theme_url('img/logo_with_text.png'); ?>"></a>
				</div>

				<?php if(has_menu_items()): ?>
				<nav id="main" role="navigation">
					<ul>
						<?php while(menu_items()): ?>
						<li <?php echo (menu_active() ? 'class="active"' : ''); ?>>
							<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
								<?php // echo menu_name(); ?>
							</a>
						</li>
						<?php endwhile; ?>

						<li class="tray">
							<a href="#tray" class="linky" title="View my posts by category"></a>
						</li>
					</ul>
				</nav>
				<?php endif; ?>
			</header>