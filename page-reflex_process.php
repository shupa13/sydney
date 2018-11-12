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
    'record' => htmlentities($_POST['record']),
    'user' => htmlspecialchars($_POST['user']),
    'nation' => htmlspecialchars($_POST['nation']),
    'rank' => ' '
  );
  $sql = 'insert into reflex_result(name, nation, record) values("'.$filtered['user'].'", "'.$filtered['nation'].'", "'.$filtered['record'].'")';
  //$result = mysqli_query($conn, $sql);
 ?>
   <?php
   $sql = '
    	  SELECT id, name, nation, record, FIND_IN_SET(record, (
        SELECT GROUP_CONCAT(record
        ORDER BY record )
        FROM reflex_result)
        ) AS rank
        FROM reflex_result
        WHERE record = '.$filtered['record'];
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $filtered['rank'] = $row['rank'];
    ?>

  <h5>■ REFLEX RANKING ■</h5>

 <table class = "show_record">
   <?= refelx_category(); ?>

   <?php
   $sql = 'select * from refelx_result order by record';
   $result = mysqli_query($conn, $sql);
    for($i=0; $i<5; $i++){
      $row = mysqli_fetch_array($result);
      print_r('<tr><td>'.($i+1).'</td><td>'.$row["record"].'</td><td>'.$row["name"].'</td><td>'.$row["nation"].'</td></tr>');
    }
    print_r('<tr class = "my_record"><td>'.$filtered['rank'].'</td><td>'.$filtered["record"].'</td><td>'.$filtered["user"].'</td><td>'.$filtered["nation"].'</td></tr>');
    ?>
 </table>

 <p style="text-align: center"><input type="button" value="REGAME" onclick='locate_fastfind()'></p>

 <?php
  function refelx_category(){
    $category = '
       <tr class = "record_category">
         <td><h6>RANK</h6></td>
         <td><h6>RECORD</h6></td>
         <td><h6>USER</h6></td>
         <td><h6>NATION</h6></td>
       </tr>';

       return $category;
  }

  ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
