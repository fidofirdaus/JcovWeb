<?php
include('../app/config.php');
include('assets/header.php');
$query = mysqli_query($db, "SELECT * FROM berita");
?>

<main style="margin-bottom: 30px; margin-top:90px;" id="main">
    <div class="container">
        <div class="section-title" data-aos="fade-up" style="margin-bottom: -20px;">
            <p>Berita Terkini</p>
        </div>
        <div class="row">
            <?php while ($row = mysqli_fetch_array($query)) { ?>
                <div class="col-lg-4 col-md-4" style="margin-top: 20px;">
                    <div class="card">
                        <img src="image.php?id=<?= $row['id'] ?>" class="card-img-top" style="height: 250px;">
                        <div class="card-body" style="height: 150px;">
                            <h5 class="card-title"><?= $row['judul'] ?></h5>
                            <div class=" text-center"><a href="detail_berita.php?id=<?= $row['id'] ?>" class="btn btn-success">Detail Berita</a></div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</main>

<?php include('assets/footer.php'); ?>