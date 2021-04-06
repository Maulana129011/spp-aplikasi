<?php 
include 'koneksi.php';
include 'header.php';

 ?>
 <div class="container">
	<div class="page-header">
<h2>CARI SISWA BERDASARKAN NISN</h2>
	</div>
 <form action="" method="get">
 	<table class="table">
 		<tr>
 			<td>NISN</td>
 			<td>:</td>
 			<td>
 				<input class="form-control" type="text" name="nisn">
 			</td>
 			<td>
 				<button class="btn btn-success" type="submit" name="cari">Cari</button>
 			</td>
 		</tr>
 		
 	</table>
 </form>
<?php 
if (isset($_GET['nisn']) && $_GET['nisn'] != ''){
	$data=("SELECT * FROM siswa WHERE nisn");
?>
<div class="panel panel-info">
	<div class="panel-heading">
<h3>biodata siswa</h3>
</div>
<div class="panel panel-body">
	<table class="table table-bordered table-striped">
		<tr>
			<td>NISN</td>
			<td><?$dta['nisn']?></td>
		</tr>
		<tr>
			<td>Nama Siswa</td>
			<td><? $dta['nama'] ?></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td><? $dta['id_kelas'] ?></td>
		</tr>
		<tr>
			<td>Tahun</td>
			<td><? $dta['tahun'] ?></td>
		</tr>
	</table>
</div>
</div>

<div class="panel panel-info">
	<div class="panel-heading">
<h3>Tagihan SPP Siswa</h3>
</div>
<div class="panel-body ">
	<table class="table table-bordered table-striped">
<tr>
	<th>NO</th>
	<th>Bulan</th>
	<th>jatuh tempo</th>
	<th>No bayar</th>
	<th>Tanggal Bayar</th>
	<th>Jumlah</th>
	<th>Keterangan</th>
	<th>Bayar</th>
</tr>
<?php 
$sql= mysqli_query($konek ," SELECT * FROM spp WHERE id_spp = '$dta[id_spp]' ORDER BY jumlah_bayar ASC ");
$i=1;
while($sq = mysqli_fetch_assoc($sql)){
	echo "

		<tr>
			<td>$i</td>
			<td>$sq[bulan_bayar];</td>
			<td>$sq[jatuhtempo];</td>
			<td>$sq[nobayar];</td>
			<td>$sq[tgl_bayar];</td>
			<td>$sq[jumlah];</td>
			<td>$sq[ket];</td>
			<td align='center'";
				if ($sq['nobayar'] == ''){
					echo "<a href ='proses_transaksi.php?nis=$nis&act=bayar&id=$sq[id_spp]'></a> ";
					echo "<a class  ='btn btn-primary btn-sm' href='proses_transaksi.php?nis=$nis&act=bayar&id=$sq[id_spp]'>Bayar</a> ";
				}else {
					echo "</a>";
					echo "<a class='btn btn-danger btn-sm' href='proses_transaksi.php?nis=$nis&act=batal&id=$sq[id_spp]'>Batal</a> ";
					echo "<a class='btn btn-success btn-sm' href='cetak_slip_transaksi.php?nis=$nis&act=bayar&id=$sq[id_spp]' target='_blank'>Cetak</a> ";
					
				}
			echo "</td>
		</tr>

		";
		$i++;
}
 ?>
</table>
</div>
</div>
<?php 
}
?>
<p style="color: black;">*Pembayaran dilakukan dengan cara mencari tagihan siswa berdasarkan NISN </p>