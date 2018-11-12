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
  $sql = "select * from threetop";
  $result = mysqli_query($conn, $sql);
?>
<article class="game-box">
  <h3 class="extra_money">MY BUDGET LEFT    <font color='red'>9 $</font></h3>
  <div class="game-container threetop">
    <?php
    $num = 0;
      while ($row = mysqli_fetch_array($result)) {
        $player = array(
          "name" => mysqli_real_escape_string($conn, $row['name']),
          "price" => mysqli_real_escape_string($conn,$row['price'])
        );
          ?>
          <input type="image" class = "img_cell threetop" value=<?= json_encode($player); ?>
          src = "http://localhost:81/wordpress/wp-content/uploads/threetop/<?= $player['name']; ?>_price.png" onclick="threetop_select(this);">
          <?php
          $num++;
          if($num == 6){
            for($i=0; $i<3; $i++){
              echo '<input type="image" id = "list_'.$i.'" class = "img_cell select" value='.$i.'
              src = "http://localhost:81/wordpress/wp-content/uploads/threetop/noperson.png" onclick="img_cancel(this);">';
            }
          }
      }
     ?>
  </div>
</article>

 <form action="http://localhost:81/wordpress/threetop_process" method="post" style="text-align: center; margin: 20px">
	 <input type="hidden" id="player_list" name="player_list" value="">
	 <input type="submit" value="submit">
 </form>
<a href = squad_check.php>선수단 확인</a>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
