<?php
  // Define database connection constants
  define('DB_HOST', 'classmysql.engr.oregonstate.edu');
  define('DB_USER', 'cs340_ramanats');
  define('DB_PASSWORD', '2073');
  define('DB_NAME', 'cs340_ramanats');

  $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  if (!$conn) {
    die('Could not connect: ' . mysqli_error());
  }
