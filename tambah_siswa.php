
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
	  h5 {
        text-transform: uppercase;
        color:#000000;
      }
    button {
          background-color: aqua;
          color: #000000;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: silver;
    }
	 select {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: silver;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
	  a {
          background-color: black;
          color: #000000;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    </style>
  </head>
<body>




      <center>
        <h2>Tambah Siswa</h2>
      <center>
      <form method="POST" action="proses_tambahsiswa.php" enctype="multipart/form-data" >
      <section class="base">
        
		<div>
          <label>NISN</label>
          <input type="text" name="nisn" autofocus="" required=""/>
        </div>
        <div>
          <label>NIS</label>
         <input type="text" name="nis" required=""/>
        </div>
	    <div>
          <label>Nama</label>
          <input type="text" name="nama" required=""/>
        </div>
        <div>
          <label>KELAS</label>
          <select name="id_kelas">
 <option value="not_option"> Silahkan Masukkan KELAS</option>
 
 
        <div>
          <label>ALAMAT</label>
         <input type="text" name="alamat" required=""/>
        </div>
		<div>
          <label>No_Tlp</label>
         <input type="text" name="no_tlp" required=""/>
        </div>
<label>id_spp</label>
         <input type="text" name="id_spp" required=""/>
        </div>
    
    
        <div>
         <button type="submit">Simpan Kelas</button>
        </div>
        </section>
      </form>
</body>
</html>