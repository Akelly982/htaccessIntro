<!doctype html>
<html lang="en">
<?php

  //         (servername,username,password)
  // for mySQL in XAMPP it is  (localhost,root,empty,databaseName)
  $servername = getenv('host');
  $username = getenv('uname');
  $password = getenv("pass");  
  $dbname = getenv('dbname');

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
      
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  //echo "-- connection successfull -- <br>";
?>

</html>