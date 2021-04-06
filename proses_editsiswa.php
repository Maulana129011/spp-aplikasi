<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $nisn = $_POST['nisn'];
  $nis = $_POST['nis'];
  $nama_siswa = $_POST['nama_siswa'];
  $id_kelas = $_POST['id_kelas'];
  $alamat = $_POST['alamat'];
  $no_tlp = $_POST['no_tlp'];
  
  //cek dulu jika merubah gambar produk jalankan coding ini
  
                    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                   $query  = "UPDATE siswa SET nisn = '$nisn' WHERE id_kelas = '$id_kelas' $id";
                   $query  = "UPDATE siswa SET nis = '$nis' WHERE id_kelas = '$id_kelas' $id";
                   $query  = "UPDATE siswa SET nama_siswa = '$nama_siswa' WHERE id_kelas = 'id_kelas' $id";
                   $query  = "UPDATE siswa SET alamat = '$alamat' WHERE id_kelas = '$id_kelas' $id";
                    $result = mysqli_query($koneksi, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil diubah.');window.location='siswa.php';</script>";
                    }