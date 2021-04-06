<?php
include 'koneksi.php';
$nisn = $_GET["nisn"];
//mengambil nisn yang ingin dihapus

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM siswa WHERE 'siswa' 'nisn'='$nisn' ";
    $hasil_query = mysqli_query($koneksi, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='siswa.php';</script>";
    }