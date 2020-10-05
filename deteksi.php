<?php

error_reporting(E_ALL ^ E_NOTICE);

if (isset($_POST['submit'])) {
    // nilai awal
    $poin = 0;
    $nilai = 1;

    // buat variabel u. nampung kunci jawaban 
    $k1 = "ya";
    $k2 = "ya";
    $k3 = "ya";
    $k4 = "ya";
    $k5 = "ya";
    $k6 = "ya";
    $k7 = "ya";
    $k8 = "ya";
    $k9 = "ya";
    $k10 = "ya";
    $k11 = "ya";
    $k12 = "ya";
    $k13 = "ya";
    $k14 = "ya";
    $k15 = "ya";
    $k16 = "ya";
    $k17 = "ya";
    $k18 = "ya";
    $k19 = "ya";
    $k20 = "ya";
    $k21 = "ya";

    /************** SOAL 1 ***************/

    // cek apakah user memilih jawaban 
    if (isset($_POST['s1'])) {

        //mengubah array menjadi string
        $j1 = implode($_POST['s1']);
        if ($j1 == $k1) {
            $poin += $nilai;
        }
    } else {
        echo "<script> alert('Mohon isi dengan lengkap'); window.location.href='deteksi.php' </script>;";
    }


    if (isset($_POST['s2'])) {
        $j2 = implode($_POST['s2']);
        if ($j2 == $k2) {
            $poin += $nilai;
        }
    } else {
        echo "<script> alert('Mohon isi dengan lengkap'); window.location.href='deteksi.php' </script>;";
    }
    if (isset($_POST['s3'])) {

        //mengubah array menjadi string
        $j1 = implode($_POST['s3']);
        if ($j1 == $k1) {
            $poin += $nilai;
        }
    } else {
        echo "<script> alert('Mohon isi dengan lengkap'); window.location.href='deteksi.php' </script>;";
    }


    if (isset($_POST['s4'])) {
        $j2 = implode($_POST['s4']);
        if ($j2 == $k2) {
            $poin += $nilai;
        }
    } else {
        echo "<script> alert('Mohon isi dengan lengkap'); window.location.href='deteksi.php' </script>;";
    }
    if (isset($_POST['s5'])) {

        //mengubah array menjadi string
        $j1 = implode($_POST['s5']);
        if ($j1 == $k1) {
            $poin += $nilai;
        }
    } else {
        echo "<script> alert('Mohon isi dengan lengkap'); window.location.href='deteksi.php' </script>;";
    }


    if (isset($_POST['s6'])) {
        $j2 = implode($_POST['s6']);
        if ($j2 == $k2) {
            $poin += $nilai;
        }
    } else {
        echo "<script> alert('Mohon isi dengan lengkap'); window.location.href='deteksi.php' </script>;";
    }
    if (isset($_POST['s7'])) {

        //mengubah array menjadi string
        $j1 = implode($_POST['s7']);
        if ($j1 == $k1) {
            $poin += $nilai;
        }
    } else {
        echo "<script> alert('Mohon isi dengan lengkap'); window.location.href='deteksi.php' </script>;";
    }


    if (isset($_POST['s8'])) {
        $j2 = implode($_POST['s8']);
        if ($j2 == $k2) {
            $poin += $nilai;
        }
    } else {
        echo "<script> alert('Mohon isi dengan lengkap'); window.location.href='deteksi.php' </script>;";
    }
    if (isset($_POST['s9'])) {

        //mengubah array menjadi string
        $j1 = implode($_POST['s9']);
        if ($j1 == $k1) {
            $poin += $nilai;
        }
    } else {
        echo "<script> alert('Mohon isi dengan lengkap'); window.location.href='deteksi.php' </script>;";
    }


    if (isset($_POST['s10'])) {
        $j2 = implode($_POST['s10']);
        if ($j2 == $k2) {
            $poin += $nilai;
        }
    } else {
        echo "<script> alert('Mohon isi dengan lengkap'); window.location.href='deteksi.php' </script>;";
    }
    if (isset($_POST['s11'])) {

        //mengubah array menjadi string
        $j1 = implode($_POST['s11']);
        if ($j1 == $k1) {
            $poin += $nilai;
        }
    } else {
        echo "<script> alert('Mohon isi dengan lengkap'); window.location.href='deteksi.php' </script>;";
    }


    if (isset($_POST['s12'])) {
        $j2 = implode($_POST['s12']);
        if ($j2 == $k2) {
            $poin += $nilai;
        }
    } else {
        echo "<script> alert('Mohon isi dengan lengkap'); window.location.href='deteksi.php' </script>;";
    }
    if (isset($_POST['s13'])) {

        //mengubah array menjadi string
        $j1 = implode($_POST['s13']);
        if ($j1 == $k1) {
            $poin += $nilai;
        }
    } else {
        echo "<script> alert('Mohon isi dengan lengkap'); window.location.href='deteksi.php' </script>;";
    }


    if (isset($_POST['s14'])) {
        $j2 = implode($_POST['s14']);
        if ($j2 == $k2) {
            $poin += $nilai;
        }
    } else {
        echo "<script> alert('Mohon isi dengan lengkap'); window.location.href='deteksi.php' </script>;";
    }
    if (isset($_POST['s15'])) {

        //mengubah array menjadi string
        $j1 = implode($_POST['s15']);
        if ($j1 == $k1) {
            $poin += $nilai;
        }
    } else {
        echo "<script> alert('Mohon isi dengan lengkap'); window.location.href='deteksi.php' </script>;";
    }


    if (isset($_POST['s16'])) {
        $j2 = implode($_POST['s16']);
        if ($j2 == $k2) {
            $poin += $nilai;
        }
    } else {
        echo "<script> alert('Mohon isi dengan lengkap'); window.location.href='deteksi.php' </script>;";
    }
    if (isset($_POST['s17'])) {

        //mengubah array menjadi string
        $j1 = implode($_POST['s17']);
        if ($j1 == $k1) {
            $poin += $nilai;
        }
    } else {
        echo "<script> alert('Mohon isi dengan lengkap'); window.location.href='deteksi.php' </script>;";
    }


    if (isset($_POST['s18'])) {
        $j2 = implode($_POST['s18']);
        if ($j2 == $k2) {
            $poin += $nilai;
        }
    } else {
        echo "<script> alert('Mohon isi dengan lengkap'); window.location.href='deteksi.php' </script>;";
    }
    if (isset($_POST['s19'])) {

        //mengubah array menjadi string
        $j1 = implode($_POST['s19']);
        if ($j1 == $k1) {
            $poin += $nilai;
        }
    } else {
        echo "<script> alert('Mohon isi dengan lengkap'); window.location.href='deteksi.php' </script>;";
    }


    if (isset($_POST['s20'])) {
        $j2 = implode($_POST['s20']);
        if ($j2 == $k2) {
            $poin += $nilai;
        }
    } else {
        echo "<script> alert('Mohon isi dengan lengkap'); window.location.href='deteksi.php' </script>;";
    }
    if (isset($_POST['s21'])) {

        //mengubah array menjadi string
        $j1 = implode($_POST['s21']);
        if ($j1 == $k1) {
            $poin += $nilai;
        }
    } else {
        echo "<script> alert('Mohon isi dengan lengkap'); window.location.href='deteksi.php' </script>;";
    }
}
include 'assets/header.php';
?>
<div class="container" style="margin-top: 80px;">
    <div class="section-title" data-aos="fade-up" style="margin-bottom: -20px;">
        <p>Deteksi Mandiri</p>
    </div>
    <h4>Mohon menjawab pertanyaan dengan jujur, Demi kebaikan anda sendiri</h4>
    <div class="card">
        <div class="card-body">
            <h1 class="text-center">Skor Resiko : <?= $poin ?></h1>
        </div>
    </div>
    <form action="" method="post">
        <br>
        <h5>1. Saya pergi keluar rumah</h5>
        <input type="radio" name="s1[]" value="ya"> Ya
        <input type="radio" name="s1[]" value="tidak"> Tidak
        <br>
        <br>
        <h5>2. Saya menggunakan transportasi umum </h5>
        <input type="radio" name="s2[]" value="ya"> Ya
        <input type="radio" name="s2[]" value="tidak"> Tidak
        <br>
        <br>
        <h5>3. Saya tidak menggunakan masker saat keluar rumah</h5>
        <input type="radio" name="s3[]" value="ya"> Ya
        <input type="radio" name="s3[]" value="tidak"> Tidak
        <br>
        <br>
        <h5>4. Saya berjabatan tangan dengan orang lain</h5>
        <input type="radio" name="s4[]" value="ya"> Ya
        <input type="radio" name="s4[]" value="tidak"> Tidak
        <br>
        <br>
        <h5>5. Saya tidak membersihkan tangan dengan hand sanitizer/tissue basah sebelum pegang kemudi mobil/motor</h5>
        <input type="radio" name="s5[]" value="ya"> Ya
        <input type="radio" name="s5[]" value="tidak"> Tidak
        <br>
        <br>
        <h5>6. Saya menyentuh uang/benda yang disentuh orang lain</h5>
        <input type="radio" name="s6[]" value="ya"> Ya
        <input type="radio" name="s6[]" value="tidak"> Tidak
        <br>
        <br>
        <h5>7. Saya tidak menjaga jarak 1,5 meter dengan orang lain saat di luar rumah</h5>
        <input type="radio" name="s7[]" value="ya"> Ya
        <input type="radio" name="s7[]" value="tidak"> Tidak
        <br>
        <br>
        <h5>8. Saya makan diluar rumah (warung/restaurant)</h5>
        <input type="radio" name="s8[]" value="ya"> Ya
        <input type="radio" name="s8[]" value="tidak"> Tidak
        <br>
        <br>
        <h5>9. Saya tidak cuci tangan setelah tiba di tempat tujuan</h5>
        <input type="radio" name="s9[]" value="ya"> Ya
        <input type="radio" name="s9[]" value="tidak"> Tidak
        <br>
        <br>
        <h5>10. Saya berada di wilayah kelurahan tempat pasien tertular Covid-19</h5>
        <input type="radio" name="s10[]" value="ya"> Ya
        <input type="radio" name="s10[]" value="tidak"> Tidak
        <br>
        <br>
        <h5>11. Saya tidak menggunakan hand santitizer sebelum memegang gagang pintu masuk</h5>
        <input type="radio" name="s11[]" value="ya"> Ya
        <input type="radio" name="s11[]" value="tidak"> Tidak
        <br>
        <br>
        <h5>12. Saya tidak mencuci tangan dengan sabun/hand santizer setiba di rumah</h5>
        <input type="radio" name="s12[]" value="ya"> Ya
        <input type="radio" name="s12[]" value="tidak"> Tidak
        <br>
        <br>
        <h5>13. Saya tidak menyediakan: tissue basah/antiseptic, masker, sabun antiseptic bagi keluarga dirumah</h5>
        <input type="radio" name="s13[]" value="ya"> Ya
        <input type="radio" name="s13[]" value="tidak"> Tidak
        <br>
        <br>
        <h5>14. Saya tidak segera mencuci jaket, topi, baju/celana setelah berpergian</h5>
        <input type="radio" name="s14[]" value="ya"> Ya
        <input type="radio" name="s14[]" value="tidak"> Tidak
        <br><br>
        <h5>15. Saya tidak segera mandi dan keramas setelah tiba di rumah</h5>
        <input type="radio" name="s15[]" value="ya"> Ya
        <input type="radio" name="s15[]" value="tidak"> Tidak
        <br><br>
        <h5>16. Saya tidak terkena sinar matahari >15 menit dalam sehari</h5>
        <input type="radio" name="s16[]" value="ya"> Ya
        <input type="radio" name="s16[]" value="tidak"> Tidak
        <br><br>
        <h5>17. Saya tidak berolah raga/jalan kaki minimal 30 menit setiap hari</h5>
        <input type="radio" name="s17[]" value="ya"> Ya
        <input type="radio" name="s17[]" value="tidak"> Tidak
        <br><br>
        <h5>18. Saya jarang minum vitamin C dan E serta kurang tidur</h5>
        <input type="radio" name="s18[]" value="ya"> Ya
        <input type="radio" name="s18[]" value="tidak"> Tidak
        <br><br>
        <h5>19. Usia saya lebih dari atau sama dengan 60 Tahun</h5>
        <input type="radio" name="s19[]" value="ya"> Ya
        <input type="radio" name="s19[]" value="tidak"> Tidak
        <br><br>
        <h5>20. Saya memiliki riwayat penyakit jantung/diabetes/gangguan pernafasan kronik</h5>
        <input type="radio" name="s20[]" value="ya"> Ya
        <input type="radio" name="s20[]" value="tidak"> Tidak
        <br><br>
        <h5>21. Saya sedang mengalami demam(38 Derajat Celcius atau lebih) dan gangguan pernapasan</h5>
        <input type="radio" name="s21[]" value="ya"> Ya
        <input type="radio" name="s21[]" value="tidak"> Tidak
        <br><br>
        <button type="submit" name="submit" class="btn btn-success btn-lg">Cek Sekarang</button>
    </form><br>
    <div class="card">
        <div class="card-body">
            <h1>Parameter Skor Resiko</h1>
        </div>
        <div class="card-body">
            <h3>Score 0-7= Resiko Rendah, Score 8-14= Resiko Sedang, Score 15-21= Resiko Tinggi</h3>
        </div>
        <div class="card-body">
            - Untuk resiko rendah, Anda kemungkinan besar tidak memiliki gejala COVID-19. Walaupun demikian, tetap mawas diri, hindari keramaian, jaga diri dan keluarga dengan pola hidup bersih dan sehat.
        </div>
        <div class="card-body">
            - Untuk resiko sedang, monitor kondisi Anda dan lakukan Isolasi Diri selama minimal 14 hari ke depan. Jika kemudian terdapat demam/batuk kurang dari 3 hari, tetap di rumah.
            <br>
            Tes untuk coronavirus tidak diperlukan apabila anda tetap tinggal di rumah.
            <br>
            Jaga jarak minimal 2 meter (kurang lebih 3 langkah) dengan orang lain jika memungkinkan.
        </div>
        <div class="card-body">
            - Untuk resiko tinggi, tetap di rumah, hubungi hotline setempat dan bicara dengan perawat/dokter.
            <br>
            Mungkin telepon ini akan sangat sibuk tapi anda harus menunggu untuk berbicara dengan perawat/dokter.
            <br>
            Untuk melindungi yang lain jangan pergi ke dokter, apotek, atau rumah sakit.

        </div>
    </div>
</div>
<?php include('assets/footer.php') ?>