<?php

$koszulki = $_POST['koszulki'];
$spodnie = $_POST['spodnie'];
$czapki = $_POST['czapki'];

$cena_koszulki = 7.99 * $koszulki;
$cena_spodnie = 49.12 * $spodnie;
$cena_czapki = 18.35 * $czapki;

$suma_netto = $cena_koszulki + $cena_spodnie + $cena_czapki;

echo "<h1>Netto</h1> <br>";
echo "Cena koszulek netto $koszulki szt. = $cena_koszulki PLN <br>
Cena koszulek netto $spodnie szt. = $cena_spodnie PLN <br>
Cena koszulek netto $czapki szt. = $cena_czapki PLN <br>";
echo "<h1>$suma_netto suma netto</h1> <br>";

echo "<h1>PODATEK 22%</h1> <br>";

$cena_koszulki_b = ($cena_koszulki * 1.22);
$cena_spodnie_b = ($cena_spodnie * 1.22);
$cena_czapki_b = ($cena_czapki * 1.22);

$suma_brutto = $cena_koszulki_b + $cena_spodnie_b + $cena_czapki_b;

echo "<h1>Brutto</h1> <br>";
echo "Cena koszulek brutto $koszulki szt. = $cena_koszulki_b PLN <br>
Cena koszulek brutto $spodnie szt. = $cena_spodnie_b PLN <br>
Cena koszulek brutto $czapki szt. = $cena_czapki_b PLN <br>";
echo "<br><h1>$suma_brutto suma brutto</h1>";

?>