<?php include('assets/headerAdmin.php');
include('../app/config.php');
include('../app/functions.php');

$key = '';
$get_data = tampil('rumahsakit', $key);

?>

<br><br><br>
<div class="container">
    <div class="section-title" data-aos="fade-up" style="margin-bottom: -20px;">
        <p>Data Rumah Sakit Rujukan</p>
    </div>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal">
        Tambah Data Rumah Sakit
    </button><br><br>
    <table class="table table-bordered" style="margin-bottom: 150px">
        <thead class="table-warning">
            <tr>
                <th scope="col" style="width: 50px" class="text-center">NO</th>
                <th scope="col" style="width: 300px" class="text-center">NAMA</th>
                <th scope="col" style="width: 200px" class="text-center">KECAMATAN</th>
                <th scope="col" class="text-center">ALAMAT</th>
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
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['kecamatan'] ?></td>
                    <td><?= $data['alamat'] ?></td>
                    <td><a href="#" type="button" class="btn btn-warning btn-md text-white" data-toggle="modal" data-target="#editModal<?php echo $data['id']; ?>">Edit</a> |
                        <a href="#" type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#deleteModal<?php echo $data['id']; ?>">Hapus</a></td>
                </tr>
                <!-- Modal Edit-->
                <div class="modal fade" id="editModal<?php echo $data['id']; ?>" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Update Data Rumah Sakit</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form role="form" action="adminrumahsakit.php" method="POST">

                                    <?php
                                    $id = $data['id'];
                                    $query_view = mysqli_query($db, "SELECT * FROM rumahsakit WHERE id='$id'");
                                    while ($row = mysqli_fetch_assoc($query_view)) {
                                    ?>

                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Kecamatan</label>
                                            <input type="text" name="kecamatan" class="form-control" value="<?php echo $row['kecamatan']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" name="alamat" class="form-control" value="<?php echo $row['alamat']; ?>">
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
                                    <h3 class="modal-title">Konfirmasi Hapus Data Rumah Sakit</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <h5 align="center">Apakah anda yakin ingin menghapus data <?php echo $data['nama']; ?><strong><span class="grt"></span></strong> ?</h5>
                                </div>
                                <div class="modal-footer">
                                    <button id="nodelete" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
                                    <a href="../app/delete.php?act=delete_rs&id=<?php echo $data['id']; ?>" class="btn btn-primary">Hapus</a>
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
</div>

<!-- Modal Add -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Rumah Sakit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="adminrumahsakit.php" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Nama Rumah Sakit</label>
                        <input type="text" autocomplete="off" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Rumah Sakit">
                    </div>
                    <div class="form-group">
                        <label for="kecamatan">Nama Kecamatan</label>
                        <input type="text" class="form-control" name="kecamatan" id="kecamatan" placeholder="Masukkan Nama Kecamatan">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="insertdata" class="btn btn-primary">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('assets/footerAdmin.php');

if (isset($_POST['updatedata'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kecamatan = $_POST['kecamatan'];
    $alamat = $_POST['alamat'];

    $cekquery = update("rumahsakit", "id", $id, "nama='$nama',kecamatan='$kecamatan',alamat='$alamat'");
    if ($cekquery) {
        echo "<script>alert('Data berhasil diupdate.'); window.location.href='adminrumahsakit.php';</script>";
    } else {
        echo "<script>alert('Data gagal diupdate.');</script>";
    }
} else if (isset($_POST['insertdata'])) {
    $nama = $_POST['nama'];
    $kecamatan = $_POST['kecamatan'];
    $alamat = $_POST['alamat'];
    $q = simpan("rumahsakit", "nama,kecamatan,alamat", "'$nama','$kecamatan','$alamat'");
    if ($q) {
        echo "<script> alert('Data Berhasil Ditambahkan'); window.location.href='adminrumahsakit.php';</script>";
    } else {
        echo '<script> alert("Data Gagal Ditambahkan") </script>';
    }
}
?>