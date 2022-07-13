<?php

echo "Tabungan Awal = Rp 150000<br>";
echo "Bunga Setahun = 12.5%<br>";
echo "Total Tabungan Setahun = ?<br>";

// bunga = (12.5 / 100) * 150000
$tabungan = 150000;
$bunga = 12.5;
$bunga = ($bunga / 100) * $tabungan;

$tabungan = $tabungan + $bunga;

echo "Jawaban : Rp $tabungan";
