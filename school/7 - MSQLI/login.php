<?php
include 'checklogin.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<div class = "container">
    <div class="wrapper">
        <form action="#" method="post" class="form-signin">
            <h3 class="form-signin-heading">Inloggen!</h3>
            <hr class="colorgraph"><br>

            <input type="text" class="form-control" name="Username" placeholder="Username" />
            <input type="password" class="form-control" name="Password" placeholder="Password" />

            <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>
        </form>
    </div>
</div>
</body>
</html>