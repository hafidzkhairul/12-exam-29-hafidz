<?php 
include 'db_connect.php';
$spesifikasi = $_POST['spesifikasi'];
$stok = $_POST['stok'];
$lokasi = $_POST['lokasi'];
$kategori_id = $_POST['kategori_id'];


//$qInsertBarang = "insert into barang values (NULL,'$spesifikasi','$stok','$lokasi','$kategori_id')";

//$myConn->query($qInsertBarang);
mysqli_query($myConn, "insert into barang values (NULL,'$spesifikasi','$stok','$lokasi','$kategori_id')");
header("location:barang.php"); 
