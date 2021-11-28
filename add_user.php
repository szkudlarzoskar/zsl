<?php
if(!empty($_POST)){
  foreach ($_POST as $key => $value) {
    //echo "$key: $value<br>";
    if(empty($value)){
    //  echo "<script>history.back()</script>";
    header('location: ./bazy2.php?error=Wypelnikj wszystkie pola!&addUser=');
    exit();
    }
  }
    require_once './connect.php';
    $sql="INSERT INTO `zsl` (`id`, `cityid`, `name`, `surname`, `birthday`, `create_date`) VALUES (NULL, '$_POST[cityid]', '$_POST[name]', '$_POST[surname]', '$_POST[birthday]', current_timestamp());";
    $connect->query($sql);
if($connect->affected_rows){
    header('location: ./bazy2.php?error=dodano uzytkownika');
}else {
    header('location: ./bazy2.php?error=nie dodano uzytkownika');
}

}


 ?>
