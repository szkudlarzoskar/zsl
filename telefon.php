<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<style>
input{
text-align:center;
background-color: grey;
font-size: 20px;
color: white;
border-radius: 100%;
width: 85px;
-webkit-transition-duration: 0.4s;
transition-duration: 0.4s;

}
div{
text-align: center;
display: inline-block;
}
input:hover{
    background-color: white;
    color: black;
}
</style>
<div>
<form method="post">
    <input type="hidden" name="action" value="submit" />

<input id="1id" type="submit" name="submit" value="  1  
   ">

<input id="2id" type="submit" name="submit" value="2
ABC">

<input id="3id" type="submit" name="submit" value="3
DEF"><br>

<input id="4id" type="submit" name="submit" value="4
GHI">

<input id="5id" type="submit" name="submit" value="5
JKL">

<input id="6id" type="submit" name="submit" value="6
MNO"><br>

<input id="7id" type="submit" name="submit" value="7
PQRS">

<input id="8id" type="submit" name="submit" value="8
TUV">

<input id="9id" type="submit" name="submit" value="9
WXYZ"><br>

<input id="0id" type="submit" name="submit" value="0

"><br><br>
<input id="sid"type="submit" name="submit" value=" space ">
<br><br>
<input type="submit" name="reset" value="reset">

</form>

</div>

<?php
if (isset($_POST['action'])) {
   // $value=explode($_POST['submit'], ' ');
    //var_dump(substr($_POST['submit'], 0, 1));
  //  echo '<br />The ' . $_POST['submit'] . ' submitqween was pressed<br />';

}

if (!isset($_SESSION['input'])) {
    $_SESSION['input']= '';
}
@$_SESSION['input'].=substr($_POST['submit'], 0, 1);

if (isset($_POST['reset'])){
    session_destroy();
}

//echo $_SESSION['input'];

$result=$_SESSION['input'];
//echo $result;
//var_dump($result);
$letters = explode(' ', $result);
$return_value = '';
foreach ($letters as $letter) {
    //var_dump($letter);
    $return_value .= match ($letter) {
        '2' => 'A',
        '22' => 'B',
        '222' => 'C',
        '3' => 'D',
        '33' => 'E',
        '333' => 'F',
        '4' => 'G',
        '44' => 'H',
        '444' => 'I',
        '5' => 'J',
        '55' => 'K',
        '555' => 'L',
        '6' => 'M',
        '66' => 'N',
        '666' => 'O',
        '7' => 'P',
        '77' => 'Q',
        '777' => 'R',
        '7777' => 'S',
        '8' => 'T',
        '88' => 'U',
        '888' => 'V',
        '9' => 'W',
        '99' => 'X',
        '999' => 'Y',
        '9999' => 'Z',
        default=>'',
     };
}

//var_dump($return_value);
echo $return_value;
//session_destroy();



?>
</body>
</html>
