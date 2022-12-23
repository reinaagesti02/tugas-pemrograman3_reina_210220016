<?php 
       include 'koneksi.php';
	   if(isset($_POST['cari'])){
		$no = 1;
	//$tampil = mysqli_query($koneksi,"select * from kategori where nama_kategori='".$_POST['search']."'");//where
	  $tampil = mysqli_query($koneksi,"select * from kategori where nama_kategori like '%".$_POST['search']."%'");//where like
	//	$tampil = mysqli_query($koneksi,"select * from kategori where nama_kategori between '".$_POST['search']."' and '".$_POST['search']."'");//where like
	   }else{
		$no = 1;
		$tampil = mysqli_query($koneksi,"select * from kategori");
	   }
		
?>
<form method="POST">
	<table>
		<tr>
		<td>Cari kategori</td>
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
   <h2>tabel kategori</h2>
   <br/>
   <a href="tambah_kategori.php">+ TAMBAH KATEGORI</a>
   <br/>
   <table border="1">
       <tr>
	       <th>no</th>
	       <th>nama kategori</th>
		   <th>opsi</th>
		   
		</tr>
		<?php
		include 'koneksi.php';
		$no = 1;
		$query = mysqli_query($koneksi,"select * from kategori");
		while($data = mysqli_fetch_array($tampil)){
			?>
			<tr>
			   <td><?php echo $no++; ?></td>
			   <td><?php echo $data['nama_kategori']; ?></td>
			   <td>
			       <a href="edit_kategori.php?id=<?php echo $data['id_kategori']; ?>">EDIT</a>
				   <a href="hapus_kategori.php?id=<?php echo $data['id_kategori']; ?>">HAPUS</a>
			   </td>
			</tr>
			<?php
	    }
		?>
	</table>
</body>
</html>