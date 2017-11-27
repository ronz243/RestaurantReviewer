<?php
  session_start();
  include_once 'header.php';
// change the value of $dbuser and $dbpass to your username and password
	include 'includes/db-inc.php';

  $_SESSION['r'] = $_POST['rName'];
  $r_name = $_POST['rName'];
  echo "<h1> $r_name | Review </h1>";

  echo '<br><form class="search" action="addReview.php" method="post">
        Enter Review: <input type="text" name="addReview" placeholder="Enter Review Here..."><br>
        <input type="submit">
        </form></br>';

  include_once 'footer.php';

  ?>
