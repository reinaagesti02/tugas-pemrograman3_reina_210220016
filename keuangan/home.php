<?php 
session_start();
if(isset($_SESSION['nama']) && isset($_SESSION['level'])){
}else{
	echo ("<script type='text/javascript'>alert('Anda harus login');document.location='index.php';</script>");
}
?>
<?php if($_SESSION['level']=='1'){
echo "<center><b>welcome admin</b></center><br>";
?>
<center><a href="user.php">Menu user</a></center>
<center><a href="barang1.php">Menu barang</a></center>
<center><a href="kategori.php">Menu kategori</a></center>
<center><a href="transaksi2.php">Menu transaksi</a></center>
<center><a href="logout.php">log out</a></center>
<?php }else if($_SESSION['level']=='2'){ 
echo "<center><b>welcome user</b></center><br>";
?>
<center><a href="transaksi2.php">Menu transaksi</a></center>
<center><a href="logout.php">log out</a></center>
<?php } ?>