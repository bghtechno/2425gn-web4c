<?php
// ===================================================
// 1. PHP SYNTAX
// ===================================================
// PHP memiliki struktur sintaks seperti bahasa C atau JavaScript,
// namun lebih fleksibel dan sederhana.
// Baris ini akan mencetak teks ke layar.

echo "<h1>Belajar Dasar PHP</h1>";
echo "<p>PHP Syntax adalah cara kita menulis perintah dalam bahasa PHP.</p>";


// ===================================================
// 2. PHP COMMENTS
// ===================================================
// Komentar digunakan untuk memberi penjelasan dalam kode,
// dan tidak akan dijalankan oleh program.

// Ini komentar satu baris

# Ini juga komentar satu baris dengan simbol pagar

/*
Ini adalah komentar multi-baris.
Komentar seperti ini berguna untuk menjelaskan bagian kode yang lebih panjang.
*/


// ===================================================
// 3. PHP VARIABLES
// ===================================================
// Variabel digunakan untuk menyimpan nilai/data.
// Nama variabel diawali dengan tanda $ dan bisa berisi berbagai jenis nilai.

$nama = "Afif Makki";      // Tipe data: string
$umur = 20;                // Tipe data: integer
$tinggi = 160.0;           // Tipe data: float (gunakan titik desimal untuk float)
$isMahasiswa = true;       // Tipe data: boolean

// Menampilkan variabel
echo "<h2>Contoh Variabel</h2>";
echo "Nama: " . $nama . "<br>";
echo "Umur: " . $umur . " tahun<br>";
echo "Tinggi: " . $tinggi . " cm<br>";
echo "Mahasiswa: " . ($isMahasiswa ? "Ya" : "Tidak") . "<br>";


// ===================================================
// 4. PHP ECHO DAN PRINT
// ===================================================
// echo dan print digunakan untuk menampilkan output ke layar.
// Perbedaan kecilnya: echo sedikit lebih cepat, dan bisa mencetak banyak nilai sekaligus.

echo "<h2>Contoh echo dan print</h2>";

echo "Halo, ini dicetak dengan <strong>echo</strong>.<br>";
print "Halo, ini dicetak dengan <strong>print</strong>.<br>";

$kalimat = "Saya sedang belajar PHP.";
echo $kalimat . "<br>";
print $kalimat . "<br>";


// ===================================================
// 5. PHP DATA TYPES
// ===================================================
// PHP mendukung beberapa tipe data dasar:
// String, Integer, Float, Boolean, Array, Object, NULL

echo "<h2>Contoh Tipe Data</h2>";

// STRING
$tipe_string = "Halo, Dunia!";

// INTEGER
$tipe_integer = 2024;

// FLOAT
$tipe_float = 3.14159;

// BOOLEAN
$tipe_boolean = false;

// ARRAY
$tipe_array = array("HTML", "CSS", "PHP");

// NULL
$tipe_null = null;

// Menampilkan tipe data menggunakan var_dump()
echo "Tipe data String: ";
var_dump($tipe_string);
echo "<br>";

echo "Tipe data Integer: ";
var_dump($tipe_integer);
echo "<br>";

echo "Tipe data Float: ";
var_dump($tipe_float);
echo "<br>";

echo "Tipe data Boolean: ";
var_dump($tipe_boolean);
echo "<br>";

echo "Tipe data Array: ";
var_dump($tipe_array);
echo "<br>";

echo "Tipe data Null: ";
var_dump($tipe_null);
echo "<br>";

?>

