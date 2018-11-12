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
<?php $conn = sql_connect();?>

<div id="ViewTimer"></div>
<article class="game-box">
  <div class="game-container reflex">
      <?php
      $sql = "
        SELECT * FROM reflex";
      $result = mysqli_query($conn, $sql);
			$arr = array();
      while($row = mysqli_fetch_array($result)){
        $name = $row['name'];
          array_push($arr,$name);
         } ?>
      <img id="reflex_thumnail"  class = "img_thumbnail" src= "http://localhost:81/wordpress/wp-content/uploads/inner_thumbnail/reflex.png">
			<p style="margin: 10px auto"><button type="button" value=<?= json_encode($arr); ?>  onclick="reflex_get_data(this);">GAME START</button></p>
  </div>
</article>
<h5 class = "stage_showing" style="text-align: right"></h5>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
