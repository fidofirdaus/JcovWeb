<?php include('assets/headerAdmin.php');
include('../app/config.php');
include('../app/functions.php');

$key = '';
$get_data = tampil('penyebaran', $key);

$queryTotal = mysqli_query($db, "SELECT SUM(positif) as totPositif, SUM(sembuh) as totSembuh, SUM(meninggal) as totMeninggal FROM penyebaran");

?>

<br><br><br>
<div class="container">
    <div class="section-title" data-aos="fade-up" style="margin-bottom: -20px;">
        <p>Data Penyebaran di Kabupaten Jember</p>
    </div>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal">
        Tambah Data Penyebaran
    </button><br><br>
    <table class="table table-bordered" style="margin-bottom: 80px">
        <thead class="table-warning">
            <tr>
                <th scope="col" style="width: 50px" class="text-center">NO</th>
                <th scope="col" style="width: 300px" class="text-center">KECAMATAN</th>
                <th scope="col" style="width: 150px" class="text-center">POSITIF</th>
                <th scope="col" style="width: 150px" class="text-center">SEMBUH</th>
                <th scope="col" style="width: 150px" class="text-center">MENINGGAL</th>
                <th scope="col" style="width: 175px" class="text-center">AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            while ($data = mysqli_fetch_array($get_data)) {
            ?>
                <tr>
                    <td scope="row" class="text-center"><?= $no; ?></td>
                    <td><?= $data['kecamatan'] ?></td>
                    <td><?= $data['positif'] ?></td>
                    <td><?= $data['sembuh'] ?></td>
                    <td><?= $data['meninggal'] ?></td>
                    <td><a href="#" type="button" class="btn btn-warning btn-md text-white" data-toggle="modal" data-target="#editModal<?php echo $data['id']; ?>">Edit</a> |
                        <a href="#" type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#deleteModal<?php echo $data['id']; ?>">Hapus</a></td>
                </tr>
                <!-- Modal Edit-->
                <div class="modal fade" id="editModal<?php echo $data['id']; ?>" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Update Data Penyebaran</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form role="form" action="datapenyebaran.php" method="POST">

                                    <?php
                                    $id = $data['id'];
                                    $query_view = mysqli_query($db, "SELECT * FROM penyebaran WHERE id='$id'");
                                    while ($row = mysqli_fetch_assoc($query_view)) {
                                    ?>

                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                                        <div class="form-group">
                                            <label>Kecamatan</label>
                                            <input type="text" name="kecamatan" class="form-control" value="<?php echo $row['kecamatan']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Positif</label>
                                            <input type="text" name="positif" class="form-control" value="<?php echo $row['positif']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Sembuh</label>
                                            <input type="text" name="sembuh" class="form-control" value="<?php echo $row['sembuh']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Meninggal</label>
                                            <input type="text" name="meninggal" class="form-control" value="<?php echo $row['meninggal']; ?>">
                                        </div>

                                        <div class="modal-footer">
                                            <button type="submit" name="updatedata" class="btn btn-success">Update</button>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>

                                    <?php
                                    }
                                    //mysql_close($host);
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal delete -->
                <div class="example-modal">
                    <div id="deleteModal<?= $data['id']; ?>" class="modal fade" role="dialog" style="display:none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title">Konfirmasi Hapus Data Penyebaran</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <h5 align="center">Apakah anda yakin ingin menghapus data Kecamatan <?php echo $data['kecamatan']; ?><strong><span class="grt"></span></strong> ?</h5>
                                </div>
                                <div class="modal-footer">
                                    <button id="nodelete" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
                                    <a href="../app/delete.php?act=delete_penyebaran&id=<?php echo $data['id']; ?>" class="btn btn-primary">Hapus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                $no++;
            }
            ?>
        </tbody>
    </table>
    <div class="section-title" data-aos="fade-up" style="margin-bottom: -20px;">
        <p>Total Data</p>
        <?php
        while ($data = mysqli_fetch_assoc($queryTotal)) {
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
            </div>
        <?php } ?>
    </div>
</div>

<!-- Modal Add -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Penyebaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="datapenyebaran.php" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="kecamatan">Nama Kecamatan</label>
                        <input type="text" autocomplete="off" class="form-control" name="kecamatan" id="kecamatan" placeholder="Masukkan Nama Kecamatan">
                    </div>
                    <div class="form-group">
                        <label for="positif">Jumlah Kasus Positif</label>
                        <input type="text" class="form-control" name="positif" id="positif" placeholder="Masukkan Jumlah Kasus Positif">
                    </div>
                    <div class="form-group">
                        <label for="sembuh">Jumlah Pasien Sembuh</label>
                        <input type="text" class="form-control" name="sembuh" id="sembuh" placeholder="Masukkan Jumlah Pasien Sembuh"></input>
                    </div>
                    <div class="form-group">
                        <label for="meninggal">Jumlah Pasien Meninggal</label>
                        <input type="text" class="form-control" name="meninggal" id="meninggal" placeholder="Masukkan Jumlah Pasien Meninggal"></input>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="insert" class="btn btn-primary">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('assets/footerAdmin.php');

$query = mysqli_query($db, "SELECT * from penyebaran");
$data = mysqli_fetch_array($query);

if (isset($_POST['updatedata'])) {
    $id = $_POST['id'];
    $kecamatan = $_POST['kecamatan'];
    $positif = $_POST['positif'];
    $sembuh = $_POST['sembuh'];
    $meninggal = $_POST['meninggal'];

    $cekquery = update("penyebaran", "id", $id, "kecamatan='$kecamatan',positif='$positif',sembuh='$sembuh',meninggal='$meninggal'");
    if ($cekquery) {
        echo "<script>alert('Data berhasil diupdate.'); window.location.href='datapenyebaran.php';</script>";
    } else {
        echo "<script>alert('Data gagal diupdate.');</script>";
    }
} else if (isset($_POST['insert'])) {
    $kecamatan = $_POST['kecamatan'];
    $positif = $_POST['positif'];
    $sembuh = $_POST['sembuh'];
    $meninggal = $_POST['meninggal'];
    if ($kecamatan != $data['kecamatan']) {
        $q = mysqli_query($db, "INSERT INTO penyebaran (kecamatan,positif,sembuh,meninggal) VALUES ('$kecamatan','$positif','$sembuh','$meninggal')");
        if ($q) {
            echo "<script> alert('Data Berhasil Ditambahkan'); window.location.href='datapenyebaran.php';</script>";
        } else {
            echo '<script> alert("Data Gagal Ditambahkan") </script>';
        }
    } else {
        echo "<script> alert('Data Kecamatan Sudah Ada Silakan Ganti');</script>";
    }
}

?>