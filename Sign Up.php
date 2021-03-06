<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'head.html'?>
    <link rel="stylesheet" href="css/stylesignup.css">

    <title>Dunia Musik</title>
</head>
<!-- Sign Up -->
<body>
    <!-- Log In -->
    <a href="Index.php" style="text-decoration: none;"><p class="font-weight-bold logo-1"><span class="logo-2">DUNIA</span>MUSIK</p></a>
    <p class="font-weight-bold font">Sign Up</p>

    <div class="text-center">
        <button type="button" class="btn btn-primary rounded-pill font-weight-bold button-1"><i class="fab fa-facebook text-light"></i> Daftar dengan facebook</button> 
        <hr class="garis-1">
        <p class="text-light font-weight-bold text">Daftar dengan email</p>
        <form class="needs-validation" novalidate action="" method="POST">  
            <div>
                <input required class="form-control mx-auto input" name="email" id="email" type="email" placeholder="Alamat email">
                <div class="invalid-feedback">
                    Silahkan masukkan email.
                  </div>
            </div>
            <br>
            <div>
                <input required class="form-control mx-auto input" name="password" id="password" type="password" placeholder="Masukkan password">
                <div class="invalid-feedback">
                    Silahkan masukkan password.
                  </div>
            </div>
            <button name="register" class="btn btn-primary rounded-pill button-2" type="submit">Daftar</button>
        </form>
        <hr class="garis-2">
        <p class="text-light">Sudah memiliki akun? <a href="Log In.php"><u>Masuk</u></a></p>
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

</body>
</html>

<?php
    include_once('connect_db.php');

    if(isset($_POST['register'])){
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $sql = "INSERT INTO dmuser (EMAIL, PASSW) VALUES(:email, :password)";
        $stmt = $db->prepare($sql);

        $params = array(
            ':email'=>$email,
            ':password'=>$password
        );

        $saved = $stmt->execute($params);
        if($saved){
            header("Location: Log In.php");
        };
    }    
?>