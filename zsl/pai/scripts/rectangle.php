<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>prostokąt</h3>
    <form method="post">
        <input type="text" name="sideA" placeholder="podaj bok a">
        <input type="text" name="sideB" placeholder="podaj bok B">
        <input type="submit" value="oblicz"><br></br>
    </form>
    <?php
    if(!empty($_POST['sideA'] && !empty($_POST['sideB']))){
        $sideA=$_POST['sideA'];
        $sideB=$_POST['sideB'];
        $area=$sideA*$sideB;
        $circle=2*$sideA+2*$sideB;

        echo <<< RESULT
        <hr>
        Pole prostokatu wynosi: $area
        Obwod prostokatu wynosi: $circle
        RESULT;
    }else{
        echo "wypelnij wzystkie pola";
    }
    ?>
</body>
</html>