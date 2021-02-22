
<h3 style="color:rgb(0, 200, 255); padding-left:80px;"> ***** KITAS SPRENDIMO BUDAS ****** </h3>

<?php
echo '<br><br>**********<br><br>';
echo "1. Sugeneruokite masyvą iš 10 elementų, <br>
kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25";
echo '<br>';

$dviMatisMasyvas = [];
// naujas tuscias masyvas
foreach (range(1, 10) as $indexD => $valueD) {
    foreach (range(1, 5) as $indexM => $valueM) {
        $dviMatisMasyvas[$indexD][$indexM] = rand(5, 25);
    }
}
echo '<pre>';
echo '<br>';
print_r($dviMatisMasyvas);
_dc($dviMatisMasyvas);
echo '</pre>';

echo '**********<br><br>';
 
$dviMatisMasyvas = []; // naujas tuscias masyvas
foreach (range(1, 10) as $indexD => $valueD) {
    foreach (range(1, 5) as $indexM => $valueM) {
        $dviMatisMasyvas[$indexD][] = rand(5, 25);
    }
}
// [] ---> tuscias masyvas automatiskai generuojamas
// nuo maziausiasio sveiko skaiciaus
// [] ---> 0, 1 ....4
// indekas

echo '**********';

$dviMatisMasyvas = [];
// pirma sukasi MAZASIS masyvas, tada DIDYSIS masyvas
foreach (range(1, 5) as $indexM => $valueM) {
    foreach (range(1, 10) as $indexD => $valueD) {
        $dviMatisMasyvas[$indexD][$indexM] = rand(5, 25);
    }
}
echo '<pre>';
echo '<br>';
print_r($dviMatisMasyvas);
echo '</pre>';
 

echo '**********<br><br>';
echo "2. Naudodamiesi 1 uždavinio masyvu: <br>
a)    Suskaičiuokite kiek masyve yra elementų didesnių už 10; <br>
b)    Raskite didžiausio elemento reikšmę; <br>
c)    Suskaičiuokite kiekvieno antro lygio masyvų <br> su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.) <br>
d)    Visus masyvus “pailginkite” iki 7 elementų <br>
e)    Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir <br> sumas panaudokite kaip reikšmes sukuriant naują masyvą. <br>
T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, <br>
turinčio indeksą 0 dideliame masyve, visų elementų sumai";
echo '<br>';

$didesniunei10 = 0;
$didziausiasElementas = PHP_INT_MIN;
$mas = [];
$sum = [];
_d($didziausiasElementas);
foreach ($dviMatisMasyvas as $indexD => $valueD) {

    $sum = array_sum($valueD);

    foreach ($valueD as $indexM => $valueM) {
        if ($valueM > 10) {
            $didesniunei10++;
        }

        if ($valueM > $didziausiasElementas) {
            $didziausiasElementas = $valueM;
        }
        $mas[$valueM] = ($mas[$indexM] ?? 0) + $valueM;
    }

    $dviMatisMasyvas[$indexD][] = rand(5,25);
    $dviMatisMasyvas[$indexD][] = rand(5,25);
}
// ?? reiskia, kad jei kintamasis neegzituoja imama default reiksme

echo "ATSAKYMAS: <br>";
echo "Didesnių nei 10 yra: <br>";
echo ($didesniunei10);
_dc($didesniunei10);
echo " <br> Didžiausias elementas yra: <br>";
echo ($didziausiasElementas);
_dc($didziausiasElementas);
echo '<br><br>';



_dc($mas);
echo "Suma yra: <br>";
_dc($sum);

?>