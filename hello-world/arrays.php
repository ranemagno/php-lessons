<h3> Arrays </h3>

<?php

  $cars = array("Volvo", "Nissan", "Toyota");
  // pure php to show array
  print_r($cars);
  echo "<br> The Third Car is - " . $cars[2];

  // Associative array
  $people = array(
    "Joe" => "Yellow",
    "Mary" => "Blue",
    "Larry" => "Black"
  );
  echo "<br>";
  print_r($people);
  echo "<br> This person's favourite color is - " . $people["Larry"];

  //HTML Break (escaping php)
  ?>
  <h3>Loop through array</h3>
  <?php

  // Looping through the array, creating a new array '$person'
  forEach($people as $person) {
    // '$person' shows the properties
    echo $person . "<br>";
  };

  // $key is an existing php object - keys of the object ('$person' is its properties)
  ?>
  <div class = "container-fluid">
    <div class = "row">
      <?php
        forEach($people as $key => $person) {
          // echo $key . " " . $person . "<br>";
          ?>
          <div class="col">
            <div class="card-body">
              <h5 class="card-title"><?php echo $key ?></h5>
              <p class="card-text"><?php echo $key . "'s" ?> favourite color is - <?php echo $person ?></p>
            </div>
          </div>
          <?php
        };
       ?>
    </div>
  </div>
  <?php

  // Animal Activity
  $animals = array(
    "Lion" => "The King of the Jungle",
    "Wolf" => "Loves to Howl",
    "Dog" => "Man's Best Friend"
  );
  forEach($animals as $key => $property){
    echo "<br>";
    echo $key . " - " . $property;
  };

?>
