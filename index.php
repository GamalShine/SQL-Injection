<?php
include "koneksi.php";
session_start();
if (!isset($_SESSION['username'])){
header ("location:login.php");
}
?>
Selamat.. Anda Berhasil Login, <a href="logout.php">Logout</a>
