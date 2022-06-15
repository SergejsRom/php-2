<?php

define('KEY', 1);

//echo KEY;

echo __DIR__ .'/kitas/vienas.php';

//echo '<br>';
//echo 'INDEX';



require __DIR__ .'/kitas/vienas.php';
require __DIR__ .'/kitas/vienas.php';
require __DIR__ .'/dar-kitas/du.php';

$data = require __DIR__ .'/kitas/data.php';

print_r($data);