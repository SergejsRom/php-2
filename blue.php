<?php
if (isset($_GET['r'])) {
 header('Location: http://localhost/php-2/red.php');
 die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLUE</title>
    
</head>
<body style="background:blue;">
<a href="http://localhost/php-2/blue.php?r=1">RED</a>
</body>
</html>