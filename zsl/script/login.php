<?php
  if (password_verify(string $pass, string $hash)){
    echo "ok";
  }else{
    echo "error";
  }
 ?>
