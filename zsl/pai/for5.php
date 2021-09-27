<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>formularze</title>
</head>
<body>
<h3> dane urzytkownika </h3>  
<form>
<input type="text" name="name" placeholder="podaj imie"><br></br>
<input type="text" name="surname" placeholder="podaj nazwisko"><br></br>
<input type="color" name="color" placeholder="twój ulubiony kolor"><br></br>
<input type="submit" value="zatwierdz dane">
</form>
<?php
if(!empty($_GET['name']) && !empty($_GET['surname'] && !empty($_GET['color']))) {
echo <<< E
imie i nazwisko: $_GET[name] $_GET[surname] $_GET[color]
E;
}else{
    echo "wypelnij wszystkie pola";
}
?>

</body>
</html>