</html>
	<head>
	<title>Reina.com</title>
	</head>
	<body>
	<h2>tabel transaksi1</h2>
	<br/>
	<a href="tambah_transaksi1.php">+ TAMBAH TRANSAKSI</a>
	<br/>
	<table border="1">
	<tr>
		<th>no</th>
		<th>tanggal transaksi</th>
		<th>no transaksi</th>
		<th>jenis transaksi</th>
		<th>barang</th>
		<th>jumlah transaksi</th>
		<th>diskon member</th>
		<th>diskon barang</th>
		<th>total pembelian</th>
		<th>total diskon</th>
		<th>total transaksi</th>
		<th>member</th>
		<th>opsi</th>
	</tr>
	<?php
	include 'koneksi.php';
	$no =1;
	$data = mysqli_query($koneksi,"SELECT * FROM transaksi1");
	while($d= mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['tgl_transaksi']; ?></td>
			<td><?php echo $d['no_transaksi']; ?></td>
			<td><?php echo $d['jenis_transaksi']; ?></td>
			<td><?php echo $d['barang_id']; ?></td>
			<td><?php echo $d['jumlah_transaksi']; ?></td>
			<td><?php echo $d['diskon_member']; ?></td>
			<td><?php echo $d['diskon_barang']; ?></td>
			<td><?php echo $d['total_pembelian']; ?></td>
			<td><?php echo $d['total_diskon']; ?></td>
			<td><?php echo $d['total_transaksi']; ?></td>
			<td><?php echo $d['member_id']; ?></td>
			<td>
				<a href="edit_transaksi1.php?id=<?php echo $d['id_transaksi']; ?>">EDIT</a>
				<a href="hapus_transaksi1.php?id=<?php echo $d['id_transaksi']; ?>">HAPUS</a>
			<td>
		</tr>
	<?php
	}
	?>
	</table>
	</body>
	</html>