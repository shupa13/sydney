
  <a class = "bottom_menu" href="create.php">WRITE</a>
  <?php
    if(isset($_GET['id'])){
      ?>
      <a class = "bottom_menu" href="update.php?id=<?php naming(); ?>">UPDATE</a>
      <form action = "delete_process.php" method="post">
        <input type="hidden" name="title" value="<?php echo naming(); ?>">
        <input type="submit" value="DELETE">
      </form>
      <?php
    }
   ?>
