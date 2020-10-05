<?php include('assets/headerAdmin.php');
include('../app/config.php');
$get_data = mysqli_query($db, "SELECT p.*,u.nama,u.nik,u.jenis_kelamin,u.alamat FROM pelaporan p JOIN users u ON p.id_pengirim=u.id")
?>

<div class="container" style="margin-top: 80px; margin-bottom:100px;">
    <div class="section-title" data-aos="fade-up">
        <p>Data Pelaporan</p>

        <table class="table table-bordered" style="margin-bottom: 150px">
            <thead class="table-warning">
                <tr>
                    <th scope="col" style="width: 50px" class="text-center">NO</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">NIK</th>
                    <th class="text-center">Jenis Kelamin</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">Gejala</th>
                    <th class="text-center">Keluhan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($data = mysqli_fetch_array($get_data)) {
                ?>
                    <tr>
                        <td scope="row" class="text-center"><?= $no; ?></td>
                        <td><?= $data['nama'] ?></td>
                        <td><?= $data['nik'] ?></td>
                        <td><?= $data['jenis_kelamin'] ?></td>
                        <td><?= $data['alamat'] ?></td>
                        <td><?= $data['gejala'] ?></td>
                        <td><?= $data['keluhan'] ?></td>
                    </tr>
                <?php
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php include 'assets/footerAdmin.php'; ?>