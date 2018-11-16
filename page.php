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

<!--
<div style="margin: 10px; margin-bottom: 20px; text-align: right">
		<a href= "https://www.instagram.com/_football_dor/?hl=ko">
			<img src = "http://localhost:81/wordpress/wp-content/uploads/icon/instagram.png" style="max-width : 5%">
		</a>
		<a href = "mailto:bigear.news@example.com">
			<img src = "http://localhost:81/wordpress/wp-content/uploads/icon/gmail.png" style="max-width : 5%">
		</a>
</div>
-->

<!-- 페이스북 로그인 버튼, 인스타그램 로그인 버튼 커스텀
<input type="button" id="authBtn" value="checking..." onclick="facebook_log(this)">
<input onclick="instagram_log();" type="button" value="insta" >
-->

<article class = "home_category">
	<div class="home-container">
		<div class="home-item" ><?php load_game('doppy', 'width: 100%') ?></div>
		<div class="home-item" ><?php load_game('myhero', 'width: 100%') ?></div>
		<div class="home-item" ><?php load_game('whoami', 'width: 100%') ?></div>
		<div class="home-item" ><?php load_game('fastfind', 'width: 100%') ?></div>
		<div class="home-item" ><?php load_game('threetop', 'width: 100%') ?></div>
		<div class="home-item" ><?php load_game('style', 'width: 100%') ?></div>
		<div class="home-item" ><?php load_game('reflex', 'width: 100%') ?></div>
</article>

<!--
<?php load_game('threetop', 'margin-bottom: 5px') ?>
<?php load_game('style', '') ?>
<?php load_game('fastfind','padding: 2px') ?>
<?php load_game('whoami','padding: 2px') ?>
<?php load_game('reflex','padding: 2px') ?>
-->

<?php function load_game($game, $style){
	echo '<a href="'.$game.'"><img class="game-thumbnail" style="'.$style.'" src= "http://localhost:81/wordpress/wp-content/uploads/thumbnail_games/'.$game.'.png"></img></a>';
} ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
