<?php
// Konfigurasi koneksi database menggunakan PDO
$host = 'localhost';  // Ganti dengan 'localhost' atau IP yang benar jika perlu
$dbname = 'necturnal_shop';
$username = 'root';    // Ganti dengan username MySQL Anda
$password = '';        // Ganti dengan password MySQL Anda jika ada

try {
    // Koneksi ke database menggunakan PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set error mode untuk pengecekan kesalahan
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Tampilkan pesan kesalahan jika koneksi gagal
    die("Koneksi gagal: " . $e->getMessage());
}
?>
