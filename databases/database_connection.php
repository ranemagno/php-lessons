<?php

$hostName = "localhost";
$userName = "root";
$userPass = "root";
$database = "new_database";

// Database Connection
// $connection = new mysqli($hostName, $userName, $userPass);
// if ($connection) {
//   echo "Database connected!";
// }
// if ($connection -> connect_error){
//   die("<br>Connection failed" . $connection -> connect_error);
// }

echo "<br>";

// Create the Database
// $newdb_query = "CREATE DATABASE " . $database;
// if ($connection -> query($newdb_query) == TRUE ) {
//   echo "Database " . $database . " created succesfully!";
// } else {
//   echo "Database creation failed: " . $connection -> error;
// }

// Connect directly to the database on PHPMyAdmin
$db = mysqli_connect($hostName, $userName, $userPass, $database) or die(mysqli_error());
// print_r($db);

// Create/Setup Initial Table
// $new_table_query = "CREATE TABLE people(
//                     id INT AUTO_INCREMENT,
//                     Name VARCHAR(50) NOT NULL,
//                     Salary INT NOT NULL,
//                     PRIMARY KEY (id)
//                   )";
// if(mysqli_query($db,$new_table_query)){
//   echo "Table Created Succesfully";
// } else {
//   echo "Error Creating Table : " . mysqli_error($db);
// };

// Creating/Inserting new table info
// $new_person_query = "INSERT INTO people(name, salary)
//                VALUES('Rane','10'),
//                ('Angela', '22'),
//                ('Raphael', '22'),
//                ('Malka', '50')
//               ";
//
//               if (mysqli_query($db,$new_person_query)) {
//                 echo "Person Added" . $new_person_query;
//               } else {
//                 echo "Error Adding Person : " . mysqli_error($db);
//               }

// Showing Data
// $show_all_people = "SELECT name, salary FROM people";
//
// $result = $db -> query($show_all_people);
// if ($result -> num_rows > 0){
//   while($row = $result -> fetch_assoc()){
//     echo '<div>' . $row['name'] . ' : $' . $row['salary'] . '</div>';
//   }
// } else {
//   echo "0 results";
// }


?>

<!-- Resources and Notes

mysqli - https://www.w3schools.com/sql/sql_injection.asp
die('error msg') - https://www.php.net/manual/en/function.die.php
-> - https://stackoverflow.com/questions/14037290/what-does-this-mean-in-php-or

AUTO_INCREMENT - adds 1 to each id made
VARCHAR(amount of characters allowed)
NOT NULL - fill in required;

 -->
