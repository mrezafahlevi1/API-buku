<?php
$dbserver = "localhost";
$dbname = "buku";
$dbuser = "root";
$dbpassword = "";
$dsn = "mysql:host = {$dbserver};dbname={$dbname}";

$koneksi = null;
try {
    $connection = new PDO($dsn, $dbuser, $dbpassword);
} catch (PDOException $e) {
    die("Koneksi Gagal: " . $e->getMessage());
}