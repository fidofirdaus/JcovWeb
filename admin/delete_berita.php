<?php
include('../app/config.php');
include('../app/functions.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $querydelete = hapus('berita', "id='$id'");
    if ($querydelete) {
        echo "<script> alert('Data Berhasil Dihapus'); window.location.href='berita.php';</script>";
    }
}
header('location:berita.php');
