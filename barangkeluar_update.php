<?php 
include 'db_connect.php';
$id  = $_POST['id'];
$tgl_keluar = $_POST['tgl_keluar'];
$jumlah = $_POST['jumlah'];
$barang_id = $_POST['barang_id'];

$update="UPDATE barangkeluar SET tgl_keluar='$tgl_keluar' , jumlah='$jumlah', barang_id='$barang_id' WHERE id='$id'";
mysqli_query($myConn, $update);
//mysqli_query($myConn, "UPDATE barang SET spesifikasi='$spesifikasi' , stok='$stok', lokasi='$lokasi', kategori_id='$kategori_id' WHERE id='$id'");
header("location:barangkeluar.php"); 
?>