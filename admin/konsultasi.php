<?php include('assets/headerAdmin.php');
include('../app/config.php');

$id_user = $_SESSION["id"];

$konsultasi = mysqli_query($db, "SELECT * FROM konsultasi k JOIN users u ON k.id_user = u.id ORDER BY k.id DESC");
?>

<div class="container" style="margin-top: 80px; margin-bottom: 80px;">
    <form class="form-inline">
        <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search" aria-label="Search" name="keyword" id="keyword">
        <i class="fas fa-search" aria-hidden="true"></i>
        <input type="hidden" name="" value="<?php $id_user ?>" id="id_user">
    </form>

    <div id="container pb-5">
        <?php foreach ($konsultasi as $key) : ?>
            <div class="media mt-3">
                <div class="media-body pt-3 pb-3 pr-3 pl-3" style="border-style: solid; border-color:#E9E4FE; border-width: 1px; box-shadow: 0px 3px 8px #E9E4FE">
                    <h5 class="mt-0 font-weight-bold"><?= $key["username"], " : ", $key["judul"]; ?></h5>
                    <p class="tanggal"><?= $key["tanggal"], " | ", $key["waktu"], " WIB"; ?></p>
                    <p><?= $key["deskripsi"]; ?></p>
                    <a class="btn btn-success mr-3 float-right" href="chat.php?id_konsultasi=<?= $key["id"]; ?>" role="button">
                        Chatting
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'assets/footerAdmin.php' ?>