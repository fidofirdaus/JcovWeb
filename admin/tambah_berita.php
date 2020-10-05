<?php
include('../app/config.php');
include('assets/headerAdmin.php');
$id = $_SESSION["id"];
if (isset($_POST['tomboladd'])) {
    if (!isset($_FILES['gambar']['tmp_name'])) {
        echo '<span style="color:red"><b><u><i>Pilih file gambar</i></u></b></span>';
    } else {
        $file_size = $_FILES['gambar']['size'];
        $file_type = $_FILES['gambar']['type'];
        if ($file_size < 2048000 and ($file_type == 'image/jpeg' or $file_type == 'image/png' or $file_type == 'image/jpg')) {
            global $id;
            $image   = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
            $judul = $_POST['judul'];
            $isi = $_POST['isi'];
            $tanggal = date('Y-m-d');
            $penulis = $id;
            mysqli_query($db, "INSERT INTO berita (gambar,tipe_gambar,judul,isi,tanggal,penulis) VALUES ('$image','$file_type','$judul','$isi','$tanggal','$penulis')");
            header("location:berita.php");
        } else {
            echo '<span style="color:red"><b><u><i>Ukuran File Terlalu Besar / Tipe File Gambar Tidak Sesuai</i></u></b></span>';
        }
    }
}
?>

<div class="container" style="margin-top: 80px; margin-bottom:20px;">
    <h1>Tambah Data Berita</h1>
    <form method="POST" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleFormControlFile1">Pilih File Gambar</label>
            <input type="file" name="gambar" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Judul Berita</label>
            <input type="text" name="judul" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="form-group">
            <label for="isi">Isi Berita</label>
            <textarea class="form-control" name="isi" id=""></textarea>
        </div>
        <input type="submit" value="Submit" class="btn btn-success" name="tomboladd">
    </form>
</div>