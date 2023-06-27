<?php
include "functions.php";
if(isset($_POST["register"])){
  if(registrasi($_POST)> 0){
    echo "<script>
    alert('user berhasil di tambahkan');
    </script>"; 
  }else{
    echo mysqli_error($conn);
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Registrasi</title>
    <link rel="stylesheet" href="css/style-login.css" />
    <link rel="stylesheet" href="css/style-guide.css" />
  </head>
  <body>
  <div class="alert alert-warning" role="alert">

  </div>
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
                  <div class="login-1 login-3"><h3>Registrasi<h3></div>
                    <div class="overlap-group2">
                      <div class="username poppins-normal-envy-16px">
                        <label class="test"><b>username</b> </label><br>
                        <input type="text" placeholder="username" name="username" required>
                      </div>
                      <div class="password poppins-normal-envy-16px">
                        <label class="test"><b> password </b> </label><br>
                        <input type="password" placeholder="*******" name="password" required>
                        <label class="test"><b> password </b> </label><br>
                        <input type="password" placeholder="*******" name="password2" required>
                      </div>
                    </div>
                    <div class="overlap-group-contrainer">
                        <button type="submit"class="button-login poppins-normal-gravel-16px" name="register">Sign-Up</button>
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