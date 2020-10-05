<?php
include('../app/config.php');
$id_konsultasi = $_GET["id_konsultasi"];
$url = 'chat.php?id_konsultasi=' . $id_konsultasi;
if (isset($_GET['id_chat'])) {
    $id = $_GET['id_chat'];
    $querydelete = mysqli_query($db, "DELETE FROM chat WHERE id='$id'");
    if ($querydelete) {
        echo "<script> alert('Data Konsultasi Berhasil Dihapus'); window.location.href='{$url}';</script>";
    }
}
header('location:konsultasi.php');
