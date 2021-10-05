<?php

$hostName = "localhost";
$userName = "root";
$userPass = "";
$database = "new_database";

// Create the database connection
$connection = new mysqli($hostName, $userName, $userPass);
if ($connection) {
  echo "Database connected!";
}
if ($connection -> connect_error){
  die("<br>Connection failed" . $connection -> connect_error);
}

echo "<br>";

$newdb_query = "CREATE DATABASE " . $database;
if ($connection -> query($newdb_query) == TRUE ) {
  echo "Database " . $database . " created succesfully!";
} else {
  echo "Database creation failed: " . $connection -> error;
}

?>

<!-- Resources

mysqli - https://www.w3schools.com/sql/sql_injection.asp
die('error msg') - https://www.php.net/manual/en/function.die.php
-> - https://stackoverflow.com/questions/14037290/what-does-this-mean-in-php-or

 -->
