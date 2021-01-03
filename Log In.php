<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'head.html'?>
    <link rel="stylesheet" href="css/stylelogin.css">

    <title>Dunia Musik</title>
</head>
<body>
    <!-- Log In -->
    <a href="Index.php" style="text-decoration: none;"><p class="font-weight-bold logo-1"><span class="logo-2">DUNIA</span>MUSIK</p></a>
    <p class="font-weight-bold font">Log In</p>

    <div class="text-center">
        <button type="button" class="btn btn-primary rounded-pill font-weight-bold button-1"><i class="fab fa-facebook text-light"></i> Login dengan facebook</button> 
        <hr class="garis-1">
        <p class="text-light font-weight-bold text">Login dengan email</p>
        <form action="" method="POST" class="needs-validation" novalidate>  
            <div>
                <input required class="form-control mx-auto input" name="email" id="myemail" type="email" placeholder="Alamat email">
                <div class="invalid-feedback">
                    Silahkan masukkan email.
                  </div>
            </div>
            <br>
            <div>
                <input required class="form-control mx-auto input" name="password" id="mypassword" type="password" placeholder="Masukkan password">
                <div class="invalid-feedback">
                    Silahkan masukkan password.
                  </div>
            </div>
            <button name="login" class="btn btn-primary rounded-pill button-2" type="submit">Masuk</button>
        </form>
        <hr class="garis-2">
        <p class="text-light">Pengguna Baru? <a href="Sign Up.php"><u>Sign Up</u></a></p>
    </div>
    
    <!-- Java Script -->
    <script>
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
      </script>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId            : '260754125188026',
          autoLogAppEvents : true,
          xfbml            : true,
          version          : 'v7.0'
        });
      };
    
      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "https://connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>
</body>
</html>

<?php
    include_once('connect_db.php');

    if(isset($_POST['login'])){
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        $sql = "SELECT * FROM dmuser WHERE email=:email";
        $stmt = $db->prepare($sql);

        $params = array(
            ":email" => $email
        );

        $stmt->execute($params);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user){
            if(password_verify($password, $user['PASSW'])){
                session_start();
                $_SESSION['user'] = $user;
                header('Location: My Music.php');
            }
        }
        else{
          echo '<script>alert("Email atau password salah!")</script>';
        }
    }

?>