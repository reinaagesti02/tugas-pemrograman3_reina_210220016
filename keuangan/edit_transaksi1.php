<!DOCTYPE html>
<html>
<head>
	<title>Reina.com</title>
</head>
<?php 
// koneksi database
include 'koneksi.php';
if(isset($_POST['save'])){
	$id=$_POST['id'];
    $tgl_transaksi = $_POST['tgl_transaksi'];
    $no_transaksi = $_POST['no_transaksi'];
    $jenis_transaksi = $_POST['jenis_transaksi'];
    $barang_id = $_POST['barang_id'];
    $jumlah_transaksi = $_POST['jumlah_transaksi'];
    $diskon_barang= $_POST['diskon_barang'];
    $diskon_member= $_POST['diskon_member'];
    $total_pembelian = $_POST['total_pembelian'];
    $total_diskon = $_POST['total_diskon'];
    $total_transaksi= $_POST['total_transaksi'];
    $member_id = $_POST['member_id'];
	$update=mysqli_query($koneksi,"UPDATE transaksi1 SET tgl_transaksi='$tgl_transaksi', no_transaksi='$no_transaksi',jenis_transaksi='$jenis_transaksi', barang_id='$barang_id', jumlah_transaksi='$jumlah_transaksi', diskon_barang='$diskon_barang', diskon_member='$diskon_member', total_pembelian='$total_pembelian', total_diskon='$total_diskon', total_transaksi='$total_transaksi', member_id='$member_id' WHERE id_transaksi='$id'");
	if($update){
		header("location:transaksi1.php");
	}else{
		echo mysqli_error($koneksi);
	}
}
  $querybarang = "select * from barang1";
  $resultbarang = mysqli_query ($koneksi,$querybarang);
  
  $querymember = "select * from member";
  $resultmember = mysqli_query ($koneksi,$querymember);
$id = $_GET['id'];

	$query_mysqli = mysqli_query($koneksi,"SELECT * FROM transaksi1 WHERE id_transaksi='$id'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysqli)){
?>
<body>
	<h2>tabel transaksi</h2>
	<br/>
	<a href="transaksi1.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>Edit DATA transaksi</h3>
	<form method="POST">
	<table>
	<tr>
	<td>tanggal transaksi</td>
	<td><input type="date" Name="tgl_transaksi"></td>
	</tr>
	<tr>
	<td>no transaksi</td>
	<td><input type="text" Name="no_transaksi"></td>
	</tr>
	<tr>
	<td>jenis transaksi</td>
	<td><select Name="jenis_transaksi">
		<option value="">---Pilih---</option>
		<option value="tunai">tunai</option>
		<option value="kredit">kredit</option>
		</select>
		<td>	
	</tr>
	<tr>
	<td>barang</td>
	<td><select name="barang_id">
	<option value="">---Pilih---</option>
	<?php
	while ($databarang=mysqli_fetch_array($resultbarang))
	{
		echo "<option value=$databarang[id_barang]>$databarang[nama_barang]</option>";
	}
	?>
	</select>
	<td>
	<tr>
	<tr>
	<td>jumlah transaksi</td>
	<td><input type="number" name="jumlah_transaksi"></td>
	</tr>
	<tr>
	<td>diskon member</td>
	<td><input type="text" name="diskon_member"></td>
	</tr>
	<tr>
	<td>diskon barang</td>
	<td><input type="text" name="diskon_barang"></td>
	</tr>
	<tr>
	<td>total pembelian</td>
	<td><input type="number" name="total_pembelian"></td>
	</tr>
	<tr>
	<td>total diskon</td>
	<td><input type="text" name="total_diskon"></td>
	</tr>
	<tr>
	<td>total transaksi</td>
	<td><input type="number" name="total_transaksi"></td>
	</tr>
	<tr>
	<td>member</td>
	<td><select name="member_id">
	<option value="">---Pilih---</option>
	<?php
	while ($datamember=mysqli_fetch_array($resultmember))
	{
		echo "<option value=$datamember[id_member]>$datamember[nama]</option>";
	}
	?>
	</select>
	</td>
	</tr>
	<tr>
				<td></td>
				<td><input type="submit" name="save"></td>
			</tr>		
		</table>
	</form>

</body>
<?php	}?>
</html>