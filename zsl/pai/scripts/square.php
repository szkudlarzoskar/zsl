<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Kwadrat</h3>
    <form method="post">
        <input type="text" name="sideA" placeholder="podaj bok a">
        <input type="submit" value="oblicz"><br></br>
    </form>
    <?php
    if(!empty($_POST['sideA'])){
        $sideA=$_POST['sideA'];
        $area=pow($sideA, 2);
        $circle=4*$sideA;

        echo <<< RESULT
        <hr>
        Pole kwadratu wynosi: $area
        Obwod kwadratu wynosi: $circle
        RESULT;
    }else{
        echo "wypelnij wzystkie pola";
    }
    ?>
</body>
</html>