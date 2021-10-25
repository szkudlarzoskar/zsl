<?php
  if(!empty($_POST['name']) && (!empty($_POST['color']))){
    require_once '../funkcje/1_function.php';
    //echo text();
    echo name('Krystyna').'<hr>';
    $color=$_POST['color'];
    echo "<div style=\"color: $color\">";
    echo 'imie:'.validateString($_POST['name'],$_POST['len'],$_POST['color'])."</div>";
    echo 'narodowosc:'.validateString2($_POST['nationality']);

}
  ?>
