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
    <link rel="stylesheet" href="style.css">
    <link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<div class="container">
    <div class="wrapper">
        <div class="text-center">
            <h3>Coole smoele</h3>
            <?php while ($row = mysqli_fetch_array($result)): ?>
                <div class="text-center"><img src="<?php echo $row["image"] ?>" alt="<?php echo $row["name"] ?>" class="img-thumbnail "></div>
            <?php endwhile; ?>
        </div>
        <br/>

        <form action="" method="post" class="text-center">
            <input type="hidden" name="hiddenrandomCool" value="<?php echo $random; ?>">
            <input type="hidden" name="hiddenrandomNietCool" value="<?php echo $random; ?>">
            <input style="margin-right: 0 !important;" class="btn btn-success" type="submit" name="cool" value="Cool">
            <input class="btn btn-danger" type="submit" name="nietcool" value="Niet Cool">
        </form>
        <br/><hr><br/>
        <div class="text-center">
            <h3>Check top 10</h3>
                <?php while ($row2 = mysqli_fetch_array($result2)): ?>
                    <div class="text-center col-md-12"><img src="<?php echo $row2["image"] ?>" alt="<?php echo $row2["name"] ?>" class="img-thumbnail">
                    <div class="text-info"><?php echo $row2['cool']; ?></div></div>
                <?php endwhile; ?>
        </div>
    </div>
</div>

</body>
</html>
