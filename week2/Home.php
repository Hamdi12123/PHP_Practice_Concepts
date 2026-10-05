<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //if statement example
    $month="March";
    if ($month=="March")
        echo "it's spring time";


    echo "<br><br>";

    //if-else statement

    $marks=48;
    if ($marks >=50)
        echo "pass";
    echo "do not pass";

     echo "<br><br>";

    //for loop example
    for($count=1; $count<=12; ++$count)
        echo "$count times 12 is ". $count*12 . "<br>";

    //while loop
    echo "<br><br>";
    $i=1;
    while ($i<=15){
        echo "$i,";
        $i++;
    }
   
    ?>
</body>
</html>