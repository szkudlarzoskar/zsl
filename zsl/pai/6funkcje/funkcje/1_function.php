<?php
  function text(){
    return "test";
  }
  function name($name){
    return $name;
  }
//zamieni pierwsza litere na duza pozostake znaki male usunie biale znaki
  function validateString($string, $len, $color){
    return substr(ucfirst(strtolower(trim($string))), 0, $len);
  }
  function validateString2($nationality){
    return ucfirst(strtolower($nationality));
  }
 ?>
