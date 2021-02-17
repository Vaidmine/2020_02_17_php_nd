<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 1 ****** </h3>

<?php
echo "1. Sugeneruokite masyvą iš 10 elementų, <br>
kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25"; 
echo '<br>';

$masyvas = [];
foreach(range(1,10) as $index1 => $_) {
    foreach(range(1,5) as $index2 => $_) {
    $masyvas[$index1][$index2] = rand(5,25);
    }
}
 
echo '<pre>';
echo "Masyvas užrašytas FOREACH būdu / mažiau kodo nei su ciklu FOR: "; 
echo '<br>';
print_r($masyvas);
// _dc($masyvas);
_d($masyvas);
echo '</pre>';

echo '****************';
 
  
?>

<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 2 ****** </h3>

<?php
// echo "2. Naudodamiesi 1 uždavinio masyvu: <br>
// a)	Suskaičiuokite kiek masyve yra elementų didesnių už 10; <br>
// b)	Raskite didžiausio elemento reikšmę; <br>
// c)	Suskaičiuokite kiekvieno antro lygio masyvų <br> su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.) <br>
// d)	Visus masyvus “pailginkite” iki 7 elementų <br>
// e)	Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir <br> sumas panaudokite kaip reikšmes sukuriant naują masyvą. <br>
// T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, <br>
// turinčio indeksą 0 dideliame masyve, visų elementų sumai"; 
// echo '<br>';
echo '<br>';
echo "Naudodamiesi 1 uždavinio masyvu: <br>
2.a SĄLYGA: <br> Suskaičiuokite kiek masyve yra elementų didesnių už 10."; 
echo '<br>';
$count = 0;
 
foreach($masyvas as $mazas_masyvas) {
    foreach($mazas_masyvas as $reiksmes) {
    if(10< $reiksmes) {
        $count++;
    }
    }
}
 
echo '<br>';
echo '<br>';
echo "2.a  ATSAKYMAS: <br>";
echo "<b>Reikšmių didesnių už 10 šiame masyve yra $count </b> ";
_d($masyvas);
echo '<br><br>';  

echo '<br>';
echo "Naudodamiesi 1 uždavinio masyvu: <br>
2.b SĄLYGA: <br> Raskite didžiausio elemento reikšmę."; 
echo '<br>';

$biggest = 0;
for($i = 0; $i < count($masyvas); $i++) {
    for ($a = 0; $a < 5; $a++) {
        if($masyvas[$i] >= $biggest) {
            $biggest = $masyvas[$i];
            $vieta = $i;
         }
    }
}
echo "2.b ATSAKYMAS: <br>";
echo "<b>Didžiausia masyvo reikšmė $biggest jos pozicija yra: $vieta <br></b>";
echo '<br>';
  
?>

