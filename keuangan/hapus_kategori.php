<?php
include 'koneksi.php';
$id = $_GET['id'];
$query_delete = mysqli_query($koneksi,"DELETE FROM kategori WHERE id_kategori='$id' ");
if($query_delete)
{
    header("location:kategori.php");
	
}else{
	echo mysqli_error($koneksi);
}
?>