<?php
$text= <<< T
ZSŁ - Zespół
Szkół
Łączności
T;

echo "$text<br>";
echo nl2br($text),'<hr>';

$name="JanUSz";
//zamiana liter na małe
echo strtolower($name),'<br>';
//zamiana liter na duze 
echo strtoupper($name),'<br>';

$data="januSZ kOwalSki";
//zamiana pierwsza litere na duza
echo ucfirst($data),'<br>';//JanuSZ kOwalSki
//zamiana wszytskihc pierwszych liter na duze
echo ucwords($data),'<br>';//JanuSZ KOwalSki

$lorem="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga veniam dignissimos nobis aliquam repudiandae? Sequi accusantium doloribus saepe, rem molestias est possimus repellendus a voluptatibus libero impedit! Tempore, eum atque?";
echo "<hr>$lorem</hr>";
$col=wordwrap($lorem, 30, "<br>");
echo $col;

//czyszczemie zawartosci bufora
ob_clean();

//usuwanie białych znakow 
$name="janusz";
$name1=" janusz  ";

echo "długość \$name: ".strlen($name)."<br>";
echo "długość \$name1: ".strlen($name1)."<br>";
echo "długość \$name1: ".strlen(ltrim($name1))."<br>";
echo "długość \$name1: ".strlen(rtrim($name1))."<br>";

//przeszukiwanie ciągów znaków 
echo strstr("janusz@gmail.com","@");
echo strstr("janusz@gmail.com","G");
echo stristr("janusz@gmail.com","G"),'<br>';

$name="Janusz";
echo substr($name, 2),'<br>';
echo substr($name, 2, 3),'<br>';
echo substr($name, -2),'<br>';
echo substr($name, -2, 1),'<br>';
echo substr(strstr("janusz@gmail.com", "@"), 1);
?>