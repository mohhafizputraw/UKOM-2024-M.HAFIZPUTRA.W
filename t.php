<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data siswa</title>
 </head>
 <body>
 <marquee><h2 style="color: aqua;">DATA SISWA REKAYASA PERANGKAT LUNAK</h2></marquee>
    <a href = "tambah.php">tambah</a>

   <form method="post" action="tambah-proses.php">
      <table border="2">
      <tr>
         <th>no.</th>
         <th>nis</th>
         <th>nama</th>
         <th>kelas</th>
         <th>jurusan</th>
         <th>aksi</th>
      </tr>
      </table>

      <?php
      $query = mysqli_query ;
      $no="1"
      while ($data = mysqli_fetch_array($querry));
      
echo "<tr>"
echo "<td>".$no."</td>";
echo "<td>".$nis['$data']."</td>";
echo "<td>".$nama['$data']."</td>";
echo "<td>".$kelas['$data']."</td>";
echo "<td>".$jurusan['$data']."</td>";
echo "</tr>"

?>

<a href="edit.php"?nis( )
<a href="hapus.php"?nis( )


   </form>
 </body>
 </html>


 <input type="text" name="nis" value="<?php $data ['nis'];?>"  required><br/>
