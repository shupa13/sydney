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
<?php
  $filtered = array(
    "user_name"=> htmlspecialchars($_POST['user_name']),
    "birth"=>htmlspecialchars($_POST['birth'])
  );

    $design = (int) substr($filtered['birth'],0,4) + (int) substr($filtered['birth'],5,7) * (int) substr($filtered['birth'],-2) + (int) strlen($filtered['user_name']);
    $user = get_type_info($design);
    $design = (int) substr($filtered['birth'],0,4) + (int) substr($filtered['birth'],5,7) + (int) substr($filtered['birth'],-2)* (int) strlen($filtered['user_name']);
    $team = get_type_info($design);
    $design = (int) substr($filtered['birth'],0,4) * (int) substr($filtered['birth'],5,7) + (int) substr($filtered['birth'],-2)* (int) strlen($filtered['user_name']);
    $nation = get_type_info($design);

    $user_type = array(
      "position"=>$user['position'],
      "play_style"=>$user['play_style'],
      "similar_player"=>$user['similar_player'],
      "team"=>$team['team'],
      "nation"=>$nation['nation']
    );?>

      <div class = "style_background">
          <img style="max-width: 40%; margin: auto; border-radius:50%" src="http://localhost:81/wordpress/wp-content/uploads/threetop/noperson.png" ></img>
          <div class = "game-item desc">
            <h4 class = "style_item_p" style="margin-bottom: 8px"><font color="yellow"><?php echo $filtered['user_name']; ?></font></h4>
            <div style="display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; margin: 10px 0 0 0">
              <h6 class = "style_item_p">Team</h6> <div class = "style_item_p"><?php echo $user_type['team']; ?></div>
              <h6 class = "style_item_p">Nation</h6> <div class = "style_item_p"><?php echo $user_type['nation']; ?></div>
              <h6 class = "style_item_p">Birth</h6> <div class = "style_item_p"><?php echo $filtered['birth']; ?></div>
              <h6 class = "style_item_p">Position</h6> <div class = "style_item_p"><?php echo $user_type['position']; ?></div>
            </div>
            <h6 class = "style_item_p" style="margin : 15px; text-align: left; padding-top : 15px; border-top: 1px solid white">PLAY STYLE</h6>
            <P class = "style_item_p"><?php echo $user_type['play_style']; ?></P>
            <h6 class = "style_item_p" style="margin : 15px; text-align: left; padding-top : 15px; border-top: 1px solid white">SIMILAR PLAYER</h6>
            <P class = "style_item_p" style="text-align: left; padding-left : 15px"><?php echo $user_type['similar_player']; ?></P>
          </div>
      </div>

    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
