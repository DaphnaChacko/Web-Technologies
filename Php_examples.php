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
$f = 100;
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
$f.=" All";
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

$ans = 3 <=>2;
echo "<br>";
echo $ans;
echo "<br>";

$x = array(100,300,400);  
$y = array(45,55,65,400);  
var_dump($x + $y); // union of $x and $y
echo "<br>";

$x = array("a" => "C", "b" => "C++");  
$y = array("b" => "C++","a" => "C" );  
var_dump($x + $y);
echo "<br>";
var_dump($x === $y);
echo "<br>";

echo $color;
echo $lang = $color ?? "C";
echo "<br>";

//Regular Expressions
print_r(preg_split("@\s@", "Here\twe\nlearn  PHP"));
echo "<br>";
echo preg_match("#[d-p]|[a-b]#", "aqs");
echo "<br>";
echo preg_replace("#PHP#","Java","PHP is simple. PHPwas developed in 90s");
echo "<br>";
print_r(preg_grep("#VIT VELLORE#", ["VIT","asasVIT VELLORE", "vitap", "VIT VELLORE", "Vit Vellore","Bhopal VIT"]));
echo "<br>";

$words = [ "leven!", "11even", "Maven12", "Amen", "Eleven","9988776655","19BCD4567"];
$pattern = "/[a-zA-Z\s]+/";
#"/^(17|18|19|20)[A-Z]{3}[0-9]{4}$/";
//"/^1[7-9][A-Z]{3}[0-9]{4} ,^20[A-Z]{3}[0-9]{4} /";

foreach ($words as $word) {

    if (preg_match($pattern, $word)) {
        echo "$word matches the pattern\n";
        echo "<br>";
    } else {
        echo "$word does not match the pattern\n";
        echo "<br>";
    }
}
?>

<!--PHP form handling-->
<html>
<body>
<!-- <form action="welcome.php" method="post">-->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit"> 

</form>
<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  if(empty($name)){
    echo "Name should be filled";
  }
  
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;

//Callback functions
function fn($item) {
  return strlen($item);
}

$strings = ["Ramesh","Tara","Sindu","Salman"];
$lengths = array_map("fn", $strings);
print_r($lengths);
echo "<br>";

$strings = ["Ramesh","Tara","Sindu","Salman"];
$lengths = array_map( function($item) { return strlen($item); } , $strings);
print_r($lengths);

//user defined
function add($op1,$op2) {
  return $op1+$op2;
}

function divide($op1,$op2) {
  return $op1/$op2;
}

function perform($format, $op1,$op2) {
  // Calling the $format callback function
  echo $format($op1,$op2);
}
echo "<br>";
perform("add",2,3);
echo "<br>";
perform("divide",100,5);

//PHP JSON
echo "<br>";
$course = array("B"=>"88", "D"=>"88", "G"=>62);
echo json_encode($course);
echo "<br>";
$arr = array("Theory",88,88,62);
echo json_encode($arr);
echo "<br>";

$jsonobj = '{"B":"88","D":"88","G":"62"}';

$obj=json_decode($jsonobj,true);//returns associative array
print_r($obj);
echo "<br>";
echo $obj["B"];
echo "<br>";
foreach($obj as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
$obj1=json_decode($jsonobj);//returns objects
print_r($obj1);
echo "<br>";
echo $obj1->G;
echo "<br>";
foreach($obj1 as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
//Exception handling
function display($inp) {
  if(empty($inp)) {
    throw new Exception("Empty array", 31);
  }
  return $inp[0];
}

try {
  $arr=[];
  echo display($arr);
  echo "<br>";
  } 
  catch(Exception $ex) {
    $code = $ex->getCode();
    $message = $ex->getMessage();
    $file = $ex->getFile();
    $line = $ex->getLine();
    echo "Exception thrown in $file on line $line: [Code $code] $message";
    echo "<br>";
  }
//Filters
$url = "https:// www. google.com";

// Remove all illegal characters from a url
$url = filter_var($url, FILTER_SANITIZE_URL);

// Validate url
if (!filter_var($url, FILTER_VALIDATE_URL/*or273*/) === false) { 
  echo("$url is a valid URL");
  echo "<br>";
} else {
  echo("$url is not a valid URL");
  echo "<br>";
}

$arr = Array
  (
  "stname" => "Jack",
  "stmarks" => "98",
  "stemail" => "jack@abcde.com",
  );
  
$filters = array
  (
  "stname" => array
    (
    "filter"=>FILTER_CALLBACK,
    "flags"=>FILTER_FORCE_ARRAY,
    "options"=>"ucwords"
    ),
  "stmarks" => array
    (
    "filter"=>FILTER_VALIDATE_INT,
    "options"=>array
      (
      "min_range"=>1,
      "max_range"=>100
      )
    ),
  "stemail"=> FILTER_VALIDATE_EMAIL,
  );
print_r(filter_var_array($arr, $filters));
echo "<br>";

/*File handling */
echo readfile("LAB1.txt");
echo "<br>";
$myfile = fopen("LAB2.txt", "r");
echo fread($myfile,filesize("LAB2.txt"));
echo "<br>";
fclose($myfile);
//Create and write
$filewrt = fopen("LAB3.txt",'w') or die("Unable to open file!");;
$txt = "HTML,CSS,JAVASCRIPT,AJAX,PHP";
fwrite($filewrt, $txt);
fclose($filewrt);
$filewrt = fopen("LAB3.txt",'r');
echo "<br>";
echo fread($filewrt,filesize("LAB3.txt"));
echo "<br>";
fclose($filewrt);
//append
$fileapp= fopen("LAB1.txt",'a');
$txt="THANK YOU";
fwrite($fileapp, $txt);
fclose($fileapp);
$fileapp= fopen("LAB1.txt",'a+');
//echo fread($fileapp,filesize("LAB1.txt"));
echo readfile("LAB1.txt");
echo "<br>";
fclose($fileapp);
//Print string
$myfile = fopen("LAB1.txt", "r");
echo fgets($myfile);
//echo php_ini_loaded_file(); 
?>
</body>
</html>
