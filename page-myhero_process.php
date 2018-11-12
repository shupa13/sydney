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
  $code = $_POST['code'];
  $sql = 'select * from myhero where code = '.$code;
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  ?>

  <div class="game-box">
    <div class="game-container normal">
      <img class = "img_cell" src="http://localhost:81/wordpress/wp-content/uploads/myhero/player/<?= $row['name'] ?>.png">
      <div>
        <h3>My hero</h3>
        <h5><?= $row['name'] ?></h5>
      </div>
    </div>
  </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
