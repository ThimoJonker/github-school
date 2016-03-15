<?php
/**
 * Created by PhpStorm.
 * User: tammo
 * Date: 15-3-2016
 * Time: 15:47
 */
include 'database.php';

class Cool{
    var $randomSoms;

    function checkHowManyImages(){
        $con = connectDB();
        $aantalImage = $con->query("SELECT COUNT(image) FROM image");
        $row = $aantalImage->fetch_row();
        return $row[0];
    }
    function selectRandom(){
        $random = rand(1, $this->checkHowManyImages());
        return $random;
    }

    function selectRandomImage(){
        $con = connectDB();
        $random = $this->randomSoms = $this->selectRandom(); // maakt nieuwe random aan

        echo "de random id in de selectRandomImage function is: " . $this->randomSoms; // check if random is the same

        $result = $con->query("SELECT image, name FROM image WHERE id = '$random'");

        while  ($row = mysqli_fetch_array($result)): ?>
            <div class="text-center"><img src="<?php echo $row["image"] ?>" alt="<?php echo $row["name"] ?>" class="img-thumbnail "></div>
        <?php endwhile;

    }
    function cool(){
//        $randomId = $this->randomSoms;
//        echo  "hoi:".$randomId;
////        $randomId = $_POST['randomid'];
////        $con = connectDB();
////        $con->query("UPDATE image SET cool = cool + 1 WHERE id = '$randomId'");
    }

}


$randomimage = new Cool;
$randomimage ->selectRandomImage();
echo "de random id in buiten de selectRandomImage function is: ". $ran = $randomimage->randomSoms; // random id

// Probleem is dat er plus 1 wordt gedaan bij de volgende random omdat de pagina na button click gerefreshed wordt.:-(


if(isset($_POST['cool'])) {
    $randomId = $_POST['hiddenrandom'];
    echo $randomId;
    $con = connectDB();
    $con->query("UPDATE image SET cool = cool + 1 WHERE id = '$randomId'");
}
