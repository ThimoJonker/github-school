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
            <input type="hidden" name="hiddenrandom" value="<?php echo $random; ?>">
            <input style="margin-right: 0 !important;" class="btn btn-success" type="submit" name="cool" value="Cool">
            <input class="btn btn-danger" type="submit" name="nietcool" value="Niet Cool">
        </form>
    </div>
</div>
</body>
</html>
