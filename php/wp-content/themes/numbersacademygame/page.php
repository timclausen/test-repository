<?php
/**
 * Template name: Landingpage
  * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<div id="featured">
			<div class="inner_featured">
					<div class="content_featured">
					<?php if(get_field('show_red_pow')):?><span class="red-pow"><img src="<?php the_field('red_pow'); ?>"/></span><?php endif; ?>
					<ul class="btns">
						<li><a href="https://play.google.com/store/apps/details?id=com.pixeljuice.numbersacademy" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/btn-googleplay.png"/></a></li>
						<li><a href="" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/btn-amazon.png"/></a></li>
						<li><a href="http://itunes.com/apps/numbersacademy" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/btn-applestore.png"/></a></li>
					</ul>
					<ul class="social">
					<li><a href="https://facebook.com/pixeljuicegames" class="share-facebook" target="_blank"></a></li>
						<li><a href="https://twitter.com/pixeljuicegames" class="share-twitter" target="_blank"></a></li>
						<li><a href="http://pixeljuicegames.tumblr.com/" class="share-tumbler" target="_blank"></a></li>
					</ul>
					
					<div class="devices">
						<img src="<?php bloginfo('template_url'); ?>/images/devices.png"/>
					</div>
				</div>
			</div>
		</div>
		<div id="content">
			<div class="inner_content shadow">
				<h2 class="first" id="video">Video</h2>
				<iframe class="youtubevideo" width="850" height="478" src="http://www.youtube.com/embed/<?php the_field('youtube_video_id'); ?>?rel=0&vq=hd720&showinfo=0&autohide=1&wmode=transparent&modestbranding=1" frameborder="0" allowfullscreen></iframe>
				
				<h2 id="features">Features</h2>
				<p class="features_p"><img src="<?php the_field('featured_image_icon'); ?>" style="float: left; padding-right: 20px;"/><?php the_field('featured_content'); ?></p>
				
				<ul class="features_ul">
					<?php if( get_field('features_list') ): ?>
						<?php while( has_sub_field('features_list') ): ?>
							<li><?php the_sub_field('feature'); ?></li>
						<?php endwhile; ?>
					<?php endif; ?>
				</ul>
			
				<h2 id="screenshots">Screenshots</h2>
				<div class="lightbox">
					<?php if( get_field('screenshots') ): ?>
						<?php while( has_sub_field('screenshots') ): ?>
						<a class="screenshots" rel="group1" href="<?php the_sub_field('screenshot'); ?>"><img width="157" src="<?php the_sub_field('screenshot'); ?>"/></a>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
	<?php endwhile; ?>
<?php get_footer(); ?>