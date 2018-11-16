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
<?php $score = $_POST['score']; ?>

<article class="game-box" style="max-width : 500px; margin: auto">
  <img class = "img_cell" src = "http://localhost:81/wordpress/wp-content/uploads/inner_thumbnail/whoameye.png">
  <div style = "margin : 20px; border-top : 2px solid">
    <h3>MY SCORE : <font color = "red"; size = 40px><?= $score ?></font></h3>
    <h6><?php echo get_msg($score); ?></h6>
    <?php echo do_shortcode('[TheChamp-Sharing url="https://www.naver.com" style=""]') ?>
  </div>
</article>


<?php
   function get_msg($score){
     $msg;
     switch($score){
       case 0 :
         $msg = 'You need to love football more';
         break;
       case 10 : case 20 : case 30 : case 40 :
         $msg = 'Don\'t worry you could be professional fan of football';
         break;
       case 50 : case 60 : case 70 :
         $msg = 'You absolutely love football and your knowledge of football is high enough';
         break;
       case 80 : case 90 :
         $msg = 'Are you working about football ? I think you are Expert of football';
         break;
       case 100 :
         $msg = 'I\'m sure you are Pep Guardiola or Jurgen Klopp you have eagle eye';
         break;
     }
     return $msg;
   }
   ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
