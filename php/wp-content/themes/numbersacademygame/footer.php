<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
				<div class="footer">
					<a href="http://pixeljuice.dk" class="pj-logo"><img src="<?php bloginfo('template_url'); ?>/images/pj-logo.png"/></a>
					<a class="nav" href="#header">Top</a> |
					<a class="nav" href="#video">Video</a> |
					<a class="nav" href="#features">Features</a> |
					<a class="nav" href="#screenshots">Screenshots</a> |
					<div class="footer-info"><?php dynamic_sidebar( 'Footer info' ); ?></div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/fancybox/source/jquery.fancybox.css?v=2.1.3" type="text/css" media="screen" />
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/fancybox/source/jquery.fancybox.pack.js?v=2.1.3"></script>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.5"></script>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
		<script>
			$(document).ready(function() {
				$("a.screenshots").fancybox({
					prevEffect		: 'none',
					nextEffect		: 'none',
				});
			});
		</script>
<?php wp_footer(); ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36267076-1']);
  _gaq.push(['_trackPageview']);

  (function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>