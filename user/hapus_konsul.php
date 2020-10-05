<?php
include('../app/config.php');
if (isset($_GET['id_konsultasi'])) {
    $id = $_GET['id_konsultasi'];
    $querydelete = mysqli_query($db, "DELETE FROM konsultasi WHERE id='$id'");
    if ($querydelete) {
        echo "<script> alert('Data Konsultasi Berhasil Dihapus'); window.location.href='konsultasi.php';</script>";
    }
}
header('location:konsultasi.php');
