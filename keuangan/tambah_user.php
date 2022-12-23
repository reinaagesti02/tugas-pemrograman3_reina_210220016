<!DOCTYPE html>
<html>
<head>
    <title>Reina.com</title>
</head>
<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
if(!empty($_POST['save'])){
	 
$nama = $_POST['nama'];
$password = $_POST['password'];
$level = $_POST['level'];
$status = $_POST['status'];
// menginput data ke database
$a=mysqli_query($koneksi,"insert into user values('','$nama','$password','$level','$status','0')");
 if($a){
	// mengalihkan halaman kembali
	header("location:user.php");
 }else{
	echo mysqli_error($koneksi);
 }
  }
  $querykategori = "SELECT * FROM user";
  $resultkategori = mysqli_query($koneksi,$querykategori); 
?>
<body>
    <h2>tabel user</h2>
	<br/>
	<a href="user.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA USER</h3>
	<form method="POST">
	    <table>
		    <tr>
			   <td>nama</td>
			   <td><input type="text" name="nama"></td>
			</tr>
			<tr>
			<td>password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
		   <td>level</td>
		   <td><select name="level">
		          <option value="">-----pilih</option>
				  <option value="1">admin</option>
				  <option value="2">staff</option>
				  <option value="3">spv</option>
				  <option value="4">mgr</option>
		   </select>
		   </td>
		</tr>
		<tr>
	      <td>status</td>
		  <td><select name="status">
		       <option value="">-----pilih</option>
			   <option value="1">Aktif</option>
			   <option value="0">Tdk aktif</option>
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
</html>
		