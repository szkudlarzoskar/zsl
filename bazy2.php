<html lang="pl" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./style.css">
    <title>Uzytkownicy</title>
</head>
<body>
<h4>Uzytkownicy</h4>
<?php
$connect = new mysqli("localhost","root","","zsl");
$sql = "SELECT * FROM `zsl`";
$result = $connect->query($sql);
//$user = $result->fetch_assoc();
//if (isset($_GET['error'])){
//  echo $_GET['error']
//}
echo <<< TABLE
    <table>
        <tr>
            <th>id</th>
            <th>imie</th>
            <th>nazwisko</th>
            <th>data urodzenia</th>
            <th>data zalozenia uzytkownika</th>
        </tr>

TABLE;
while ($user = $result->fetch_assoc()){
echo <<< USER
    <tr>
        <td>$user[id]</td>
        <td>$user[name]</td>
        <td>$user[surname]</td>
        <td>$user[birthday]</td>
        <td>$user[create_date]</td>
        <td><a href="./delete_user.php?deleteUser=$user[id]">usun</td>
    </tr>

USER;
}
echo "</table>";
if(isset($_GET['addUser'])){
  echo <<< FORMADDUSER
  <h4>Dodawanie uzytkownika</h4>
  <form action="./add_user.php" method="post">
    <input type="text" name="name" placeholder="podaj imie"><br><br>
    <input type="text" name="surname" placeholder="podaj nazwisko"><br><br>
    <input type="date" name="birthday" placeholder="Podaj date urodzenia"><br><br>
    <input type="text" name="cityid" placeholder="Podaj miasto"><br><br>
    <input type="submit" value="Dodaj uzytkownika"<br><br>
  </form>

FORMADDUSER;
}else{
  echo'<br><a href="./bazy2.php?addUser=">Dodaj uzytkownika</>';
}
?>

</body>
</html>
