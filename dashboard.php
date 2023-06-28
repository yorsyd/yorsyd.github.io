<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Penjualan Barang</title>
  <link rel="stylesheet" href="css/style-dashboard.css">
  <link rel="stylesheet" href="css/style-main.css">
</head>
<body>

<header>
  <h1>UrbaneThreads</h1>
</header>

<div class="sidebar">
  <a href="dashboard.php">Data Penjualan</a>
  <a href="profil.html">Profil Toko</a>
</div>

<div class="content">
  <h2>Data Penjualan</h2><br>
  
  <table>
    <thead>
      <tr>
        <th style="width: 2%">ID</th>
        <th>Nama Barang</th>
        <th style="width: 5%">Terjual</th>
        <th style="width: 15%">Harga</th>
        <th style="width: 15%">Total Harga</th>
      </tr>
    </thead>
    <tbody>
      <!-- Form input data -->
      <br><br>
      <form method="post" action="">
        <label>Nama    :</label>
        <input type="text" name="nama"><br><br>
        <label>Jumlah  :</label>
        <input type="number" name="jumlah"><br><br>
        <label>Harga   :</label>
        <input type="number" name="harga"><br><br>
        <button type="submit" name="submit" value="Simpan"> simpan </button><br><br>
      </form>
    <?php
      include "connect.php"; // Koneksi ke database
      
      if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $jumlah = $_POST['jumlah'];
        $harga = $_POST['harga'];
        $total = $jumlah * $harga; // Hitung total harga

        // Query untuk insert data ke tabel penjualanbarang
        $query = "INSERT INTO penjualanbarang (nama, jumlah, harga, total) VALUES ('$nama', '$jumlah', '$harga', '$total')";

        if(mysqli_query($conn, $query)){
          echo "Data berhasil disimpan";
        } else{
          echo "Error: " . mysqli_error($conn);
        }
      
      }

      $query = mysqli_query($conn, "Select *  FROM penjualanbarang ORDER BY id ASC LIMIT 10");
      while ($data = mysqli_fetch_array($query)){
          echo "<tr>";
          echo "<td>" . $data['id'] . "</td>";
          echo "<td>" . $data['nama'] . "</td>";
          echo "<td>" . $data['jumlah'] . "</td>";
          echo "<td>" . $data['harga'] . "</td>";
          echo "<td>" . $data['total'] . "</td>"; 
        echo "</tr> ";
      };
      mysqli_close($conn); // Tutup koneksi
    ?>
    </tbody>
  </table>
</div>

</body>
</html>
