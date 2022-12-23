<?php
include 'koneksi.php';
$id = $_GET['id'];
$query_delete = mysqli_query($koneksi,"DELETE FROM barang1 WHERE id_barang='$id' ");
if($query_delete)
{
    header("location:barang1.php");
	
}else{
	echo mysqli_error($koneksi);
}
?>