<?php
$input = readline("Masukkan angka : ");
$angka = (int) $input;

if ($angka % 2 == 0) {
    echo "GENAP\n";
} else {
    echo "GANJIL\n";
}
