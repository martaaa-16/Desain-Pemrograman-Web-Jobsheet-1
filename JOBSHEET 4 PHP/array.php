<?php
//soal no 5.1
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: " . implode(", ", $nilaiLulus) ."<br>";

//soal no 5.2
$daftarKaryawan = [
    ['Alice' , 7],
    ['Bob' , 3],
    ['Charlie' , 9],
    ['David' , 5],
    ['Eva' , 6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ', $karyawanPengalamanLimaTahun);

//soal no 5.3
$daftarNilai = [
    'Matematika' => [
        ['Alice' , 85],
        ['Bob' , 92],
        ['Charlie' , 78],
    ],
    'Fisika' => [
        ['Alice' , 90],
        ['Bob' , 88],
        ['Charlie' , 75],
    ],
    'Kimia' => [
        ['Alice' , 92],
        ['Bob' , 80],
        ['Charlie' , 85],
    ],
];

$mataKuliah = 'Fisika';

echo "<br>";
echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}

//soal no 5.4
$siswa = [
    ["Alice", 85],
    ["Bob", 92],
    ["Charlie", 78],
    ["David", 64],
    ["Eva", 90],
];

$totalNilai = 0;
foreach ($siswa as $data) {
    $totalNilai += $data[1];
}

$rataRata = $totalNilai / count($siswa);

echo "<br>";
echo "Rata-rata nilai kelas: $rataRata <br>";
echo "Daftar siswa dengan nilai di atas rata-rata:<br>";

foreach ($siswa as $data) {
    if ($data[1] > $rataRata) {
        echo "Nama: {$data[0]}, Nilai: {$data[1]} <br>";
    }
}
?>