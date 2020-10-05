<?php
$dbServername = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'jcov';

$db = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if (!$db) {
    echo "Gagal koneksi";
} else {
}
