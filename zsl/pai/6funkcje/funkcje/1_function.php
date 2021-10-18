<?php
  function text(){
    return "test";
  }
  function name($name){
    return $name;
  }
//zamieni pierwsza litere na duza pozostake znaki male usunie biale znaki
  function validateString($string, $lenght){
    return substr(ucfirst(strtolower(trim($string))), 0, $lenght);



  }
 ?>
