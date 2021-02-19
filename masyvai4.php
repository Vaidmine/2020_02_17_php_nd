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
echo "vieno pasirinkto (nulinio) masyvo elemento spausdinimas <br>";
print_r($array3[0]); // spausdinam nulint'aji elementa
echo '</pre>';

echo "raidžių spausdinimas su ciklu FOREACH<br>";
// minusas tas, kad su FOREACH negalima spausdinti [i]-tojo elemento
foreach ($array3 as $arr) {
    foreach ($arr as $letter) {
        echo $letter . ", "; // spausdinam atskiras raides
    }
    echo "<br>";
}
echo "<br> raidžių spausdinimas, bet su ciklu FOR <br>";
for ($i=0; $i < count($array3) ; $i++) { 
    for ($k=0; $k < count($array3[$i]) ; $k++) { 
        echo $array3[$i][$k]. ", ";
    }
    echo "<br>";
}
echo "<br> raidžių spausdinimas - tarpinis variantas tarp FOR ir FOREACH <br>";

for ($i=0; $i < count($array3) ; $i++) { 
    $vidinisMasyvas = $array3[$i];
    for ($k=0; $k < count($array3[$i]) ; $k++) { 
        $letter = $vidinisMasyvas[$k];
        echo $letter . ", ";
    }
    echo "<br>";
}

echo "  <br>raidžių spausdinimas -  FOREACH su SORT:<br>";
$count = 0;
foreach ($array3 as $pozicija => &$vidinisMasyvas) {
    // if($pozicija % 2 != 0 ){
    //     continue;
    // }
    sort($vidinisMasyvas);
    // print_r($vidinisMasyvas);
    foreach ($vidinisMasyvas as $letter) {
        echo $letter . ", "; // spausdinam atskiras raides
    }
    echo "<br>";
}
echo '<br><br>';
echo '<pre>';
print_r($array3);
echo '</pre>';

// foreach ($array3[0] as $key => $value) {
//     echo $value.", ";
// }



?>


<?php
echo '<br>';
echo  '<h3 style="color:rgb(0, 200, 255); padding-left:80px;"> ***** ND 5 ****** </h3>';
// Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas
//  [user_id => xxx, place_in_row => xxx] user_id atsitiktinis unikalus 
//  skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius 
//  nuo 0 iki 100. 

$userArray = [];
for ($i=0; $i < 30 ; $i++) { 
    //1.susikuri random user_id
    //2.pereini per visus userius ir tikrini ar nesikartoja. 
    //3.jei pasikartojo back to stage one.
    //4. jei unikalus tada dedam i userArray
    $userArray[] = ["user_id" => 7, "place_in_row" => 5];
    
    $userArray[] = ["user_id" => 4, "place_in_row" => 4];
    // if($userAray["user_id"]==" kazkas kazkaip"){
    //     temp = $userArray[i]
    //     $userArray[i] =  $userArray[i+1]
    //     $userArray[i+1] = temp
    // }
}
print_r($userArray);
?>

<?php
echo '<br>';
echo '<h2>6 užduotis </h2>';
// Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. 
// Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.

?>

<?php
echo '<br>';
echo '<h2>7 užduotis </h2>';
// Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du
//  elementus: name ir surname. Elementus užpildykite stringais iš 
//  atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.

?>

<?php
echo '<br>';
echo '<h2>8 užduotis </h2>';
// Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite 
// pagal taisyklę: generuokite skaičių nuo 0 iki 5. 
// Ir sukurkite tokio ilgio masyvą. Jeigu reikšmė yra 0 masyvo nekurkite.
//  Antro lygio masyvo reikšmes užpildykite atsitiktiniais
// skaičiais nuo 0 iki 10. Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 
// įrašykite tiesiogiai.


?>

<?php
echo '<br>';
echo '<h2>9 užduotis </h2>';
// Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite
//  masyvą taip, kad pirmiausiai eitų mažiausios masyvo reikšmės 
//  arba jeigu reikšmė yra masyvas, to masyvo reikšmių sumos.

?>
<?php
echo '<br>';
echo '<h2>10 užduotis </h2>';
// Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų. 
// Antro lygio masyvų reikšmės masyvai su dviem elementais value ir color. 
// Reikšmė value vienas iš atsitiktinai parinktų
//  simbolių: #%+*@裡, o reikšmė color atsitiktinai sugeneruota
//   spalva formatu: #XXXXXX. Pasinaudoję masyvų 
//   atspausdinkite “kvadratą” kurį sudarytų masyvo reikšmės nuspalvintos 
//   spalva color.

?>