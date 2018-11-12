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
			<img src="http://localhost:81/wordpress/wp-content/uploads/inner_thumbnail/style.png" />
		</div>
		<div class="game-item input">
			<h4>What is my play style ?</h4>
			<form action="http://localhost:81/wordpress/style_process " method="post">
				<p><input name="user_name" type="text" placeholder="user name" /></p>
				<p><input name="birth" type="date" value="2000-01-01" min="1900-01-01" max="2018-12-31" /></p>
				<p><input type="submit" value="Submit" /></p>
			</form>
		</div>
	</div>
</article>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
