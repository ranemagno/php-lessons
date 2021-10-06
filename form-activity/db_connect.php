<?php

$hostName = "localhost";
$userName = "root";
$userPass = "root";
$database = "shop_db";

// Check Connection
// $connection = new mysqli($hostName, $userName, $userPass);
// if ($connection) {
//   echo "Database connected!";
// }
// if ($connection -> connect_error){
//   die("<br>Connection failed" . $connection -> connect_error);
// }

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
// $new_table_query = "CREATE TABLE products(
//                     id INT AUTO_INCREMENT,
//                     imageURL VARCHAR(100) NOT NULL,
//                     title VARCHAR(100) NOT NULL,
//                     price INT,
//                     description VARCHAR(200),
//                     PRIMARY KEY (id)
//                   )";
// if (mysqli_query($db,$new_table_query)){
//   echo "Table Created Succesfully";
// } else {
//   echo "Error Creating Table : " . mysqli_error($db);
// };

// Creating/Inserting new table info
// $new_product_query = "INSERT INTO products(imageURL, title, price, description)
//                VALUES(
//                  'https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1627652416-Bird-of-Paradise_746d55b281d8490f984a352470e4764e.jpg?crop=1.00xw:1xh;center,top&resize=768:*', 'Bird of Paradise', 60, 'Give them enough time and these pretty Bird of Paradise plants grow stunning orange flowers. As if they were not impressive enough already! ')
//               ";
//
//               if (mysqli_query($db,$new_product_query)) {
//                 echo "User Created" . $new_product_query;
//               } else {
//                 echo "Error Creating User : " . mysqli_error($db);
//               }

// $show_all_products = "SELECT imageURL, title, price, description FROM products";
//
// $result = $db -> query($show_all_products);
// if ($result -> num_rows > 0){
//   while($row = $result -> fetch_assoc()){
//     echo '<img src="' . $row['imageURL'] . '"';
//   }
// } else {
//   echo "0 results";
// }
?>
