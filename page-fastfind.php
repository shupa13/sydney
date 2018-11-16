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
            <img class = "img_cell" src = <?= get_src($name); ?> onclick="team_select('<?= $name ?>')">
            <button  class = "fastfind_start <?= $name ?>" type="button" value=<?= json_encode($arr); ?>  onclick="team_setting(this);"></button>
          <?php
        }
       ?>
  </div>
</article>

<?php
  function get_src($name){
    $src = "http://localhost:81/wordpress/wp-content/uploads/fastfind/team/".$name.".png";
    return $src;
  }

 ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
