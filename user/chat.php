<?php include('assets/header.php');
include('../app/config.php');

$id_konsultasi = $_GET["id_konsultasi"];
$id_user = $_SESSION["id"];

$konsultasi = mysqli_query($db, "SELECT * FROM konsultasi WHERE id = $id_konsultasi");

$chat = mysqli_query($db, "SELECT c.id, c.id_konsultasi, u.username, c.balasan, c.tanggal, c.waktu FROM chat c JOIN konsultasi k ON c.id_konsultasi = k.id JOIN users u ON c.id_pengirim = u.id WHERE c.id_konsultasi = $id_konsultasi ORDER BY c.waktu DESC");

if (isset($_POST["submit"])) {
    if ($_POST["balasan"] != "") {
        global $id_user;
        $id_user = $_POST["id_user"];
        $balasan = $_POST["balasan"];
        $id_konsul = $_POST["id_konsultasi"];
        $q = mysqli_query($db, "INSERT INTO chat VALUES ('','$id_user','$id_konsul','$balasan',now(),now())");
        if ($q) {
            echo '<script> alert("Data Berhasil Ditambahkan."); document.location.href = "konsultasi.php"; </script>';
        } else {
            echo '<script> alert("Data Gagal Ditambahkan") </script>';
        }
    } else {
        echo '<script> alert("Harap isi balasan chat") </script>';
    }
}
?>

<div class="container" style="margin-top: 80px; margin-bottom: 80px;">
    <a class="btn btn-info" href="konsultasi.php?id_user=<?= $id_user; ?>">
        Kembali
    </a>
    <br><br>
    <?php foreach ($konsultasi as $key) : ?>
        <div class="media">
            <div class="media-body bg-light">
                <h5 class="mt-0 font-weight-bold"><?= $key["judul"]; ?></h5>
                <p class="tanggal"><?= $key["tanggal"], " | ", $key["waktu"], " WIB"; ?></p>
                <p><?= $key["deskripsi"]; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
    <form float-left action="chat.php" method="POST">
        <div class="container">
            <div class="form-group">
                <h5><label class="font-weight-bold" for="balasan">Balas</label></h5>
                <input type="hidden" name="id_user" value="<?= $id_user; ?>">
                <input type="hidden" name="id_konsultasi" value="<?= $id_konsultasi; ?>">
                <textarea class="form-control" name="balasan" id="balasan" rows="3"></textarea>
            </div>
            <button type="submit" name="submit" id="submit" class="btn btn-success">Kirim</button>
        </div>
    </form>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center line">&nbsp;</div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col col-sm-7 align-self-start">
            <?php foreach ($chat as $key) : ?>
                <div class="media mt-3 p-3" style="border-style: solid; border-color:#E9E4FE; border-width: 1px; box-shadow: 0px 3px 8px #E9E4FE; border-radius: 10px;">
                    <div class="media-body">
                        <h5 class="font-weight-bold"><?= $key["username"]; ?></h5>
                        <p class="tanggal" style=" font-size: 13px;"><?= $key["tanggal"], " | ", $key["waktu"], " WIB"; ?></p>
                        <p style="margin-top:-15px;"><?= $key["balasan"]; ?></p>
                        <a class="btn btn-danger" onclick="return confirm('Yakin ingin hapus data chat?');" href="hapus_chat.php?id_konsultasi=<?= $key["id_konsultasi"]; ?>&id_chat=<?= $key["id"]; ?>" role="button">
                            Hapus
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php include 'assets/footer.php' ?>