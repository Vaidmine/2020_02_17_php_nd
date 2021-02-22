
<h3 style="color:rgb(0, 200, 255); padding-left:80px;"> ***** KITAS SPRENDIMO BUDAS ****** </h3>

<?php
echo '<br><br>**********<br><br>';
echo 'ARVYDO pvz:';
echo '<br><br>**********<br><br>';
echo "3. Sukurkite masyvą iš 10 elementų. <br>
Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų.<br>
Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. <br>
Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).<br>";

$az = range('A', 'Z');
$dviMatisMasyvas = [];

foreach (range(1, 10) as $indexD => $valueD) {
    $ilgis = rand(2,20);
    foreach (range(1, $ilgis) as $indexM => $valueM) { 
        $dviMatisMasyvas[$indexD][$indexM] = $az[rand(0,25)];
    }
    sort($dviMatisMasyvas[$indexD]);
}

_dc($dviMatisMasyvas);
echo '<pre>';
echo '<br>';
print_r($dviMatisMasyvas);
echo '</pre>';
_dc($dviMatisMasyvas);