<?php require('auth.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'head.html'?>>
    <link rel="stylesheet" href="css/stylemymusic.css">

    <title>Dunia Musik</title>
</head>
<body>
    <!-- Nav -->
    <?php include_once 'nav.html'?>
    
      <!-- MY MUSIC -->
        <div class="row mx-auto" style="width: 500px;">
            <div class="rounded-circle rounded">
                <i class="fas fa-user user"></i>
            </div>
            <div class="col-md-6">
                <h1 class="text-light h-1"><?php echo $_SESSION['user']['EMAIL']?></h1>
                <p class="text-light text-p">USER</p><a href="logout.php" style="color: crimson">Logout</a>
            </div>
        </div>
        <div class="text-center center">
          <a href="Favorit Saya.php">
            <button type="button" class="btn btn-dark rounded-0 text-left">
              <span>
                <i class="fas fa-heart heart"></i>
              </span>
              <div class="text-center margin">
                <p class="font-weight-bold font">Favorit Saya</p>
                <p class="lagu">Lagu & Album Musik</p>
              </div>
          </button>
          </a>
        </div>
        <br>
        <div class="text-center center">
          <a href="Terakhir Putar.php">
            <button type="button" class="btn btn-dark rounded-0 text-left" style="width: 550px; opacity: 0.8;">
              <span>
                <i class="fas fa-clock clock"></i>
              </span>
              <div class="text-center margin">
                <p class="font-weight-bold font">Terakhir Di Putar</p>
                <p class="lagu">Lagu & Album Musik</p>
              </div>
            </button>
          </a>
        </div>
      
        <?php include_once 'script.html'?>
</body>
</html>