<?php include('assets/header.php');
include('../app/config.php');
include('../app/functions.php');

$key = '';
$get_data = tampil('penyebaran', $key);

$queryTotal = mysqli_query($db, "SELECT SUM(positif) as totPositif, SUM(sembuh) as totSembuh, SUM(meninggal) as totMeninggal FROM penyebaran");
?>

<div class="container" style="margin-top: 80px;">
    <div class="section-title" data-aos="fade-up" style="margin-bottom: -20px;">
        <p>Data Penyebaran di Kabupaten Jember</p>
    </div>
    <table class="table table-bordered" style="margin-bottom: 80px">
        <thead class="table-warning">
            <tr>
                <th scope="col" style="width: 50px" class="text-center">NO</th>
                <th scope="col" style="width: 300px" class="text-center">KECAMATAN</th>
                <th scope="col" style="width: 150px" class="text-center">POSITIF</th>
                <th scope="col" style="width: 150px" class="text-center">SEMBUH</th>
                <th scope="col" style="width: 150px" class="text-center">MENINGGAL</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            while ($data = mysqli_fetch_array($get_data)) {
            ?>
                <tr>
                    <td scope="row" class="text-center"><?= $no; ?></td>
                    <td class="text-center"><?= $data['kecamatan'] ?></td>
                    <td class="text-center"><?= $data['positif'] ?></td>
                    <td class="text-center"><?= $data['sembuh'] ?></td>
                    <td class="text-center"><?= $data['meninggal'] ?></td>
                </tr>
            <?php $no++;
            } ?>
    </table>
    <div class="section-title" data-aos="fade-up" style="margin-bottom: -20px;">
        <p>Total Kasus COVID-19 di Kabupaten Jember</p>
        <?php
        while ($data = mysqli_fetch_assoc($queryTotal)) {
            $total = $data['totPositif'] + $data['totSembuh'] + $data['totMeninggal'];
        ?>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <div class="card" style="padding: 20px">
                        <img src="assets/img/sad.png" class="img-fluid" style="height: 100px; display:block; margin: 0 auto" alt="...">
                        <div class="card-body">
                            <h3 class="card-title text-center"><?= $data['totPositif'] ?></h3>
                            <h2 class="card-text text-center" style="color: chocolate;">Positif</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="padding: 20px">
                        <img src="assets/img/happy.png" class="img-fluid" style="height: 100px; display:block; margin: 0 auto" alt="...">
                        <div class="card-body">
                            <h3 class="card-title text-center"><?= $data['totSembuh'] ?></h3>
                            <h2 class="card-text text-center" style="color: chocolate;">Sembuh</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="padding: 20px">
                        <img src="assets/img/cry.png" class="img-fluid" style="height: 100px; display:block; margin: 0 auto" alt="...">
                        <div class="card-body">
                            <h3 class="card-title text-center"><?= $data['totMeninggal'] ?></h3>
                            <h2 class="card-text text-center" style="color: chocolate;">Meninggal</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4"></div>
                <div class="col-lg-4 mt-5">
                    <h3 class="text-center">Jumlah Total : <?= $total; ?> Kasus</h3>
                </div>
                <div class="col-lg-4"></div>
            </div>
        <?php } ?>
    </div>
</div>
<?php include 'assets/footer.php'; ?>