<?php
include('../app/config.php');
include('assets/headerAdmin.php');
$id_user = $_SESSION["id"];
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $file_type = $_FILES['gambar']['type'];
    $file_size = $_FILES['gambar']['size'];
    if ($file_size < 4096000 and ($file_type == 'image/jpeg' or $file_type == 'image/png' or $file_type == 'image/jpg')) {
        $image   = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];
        $tanggal = date('Y-m-d');
        $penulis = $id_user;
        mysqli_query($db, "UPDATE berita SET gambar='$image',tipe_gambar='$file_type',judul='$judul',isi='$isi',tanggal='$tanggal',penulis='$penulis' WHERE id='$id'");
        header("location:berita.php");
    } else {
        echo '<span style="color:red"><b><u><i>Ukuruan File / Tipe File Gambar Tidak Sesuai</i></u></b></span>';
    }
}

$id = $_GET['id'];

$result = mysqli_query($db, "SELECT * FROM berita WHERE id=$id");
$data = mysqli_fetch_assoc($result);
?>

<div class="container" style="margin-top:80px;margin-bottom:20px;">
    <h1>Edit Data Artikel</h1>
    <form method="POST" action="edit_berita.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Gambar Saat Ini</label>
            <img src="image.php?id=<?= $data['id']; ?>" width="200" height="150" />
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Pilih File Gambar</label>
            <input type="file" name="gambar" class="form-control-file" id="exampleFormControlFile1" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Judul Artikel</label>
            <input type="text" name="judul" value="<?= $data['judul'] ?>" class="form-control" id="exampleInputEmail1" required>
        </div>
        <div class="form-group">
            <label for="isi">Isi Berita</label>
            <textarea class="form-control" name="isi" id="isi"></textarea>
        </div>
        <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
        <input type="submit" value="Edit" class="btn btn-success" name="edit">
    </form>
</div>