<?php
echo 'zsł<br>';
echo 'zsł<br>';

$name="oskar";
echo "imie: $name<br>";

//konkatenacja
echo "jan"." kowalski<br>";

//typy danych

//całkowity
$calkowita=10;
$bin=0b101; //5
$oct=011; //9
$hex=0x11; //17
echo $hex;

//zmiennoprzecinkowy
$x=10.5;

//logiczny
$prawda=true;
$fałsz=false; //w nazwach zmiennych nie uzywamy poslkich znaków
echo $prawda;
echo $fałsz;

//składnia heredoc
echo <<< E
<hr> Twoje imię: $name<br>
Poznan<br>
ZSŁ<hr>

E;

$tekst = <<< E
<hr> Twoje imię: $name<br>
Poznan<br>
ZSŁ<hr>

E;
echo $tekst;

//składnia nowdoc
echo <<< 'E'
<hr> Twoje imię: $name<br>
Poznan<br>
ZSŁ<hr>

E;
$surname="Nowak";
echo "\$name $surname"; //$name nowak


?>