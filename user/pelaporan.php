<?php include('assets/header.php');
include('../app/config.php');
$id = $_SESSION["id"];
if (isset($_POST['insert'])) {
    global $id;
    $pengirim = $id;
    $gejala = $_POST['gejala'];
    $keluhan = $_POST['keluhan'];
    $q = mysqli_query($db, "INSERT INTO pelaporan (id_pengirim,gejala,keluhan) VALUES ('$pengirim','$gejala','$keluhan')");
    if ($q) {
        echo '<script> alert("Data Pelaporan Berhasil Ditambahkan. Operator akan menghubungi anda 1X24 jam setelah data diverifikasi") </script>';
    } else {
        echo '<script> alert("Data Gagal Ditambahkan") </script>';
    }
}
?>

<div class="container" style="margin-top: 100px; margin-bottom: 110px;">
    <h2>Pelaporan</h2>
    <p>Isi Form Dibawah Ini Untuk Membuat Laporan </p>
    <form method="POST" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label>Apakah Anda Merasakan Gejala Demam (>= 38 Derajat Celcius) dan/atau Sesak Nafas?</label>
            <select name="gejala" id="" class="form-control" required>
                <option value="">--Pilih--</option>
                <option value="YA">YA</option>
                <option value="TIDAK">TIDAK</option>
            </select>
        </div>
        <div class="form-group">
            <label for="keluhan">Keluhan Yang Saat Ini Anda Rasakan</label>
            <textarea class="form-control" name="keluhan" id="keluhan" required></textarea>
        </div>
        <input type="submit" value="Submit" class="btn btn-success" name="insert">
    </form>
</div>
<?php include 'assets/footer.php'; ?>