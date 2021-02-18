<h2 style="color:rgb(0, 200, 255); padding-left:80px;">***** DVIMAČIAI MASYVAI ****** </h2>
<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 3 ****** </h3>
<?php

echo '<br>';
echo "3. Sukurkite masyvą iš 10 elementų. <br>
Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų.<br>
Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. <br>
Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).<br>";

$array3 = [];
// $random = rand(2,20);
foreach (range(1, 5) as $index1 => $_) {
    foreach (range(rand(2, 20), rand(2, 20)) as $index2 => $_) {
        $array3[$index1][$index2] = chr(rand(65, 90));
    }
}
echo '<br><br>';
echo '<pre>';
print_r($array3); 
print_r($array3[0]); // spausdinam nulint'aji elementa
echo '</pre>';

echo "raidžių spausdinimas su ciklu FOREACH<br>";
foreach ($array3 as $arr) {
    foreach ($arr as $letter) {
        echo $letter . ", "; // spausdinam atskiras raides
    }
    echo "<br>";
}
echo "raidžių spausdinimas, bet su ciklu FOR <br>";
for ($i=0; $i < count($array3) ; $i++) { 
    for ($k=0; $k < count($array3[$i]) ; $k++) { 
        echo $array3[$i][$k]. ", ";
    }
    echo "<br>";
}

// foreach ($array3[0] as $key => $value) {
//     echo $value.", ";
// }

?>