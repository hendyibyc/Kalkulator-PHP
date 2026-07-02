<?php
echo "=========================================\n";
echo "     KALKULATOR NILAI MAHASISWA UPATIK\n";
echo "=========================================\n";

// 1) Ambil input nama
$nama = readline("Masukkan Nama Mahasiswa: ");

// 2) Ambil input nilai
$inputNilai = readline("Masukkan Nilai Akhir  (0-100): ");

// 3) VALIDASI: bukan angka? atau di luar 0-100?
if (!is_numeric($inputNilai) || $inputNilai < 0 || $inputNilai > 100) {
    echo "Nilai tidak valid! Masukkan angka 0-100.\n";
    exit;
}

$nilai = (int) $inputNilai;

// 4) TODO: tentukan $predikat (A/B/C/D/E) dengan if-elseif-else
if ($nilai >= 85) {
    $predikat = "A";
} elseif ($nilai >= 70) {
    $predikat = "B";
} elseif ($nilai >= 55) {
    $predikat = "C";
} elseif ($nilai >= 40) {
    $predikat = "D";
} else {
    $predikat = "E";
}

// 5) TODO: tentukan $status (LULUS / TIDAK LULUS)
if ($nilai >= 85) {
    $status = "LULUS";
} elseif ($nilai >= 70) {
    $status = "LULUS";
} elseif ($nilai >= 55) {
    $status = "LULUS";
} elseif ($nilai >= 40) {
    $status = "TIDAK LULUS";
} else {
    $status = "TIDAK LULUS";
}

// 6) Cetak hasil
echo "\n=========================================\n";
echo "              HASIL EVALUASI\n";
echo "=========================================\n";
echo "Mahasiswa atas nama " . $nama . " mendapatkan nilai " . $nilai . ".\n";
echo "Predikat: " . $predikat . "\n";
echo "Status: " . $status . "\n";

