<?php
//$tekstas = 'laba diena';
function h1tag($tekstas , $numeris) {
    return "<h$numeris>$tekstas</h$numeris>";
};
echo h1tag('dfghjkl' , 5);


$string = md5(time());

$rez = preg_replace_callback('/[0-9]+/', 'h1', $string);

// arrow function fn($m) => '<h1 style="display: inline;">'.$m[0].'</h1>',
function h1($m) {

    return '<h1 style="display: inline;">'.$m[0].'</h1>';
}
echo $string;
echo '<br>';

function dalijasi($skaicius) {
    if(is_int($skaicius)){
    $ska = 0;
    for($i = 2; $i < $skaicius; $i++) {
        if ($skaicius % $i === 0) {
            $ska++;
        }
        
    }
    return $ska;
}
}
echo dalijasi(12.6);

$array = [];
for ($i=0; $i < 100; $i++) { 
    $array [] += rand(33,77);
}
print_r ($array);