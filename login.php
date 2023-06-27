<?php
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
      header("Location: index.php");
      exit;
    }
  }

  $error = true;

}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="css/style-login.css" />
    <link rel="stylesheet" href="css/style-guide.css" />
  </head>
  <body>
  </div>
  
  <div class="alert alert-warning" role="alert">
    <form action="" method="post" >
      <div class="login screen">
        <table>
          <tr>
            <td>
              <div class="overlap-group1">
                <h1 class="wel-come">wel<br>come!</h1>
                <p class="how-are-you">how are you feeling today ?</p>
              </div>
            </td>
            <td>
              <div class="overlap-group">
                <div class="gabung">
                  <div class="login-1 login-3"><h2>Login</div>
                    <div class="overlap-group2">
                      <div class="username poppins-normal-envy-16px">
                        <label class="test"><b>username</b> </label><br>
                        <input type="text" placeholder="username" name="username" required>
                      </div>
                      <div class="password poppins-normal-envy-16px">
                        <label class="test"><b> password </b> </label><br>
                        <input type="password" placeholder="*******" name="password" required>
                      </div>
                      <a href="registrasi.php" class="belum">Belum punya akun?<a/>
                      <?php if(isset($error)): ?>
                      <p style = "margin-top: 10px;color : red; font-size: 1em ; font-style : italic;">username/ password salah</p>
                      <?php endif;  ?>
                    </div>
                    <div class="overlap-group-contrainer">
                        <button type="submit"class="button-login poppins-normal-gravel-16px " name="login">Login</button>
                </div>
                </div>
              </div>
            </td>
      </div>
          </tr>
        </table>
          
          </div>
    </form>  
  </body>
</html>
