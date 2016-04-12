<?php
/**
 * Created by PhpStorm.
 * User: tammo
 * Date: 13-3-2016
 * Time: 15:51
 */
include 'script2.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coole smoele</title>
    <link rel="stylesheet" href="../11%20-%20Quality-cars/css/style.css">
    <link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<div class="container">
    <div class="wrapper">
        <div class="text-center">
            <h3>Coole smoele</h3>
            <?php $cool = selectRandomImages($random);
            foreach($cool as $x){
            ?><div class="text-center"><img src="<?php echo $x["image"] ?>" alt="<?php echo $x["name"] ?>" class="img-thumbnail "></div>
            <?php }
            ?>
            <br/>
        </div>
        <form action="" method="post" class="text-center">
            <input type="hidden" name="hiddenrandomCool" value="<?php echo $random; ?>">
            <input type="hidden" name="hiddenrandomNietCool" value="<?php echo $random; ?>">
            <input style="margin-right: 0 !important;" class="btn btn-success" type="submit" name="cool" value="Cool">
            <input class="btn btn-danger" type="submit" name="nietcool" value="Niet Cool">
        </form>
        <br/><hr><br/>
        <div class="text-center">
            <h3>Check top 10</h3>
                <?php $top = selectTop();
                foreach($top as $x):
                ?>
                    <div class="text-center col-md-12"><img src="<?php echo $x["image"] ?>" alt="<?php echo $x["name"] ?>" class="img-thumbnail">
                    <div class="text-info"><?php echo $x['cool']; ?></div></div>
                <?php endforeach; ?>
        </div>
    </div>
</div>

</body>
</html>