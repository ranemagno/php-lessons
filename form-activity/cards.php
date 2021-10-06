<?php

$hostName = "localhost";
$userName = "root";
$userPass = "root";
$database = "shop_db";

$db = mysqli_connect($hostName, $userName, $userPass, $database) or die(mysqli_error());

$show_all_products = "SELECT imageURL, title, price, description FROM products";

$result = $db -> query($show_all_products);
if ($result -> num_rows > 0){
  while($row = $result -> fetch_assoc()){

    ?>
    <div class="col-sm-2">
      <div class="card" style="width: 18rem; margin: 2rem;">
        <img class="card-img-top" src="<?php echo $row['imageURL']; ?>" alt="Card image cap">
        <div class="card-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-8">
                <h5 class="card-title align-middle" style="margin"><?php echo $row['title'] ?></h5>
              </div>
              <div class="col" style="margin-top: .6rem;">
                <h6 class="card-subtitle text-muted text-right">$<?php echo $row['price'] ?></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php

  }
} else {
  echo "0 results";
}
?>
