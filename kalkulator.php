<?php
echo "=========================================\n";
echo "     KALKULATOR NILAI MAHASISWA UPATIK\n";
echo "=========================================\n";

$nama = readline("Silahkan masukkan nama Anda: ");

$inputNilai = readline("Silahkan masukkan nilai akhir Anda (0-100): ");

if (!is_numeric($inputNilai) || $inputNilai < 0 || $inputNilai > 100) {
    echo "Nilai yang Anda masukkan tidak valid. Silahkan masukkan angka 0-100.\n";
    exit;
}

$nilai = (int) $inputNilai;

if ($nilai >= 85) {
    $predikat = "A";
    $status = "Lulus";
} elseif ($nilai >= 70) {
    $predikat = "B";
    $status = "Lulus";
} elseif ($nilai >= 55) {
    $predikat = "C";
    $status = "Tidak Lulus";
} elseif ($nilai >= 40) {
    $predikat = "D";
    $status = "Tidak Lulus";
} else {
    $predikat = "E";
    $status = "Tidak Lulus";
}

echo "\n=========================================\n";
echo "              HASIL PENILAIAN\n";
echo "=========================================\n";
echo "Mahasiswa atas nama: " . $nama . " dengan nilai akhir: " . $nilai . ". \n";
echo "Predikat: " . $predikat . "\n";
echo "Status: " . $status . "\n";
