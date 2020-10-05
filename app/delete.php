<?php include 'config.php';
include 'functions.php';

if ($_GET['act'] == 'delete_rs') {
    $id = $_GET['id'];

    $querydelete = hapus('rumahsakit', "id='$id'");

    if ($querydelete) {
        echo "<script>alert('Data berhasil dihapus.'); window.location.href='../admin/adminrumahsakit.php';</script>";
    } else {
        echo "ERROR, data gagal dihapus";
    }
}

if ($_GET['act'] == 'delete_penyebaran') {
    $id = $_GET['id'];

    $querydelete = hapus('penyebaran', "id='$id'");

    if ($querydelete) {
        echo "<script>alert('Data berhasil dihapus.'); window.location.href='../admin/datapenyebaran.php';</script>";
    } else {
        echo "ERROR, data gagal dihapus";
    }
}
