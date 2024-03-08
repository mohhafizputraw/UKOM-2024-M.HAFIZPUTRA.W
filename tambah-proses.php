<?php
include('koneksi.php');

$nis = $_post['nis'];
$nama = $_post['nama'];
$kelas = $_post['kelas'];
$jurusan = $_post['jurusan'];

$query = mysqli_query ($conn,"INSERT INTO siswa('$nis','$nama',$kelas,'$jurusan') value (nis,nama,kelas,jurusan where (nis='$nis')";

header("location: index.php");

?>