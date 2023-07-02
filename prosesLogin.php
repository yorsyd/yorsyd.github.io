<?php
session_start();
if(isset($_SESSION["login"])){
  if ($_SESSION["login"] && $_SESSION["role"] === "admin") {
    header("Location: dashboard.php");
    exit;
  } else {
    header("Location: index.php");
    exit;
  }
}

require 'connect.php';
global $conn;
if(isset($_POST["login"])){
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

  //cek username
  if(mysqli_num_rows($result) === 1){
    //cek password
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password,$row["password"])){
        //set session
        $_SESSION["login"] = true;
        $row["role"] = $_SESSION["role"] ;

        if ($username === "admin") {
          header("Location: dashboard.php");
        } else {
          header("Location: index.php");
        }
        exit;
    }
  }

  $error = true;
}
?>
