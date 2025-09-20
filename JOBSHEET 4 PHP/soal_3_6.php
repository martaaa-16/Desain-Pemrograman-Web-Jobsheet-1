<?php
$totalKursi = 45;
$kursiTerisi = 28;

$kursiKosong = $totalKursi - $kursiTerisi;
$persenKosong = ($kursiKosong / $totalKursi) * 100;

echo "Total kursi: $totalKursi <br>";
echo "Jumlah kursi terisi: $kursiTerisi <br>";
echo "Jumlah kursi kosong: $kursiKosong <br>";
echo "Persentase kursi kosong: " . number_format($persenKosong, 2) . "%";
?>
