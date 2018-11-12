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
<?php
  $my_list = explode(',', $_POST['player_list']);
 ?>

 <article class="game-box threetop">
   <h3 class = "h1_design">MY BEST 3 TOP</h3>
   <div class="game-container threetop_res">
     <?php
        for($i=0; $i<count($my_list); $i++){
          ?>
          <img class = "img_cell result" src = "http://localhost:81/wordpress/wp-content/uploads/threetop/<?= $my_list[$i]; ?>.png">
          <?php
        }
      ?>
   </div>

 </article>
 <?php get_sidebar(); ?>
 <?php get_footer(); ?>
