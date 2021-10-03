<!-- PHP Basics Without HTML F-->
<?php
echo "<h1>Hello World</h1>";
?>

<p>HTML can go here</p>
<p>Hello, <?php echo "Rane"; ?></p>

<?php

// automatically detects that it is an integer type var
$ageVar = 5;
$nameVar = 'Rane';

echo "<h1>My Variables</h1>";
echo "My name is " . $nameVar;
echo ". My age is " . $ageVar . ".";
?>
