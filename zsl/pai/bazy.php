<html lang="pl" dir="ltr"> 
<head>
    <meta charset="utf-8">
    <title>Uzytkownicy</title>
</head>
<body>
<h4>Uzytkownicy</h4>
<?php
$connect = new mysqli("localhost","root","","3pi2t");
$sql = "SELECT * FROM `users`";
$result = $connect->query($sql);
//$user = $result->fetch_assoc();
while ($user = $result->fetch_assoc()){
echo <<< USER
id: $user[id]<br>
imie i nazwisko: $user[name] $user[surname]<br>
data urodzenia $user[birthday]<br>
data utworzenia uzytkownika $user[create_date]
<hr> 

USER;
}
?>


</body>
</html>