<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Sydney
 */

get_header(); ?>

<article class="game-box">
	<div class="game-container normal">
		<div class="game-item img">
			<img src="http://localhost:81/wordpress/wp-content/uploads/inner_thumbnail/doppy.png" alt="ronaldo_mirror" itemprop="image" height="458" width="650" title="ronaldo_mirror"  />
		</div>
		<div class="game-item input">
			<h5>Who is my doppleganger ?</h5>
			<form action="http://localhost:81/wordpress/dofy_process " method="post">
				<p><input name="height" type="text" placeholder="Height"/></p>
				<p><input name="weight" type="text" placeholder="Weight"/></p>
				<p><input type="submit" value="Search Doppy" /></p>
			</form>
		</div>
	</div>
</article>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
