<?php 
include 'db_connect.php';
$id  = $_POST['id'];
$kategori = $_POST['kategori'];
$keterangan = $_POST['keterangan'];


$update="UPDATE kategori SET kategori='$kategori' , keterangan='$keterangan' WHERE id='$id'";
mysqli_query($myConn, $update);
//mysqli_query($myConn, "UPDATE barang SET spesifikasi='$spesifikasi' , stok='$stok', lokasi='$lokasi', kategori_id='$kategori_id' WHERE id='$id'");
header("location:kategori.php"); 
?>