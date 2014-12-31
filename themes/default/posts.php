<?php theme_include('header'); ?>

<section class="content">

	<?php if(has_posts()): ?>
		<ul class="items">
			<?php posts(); ?>
			<li>
				<article class="wrap">
					<h1>
						<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
					</h1>

					<div class="data">
						<ul>
							<li><?php echo article_author('real_name'); ?> wrote this <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time></li>
							<li>Category: <a href="<?php echo category_url(); ?>"><?php echo category_title(); ?></a></li>
							<li class="share"><p>Share</p>
								<div class="share_buttons">
									<span st_url="<?= Uri::current(); ?>" st_title="<?= article_title(); ?>" st_summary="Article from Texting Base" class='st_twitter_large' displayText='Tweet'></span>
									<span st_url="<?= Uri::current(); ?>" st_title="<?= article_title(); ?>" st_summary="Article from Texting Base" class='st_facebook_large' displayText='Facebook'></span>
									<span st_url="<?= Uri::current(); ?>" st_title="<?= article_title(); ?>" st_summary="Article from Texting Base" class='st_googleplus_large' displayText='Google +'></span>
									<span st_url="<?= Uri::current(); ?>" st_title="<?= article_title(); ?>" st_summary="Article from Texting Base" class='st_linkedin_large' displayText='LinkedIn'></span>
									<span st_url="<?= Uri::current(); ?>" st_title="<?= article_title(); ?>" st_summary="Article from Texting Base" class='st_tumblr_large' displayText='Tumblr'></span>
									<span st_url="<?= Uri::current(); ?>" st_title="<?= article_title(); ?>" st_summary="Article from Texting Base" class='st_blogger_large' displayText='Blogger'></span>
									<span st_url="<?= Uri::current(); ?>" st_title="<?= article_title(); ?>" st_summary="Article from Texting Base" class='st_digg_large' displayText='Digg'></span>
									<span st_url="<?= Uri::current(); ?>" st_title="<?= article_title(); ?>" st_summary="Article from Texting Base" class='st_stumbleupon_large' displayText='StumbleUpon'></span>
									<span st_url="<?= Uri::current(); ?>" st_title="<?= article_title(); ?>" st_summary="Article from Texting Base" class='st_email_large' displayText='Email'></span>
								</div>
							</li>
							<li><a href="<?= base_url(article_url().'/#comment'); ?>"><?php echo total_comments(); ?> Comments</a></li>
						</ul>
					</div>

					<div class="content">
						<?php echo article_markdown(); ?>
					</div>

					
				</article>
			</li>
			<?php $i = 0; while(posts()): ?>
			<?php $bg = sprintf('background: hsl(215, 28%%, %d%%);', round(((++$i / posts_per_page()) * 20) + 20)); ?>
			<li style="<?php echo $bg; ?>">
				<article class="wrap">
					<h2>
						<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
					</h2>
				</article>
			</li>
			<?php endwhile; ?>
		</ul>

		<?php if(has_pagination()): ?>
		<nav class="pagination">
			<div class="wrap">
				<?php echo posts_prev(); ?>
				<?php echo posts_next(); ?>
			</div>
		</nav>
		<?php endif; ?>

		<!-- <form id="subscribe_to_blog" action="http://textingbase.com/subscribe_to_blog" method="post">
			<label for="term">Receive Updates:</label>
			<input type="search" id="term" name="email" placeholder="Enter Your Email">
			<p>We'll be sending you an email for verification. Please check your inbox once you click 'submit'.</p>
			<button type="input">Submit</button>
		</form> -->

	<?php else: ?>
		<p>Looks like you have some writing to do!</p>
	<?php endif; ?>

</section>

<?php theme_include('footer'); ?>