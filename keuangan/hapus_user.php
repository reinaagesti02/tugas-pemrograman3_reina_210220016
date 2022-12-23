<?php
include 'koneksi.php';
$id = $_GET['id'];
$query_delete = mysqli_query($koneksi,"DELETE FROM user WHERE id_user='$id' ");
if($query_delete)
{
    header("location:user.php");
	
}else{
	echo mysqli_error($koneksi);
}
?>