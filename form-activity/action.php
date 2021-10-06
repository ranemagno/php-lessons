<?php


$hostName = "localhost";
$userName = "root";
$userPass = "root";
$database = "shop_db";

$db = mysqli_connect($hostName, $userName, $userPass, $database) or die(mysqli_error());

print_r($_POST);

if (isset($_POST['submit'])){
  $new_product_query = "INSERT INTO products(imageURL, title, price, description)
                     VALUES(
                     '" . htmlspecialchars($_POST['imageInput']) . "',
                     '" . htmlspecialchars($_POST['titleInput']) . "',
                     '" . htmlspecialchars($_POST['priceInput']) . "',
                     '" . htmlspecialchars($_POST['descriptionInput']) . "'
                     )";

  if (mysqli_query($db, $new_product_query)){
    echo "<br>Your Record Added Successfully : " . $new_product_query;
  } else {
    echo "Error Creating A Product : " . mysqli_error($db);
  }
}

?>


<!-- Notes

htmlspecialchars(variable or result) - only takes the html characters
$_POST - ' method="post" ' on the form,
it will send through any form info from inputs with a ' name="inputName" '
isset() - variable checker

 -->
