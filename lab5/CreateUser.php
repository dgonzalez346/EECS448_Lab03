<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if(isset($_POST["username"]))
{


  $new_user = $_POST["username"];
  $mysqli = new  mysqli("mysql.eecs.ku.edu", "d706g346", "dgonzalez", "d706g346");
  /* check connection */
  if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n" . $mysqli->connect_error);
      exit();
  }
  $query = "INSERT IGNORE INTO Users('user_id') VALUES ('".$new_user."')";
  if($mysqli->query($query)){
    echo "New record created successfully";
  } else{
    echo "Error!";
  }

}

?>
