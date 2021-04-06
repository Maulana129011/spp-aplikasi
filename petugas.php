<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: black;
      }
	   h2 {
        text-transform: uppercase;
        color: black;
      }
	  h3 {
        text-transform: uppercase;
        color: black;
      }
	  h4 {
        text-transform: uppercase;
        color:#999999;
      }
	   h5 {
        text-transform: uppercase;
        color:#999999;
      }
    table {
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #DDEFEF;
        border: crimson 1px #DDEEEE;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #DDEEEE;
        text-decoration: none;
    }
    table tbody td {
        border: crimson 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #DDEEEE;
    }
    a {
          background-color: crimson;
          color: #DDEEEE;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    </style>
  </head>
<body>

	<?php

  include ('header.php');
?>


    <center><h2>PETUGAS</h2><center>
    <center><a href="tambah_petugas.php">+ &nbsp; TAMBAH PETUGAS</a><center>
    <br/>
    <table>
      <thead>
        <tr>
		<th>ID PETUGAS</th>
          <th>USERNAME</th>
          <th>PASSWORD</th>
          <th>NAMA PETUGAS</th>
          <th>LEVEL</th>
		  
		  <th>Action</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan id
      $query = "SELECT * FROM petugas ORDER BY id_petugas ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['username']; ?></td>
		   <td><?php echo $row['password']; ?></td>
		    <td><?php echo $row['nama_petugas']; ?></td>
           <td><?php echo substr($row['level'], 0, 20); ?></td>
          <td>
              <a href="edit_petugas.php?id=<?php echo $row['id_petugas']; ?>">Edit</a> 
              <a href="proses_hapuspetugas.php?id=<?php echo $row['id_petugas']; ?>" onClick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
          </td>
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
</body>
</html>