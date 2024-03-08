<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah</title>
</head>
<body>
    <h2>tambah data siswa</h2>

    <form method="post" action="edit-proses.php">
    <label>nis:</label><br/>
    <input type="text" name="nis" value="<?php $data ['nis'];?>" rquired><br/>
    <label>nama:</label><br/>
    <input type="text" name="nama" value="<?php $data ['nama'];?>" required><br/>
    <label>kelas:</label><br/>
    <input type="text" name="kelas" value="<?php $data ['kelas'];?>" required><br/>
    <label>jurusan</label><br/>
    <input type="text" name="jurusan" value="<?php $data ['jurusan'];?>" required><br/>
    <input type="submit" value="simpan"><br/>
    </form>
</body>
</html>