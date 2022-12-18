<?php 
include 'db_connect.php';
$id  = $_POST['id'];
$spesifikasi = $_POST['spesifikasi'];
$stok = $_POST['stok'];
$lokasi = $_POST['lokasi'];
$kategori_id = $_POST['kategori_id'];

$update="UPDATE barang SET spesifikasi='$spesifikasi' , stok='$stok', lokasi='$lokasi', kategori_id='$kategori_id' WHERE id='$id'";
mysqli_query($myConn, $update);
//mysqli_query($myConn, "UPDATE barang SET spesifikasi='$spesifikasi' , stok='$stok', lokasi='$lokasi', kategori_id='$kategori_id' WHERE id='$id'");
header("location:barang.php"); 
?>