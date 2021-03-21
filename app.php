<?php 
  session_start(); 
  if(isset($_SESSION["success"])){
	echo('<p style="color:green">'.$_SESSION["success"]."</p>\n");
	unset($_SESSION["success"]);
  }
  //check if we are logged in!
  if(! isset($_SESSION["account"])){?>
  <p>please <a href="login.php">login</a> to go back.</p>
  <?php } else { ?>
  <p>please<ahref="logout.php">logout</a>when you are done.</p>
  <?php } ?>
  