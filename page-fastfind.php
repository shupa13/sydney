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

<article class = "game-box fastfind">
  <div class="game-container option">
    <div class="game-item select">
      <ul class="select_list">
          <?
          $sql = "
            SELECT * FROM fastfind_select";
          $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_array($result)){
            $name = $row['team_list'];

            $sql = "
              SELECT * FROM fastfind_".$name;
              $result_d = mysqli_query($conn, $sql);
              $arr = array();
              array_push($arr,$name);
              while($row_d = mysqli_fetch_array($result_d)){
                array_push($arr,$row_d['name']);
              }
            ?>
            <li>
              <input type="radio" id=<?= $name; ?> value=<?= json_encode($arr); ?> name="selector" onclick="team_select(this);">
              <label for=<?= $name; ?>><span><?= $name; ?></span></label>
            </li>
            <?php
          }
         ?>
      </ul>
    </div>

    <div class="game-item monitor">
        <img class = "img_inner" src = "http://localhost:81/wordpress/wp-content/uploads/inner_thumbnail/fastfind.png"></img>
          <p style="margin: auto"><input style="display: none" class = "btn_start" type="button" value="start" onclick="game_start();"></p>
        <!--  <input type="button" value="stop" onclick="stop();"> -->
        <!--  <input type="button" value="reset" onclick="reset()"> -->
    </div>
  </div>
</article>
<h5 class = "stage_showing" style="text-align: right"></h5>



<?php get_sidebar(); ?>
<?php get_footer(); ?>
