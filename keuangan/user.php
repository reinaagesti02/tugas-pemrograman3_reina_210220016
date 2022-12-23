<?php 
       include 'koneksi.php';
	   if(isset($_POST['cari'])){
		$no = 1;
	//$tampil = mysqli_query($koneksi,"select * from user where nama='".$_POST['search']."'");//where
	  $tampil = mysqli_query($koneksi,"select * from user where nama like '%".$_POST['search']."%'");//where like
	//	$tampil = mysqli_query($koneksi,"select * from user where nama between '".$_POST['search']."' and '".$_POST['search']."'");//where like
	   }else{
		$no = 1;
		$tampil = mysqli_query($koneksi,"select * from user");
	   }
		
?>
<form method="POST">
	<table>
		<tr>
		<td>Cari Username</td>
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
   <h2>tabel user</h2>
   <br/>
   <a href="tambah_user.php">+ TAMBAH USER</a>
   <br/>
   <table border="1">
       <tr>
           <th>no</th>
	       <th>nama</th>
		   <th>password</th>
		   <th>level</th>
		   <th>status</th>
		   <th>opsi</th>
		</tr>
		<?php
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"SELECT * FROM user");
		while($d = mysqli_fetch_array($tampil)){
			?>
			<tr>
			   <td><?php echo $no++; ?></td>
			   <td><?php echo $d['nama']; ?></td>
			   <td><?php echo $d['password']; ?></td>
			   <td><?php echo $d['level']; ?></td>
			   <td><?php echo $d['status']; ?></td>
			   <td>
			       <a href="edit_user.php?id=<?php echo $d['id_user']; ?>">EDIT</a>
				   <a href="hapus_user.php?id=<?php echo $d['id_user']; ?>">HAPUS</a>
			   </td>
			</tr>
			<?php
	    }
		?>
	</table>
</body>
</html>