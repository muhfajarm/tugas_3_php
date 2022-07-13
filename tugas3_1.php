<?php

echo "Jarak kota A - Z = 360 Km<br>";
echo "Kecepatan Motor = 90 Km<br>";
echo "Waktu Tempuh = ?<br>";

// waktu tempuh = (360 / 90) * 60
$jarak = 360;
$kecepatan = 90;

$waktuTempuh = ($jarak / $kecepatan) * 60;

echo "Jawaban : $waktuTempuh Menit";
