<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>||| 01 |||</title>
    <link rel="stylesheet" href="./01.css">
</head>
<body class="juodas"

<?php
$sp = $_GET['spalva'];
if ($sp !== null) {

   echo "style='background-color: #{$sp}'";

}
?>
>
    <a class="baltas" href="http://localhost/php-2/web_mech/02.php">BE GET</a>
    <br>
    <br>
    <form action="" method="get">

        <span class="baltas">Iveskite spalvos koda:</span> <input type="text" name="spalva">
        <button type="submit">FONO SPALVA</button>

    </form>
</body>
</html>
