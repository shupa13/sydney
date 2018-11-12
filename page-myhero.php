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
<?php require('lib/print.php'); ?>
<?php $conn = sql_connect(); ?>

<article class="game-box hero">
	<h4 class = "hero_talent_list"></h4>
	<div class="game-container myhero">
		<input type="button" value="MY HERO START" onclick="myhero_initiailizing()">
	</div>
</article>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
