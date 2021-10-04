<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if (!isset($_POST['person']) && !isset($_POST['buttonavg'])){
        echo <<< FORMCOUNTPERSON
        <h3>Ilosc osob w rodzinie</h3>
    <form method="post">
      <input type="number" name="person" placeholder="podaj Ilosc"><br></br>
      <input type="submit" value="zatwierdz">
    </form>
    FORMCOUNTPERSON;
  }
  ?>

  <?php
  if (!empty($_POST['person'])) {
    echo "<h3>ilosc osob w rodzinie: $_POST[person]</h3>";
      echo <<< FORMAGEPERSON
      <form method="POST">
FORMAGEPERSON;
        for ($i=1; $i <= $_POST['person']; $i++){
          echo "<input type\"number\" name=\"age$i\" placeholder=\"podaj wiek $i\"><br></br>";
}
            echo '<input type="submit" name="buttonavg" value="oblicz sredni wiek">';
            echo <<< FORMAGEPERSON
            </form>
  FORMAGEPERSON;
}
if (isset($_POST['buttonavg'])) {
  //print_r($_POST);
  $ageAvg=0;
  foreach ($_POST as $key => $value) {
    echo "$key $value<br>";
    if ($key !='buttonavg') {
    $ageAvg=$ageAvg+$value;
  }
  }
    echo "sredni wiek: $ageAvg";
}
//dodaj zaokraglenie po przecinku (number_format)
//wyswietl poczatkujacy formularz (header('location'))
    ?>
  </body>
</html>
