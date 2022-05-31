<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06 WEB mechanika</title>
</head>
<body 
<?php
if($_SERVER['REQUEST_METHOD'] == 'GET') {

    echo "style='background-color: green'";
}
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    echo "style='background-color: yellow'";
}


echo "style='background-color: {$spalva}'";
 ?> 
 >
    <form action="" method="get" ><button>I ŽALIA</button></form>
    
    <form action="" method="post"><button>I GELTONA</button></form>
    
</body>
</html>