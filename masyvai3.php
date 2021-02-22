<h2 style="color:rgb(0, 200, 255); padding-left:80px;">***** DVIMAČIAI MASYVAI (1-2 užd.) ****** </h2>
<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 1 ****** </h3>


<?php
echo "1. Sugeneruokite masyvą iš 10 elementų, <br>
kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25";
echo '<br>';

$masyvas = [];
foreach (range(1, 10) as $index1 => $_) {
    foreach (range(1, 5) as $index2 => $_) {
        $masyvas[$index1][$index2] = rand(5, 25);
    }
}


echo '<pre>';
echo "Masyvas užrašytas FOREACH būdu <br> (mažiau kodo nei su ciklu FOR): ";
echo '<br>';
print_r($masyvas);
// _dc($masyvas); 
// _dc "display ala Console" spausdinimo budas ekrane, bet juodame / konsoles fone
// _d  "display" tikroje Consoleje
_d($masyvas);
echo '</pre>';

echo '***************************';

echo ' <br> Sample of SORTING with USORT <br> / Rūšiuota pagal mažojo masyvo pirmąji [0] indeksą. <br>';
//Usort — Funkcija - Sort an array by values using a user-defined comparison function
usort($masyvas, function($a, $b) {
    return $a[0] <=> $b[0];
});

_dc($masyvas);

echo '***************************';

// echo "2. Naudodamiesi 1 uždavinio masyvu: <br>
// a)    Suskaičiuokite kiek masyve yra elementų didesnių už 10; <br>
// b)    Raskite didžiausio elemento reikšmę; <br>
// c)    Suskaičiuokite kiekvieno antro lygio masyvų <br> su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.) <br>
// d)    Visus masyvus “pailginkite” iki 7 elementų <br>
// e)    Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir <br> sumas panaudokite kaip reikšmes sukuriant naują masyvą. <br>
// T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, <br>
// turinčio indeksą 0 dideliame masyve, visų elementų sumai";
// echo '<br>';
echo '****************************<br>';
echo  '<h3 style="color:rgb(0, 200, 255); padding-left:80px;"> ***** ND 2A ****** </h3>';
echo "Naudodamiesi 1 uždavinio masyvu: <br>
2.a SĄLYGA: <br> Suskaičiuokite kiek masyve yra elementų didesnių už 10.";
echo '<br>';

$count = 0;
foreach ($masyvas as $mazas_masyvas) {
    foreach ($mazas_masyvas as $reiksmes) {
        if (10 < $reiksmes) {
            $count++;
        }
    }
}

////////////
 
echo "2.a  ATSAKYMAS: <br>";
echo "<b>Reikšmių didesnių už 10 šiame masyve yra $count </b> ";
_d ($count);
echo '<br><br>';

 
echo '******************************<br>';
echo  '<h3 style="color:rgb(0, 200, 255); padding-left:80px;"> ***** ND 2B ****** </h3>';
echo "Naudodamiesi 1 uždavinio masyvu: <br>
2.b SĄLYGA: <br>Raskite didžiausio elemento reikšmę. <br>.";
echo '<br>';

$max = 0;
foreach ($masyvas as $mazas_masyvas){
    foreach ($mazas_masyvas as $vidines_reiksmes) {
        if ($vidines_reiksmes > $max) {
            $max = $vidines_reiksmes;
        }    
    }
}
 
echo "2.b  ATSAKYMAS: <br>";
echo "<b> Didžiausia reikšmė masyve yra $max </b> ";
_d ($max);
echo '<br><br>';
 
 
// echo '</pre>';
// echo '<br><br>';
// echo "2.b ATSAKYMAS: <br>";
// echo "<b>Didžiausia masyvo reikšmė $currentMax <br></b>";



 
echo '******************************<br>';
echo  '<h3 style="color:rgb(0, 200, 255); padding-left:80px;"> ***** ND 2C ****** </h3>';
echo "Naudodamiesi 1 uždavinio masyvu: <br>
2.c SĄLYGA: <br> Suskaičiuokite kiekvieno antro lygio masyvų <br> su vienodais indeksais sumas 
<br> (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.) <br>.";
echo '<br>';
//ISSET - Determine if a variable is considered set, this means if a variable is declared and is different than null.

foreach ($masyvas as $mazas_masyvas){
    foreach ($mazas_masyvas as $key2 => $value){
        if(!isset($suma[$key2])) {
            $suma[$key2] = 0;
        }
            $suma[$key2] +=$value;
    }
}

echo "2.c  ATSAKYMAS: <br>";
echo "<b> Reikšmių suma masyve yra </b> ";
print_r($suma);
_d ($suma);
echo '<br><br>';
 


 
echo '******************************<br>';
echo  '<h3 style="color:rgb(0, 200, 255); padding-left:80px;"> ***** ND 2D ****** </h3>';
echo "Naudodamiesi 1 uždavinio masyvu: <br>
2.d SĄLYGA: <br> Visus masyvus “pailginkite” iki 7 elementų <br>.";
echo '<br>';
echo 'masyvo prailginimas <br>';

 // padidina 2 elementais
 echo '<pre>';
print_r($masyvas);
echo '</pre>'; 

foreach($masyvas as $mazas_masyvas){
    $mazas_masyvas[] = "x";
    $mazas_masyvas[] = "x";
}

 // padidina iki 7 elelemtu
foreach ($masyvas as &$mazas_masyvas) {
    while(count($mazas_masyvas) < 7){
        $mazas_masyvas[] = rand(1,5);
    }
}


echo "2.d  ATSAKYMAS: <br>";
echo "<b> Prailgitas masyvas </b> ";
echo '<pre>';
print_r($masyvas);
echo '</pre>';
echo '<br><br>';

  
 
echo '******************************<br>';
echo  '<h3 style="color:rgb(0, 200, 255); padding-left:80px;"> ***** ND 2E ****** </h3>';
echo "Naudodamiesi 1 uždavinio masyvu: <br>
2.e SĄLYGA: <br> Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir <br> 
sumas panaudokite kaip reikšmes sukuriant naują masyvą. <br>
T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, <br>
turinčio indeksą 0 dideliame masyve, visų elementų sumai. ";
echo '<br>';


$mazas_masyvas_sum = [];
foreach($masyvas as $mazas_masyvas) {
    $mazas_masyvas_sum[] = array_sum($mazas_masyvas);
}
echo '<pre>';
print_r($mazas_masyvas_sum);
echo '</pre>';



?>