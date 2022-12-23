<?php 
       include 'koneksi.php';
	   if(isset($_POST['cari'])){
		$no = 1;
	//$tampil = mysqli_query($koneksi,"select * from member where nama='".$_POST['search']."'");//where
	  $tampil = mysqli_query($koneksi,"select * from member where nama like '%".$_POST['search']."%'");//where like
	//	$tampil = mysqli_query($koneksi,"select * from member where nama between '".$_POST['search']."' and '".$_POST['search']."'");//where like
	   }else{
		$no = 1;
		$tampil = mysqli_query($koneksi,"select * from member");
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
   <h2>tabel member</h2>
   <br/>
   <a href="tambah_member.php">+ TAMBAH MEMBER</a>
   <br/>
   <table border="1">
       <tr>
           <th>no</th>
	       <th>nama</th>
		   <th>level</th>
		   <th>opsi</th>
		</tr>
		<?php
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"SELECT * FROM member");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
			   <td><?php echo $no++; ?></td>
			   <td><?php echo $d['nama']; ?></td>
			   <td><?php echo $d['level']; ?></td>
			   <td>
			       <a href="edit_member.php?id=<?php echo $d['id_member']; ?>">EDIT</a>
				   <a href="hapus_member.php?id=<?php echo $d['id_member']; ?>">HAPUS</a>
			   </td>
			</tr>
			<?php
	    }
		?>
	</table>
</body>
</html>