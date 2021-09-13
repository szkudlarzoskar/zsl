<?php
echo PHP_VERSION; //7.4.8
echo 2**10,"<br>";

$x=1;
$y=10;
echo $x<=>$y,'<br>';

// równe / identyczne 
$x=1;
$y=1.0;

echo gettype($x),'<br>'; //integer
echo gettype($y),'<br>'; //duble

if($x==$y) {
    echo "równe<br>";
}else {
    echo "różne<br>";
}

if($x===$y) {
    echo "identyczne";
}else {
    echo "różne";
}

/*
postinkrementacja $x++
preinkrementacja ++$x
postdekreminacja $x--
predekreminacja --$x
*/

$x=2;
echo "<hr>$x";
echo ++$x;
echo $x++;
echo ++$x,'<br>';

$x=1;
echo $x; //1
$x=$x++;
echo $x; //1
$x=++$x;
echo $x; //2
$y=++$x;
echo $x; //3
echo $y; //3
$y=$x++;
echo $x; //4
echo "$y<br>"; //3 


?>