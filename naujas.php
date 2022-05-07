<h1>Hej!</h1>

<?php
echo '<h3>Pirmas uzd.</h3>';

$vardas = 'Sergejs';
$pavarde = 'Romanovskis';
$gimimo_metai = 1985;
$einamieji_metai = date("Y");
$amzius = $einamieji_metai - $gimimo_metai;

echo "Aš esu $vardas $pavarde. Man yra $amzius metai(ų)";

echo '<h3>Antras uzd.</h3>';
echo $a = rand(0, 4);
echo '<br>';
echo $b = rand(0, 4);
echo '<br>';
  if ($a === 0 || $b === 0)
    echo 'skaicius 0';
    elseif ($a > $b)
    echo round(($a / $b), 2);
    elseif ($a < $b)
    echo round(($b / $a), 2);
    else 
    echo 'skaiciai lygus';
  
?> 
<h3>Trecias uzd.</h3>
<?php
echo $c = rand(0, 25);
echo '<br>';
echo $d = rand(0, 25);
echo '<br>';
echo $e = rand(0, 25);
echo '<br>';
    if ($c === $d ||$c === $e || $d === $e )
    echo 'skaiciai lygus';
     elseif ($c < $d && $d < $e || $e < $d && $d < $c)
     echo "middle $d";
     elseif ($d < $c && $c < $e || $e < $c && $c < $d)
     echo "middle $c";
     else echo "middle $e";

?> 
<h3>Ketvirtas uzd.</h3>
<?php
echo $side_1 = rand(1, 10); echo '<br>';
echo $side_2 = rand(1, 10); echo '<br>';
echo $side_3 = rand(1, 10); echo '<br>';
if ($side_1 + $side_2 > $side_3 &&
    $side_2 + $side_3 > $side_1 &&
    $side_3 + $side_1 > $side_2)
    echo 'sudaryti galima';
else echo 'sudaryti NEgalima'; echo '<br>';

?> 
<h3>Penktas uzd.</h3>
<?php
echo $r1 = rand(0, 2); echo '<br>';
echo $r2 = rand(0, 2); echo '<br>';
echo $r3 = rand(0, 2); echo '<br>';
echo $r4 = rand(0, 2); echo '<br>';
echo $r_all = "$r1 $r2 $r3 $r4"; echo '<br>';
echo substr_count($r_all,'0'), 'nuliu'; echo '<br>';
echo substr_count($r_all, '1'), 'vienetu'; echo '<br>';
echo substr_count($r_all, '2'), 'dvejatu'; echo '<br>';
?> 
<h3>Sestas uzd.</h3>
<?php
echo $h = rand(1, 6); echo '<br>';
if ($h === 1) echo "<h1>$h</h1>";
elseif ($h === 2) echo "<h2>$h</h2>";
elseif ($h === 3) echo "<h3>$h</h3>";
elseif ($h === 4) echo "<h4>$h</h4>";
elseif ($h === 5) echo "<h5>$h</h5>";
elseif ($h === 6) echo "<h6>$h</h6>";
?> 
<h3>Septintas uzd.</h3>
<?php
echo $spalva = rand(-10, 10); echo '<br>';
if ($spalva < 0) echo "<h3 style= color:green>$spalva</h1>";
elseif ($spalva === 0) echo "<h3 style= color:red>$spalva</h2>";
elseif ($spalva > 0) echo "<h3 style= color:blue>$spalva</h3>";
?> 
<h3>Astuntas uzd.</h3>
<?php
