
<h3 style="color:rgb(0, 200, 255); padding-left:80px;"> ***** KITAS SPRENDIMO BUDAS ****** </h3>

<?php
echo '<br><br>**********<br><br>';
echo 'ARVYDO pvz:';
echo '<br><br>**********<br><br>';
echo "1. Sugeneruokite masyvą iš 10 elementų, <br>
kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25";
echo '<br>';

$dviMatisMasyvas = [];
// naujas tuscias masyvas
foreach (range(1, 10) as $indexD => $valueD) {
    foreach (range(1, 5) as $indexM => $valueM) {
        $masyvas[$indexD][$indexM] = rand(5, 25);
    }
}
echo '<pre>';
echo '<br>';
print_r($dviMatisMasyvas);
echo '</pre>';
_dc($dviMatisMasyvas);

echo '**********<br><br>';

echo '**********';
$dviMatisMasyvas = []; // naujas tuscias masyvas
foreach (range(1, 10) as $indexD => $valueD) {
    foreach (range(1, 5) as $indexM => $valueM) {
        $masyvas[$indexD][] = rand(5, 25);
    }
}
// [] ---> tuscias masyvas automatiskai generuojamas
// nuo maziausiasio sveiko skaiciaus
// [] ---> 0, 1 ....4
// indekas

echo '**********';

$dviMatisMasyvas = [];
// pirma sukasi MAZASIS masyvas, tadad DIDYSIS masyvas
foreach (range(1, 5) as $indexM => $valueM) {
    foreach (range(1, 10) as $indexD => $valueD) {
        $masyvas[$indexD][$indexM] = rand(5, 25);
    }
}
echo '<pre>';
echo '<br>';
print_r($dviMatisMasyvas);
echo '</pre>';
_dc($dviMatisMasyvas);

echo '**********<br><br>';

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
        $mas[$valueM] = ($mas[$indexM] ?? 0) + $valM;
    }

    $dviMatisMasyvas[$indexD][] = rand(5,25);
    $dviMatisMasyvas[$indexD][] = rand(5,25);
}
// ?? reiskia, kad jei kintamasis neegzituoja imama default reiksme

echo "ATSAKYMAS: <br>";
echo ($didesniunei10);
echo ($didziausiasElementas);
echo '<br><br>';

_dc($didesniunei10);
_dc($didziausiasElementas);
_dc($mas);
_dc($sum);

?>