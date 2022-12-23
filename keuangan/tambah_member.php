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
$level = $_POST['level'];
// menginput data ke database
$a=mysqli_query($koneksi,"insert into member values('','$nama','$level')");
 if($a){
	// mengalihkan halaman kembali
	header("location:member.php");
 }else{
	echo mysqli_error($koneksi);
 }
  }
  $querykategori = "SELECT * FROM kategori";
  $resultkategori = mysqli_query($koneksi,$querykategori); 
?>
<body>
    <h2>tabel member</h2>
	<br/>
	<a href="member.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA MEMBER</h3>
	<form method="POST">
	    <table>
		    <tr>
			   <td>nama</td>
			   <td><input type="text" name="nama"></td>
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
</html>
		