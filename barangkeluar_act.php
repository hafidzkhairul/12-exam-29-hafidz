<?php 
include 'db_connect.php';
$id  = $_POST['id'];
$tgl_keluar = $_POST['tgl_keluar'];
$jumlah = $_POST['jumlah'];
$barang_id = $_POST['barang_id'];


mysqli_query($myConn, "insert into barangkeluar values (NULL,'$tgl_keluar','$jumlah','$barang_id')");
mysqli_query($myConn, "CREATE TRIGGER kurang_stok
AFTER INSERT  ON barangkeluar
FOR EACH ROW  
UPDATE barang SET stok = stok - NEW.jumlah WHERE id = NEW.barang_id;");
header("location:barangkeluar.php"); 
