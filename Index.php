<!DOCTYPE html>
<html lang="en" id="home">
<head>
    <?php include_once 'head.html'?>
    <link rel="stylesheet" href="css/stylehome.css">    

    <title>Dunia Musik</title>
</head>
<body>
    <!-- Nav -->
    <?php include_once 'nav.html'?>

      <!-- Home -->
          <div class="jumbotron jumbotron-fluid"><br>
            <div class="container-fluid">
                <a href="Log In.php" class="text-light"><button type="button" class="btn btn-outline-light rounded-pill">Log In</button></a>
                <a href="Sign Up.php" class="text-light"><button type="button" class="btn btn-outline-light rounded-pill">Sign Up</button></a>
            </div>
            <div class="margin-top">
                <h1 class="font-weight-bold text-light title-h1">DUNIA MUSIK</h1>
                <p class="text-light title-p">Cukup login dan download lagu favoritmu sepuasnya</p>
            </div>
          </div>
          <div class="container">
            <h2 class="font-weight-bold">TOP HITS</h2><br>
              <div class="row">
                  <div class="col-md-2 image">
                    <img class="image-2" src="img/2.jpg">
                    <p class="font-weight-bold">Kenangan Manis
                        <br>
                        <span class="font-weight-normal">Pamungkas</span>
                    </p>
                  </div>
                  <div class="col-md-2 image">
                    <img class="image-2" src="img/3.jpg">
                    <p class="font-weight-bold">Pura Pura Lupa
                        <br>
                        <span class="font-weight-normal">Mahen</span>
                    </p>
                  </div>
                  <div class="col-md-2 image">
                    <img class="image-2" src="img/4.jpg">
                    <p class="font-weight-bold">Bentuk Cinta
                        <br>
                        <span class="font-weight-normal">Eclat Story</span>
                    </p>
                  </div>
                  <div class="col-md-2 image">
                    <img class="image-2" src="img/5.png">
                    <p class="font-weight-bold">Love Scenario
                        <br>
                        <span class="font-weight-normal">iKON</span>
                    </p>
                  </div>
              </div>
          </div>
          <br>
          <div style="background-image: url(img/6.jpg); background-size: cover;">
            <div class="container"><br>
                <h2 class="font-weight-bold text-light">TOP TRENDING</h2><br>
                <div class="row">
                    <div class="col-md-2">
                        <img class="image-2" src="img/7.jpg">
                        <p class="font-weight-bold text-light">Sunday Best
                            <br>
                            <span class="font-weight-normal text-light">Surfaces</span>
                        </p>
                     </div>
                     <div class="col-md-2">
                        <img class="image-2" src="img/8.png">
                        <p class="font-weight-bold text-light">Yummy
                            <br>
                            <span class="font-weight-normal text-light">Justin Bieber</span>
                        </p>
                     </div>
                     <div class="col-md-2">
                        <img class="image-2" src="img/9.jpeg">
                        <p class="font-weight-bold text-light">Boy With Luv
                            <br>
                            <span class="font-weight-normal text-light">BTS, Halsey</span>
                        </p>
                     </div>
                     <div class="col-md-2">
                        <img class="image-2" src="img/10.jpg">
                        <p class="font-weight-bold text-light">Sedang Sayang Sayangnya
                            <br>
                            <span class="font-weight-normal text-light">Mawar De Jongh</span>
                        </p>
                     </div>
              </div>
            </div>
          </div>
          
          <?php include_once 'script.html'?>
  </body>
</body>
</html>