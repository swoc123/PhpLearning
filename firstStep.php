<?php declare(strict_types=1);
$var= false;
$var2= true;
var_dump($var xor $var2);
$t= date("H");
if($t<20){
    echo $t ;
    echo "\n";

    echo ("have a good day");
}
echo "\n";
$array1= ArrAy('bad','good','justok');
foreach ($array1 as $item){
    echo($item . "\n");
}
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach($age as $key => $value){
    echo("$key = $value" . "\n");
}
function familyName($fname) {
    echo "$fname Refsnes\n";
}
function addNumbers(int $a, int $b) {
    return $a + $b;
}
function addNumbers2(float $a, float $b) : float {
    return $a + $b;
}

echo addNumbers2(1.2, 5.8);

echo "\n";

echo addNumbers(5, 6);
echo "\n";


familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
function add_five(&$value) {
    $value += 5;
}

$num = 2;
add_five($num);
echo $num;

$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
echo "\n";
echo $cars[0];

echo "\n";

$cars2 = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);
echo $cars2[0][0].": In stock: ".$cars2[0][1].", sold: ".$cars2[0][2]."\n";

for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>".$cars2[$row][$col]."</li>";
    }
    echo "</ul>";
}

$x = 75;
$y = 25;

function addition() {
    global $x, $y;
    $y = $x <=> $y;
//    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}


addition();
echo $y;
echo "<br>";

function testStatic()
{
    static $g = 0;
    echo $g . "<br>";
    $g++;
    while ($g<3){
        testStatic();
    }
}
function bad(){
    $g ;
    var_dump($g);
}
bad();
testStatic();

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['REMOTE_ADDR'];
echo $_SERVER["REQUEST_METHOD"];
?>
