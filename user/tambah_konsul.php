<?php include('assets/header.php');
include('../app/config.php');

$id_user = $_SESSION["id"];

if (isset($_POST["submit"])) {
    if ($_POST["judul"] != "") {
        if ($_POST["deskripsi"] != "") {
            global $id_user;
            $_POST["id_user"] = $id_user;
            $judul = $_POST["judul"];
            $deskripsi = $_POST["deskripsi"];
            $q = mysqli_query($db, "INSERT INTO konsultasi VALUES ('','$id_user','$judul','$deskripsi',now(),now())");
            if ($q) {
                echo '<script> alert("Data Konsultasi Berhasil Ditambahkan."); document.location.href = "konsultasi.php"; </script>';
            } else {
                echo '<script> alert("Data Gagal Ditambahkan") </script>';
            }
        } else {
            echo '<script> alert("Harap isi deskripsi keluhan") </script>';
        }
    } else {
        echo '<script> alert("Harap isi judul konsultasi") </script>';
    }
}
?>
<!-- form konsultasi -->
<div class="container" style="margin-top: 80px; margin-bottom: 100px">
    <a class="btn btn-primary mb-3" href="konsultasi.php?id_user=<?= $id_user ?>" role="button">Daftar Konsultasi</a>
    <form float-left action="tambah_konsul.php" method="POST">
        <!-- form judul -->
        <div class="form-group">
            <label class="font-weight-bold" for="judul">Keluhan</label>
            <input type="text" class="form-control" name="judul" id="judul" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Judul keluhan maksimal 38 karakter.</small>
        </div>
        <!-- form deskripsi -->
        <div class="form-group">
            <label class="font-weight-bold" for="deskripsi">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"></textarea>
            <small id="emailHelp" class="form-text text-muted">Beri penjelasan lebih detail pada keluhanmu sehingga mudah dimengerti. .</small>
        </div>
        <button type="submit" name="submit" id="submit" class="btn btn-success">Kirim</button>
    </form>
</div>

<?php include 'assets/footer.php' ?>