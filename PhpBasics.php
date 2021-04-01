<?php #declare(strict_types=1); //strict requirement
ECho nl2br("Welcome to server programming!\n");
$x = 5;
$y = 10;
var_dump($x);
function myTest() {
  //global $x, $y;
  //$y = $x + $y;
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}
myTest();
echo $y;
$x="text";
var_dump($x);
//echo to display output
$txt2 = "CSE4004";
echo "<h3 style=\"color:blue\">PHP is interesting!</h3>";
echo 'Study PHP at '.$txt2 . "<br>";
echo 'This ','string ','was ','made ','with multiple parameters.','<br>';
echo "This string spans
multiple lines. The newlines will be
output as well"."<br>";
echo nl2br("This below line will be printed in a new line.\rHTML CRLF"."<br>");

// The argument of echo can be any expression which produces a string
$f = "Hello";
echo "This is echo $f"; 

echo "<br>";
var_dump($f);
echo "<br>";

//Numeric strings
$x = '59.85' + 100;
var_dump(is_numeric($x));
echo "$x <br>";

#Constants
define("SUBJ", strtoupper("Web Technologies"),true);
echo SUBj;
echo "<br>";

define("slots", [
  "B+TB",
  "D+TD",
  "G+TG"
]);
echo  slots[0];
echo "<br>";

class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    echo slots[1];
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
     echo "<br>";
    return "<br>"."My car is a " . $this->color . " " . $this->model . "!";
  }
}


$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();

//functions
//Strict types
function addNumbers(int $a, int $b):int{
  return $a + $b;
}

echo addNumbers(5, "5 days");
echo "<br>";
//default parameters
function setHeight(int $minheight = 50) {
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50

//Arrays
$WT = array("B"=>"88", "D"=>"88", "G"=>"62");

echo $WT['G'];
echo"<br>";

foreach($WT as $x=>$x_value){
echo "$x:$x_value";
echo "<br>";
}
$f.="All";
echo $f;
echo "<br>";
$num = array(11,22,33);
echo $num[2];
echo"<br>";
foreach($num as $n){
echo $n ;
echo"<br>";
}
$age['B'] = "88";
$age['D'] = "88";
$age['G'] = "62";
echo $age['G'];
echo"<br>";

$winter = array (
  array("Theory",88,88,62),
  array("Lab",62,25),
);
echo $winter[0][0];
echo "<br>";
echo $_SERVER['PHP_SELF'];

$ans = 2 <=>3;
echo "<br>";
echo $ans;
echo "<br>";

$x = array(100,300,400);  
$y = array(45,55,65,75);  
var_dump($x + $y); // union of $x and $y
echo "<br>";

$x = array("a" => "C", "b" => "C++");  
$y = array("b" => "C++","a" => "C" );  
var_dump($x === $y);
echo "<br>";

echo $color;
echo $lang = $color ?? "C";
echo "<br>";

print_r(preg_split("@\s@", "Here\twe\nlearn PHP"));
echo "<br>";
echo preg_match("#[a-z]#", "s");
echo "<br>";
echo preg_replace("/PHP/","Java","PHP is simple. PHP was developed in 90s");
echo "<br>";
print_r(preg_grep("#VIT#i", ["VIT AP", "vitap", "VIT Vellore", "Vit Vellore"]));
?>
