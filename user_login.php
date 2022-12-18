<?php
//session_start();

$username = "admin";
$password = 123;

if (isset($_POST['submit'])) {
    if ($_POST['username'] == $username && $_POST['password'] == $password) {
        //$_SESSION["username"] = $username;
        header("location:indexx.php");
    } else {
        header("location:index.php?alert=gagal");
    }
}
