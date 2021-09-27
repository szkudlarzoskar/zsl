<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
if(!empty($_GET['name']) && !empty($_GET['nationality'] && !empty($_GET['age'])))
{
    echo  <<< E
    $_GET[name] $_GET[nationality] $_GET[age]
    E;
    }else{
        echo "wypelnij wszystkie pola";
    }
    ?>
    
</body>
</html>