<?php
echo '<pre>';

echo preg_replace_callback(
      //  '/(.)(\d+?)/',
      '/(.)(\d(\d\d)\d)/',
        'ieskok',
        'sdfghjk'.rand(100, 30000). 'wertyu23444445iop');
echo '<br>';
function ieskok($m) {
    print_r($m);
    return ' -'.$m[0].'- '.'AAAAAAAAAAA';
}

echo '<br>';
$l = [5,5,7,6,8,9,6,1];
$l1 = array_slice($l, -3);
print_r($l1);

$sk = rand(100, 999);
$sk2 = rand(100, 999);
$sk3 = rand(100, 999);


// rand nuo 100iki 999. Parašyti 3 funkcijas, sudėti jas į masyvą, tą masyvą praforyčinti ir kaip argumentą panaudoti sugeneruota rand. Funk daugina ir spausdina gautą argumentą 3, 5, 7 atitinkamai DONE!
echo '<br>';
/* function pirma($sk1) {
    return $sk1 * 3;
    echo $sk1;
}

function antra($sk2) {
    return $sk2 * 5;
}

function trecia($sk3) {
    return $sk3 * 7;
}

$masyvas = [$sk1, $sk2, $sk3];
print_r ($masyvas); */

$masyvas1 = [];
array_push($masyvas1,
fn($a) => $a * 3,
fn($a) => $a * 5,
fn($a) => $a * 7
);

foreach ($masyvas1 as &$go) {
    $go = $go($sk);
}

print_r($masyvas1);


function gen_one_to_three() {
    for ($i = 1; $i <= 3; $i++) {
        yield $i;
    }
}
foreach (gen_one_to_three() as $value) {
    echo "$key => $value<br>";
}
// perstumimas su next i prieki
$transport = ['foot', 'bike', 'car', 'plane'];
echo '<br>';
echo current($transport);

echo '<br>';
echo next($transport);
next($transport);


echo '<br>';
echo current($transport);
// jeigu uz reiksmiu ribos, gauname false


echo '<br>';
echo prev($transport); // su prev atgal
echo '<br>';
echo end($transport); // end i pabaiga
echo '<br>';
echo reset($transport); //reset i pradzia sugrazina