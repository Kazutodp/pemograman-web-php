<?php

$nama = "abdul";
$umur = 20;
$tinggi = 170.5;
$menikah = true;
$hobi = ["membaca", "bermain gitar", "bermain gitar"];

echo "nama saya $nama, umur saya $umur, tinggi saya $tinggi, status saya $menikah, hobi saya $hobi[0],  $hobi[1]";

echo "<br><br>==========================<br><br>";

//operators
$nilai1 = 5;
$nilai2 = 8;
$nilai3 = 15;
$nilai4 = 20;
$nilai5 = 25;

$hasil = $nilai1 + $nilai2 - $nilai3 * $nilai4 /$nilai5;

echo "hasil dari $nilai1 + $nilai2 - $nilai3 * $nilai4 /$nilai5 adalah $hasil";

echo "<br><br>==========================<br><br>";

//penjumlahan
$hasil = $nilai2 + $nilai4;
echo "hasil dari $nilai2 + $nilai4 adalah $hasil";


echo "<br><br>========================<br><br>";

//percabangan
$nilai = 70;

if ($nilai >= 85) {
    echo "Grade: A (sangat baik)";
} elseif ($nilai >=70) {
    echo "Grade: B (cukup baik)";
} elseif ($nilai >=50) {
    echo "Grade: C (perlu belajar lagi)";
} elseif ($nilai >=30) {
    echo "Grade: D (ulang matkul)";
} else {
    echo "Grade: E ";
}