<?php
/**
 * Created by PhpStorm.
 * User: Tammo Laptop
 * Date: 11-5-2016
 * Time: 10:17
 */
include('classes/artiesten.php');
$artiest = new Artiesten('Thimo Jonker', 'Tammo', 'Nederland', 'Zaandam', '8-11-1997', 'thimojonker.nl', 'LOREM IPSUM');
$artiest->Aanmaken($artiest);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OOP - 1</title>
    <link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
</head>
<body>

</body>
</html>
