<?php
include 'config.php';

function simpan($tabel, $kolom, $value)
{
    global $db;
    $query = "INSERT into " . $tabel . " (" . $kolom . ") VALUES(" . $value . ")";
    $cek = mysqli_query($db, $query);
    return $cek;
}

function tampil($tabel, $key = "")
{
    global $db;
    $query = "SELECT * from " . $tabel . $key;
    $cek = mysqli_query($db, $query);
    return $cek;
}

function update($tabel, $kolomkey, $valuekey, $value)
{
    global $db;
    $query = "UPDATE  " . $tabel . " set " . $value . " where $kolomkey = '$valuekey'";
    $cek = mysqli_query($db, $query);
    return $cek;
}

function hapus($tabel, $key = "")
{
    global $db;
    $query = "DELETE from " . $tabel . " WHERE " . $key;
    $cek = mysqli_query($db, $query);
    return $cek;
}
