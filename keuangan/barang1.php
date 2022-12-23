<?php 
       include 'koneksi.php';
	   if(isset($_POST['cari'])){
		$no = 1;
	//$tampil = mysqli_query($koneksi,"select * from barang1 where nama_barang='".$_POST['search']."'");//where
	  $tampil = mysqli_query($koneksi,"select * from barang1 where nama_barang like '%".$_POST['search']."%'");//where like
	//	$tampil = mysqli_query($koneksi,"select * from barang1 where nama_barang between '".$_POST['search']."' and '".$_POST['search']."'");//where like
	   }else{
		$no = 1;
		$tampil = mysqli_query($koneksi,"select * from barang1");
	   }
		
?>
<form method="POST">
	<table>
		<tr>
		<td>Cari barang</td>
			<td><input type="text" name="search"></td>
		</tr>
		<tr>
			<td><input type="submit" name="cari" value="cari"></td>
		</tr>
	</table>
</form>
<html>
<head>
    <title>Reina.com</title>
</head>
<body>
   <h2>tabel barang</h2>
   <br/>
   <a href="tambah_barang.php">+ TAMBAH BARANG</a>
   <br/>
   <table border="1">
       <tr>
	       <th>no</th>
	       <th>nama barang</th>
		   <th>kode barang</th>
		   <th>qty</th>
		   <th>kategori</th>
		   <th>opsi</th>
		</tr>
		<?php
		include 'koneksi.php';
		$no = 1;
		$query = mysqli_query($koneksi,"select * from barang1");
		while($data = mysqli_fetch_array($tampil)){
			?>
			<tr>
			   <td><?php echo $no++; ?></td>
			   <td><?php echo $data['nama_barang']; ?></td>
			   <td><?php echo $data['kode_barang']; ?></td>
			   <td><?php echo $data['qty']; ?></td>
			   <td><?php echo $data['kategori_id']; ?></td>
			   <td>
			       <a href="edit_barang.php?id=<?php echo $data['id_barang']; ?>">EDIT</a>
				   <a href="hapus_barang.php?id=<?php echo $data['id_barang']; ?>">HAPUS</a>
			   </td>
			</tr>
			<?php
	    }
		?>
	</table>
</body>
</html>