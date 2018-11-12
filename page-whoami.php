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
<?php
  $sql = '
    SELECT * FROM whoameye';
  $result = mysqli_query($conn, $sql);
  $arr = array();
  while($row = mysqli_fetch_array($result)){
    array_push($arr, $row['name']);
  }
 ?>

<article class = "game-box">
  <div class="game-container whoameye">
    <div class="whoami-item left"></div>
    <div class="whoami-item center">
      <img src = "http://localhost:81/wordpress/wp-content/uploads/inner_thumbnail/whoameye.png" style = "margin : 10px">
      <button type="button" value=<?= json_encode($arr); ?> onclick="whoameye_set(this);">GAME START</button>
    </div>
    <div class="whoami-item right"></div>
  </div>
</article>
<h5 style= "text-align: right" class="stage"></h5>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
