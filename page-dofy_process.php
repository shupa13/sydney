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
  $filtered = array(
    'height'=>htmlspecialchars($_POST['height']),
    'weight'=>htmlspecialchars($_POST['weight'].'kg')
  );
  $sql = "SELECT * FROM ptable WHERE height =".$filtered['height'];
  $result = mysqli_query($conn, $sql);

  $row = mysqli_fetch_array($result);
  $player_id = $row[$filtered['weight']];

  $sql = "SELECT * FROM plist WHERE id =".$player_id;
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  ?>

  <article class = "game-box">
    <div class = "game-container normal">
      <div class = "game-item img">
        <img src="http://localhost:81/wordpress/wp-content/uploads/inner_thumbnail/doppy.png" ></img>
      </div>
      <div class = "game-item desc">
        <h4>Who is my doffleganger ? </h4>
        <h5 class = "style_item_p">  <?= ('<p> Player name : '.$row['name'].'</p>'); ?></h5>
        <h5 class = "style_item_p">  <?= ('<p> Player team : '.$row['team'].'</p>'); ?></h5>
      </div>
    </div>
  </article>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
