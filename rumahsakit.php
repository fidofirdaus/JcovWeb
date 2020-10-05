<?php
include('assets/header.php');
include('app/config.php');
include('app/functions.php');

$key = '';
$get_data = tampil('rumahsakit', $key);
?>
<div class="container mt-5">
    <div class="section-title" data-aos="fade-up" style="margin-bottom: -20px;">
        <p>Data Rumah Sakit Rujukan</p>
    </div>
    <table class="table table-bordered" style="margin-bottom: 150px">
        <thead class="table-warning">
            <tr>
                <th scope="col" style="width: 50px">NO</th>
                <th scope="col" style="width: 300px">NAMA</th>
                <th scope="col" style="width: 300px">KECAMATAN</th>
                <th scope="col">ALAMAT</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            while ($data = mysqli_fetch_array($get_data)) {
            ?>
                <tr>
                    <th scope="row" class="text-center"><?= $no; ?></th>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['kecamatan'] ?></td>
                    <td><?= $data['alamat'] ?></td>
                </tr>
            <?php
                $no++;
            }
            ?>
        </tbody>
    </table>
</div>

<?php include('assets/footer.php') ?>