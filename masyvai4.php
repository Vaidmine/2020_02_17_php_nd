<h2 style="color:rgb(0, 200, 255); padding-left:80px;">***** DVIMAČIAI MASYVAI (3-10 užd.) ****** </h2>
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

<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 4 ****** </h3>
<?php
echo '<br>';
echo ' Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, <br> 
kad elementai kurių masyvai trumpiausi eitų pradžioje.';
echo '<br><br> Naudojame f-ją SORT.<br>';
sort($array3);
echo '<pre>';
print_r($array3);
echo '</pre>';

?>

<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 5 ****** </h3>
<?php
echo '<br>';
echo "Sukurkite masyvą iš 30 elementų. <br>
Kiekvienas masyvo elementas yra masyvas <br>
[user_id => xxx, place_in_row => xxx] <br>
user_id atsitiktinis unikalus skaičius nuo 1 iki 1000000, <br> 
place_in_row atsitiktinis skaičius nuo 0 iki 100.<br><br>";

echo "<br> f-ja in_array >>> searches an array for a specific value.<br> 
<br> ";

$userArray = [];
$id = [];
for ($i=0; $i < 10 ; $i++) { //  10 o ne 30
    do {
$user_id = rand(1, 1000);
    } while (in_array($user_id, $id));
    $place_in_row = rand(0, 100);
    $id[] = $user_id;
    $userArray[$i] ['user_id']= "$user_id";
    $userArray[$i] ['place_in_row']= " $place_in_row";
}

echo '<pre>';
print_r($userArray);
echo '</pre>';
// NAGLIO>>>
    //1.susikuri random user_id
    //2.pereini per visus userius ir tikrini ar nesikartoja. 
    //3.jei pasikartojo back to stage one.
    //4. jei unikalus tada dedam i userArray
//     $userArray[] = ["user_id" => 7, "place_in_row" => 5];
//     $userArray[] = ["user_id" => 4, "place_in_row" => 4];
//     if($userAray["user_id"]==" kazkas kazkaip"){
//         temp = $userArray[i];
//         $userArray[i] =  $userArray[i+1];
//         $userArray[i+1] = temp;
//     }
// }
?>

<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 6 ****** </h3>
<?php
echo '<br>';
echo 'Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. <br><br>';

echo '<b>N.B. !!!! Vaizdas terminale gali neatitikti "realybės", todėl GERIAU spausdinti (_dc) konsolės vaizdą <br>
treminale vaizdas gali būti "bet koks" t.y. perrūšiuotas neaišku kokia tvarka...</b>';

usort($userArray, function ($a, $b) {
    return $a['user_id'] <=> $b['user_id'];
});

_dc($userArray);  
// echo '<pre>';
// print_r($userArray);
// echo '</pre>';

// ****************

echo '<br> Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.<br>';
usort($userArray, function($a, $b){
    return $b['place_in_row'] <=> $a['place_in_row'];
});

_dc($userArray);  
// echo '<pre>';
// print_r($userArray);
// echo '</pre>';
 

?>

<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 7 ****** </h3>
<?php
echo '<br>';
echo ' Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du <br>
 elementus: name ir surname. Elementus užpildykite stringais iš  <br>
 atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.<br><br>';

 echo ' strlen — Get string length <br>
 chr — Generates characters from different ASCII values <br>
 ASCII Values 65-90 =>>  A - Z';


 $userArray[$i] ['user_id']= "$user_id"; // ateina iš 5 uždavinio
 $userArray[$i] ['place_in_row']= " $place_in_row"; // ateina iš 5 uždavinio

// naujas ciklas varduo ir pavardei
    for ($i = 0; $i < 10; $i++) {
        $name = '';
        $strLenName = rand(5, 15);
        while (strlen($name) < $strLenName) {
            $name .= chr(rand(65, 90));
        }
        $surname = '';
        $strLenSurname = rand(5, 15);
        while (strlen($surname) < $strLenSurname) {
            $surname .= chr(rand(65, 90));
        }

        $userArray[$i] ['name']= "$name";
        $userArray[$i] ['surname']= " $surname";
     
    }
  

    echo '<pre>';
    print_r($userArray);
    echo '</pre>';
    ?>


?>

<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 8 ****** </h3>

<?php
echo '<br>';
echo '<ukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite <br>
pagal taisyklę: generuokite skaičių nuo 0 iki 5. <br>
Ir sukurkite tokio ilgio masyvą. Jeigu reikšmė yra 0 masyvo nekurkite. <br>
 Antro lygio masyvo reikšmes užpildykite atsitiktiniais <br>
skaičiais nuo 0 iki 10. Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 <br>
įrašykite tiesiogiai.<br> <br>';

$array = [];
for ($i = 0; $i < 10; $i++) {
    $random = rand(0, 5);
    echo $random. ' _ ';

    $innerArray = [];
    if ($random === 0) {
        $array[$i] =  rand(0, 10);
    } else {
        for ($j = 0; $j < $random; $j++) {
            $innerArray[$j] = rand(0, 10);
        }
        $array[$i] =  $innerArray;
    }
}
echo '<pre>';
print_r($array);
echo '</pre>';


?>


<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 9 ****** </h3>
<?php
echo '<br>';
echo 'Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite <br>
 masyvą taip, kad pirmiausiai eitų mažiausios masyvo reikšmės <br>
 arba jeigu reikšmė yra masyvas, to masyvo reikšmių sumos.<br><br>';
 echo 'is_array — Finds whether a variable is an array'; 
 $sum = 0;
 foreach ($array as $value) {
     if (is_array($value)) {
         $sum += array_sum($value);
     } else {
         $sum += $value;
     }
 }
 echo "<br> <b> SUMA yra: $sum </b>  <br>";



?>

<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 10 ****** </h3>
<?php
echo '<br>';
echo 'Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų. <br> 
Antro lygio masyvų reikšmės masyvai su dviem elementais value ir color. <br>
Reikšmė value vienas iš atsitiktinai parinktų <br>
simbolių: #%+*@裡, o reikšmė color atsitiktinai sugeneruota <br>
spalva formatu: #XXXXXX. Pasinaudoję masyvų <br>
atspausdinkite “kvadratą” kurį sudarytų masyvo reikšmės  <br>
nuspalvintos spalva color. <br>';

 
?>