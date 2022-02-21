<?php
  require_once './connect.php';
  $pass = password_hash($_POST['pass1'], PASSWORD_DEFAULT);
  //$pass = password_hash($_POST['pass1'], PASSWORD_ARGON2ID);
  $sql = "INSERT INTO `users` (`id`, `name`, `email`, `pass`, `create_user`) VALUES (NULL, '$_POST[name]', '$_POST[email1]', '$pass', CURRENT_TIMESTAMP());";
  $result = $conn -> query($sql);
  header('location: ../index.php');
 ?>
