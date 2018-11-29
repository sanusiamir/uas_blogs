<?php
	include '../../conf.php';
	include '../../conn.php';

	$judul = post('judul');
	$kontent = post('kontent');
	$penulis = post('penulis');
	$simpan = $koneksi->prepare("INSERT INTO artikel (`judul`,`kontent`,`penulis`) VALUES ('".$judul."','".$kontent."','".$penulis."')");
	$simpan->execute();
	header("location:../../index.php?p=artikel");
?>