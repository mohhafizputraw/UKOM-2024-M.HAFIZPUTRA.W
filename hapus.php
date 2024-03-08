<?php
include('koneksi.php');

$nis = $_GET['nis'];

$hapus = mysqli_query($connection,"DELETE FROM siswa WHERE nis='$nis'");

header("location: index.php");
?>