<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$age = 20;
if ($age >= 18) {
    echo "adult";
} else {
    echo "child";
}
echo "<br>";

$marks = 100;
switch ($marks) {
    case 100:
        echo "A+";
        break;
    default:
        echo "Waa la waayay";
        break;
}




echo"<br>";

$a=15;
$b=42;
$c=7;

$greatest= $a;
if($b > $greatest){$greatest=$b;}
if($c > $greatest){$greatest=$c;}

$smallest= $a;
if($b < $smallest){$smallest=$b;}
if($b < $smallest){$smallest=$b;}

echo "Numbers: $a, $b, $c <br>";
echo "Greatest ; $greatest <br>";
echo "Smallest ; $smallest <br>";


echo"<br>";




$info = array(
    array("ayaan", 1990, "Hodan", "06123455"),
    array("Ahmed", 2001, "Yaaqshid", "06123455"),
    array("Jaamac", 1986, "Shangaani", "06123455")
);

echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Name</th><th>Year</th><th>Degmada</th><th>Tel</th></tr>";

foreach($info as $row){
    echo "<tr>";
    echo "<td>" . $row[0] . "</td>";
    echo "<td>" . $row[1] . "</td>";
    echo "<td>" . $row[2] . "</td>";
    echo "<td>" . $row[3] . "</td>";
    echo "</tr>";
}
echo "</table>";







echo"<br>";  

$Mult = array(
    array(10, 90, 100),
    array(35, 90, 60)
);

if (in_array(1, $Mult[0])) {
    echo "waan so helay";
} else {
    echo "kuma jiro";
}




//Create function in php
echo"<br>";
function sum($x, $y)
{
    //echo "welcome the first example in function";
    $z=$x+$y;
    echo $z;
    //return $z;
}

//Calling function 
 sum(10,90);








 








?>





</body>
</html>
