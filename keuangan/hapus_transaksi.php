<?php
include 'koneksi.php';
$id = $_GET['id'];
$query_delete = mysqli_query($koneksi,"DELETE FROM transaksi2 WHERE id_transaksi='$id' ");
if($query_delete)
{
    header("location:transaksi2.php");
	
}else{
	echo mysqli_error($koneksi);
}
?>