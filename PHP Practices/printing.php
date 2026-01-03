<?php
$txt1 ="Good Morning";
$txt2 = "Night";
echo" <h2>$txt1</h2>";
echo" <p> Study Php at $txt2 </p>";
echo '<h2>' . $txt1 . '</h2>';

echo '<h1> Study php at ' .$txt2. '</h1>';


?>
<?php
$txt ="Hellow World     ";
$a =10.5;
$y =10.5;
echo "==== $txt" .$a. "! <br>";
echo $a + $y ."<br>";

?>

<?php
$cars = array("Honda", "BMW" ,"Toyota", "OOOOD");
var_dump($cars);
?>

<?php
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

echo $car["model"]; 


foreach ($car as $x => $y) {
  echo " <br> $x: $y <br>";
}
?>

<?php
class Car {
  public $model = "VW <br>";
}

$herbie = new Car();

echo $herbie->model;
?>

<?php


for($x=0; $x <= 10 ; $x++){
    echo "The nunber is: $x <br>"; 
}

?>
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
?>

<?php
function addNumbers(int $a, int $b) {
return $a + $b;
}
echo addNumbers(5, 5);
?>

<?php
class Fruit {
// Properties
public $name;
// Methods
function set_name($name) {
$this->name = $name;
}
function get_name() {
return $this->name;
}
}
$apple = new Fruit();
$apple->set_name('Apple');
echo $apple->get_name();
?>


<?php
$color = "red";
echo "My car is " . $color . "<br>";
//echo "My house is " . $COLOR . "<br>";
//echo "My boat is " . $coLOR . "<br>";
?>
<?php
$x = 5985;
var_dump($x);
?>
<?php
$x = 10.365;
var_dump($x);
?>
<?php
$x = "Hello world!";
$x = null;
var_dump($x);
?>
