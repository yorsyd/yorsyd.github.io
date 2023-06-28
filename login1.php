<?php
    include "connect.php"; // Koneksi ke database
    error_reporting(0);
    session_start();
    if (isset($_SESSION['username'])) {
      header("Location: index.php");
    }
    // Cek apakah tombol Login diklik
    if (isset($_POST['submit'])) {
      $email = $_POST['email'];
      $password = md5($_POST['password']);
   
      $sql = "SELECT * FROM login WHERE email='$email' AND password='$password'";
      $result = mysqli_query($conn, $sql);
      if ($result->num_rows > 0) {
          $row = mysqli_fetch_assoc($result);
          $_SESSION['username'] = $row['username'];
          header("Location: index.php");
      } else {
          echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
      }
  }
 ?>