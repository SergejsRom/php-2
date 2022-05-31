<?php
if (isset($_GET['r'])) {
 header('Location: http://localhost/php-2/web_mech/07.php');
 die;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>07 WEB mechanika</title>
</head>
<body 
<?php
if($_SERVER['REQUEST_METHOD'] == 'GET') {

    echo "style='background-color: green'";
}
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    echo "style='background-color: yellow'";
}

 ?> 
 >
    <form action="" method="get" >
        <button>I ŽALIA</button>
    </form>

    <form method="POST" action="http://localhost/php-2/web_mech/07.php?r=1">
        <button type="submit">I GELTONA ir su Redirect i GET(žalia)</button>
    </form>
        
</body>
</html>