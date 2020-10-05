<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'app/config.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = md5($_POST['password']);


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($db, "select * from users where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {

    // $data = mysqli_fetch_assoc($login);

    foreach ($login as $key) {
        // cek jika user login sebagai admin
        if ($key['level'] == "admin") {

            // buat session login dan username
            global $url;
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "admin";
            $_SESSION['id'] = $key["id"];
            // alihkan ke halaman dashboard admin
            header("location:admin/index.php");

            // cek jika user login sebagai pegawai
        } else if ($key['level'] == "user") {
            // buat session login dan username
            global $url;
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "user";
            $_SESSION['id'] = $key["id"];
            // alihkan ke halaman dashboard pegawai
            header("location:user/index.php");

            // cek jika user login sebagai pengurus
        } else {

            // alihkan ke halaman login kembali
            header("location:login.php?pesan=gagal");
        }
    }
} else {
    header("location:login.php?pesan=gagal");
}
