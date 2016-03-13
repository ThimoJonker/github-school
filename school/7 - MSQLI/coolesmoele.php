<?php
/**
 * Created by PhpStorm.
 * User: tammo
 * Date: 13-3-2016
 * Time: 15:51
 */

include 'database.php';

$con = connectDB();

$random = selectRandom();
echo $random;

$result = $con->query("SELECT image, name FROM image WHERE id = '$random'");


function checkHowManyImages(){
    $con = connectDB();
    $aantalImage = $con->query("SELECT COUNT(image) FROM image");
    $row = $aantalImage->fetch_row();
    return $row[0];
}
function selectRandom(){
    $random = rand(1, checkHowManyImages());
    return $random;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coole smoele</title>
    <link rel="stylesheet" href="style.css">
    <link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<div class = "container">
    <div class="wrapper">
        <div class="text-center">
            <h3>Coole smoele</h3>
            <?php while  ($row = mysqli_fetch_array($result)): ?>
                <img src="<?php echo $row["image"] ?>" alt="<?php echo $asd = $row["name"] ?>" class="img-thumbnail ">
            <?php endwhile; ?>
        </div>
        <br />
        <form action="" method="post" class="text-center">

            <input style="margin-right: 0 !important;" class="btn btn-success" type="submit" name="cool" value="Cool">
            <input class="btn btn-danger" type="submit" name="nietcool" value="Niet Cool">
        </form>
        <?php echo $asd ?>
    </div>
</div>
</body>
</html>

<?php
if(isset($_POST['cool'])){
    $con2 = connectDB();
    $con2->query("UPDATE image SET cool = cool + 1 WHERE id = '$random'");
}
?>