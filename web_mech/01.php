<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>||| 01 |||</title>
    <link rel="stylesheet" href="./01.css">
</head>
<body class="juodas 
<?php
if ($_GET['color'] == 1) {
    ?>
    raudonas
    <?php
}

?>" 



>
    <a class="baltas
    <?php
    if ($_GET['color'] == 1) {
    ?>
    mygtukas
    <?php
}

?>" href="http://localhost/php-2/web_mech/01.php">BE GET</a>
    <br>
    <br>
    <a class="baltas
    <?php
    if ($_GET['color'] == null) {
    ?>
    mygtukas2
    <?php
}

?>
    " href="http://localhost/php-2/web_mech/01.php?color=1">SU GET</a>
</body>
</html>
