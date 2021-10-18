<?php
  if(!empty($_POST['name'])){
    require_once '../funkcje/1_function.php';
    //echo text();
    echo name('Krystyna').'<hr>';
    echo 'imie:'.validateString($_POST['name'],($_POST['lenght']));

}
  ?>
