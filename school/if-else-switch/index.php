<?php
/**
 * Created by PhpStorm.
 * User: Tammo Laptop
 * Date: 3-2-2016
 * Time: 10:46
 */
?>

<form name="form" action="#" method="post">
    <h2>vul een je cijfer in</h2>
    <input type="text" name="number" value="">
    <input type="submit" name="submit" value="Zoek">
</form>



<?php
if(isset($_POST['submit'])) {

    $number = $_POST['number'];

    if ($number <= 5) {
        echo 'Onvoldoende!!';
    }
    elseif($number > 5 && $number <= 8){
        echo 'Voldoende';
    }
    elseif($number > 8 && $number <= 10){
        echo 'Goed';
    }
    else{
        echo 'Fraude';
    }
}
?>

<form name="form" action="#" method="post">
    <h2>vul een je leeftijd in</h2>
    <input type="text" name="geboorte" value="">
    <input type="submit" name="submitGJ" value="Zoek">
</form>

<?php
if(isset($_POST['submitGJ'])) {
    $GJ = $_POST['geboorte'];

    if($GJ + 10 >= 1970 && $GJ + 10 <= 1979){
        echo "Uit de seventies";
    }
    elseif($GJ + 10 >= 1980 && $GJ + 10 <= 1989) {
        echo "Uit de eighties";
    }
    elseif($GJ + 10 >= 1990 && $GJ + 10 <= 1999) {
        echo "Uit de nineties";
    }
    elseif($GJ + 10 >= 2000 && $GJ + 10 <= 2009 ){
        echo "Uit de zeros";
    }
}
?>

