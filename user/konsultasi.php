<?php include('assets/header.php');
include('../app/config.php');

$id_user = $_SESSION["id"];

$konsultasi = mysqli_query($db, "SELECT * FROM konsultasi WHERE id_user = $id_user");
?>

<!-- kontainer konsultasi -->
<div class="container bg-white" style="margin-top: 80px; margin-bottom: 80px;">
    <a class="btn btn-primary mt-2" href="tambah_konsul.php" role="button">Buat Konsultasi</a>
    <!-- kolom konsultasi -->
    <?php foreach ($konsultasi as $key) : ?>
        <div class="media mt-3">
            <div class="media-body pt-3 pb-3 pr-3 pl-3" style="border-style: solid; border-color:#E9E4FE; border-width: 1px; box-shadow: 0px 3px 8px #E9E4FE">
                <h5 class="mt-0 font-weight-bold"><?= $key["judul"]; ?></h5>
                <p class="tanggal"><?= $key["tanggal"], " | ", $key["waktu"], " WIB"; ?></p>
                <p><?= $key["deskripsi"]; ?></p>
                <!-- hapus -->
                <a class="btn btn-danger ml-3" onclick="return confirm('Yakin ingin hapus data konsultasi?');" href="hapus_konsul.php?id_konsultasi=<?= $key["id"]; ?>" role="button">
                    Hapus
                </a>
                <!-- chat -->
                <a class="btn btn-success mr-3 float-right" href="chat.php?id_konsultasi=<?= $key["id"]; ?>" role="button">
                    Chatting
                </a>
            </div>
        </div>
    <?php endforeach; ?>
    <!-- kolom konsultasi -->
</div>

<?php include 'assets/footer.php' ?>