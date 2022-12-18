<?php 
include 'db_connect.php';
$id  = $_POST['id'];
$tgl_masuk = $_POST['tgl_masuk'];
$jumlah = $_POST['jumlah'];
$barang_id = $_POST['barang_id'];

$update="UPDATE barangmasuk SET tgl_masuk='$tgl_masuk' , jumlah='$jumlah', barang_id='$barang_id' WHERE id='$id'";
mysqli_query($myConn, $update);
//mysqli_query($myConn, "UPDATE barang SET spesifikasi='$spesifikasi' , stok='$stok', lokasi='$lokasi', kategori_id='$kategori_id' WHERE id='$id'");
header("location:barangmasuk.php"); 
?>