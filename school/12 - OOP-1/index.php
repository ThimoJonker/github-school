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

CREATE TABLE `artiesten` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`echte_naam` varchar(50) NOT NULL,
`artiestennaam` varchar(50) NOT NULL,
`land` varchar(50) NOT NULL,
`woonplaats` varchar(50) NOT NULL,
`geboortedatum` date NOT NULL,
`website` varchar(100) NOT NULL,
`biografie` varchar(500) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1

</body>
</html>
