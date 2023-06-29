
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
                      <?php 
                      
                      require "prosesLogin.php";
                      if(isset($error)): ?>
                      <p id = "error" style = "margin-top: 10px;color : red; font-size: 1em ; font-style : italic;">username/ password salah</p>
                      <script src = "SCRIPT/login-pesanHilang.js"></script>
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
