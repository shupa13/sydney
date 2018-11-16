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
  $talent = explode(',', $_POST['talent']);

  $sql = 'select * from myhero where code = '.$code;
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  ?>

  <div class="game-box" style="max-width: 750px; margin: auto">
    <div class="game-container hero-result">
      <img class = "img_cell" src="http://localhost:81/wordpress/wp-content/uploads/myhero/player/<?= $row['name'] ?>.png">
      <div>
        <h4><?= $row['name'] ?></h4>
        <?php
          for($i=0; $i<count($talent); $i++){
            echo '
            <div style="margin : 10px">
              <img width = "5%" src="http://localhost:81/wordpress/wp-content/uploads/icon/check.png">
              <h5 style="display : inline; margin-left : 5px">'.$talent[$i].'</h5>
            </div>
            ';
          }
         ?>
         <?php echo do_shortcode('[TheChamp-Sharing url="https://www.naver.com" style=""]') ?>
      </div>
    </div>
  </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
