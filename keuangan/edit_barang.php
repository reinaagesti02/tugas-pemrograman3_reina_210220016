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
	$nama_barang = $_POST['nama_barang'];
    $kode_barang = $_POST['kode_barang'];
    $qty = $_POST['qty'];
    $kategori_id = $_POST['kategori_id'];
	$update=mysqli_query($koneksi,"UPDATE barang1 SET nama_barang='$nama_barang', kode_barang='$kode_barang',qty='$qty', kategori_id='$kategori_id' WHERE id_barang='$id'");
	if($update){
		header("location:barang1.php");
	}else{
		echo mysqli_error($koneksi);
	}
}

$querykategori = "select * from kategori";
  $resultkategori = mysqli_query ($koneksi,$querykategori);
  
$id = $_GET['id'];

	$query_mysqli = mysqli_query($koneksi,"SELECT * FROM barang1 LEFT JOIN kategori on barang1.kategori_id = kategori.id_kategori WHERE barang1.id_barang='$id'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysqli)){
?>
<body>
	<h2>tabel barang</h2>
	<br/>
	<a href="barang1.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>Edit DATA barang</h3>
	<form method="POST">
		<table>
			<tr>			
				<td>Nama barang</td>
				<input type="hidden" name="id" value="<?php echo $data['id_barang'];?>"/>
				<td><input type="text" name="nama_barang" required value="<?php echo $data['nama_barang'];?>"></td>
			</tr>
			<tr>
				<td>kode barang</td>
			<td><input type="text" name="kode_barang"></td>
		</tr>
		<tr>
		   <td>qty</td>
		   <td><input type="number" name="qty"></td>
		          
		</tr>
		<tr>
	      <td>kategori barang</td>
		  <td><select name="kategori_id" id="kategori_id">
		  <option value="<?php echo $data['kategori_id'];?>"><?php echo $data['nama_kategori'];?></option>
		  <option value="">-----pilih</option>
			   
			   <?php
			   while ($datakategori=mysqli_fetch_array($resultkategori))
			   {
				   echo "<option value=$datakategori[id_kategori]>$datakategori[nama_kategori]</option>";
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