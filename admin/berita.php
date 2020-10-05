<?php
include('../app/config.php');
include('assets/headerAdmin.php');
$query = mysqli_query($db, "SELECT B.*,U.nama FROM berita B, users U WHERE U.level = 'admin'");
?>

<div class="container" style="margin-top: 80px;">
    <div class="section-title" data-aos="fade-up" style="margin-bottom: -20px;">
        <p>Menu Berita</p>
    </div>
    <a class="btn btn-info" style="margin-bottom: 15px;" href="tambah_berita.php">Tambah Berita</a>
    <table class="table table-bordered table-hover text-center">
        <thead class="table-dark">
            <tr>
                <th class="text-center">Gambar</th>
                <th class="text-center">Judul</th>
                <th class="text-center">Tanggal</th>
                <th class="text-center">Penulis</th>
                <th class="text-center">Isi</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <?php
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <tbody>
                <tr>
                    <td><img src="image.php?id=<?= $row['id']; ?>" width="170" height="100" /></td>
                    <td><?= $row['judul']; ?></td>
                    <td><?= $row['tanggal']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td>
                        <p style="white-space: pre-line;"><?= $row['isi']; ?></p>
                    </td>
                    <td style="width: 15%;"><a class="btn btn-warning btn-sm" href="edit_berita.php?id=<?php echo $row['id']; ?>">Edit</a> | <a class="btn btn-danger btn-sm" href="delete_berita.php?id=<?= $row['id']; ?> " onClick="return confirm('Apakah Anda benar-benar mau menghapusnya?')">Delete</a></td>
                </tr>
            </tbody>
        <?php
        }
        ?>
    </table>
</div>

<?php include('assets/footerAdmin.php'); ?>