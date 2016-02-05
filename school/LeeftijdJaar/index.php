<?php
/**
 * Created by PhpStorm.
 * User: Thimo
 * Date: 2-9-2015
 * Time: 12:03
 */

$naam = "Thimo";
echo "<h1>". "$naam" . "</h1>";





// Prints something like: Monday
//echo date("l"). "<br/>
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="../../css/bootstrap.min.css" type="text/css" rel="stylesheet" />
</head>
<body>
<div class="container">
    <div class="text-center">
<form name="form" action="#" method="post">
    <h2>In welk jaar ben je geboren?</h2>
    <input class="txtJaar" type="text" name="test" value="">
    <input class="btn btn-info btn-lg btnSubmit" type="submit" name="submit" value="Zoek">
</form>
    </div>
</div>
<?php
if(isset($_POST['submit'])) {

    $username = $_POST['test'];
    $jaar = date('Y');
    $leeftijd = $jaar - $username;

//  Jaar tussen 1900 en dit jaar;
    if($username < 1995 && $username > 1900 ){
        echo '<h3 class="text-center">'."Uw bent voor 1995 geboren en bent " . $leeftijd . " jaar oud.".'</h3>' ;
    }elseif($username > 1900 && $username < $jaar) {
        echo '<h3 class="text-center">'."Je bent na 1995 geboren en bent waarschijnlijk" . $leeftijd . "jaar jong." . '</h3>';
    }
    else{
        echo '<h3 class="text-center">'."Geen geldige geboortedatum ingevoerd!".'</h3>';
    }

}

?>

</body>

<script src="../../js/jquery.js"></script>
<script src="main.js"></script>

</html>




