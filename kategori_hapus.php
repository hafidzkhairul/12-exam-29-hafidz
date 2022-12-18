<?php 
include 'db_connect.php';
$id = $_GET['id'];

mysqli_query($myConn, "delete from kategori where id='$id'");


header("location:kategori.php");
