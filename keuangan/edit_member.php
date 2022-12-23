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
	$nama = $_POST['nama'];
    $level = $_POST['level'];
	$update=mysqli_query($koneksi,"UPDATE member SET nama='$nama', level='$level' WHERE id_member='$id'");
	if($update){
		header("location:member.php");
	}else{
		echo mysqli_error();
	}
}
  $querykategori = "SELECT * FROM kategori";
  $resultkategori = mysqli_query($koneksi,$querykategori);

$id = $_GET['id'];

	$query_mysqli = mysqli_query($koneksi,"SELECT * FROM member WHERE id_member='$id'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysqli)){	
?>
<body>
	<h2>tabel member</h2>
	<br/>
	<a href="member.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>Edit DATA member</h3>
	<form method="POST">
		<table>
			<tr>			
				<td>Name</td>
				<input type="hidden" name="id" value="<?php echo $data['id_member'];?>"/>
				<td><input type="text" name="nama" required value="<?php echo $data['nama'];?>"></td>
			</tr>
			<tr>
				<td>level</td>
		   <td><select name="level">
		          <option value="">-----pilih</option>
				  <option value="1">gold</option>
				  <option value="2">silver</option>
				  <option value="3">platinum</option>
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