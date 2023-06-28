<?php
include "connect.php";

function registrasi($data){
  global $conn;
  $username = strtolower(stripslashes($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);
  $password2 = mysqli_real_escape_string($conn, $data["password2"]);

  //username dah ada apa belom
 $result =  mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
  if(mysqli_fetch_assoc($result)){
    echo "<script>
    alert('Username sudah terdaftar!');
    </script>";
    return false;
  }
  
  
  //cek konfirmasi password
  if($password !== $password2){
    echo "<script>
    alert('kata sandi tidak sama');
    </script>";
    return false;
  }

  //enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

  //tambahkan user ke database
  mysqli_query($conn, "INSERT INTO user VALUES('','$username','$password')");

  return mysqli_affected_rows($conn);
}

?>