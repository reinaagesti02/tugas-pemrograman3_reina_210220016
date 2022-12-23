<?php
include 'koneksi.php';
$id = $_GET['id'];
$query_delete = mysqli_query($koneksi,"DELETE FROM member WHERE id_member='$id' ");
if($query_delete)
{
    header("location:member.php");
	
}else{
	echo mysqli_error($koneksi);
}
?>