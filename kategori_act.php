<?php 
include 'db_connect.php';
$kategori = $_POST['kategori'];
$keterangan = $_POST['keterangan'];



//$qInsertBarang = "insert into barang values (NULL,'$spesifikasi','$stok','$lokasi','$kategori_id')";

//$myConn->query($qInsertBarang);
mysqli_query($myConn, "insert into kategori values (NULL,'$kategori','$keterangan')");
header("location:kategori.php"); 
