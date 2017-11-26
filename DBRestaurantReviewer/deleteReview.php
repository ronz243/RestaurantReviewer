<?php
  include_once 'header.php';
// change the value of $dbuser and $dbpass to your username and password
	include 'includes/db-inc.php';

	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if (!$conn) {
		die('Could not connect: ' . mysql_error());
	}


  $reviewID = $_POST['deleteName'];

  $query = "DELETE FROM Reviews
            WHERE Reviews.ReviewID = '$reviewID'";


	$result = mysqli_query($conn, $query);
  if(!$result){
    die('Could not delete data:');
  }

  echo "Deleted data successfully\n";

	mysqli_free_result($result);
	mysqli_close($conn);

  include_once 'footer.php';


  ?>
