<html>
<head>
  <title>Gallery</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor="#C9D1C8">
  <div align="center" style="font-size: 25px;"><h1>Photo Gallery</h1><hr>
    <a href="form.php"class="tambah">[+] Upload Photo</a>
  </div>

  <p><table border="0" width="1350" class="menu fixed-th fixed-th th + th, fixed-th td + td fixed-th th, fixed-th td fixed-th th:nth-child(2), fixed-th td:nth-child(2) fixed-th th:nth-child(3), fixed-th td:nth-child(3) fixed-th thead zebra-table zebra-table th, zebra-table td zebra-table tbody tr:nth-child(odd)">
      <thead>
        <tr>
        <th>Photo</th>
        <th>Photo Name</th>
        <th>Photo Size</th>
        <th>Photo Type</th>
        </tr>
      </thead>

<?php
// Load file koneksi.php
include "koneksi.php";
$query = "SELECT * FROM gambar"; // Tampilkan semua data gambar
$no = 1;
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tbody>";
    echo "<tr class='menu fixed-th fixed-th th + th, fixed-th td + td fixed-th th, fixed-th td fixed-th th:nth-child(2), fixed-th td:nth-child(2) fixed-th th:nth-child(3), fixed-th td:nth-child(3) fixed-th thead zebra-table zebra-table th, zebra-table td zebra-table tbody tr:nth-child(odd)'>";

    echo "<td><p align='left'>$no.</p><p><img src='images/".$data['nama']."' width='200' height='200'>";
    echo "<a href='hapus.php?id=".$data['id']."' class='del'>Delete</a></td>";
    echo "<td><p>".$data['nama']."</td>";
    echo "<td>".$data['ukuran']."</td>";
    echo "<td>".$data['tipe']."</p></td>";
    
    echo "</tr>";
    echo "</tbody>";
    $no++;
  }
}

else{ // Jika data tidak ada
  echo "<p><h3 class='del' align='center'> No Image Is Displayed! </h3></p>";
}

?>
</table>
  <p align="left"><b>Total: <?php echo mysqli_num_rows($sql) ?></b></p>
</body>
</html>