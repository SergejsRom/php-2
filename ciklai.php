<?php
echo '<h1>CIKLAI</h1>';
/*Naršyklėje nupieškite linija iš 400 “*”. 
Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”; */
/*for ($a = 1;$a <= 400;$a++){
  echo '*';
  }
  echo '<br>';
  echo 'Ciklo pabaiga';
  echo '<br>';*/
  $eilute = "";
  for ($c = 1;$c <= 400;$c++){
    $eilute .= $i.'*';
    
    }
    echo "<p style= color:green>$eilute</p>";
    echo '<br>';

  /*$b = array_fill(1, 400, '*');
  echo (implode('',$b));
  echo '<br>';
  echo $b;
  echo '<br>';*/

