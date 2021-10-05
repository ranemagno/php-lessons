<?php

$hostName = "localhost";
$userName = "root";
$userPass = "root";
$database = "instagram_db";

// Connected / Check Connection
// $connection = new mysqli($hostName, $userName, $userPass);
// if ($connection) {
//   echo "Database connected!";
// }
// if ($connection -> connect_error){
//   die("<br>Connection failed" . $connection -> connect_error);
// }

echo "<br>";

// Created the Database
// $newdb_query = "CREATE DATABASE " . $database;
// if ($connection -> query($newdb_query) == TRUE ) {
//   echo "Database " . $database . " created succesfully!";
// } else {
//   echo "Database creation failed: " . $connection -> error;
// }

// Connect directly to the database on PHPMyAdmin
$db = mysqli_connect($hostName, $userName, $userPass, $database) or die(mysqli_error());

// Created Initial Table
// $new_table_query = "CREATE TABLE posts(
//                     id INT AUTO_INCREMENT,
//                     username VARCHAR(50) NOT NULL,
//                     profile_img VARCHAR(100) NOT NULL,
//                     post_time INT,
//                     description VARCHAR(30),
//                     post VARCHAR(100) NOT NULL,
//                     likes INT,
//                     PRIMARY KEY (id)
//                   )";
// if(mysqli_query($db,$new_table_query)){
//   echo "Table Created Succesfully";
// } else {
//   echo "Error Creating Table : " . mysqli_error($db);
// };

// Creating/Inserting new table info
// $new_user_query = "INSERT INTO posts(username, profile_img, post_time, description, post, likes)
//                VALUES('mewmo', 'https://via.placeholder.com/30', '2', 'A cat img', 'https://via.placeholder.com/150', '120')
//               ";
//
//               if (mysqli_query($db,$new_user_query)) {
//                 echo "User Created" . $new_user_query;
//               } else {
//                 echo "Error Creating User : " . mysqli_error($db);
//               }

$show_all_posts = "SELECT username, profile_img, post_time, description, post, likes FROM posts";

$result = $db -> query($show_all_posts);
if ($result -> num_rows > 0){
  while($row = $result -> fetch_assoc()){
    echo '<img src="' . $row['post'] . '"';
    echo '<div>' . $row['username'] . $row['description'] . '</div>';
  }
} else {
  echo "0 results";
}
?>
