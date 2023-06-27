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
        <th>ID</th>
        <th>Nama Barang</th>
        <th>Jumlah Terjual</th>
        <th>Harga</th>
        <th>Total Harga</th>
      </tr>
    </thead>
    <tbody>
        <?php
          include "connect.php";
          $query = mysqli_query($conn, "Select * From jual1");
          while ($data = mysqli_fetch_array($query)){
            echo "<tr>";
              echo "<td>" . $data['id'] . "</td>";
              echo "<td>" . $data['nama'] . "</td>";
              echo "<td>" . $data['jumlah'] . "</td>";
              echo "<td>" . $data['harga'] . "</td>";
              echo "<td>" . $data['total'] . "</td>"; 
            echo "</tr> ";
          };
        ?>
    </tbody>
  </table>
</div>

</body>
</html>
