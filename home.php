
<?php get_header(); ?>

<!--
<m-content> -->

	<div class="home-featured-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/home-alt.jpg')" >

<!-- 		<div class="welcome-wrap">
			<form action="//thelyftguy.us14.list-manage.com/subscribe/post?u=fa32ac29ec19b61d8e3b4ea47&amp;id=3e8b46ba4a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<h2 class="welcome-header">Welcome to the theLyftGuy!</h2>
				<div class="welcome-copy">
					<p>I'm the LyftGuy, otherwise known as Shawn. Welcome to my first blog! I'm a husband, father and lover of all things Lyft!</p>
					<p><input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="your name"></p>
					<p><input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="your@email.com"></p>
					<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_fa32ac29ec19b61d8e3b4ea47_3e8b46ba4a" tabindex="-1" value=""></div>
					<p><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button welcome-button"></p>
				</div>
			</form>
			<div id="mce-responses" class="clear">
				<div class="response" id="mce-error-response" style="display:none"></div>
				<div class="response" id="mce-success-response" style="display:none"></div>
			</div>
			<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
		</div> -->

	</div>

	<div class="content-container the-blog">
		<img class="c-header" src="<?php echo get_template_directory_uri(); ?>/img/the_blog_140.svg" onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri(); ?>/img/the_blog_140_fallback.png'">
	</div>


	<div class="content-container entry-post-grid transparent">

		<?php
		if ( have_posts() ) : while ( have_posts() ) : the_post();
			get_template_part( 'content', get_post_format() );
			endwhile;
		?>

		<!--
		<ul class="pager">
				<li><?php next_posts_link( 'Previous' ); ?></li>
				<li><?php previous_posts_link( 'Next' ); ?></li>
			</ul>
		-->

		<?php
			endif;
		?>

	</div>

</div> <!-- /.m-content -->


<?php get_footer(); ?>
