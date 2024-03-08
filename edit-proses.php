<?php
include('koneksi.php');

$nis = $_post['nis'];
$nama = $_post['nama'];
$kelas = $_post['kelas'];
$jurusan = $_post['jurusan'];

$query = mysqli_query($conn,"INSERT INTO siswa(nis, nama, kelas, jurusan) VALUES ('[$nis]','[$nama]','[$kelas]','[$jurusan]')"; 

header("location: index.php");
?>