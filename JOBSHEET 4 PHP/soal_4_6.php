<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilaiSiswa);

// Buang 2 nilai terendah dan 2 nilai tertinggi
$nilaiDipakai = array_slice($nilaiSiswa, 2, -2);

// Hitung total nilai
$totalNilai = array_sum($nilaiDipakai);

$rataRata = $totalNilai / count($nilaiDipakai);

echo "Nilai yang digunakan: " . implode(", ", $nilaiDipakai) . "<br>";
echo "Total nilai yang digunakan: $totalNilai <br>";
echo "Rata-rata: $rataRata <br>";
?>
