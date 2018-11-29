<?php include '../../conf.php'; 
include '../../conn.php'; 
$id = post('id');
$judul = post('judul');
$konten = post('kontent'); 
$penulis = post('penulis'); 
  


$simpan = $koneksi->prepare("UPDATE artikel SET `judul` ='".$judul."' , `kontent`='".$konten."', `penulis`='".$penulis."'WHERE `id` ='".$id."'"); 

$simpan->execute(); 

header("location:../../index.php?p=artikel"); 

?>