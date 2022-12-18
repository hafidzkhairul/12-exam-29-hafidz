<?php 
include 'db_connect.php';
$tgl_masuk = $_POST['tgl_masuk'];
$jumlah = $_POST['jumlah'];
$barang_id = $_POST['barang_id'];



mysqli_query($myConn, "insert into barangmasuk values (NULL,'$tgl_masuk','$jumlah','$barang_id')");
mysqli_query($myConn, "CREATE TRIGGER tambah_stok
AFTER INSERT  ON barangmasuk
FOR EACH ROW  
UPDATE barang SET stok = stok + NEW.jumlah WHERE id = NEW.barang_id;");
header("location:barangmasuk.php"); 
