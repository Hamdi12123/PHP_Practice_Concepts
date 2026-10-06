<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php


//Write a program that compares three integer numbers then specifies and prints the greatest and smallest one php    
$a = 15;
$b = 42;
$c = 23;

$greatest = $a;
$smallest = $a;

if ($b > $greatest) { $greatest = $b; }
if ($c > $greatest) { $greatest = $c; }

if ($b < $smallest) { $smallest = $b; }
if ($c < $smallest) { $smallest = $c; }

echo "Numbers: $a, $b, $c<br>";
echo "Greatest: $greatest<br>";
echo "Smallest: $smallest<br>";



//Write a program that prints whether the number is divisible by 3, 5, both, or none of them
echo"<br><br>";

$num = 15;
if ($num % 3 == 0 && $num % 5 == 0) {
    echo "$num is divisible by both 3 and 5.";
} elseif ($num % 3 == 0) {
    echo "$num is divisible by 3.";
} elseif ($num % 5 == 0) {
    echo "$num is divisible by 5.";
} else {
    echo "$num is not divisible by 3 or 5.";
}

//Write a program that prints odd numbers from 2 to 20, another prints even numbers from 35 to 7
echo"<br><br>";
echo "<b>Odd numbers from 2 to 20:</b><br>";
for ($i = 2; $i <= 20; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}

echo "<br><br><b>Even numbers from 35 to 7:</b><br>";
for ($i = 35; $i >= 7; $i--) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}

//Write a program that prints numbers divisible by 2 and 5 at the same time from 50 to 2
echo"<br><br>";
echo "<b>Numbers divisible by 2 and 5 from 50 to 2:</b><br>";
for ($i = 50; $i >= 2; $i--) {
    if ($i % 2 == 0 && $i % 5 == 0) {
        echo $i . " ";
    }
}

//Write a program to find the reverse of a given number
echo"<br><br>";
$num = 12345;
$original = $num;
$reverse = 0;

while ($num > 0) {
    $digit = $num % 10;
    $reverse = ($reverse * 10) + $digit;
    $num = (int)($num / 10);
}

echo "Original number: $original<br>";
echo "Reversed number: $reverse";

//Write a program that calculates lowest common multiplier (LCM) of two positive integer numbers

echo"<br><br>";
$a = 8;
$b = 12;

$max = ($a > $b) ? $a : $b;
$lcm = $max;

while (true) {
    if ($lcm % $a == 0 && $lcm % $b == 0) {
        break;
    }
    $lcm++;
}

echo "LCM of $a and $b is: $lcm";

//Write a program that calculates highest common factor (HCF) of two integer numbers
echo"<br><br>";
$a = 18;
$b = 24;

$x = $a;
$y = $b;

while ($y != 0) {
    $temp = $y;
    $y = $x % $y;
    $x = $temp;
}

echo "HCF of $a and $b is: $x";

//Write a program that produces multiplication table (up to 12*12) using nested loops
echo"<br><br>";
echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse; text-align: center;'>";
echo "<tr style='background-color: #f2f2f2;'><th>*</th>";

for ($i = 1; $i <= 12; $i++) {
    echo "<th>$i</th>";
}
echo "</tr>";

for ($i = 1; $i <= 12; $i++) {
    echo "<tr>";
    echo "<th style='background-color: #f2f2f2;'>$i</th>";
    for ($j = 1; $j <= 12; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

//Write a program that prints whether the number is a prime or non-prime
echo"<br><br>";
$num = 29;
$isPrime = true;

if ($num <= 1) {
    $isPrime = false;
} else {
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}

if ($isPrime) {
    echo "$num is a <b>prime</b> number.";
} else {
    echo "$num is a <b>non-prime</b> number.";
}

//Write a program that prints prime numbers from 10 to 50
echo"<br><br>";
echo "<b>Prime numbers from 10 to 50:</b><br>";

for ($num = 10; $num <= 50; $num++) {
    $isPrime = true;
    
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }
    
    if ($isPrime) {
        echo $num . " ";
    }
}








?>
</body>
</html>