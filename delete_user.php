<?php
  if (!empty($_GET['deleteUser'])){
  //echo $_GET['deleteUser'];
  require_once './connect.php';
  $sql="DELETE FROM zsl WHERE zsl.id = $_GET[deleteUser]";
  $connect->query($sql);
  if($connect->affected_rows){
    header("location: ./bazy2.php?error=Prawidlowo usuniety rekord o id=$_GET[deleteUser]");
  }else{
    header('location: ./bazy2.php?error=Nie usunieto rekordu');
  }

}


 ?>
