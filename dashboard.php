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
	<a href="logout.php" target="_blank">Log Out</a>
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
        <th style="width: 15%">Hapus Data</th>
      </tr>
    </thead>
    <tbody>
      <!-- Form input data -->
      <br><br>
      <form method="post" action="">
        <label>Nama_ : </label>
        <input type="text" name="nama"><br><br>
        <label>Jumlah :</label>
        <input type="number" name="jumlah"><br><br>
        <label>Harga_  :</label>
        <input type="number" name="harga"><br><br>
        <button type="submit" name="submit" value="Simpan"> simpan </button><br><br>
      </form>
    <?php
   
      session_start();
      if( !isset($_SESSION["login"]) ){
        header ("Location: login.php");
        exit;
      }
      include "connect.php"; // Koneksi ke database
      
      if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $jumlah = $_POST['jumlah'];
        $harga = $_POST['harga'];
        $total = bcmul($jumlah, $harga); // Hitung total harga

        // Query untuk insert data ke tabel penjualanbarang
        $query = "INSERT INTO penjualanbarang (nama, jumlah, harga, total) VALUES ('$nama', '$jumlah', '$harga', '$total')";

        if(mysqli_query($conn, $query)){
          echo "Data berhasil disimpan";
        } else{
          echo "Error: " . mysqli_error($conn);
        }
      
      }

      $query = mysqli_query($conn, "SELECT * FROM penjualanbarang ORDER BY id ASC LIMIT 10");
        while ($data = mysqli_fetch_array($query)) {
            echo "<tr>";
            echo "<td style='text-align: center;'>" . $data['id'] . "</td>";
            echo "<td style='text-align: center;'>" . $data['nama'] . "</td>";
            echo "<td style='text-align: center;'>" . $data['jumlah'] . "</td>";
            echo "<td style='text-align: center;'> " . $data['harga'] . "</td>";
            echo "<td style='text-align: center;'>" . $data['total'] . "</td>";
            echo "<td style='text-align: center;'><a style='display: inline-block; text-align: center; color: black;' href='hapus_data.php?id_post=" . $data['id'] . "' 
            onmouseover=\"this.style.color='#5C469C'\" onmouseout=\"this.style.color='black'\">Hapus</a></td>";
      // Tambahkan link hapus_data.php dengan parameter id_post
            echo "</tr> ";
        };
      mysqli_close($conn); // Tutup koneksi
    ?>
    </tbody>
  </table>
</div>

</body>
</html>
