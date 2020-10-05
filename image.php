<?php
include('app/config.php');
if (isset($_GET['id'])) {
    $query = mysqli_query($db, "select * from berita where id='" . $_GET['id'] . "'");
    $row = mysqli_fetch_array($query);
    header("Content-type: " . $row["tipe_gambar"]);
    echo $row["gambar"];
} else {
    header('location:index.php');
}
