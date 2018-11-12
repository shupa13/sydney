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
    $sql = 'select * from randombox';
    $result = mysqli_query($conn, $sql);
    $list = array();
    while($row = mysqli_fetch_array($result)){
      array_push($list, $row['name']);
    }
 ?>
 <article class="game-box threetop">
   <h1 class="h1_design">MY RANDOM 3 TOP</h1>
   <div class="game-container normal">
     <input class="game-item random"type="image" value=<?= json_encode($list); ?> src="http://localhost:81/wordpress/wp-content/uploads/icon/push_button.png"
     onclick="randombox(this);">
     <h4 style="margin: auto">Click button and get your player !</h4>

   </div>
 </article>

<div class="item-random">

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
