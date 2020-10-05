<?php
include '../app/config.php';
include 'assets/header.php';
$id = $_GET['id'];
$query = mysqli_query($db, "SELECT b.id, b.judul, b.tanggal, b.isi, u.nama as nama_penulis FROM berita b JOIN users u ON b.penulis=u.id WHERE b.id=$id");
$data = mysqli_fetch_assoc($query);
?>

<div class="container" style="margin-bottom: 20px; margin-top:90px;">
    <a style="margin-top: 10px;" href="berita.php" class="btn btn-info btn-sm">Kembali</a><br><br>
    <h1><?= $data['judul'] ?></h1>
    <img style="height:300px; width:450px;" src="image.php?id=<?php echo $data['id']; ?>" /><br>
    <small style="color: #cfcfcf;">Penulis : <?= $data['nama_penulis'] ?>, Diposting pada <?= $data['tanggal'] ?></small>
    <p style="white-space: pre-line; font-weight:300"><?= $data['isi'] ?></p>
</div>

<?php include('assets/footer.php'); ?>