<?php 
include 'db_connect.php';
$id = $_GET['id'];

//mysqli_query($myConn, "delete from barang where id='$id'");

 mysqli_query($myConn, "delete from barangkeluar where id='$id'");
// mysqli_query($myConn, "delete from barangkeluar where id='$id'");

header("location:barangkeluar.php");
