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
                <?php
                  session_start();
                  if(isset($_SESSION['user'])){
                    echo '<a href="My Music.php" class="text-light"><button type="button" class="btn btn-outline-light rounded-pill">'.$_SESSION["user"]["EMAIL"].'</button></a>';
                  }
                  else{
                    echo '<a href="Log In.php" class="text-light"><button type="button" class="btn btn-outline-light rounded-pill">Log In</button></a>';
                    echo '<a href="Sign Up.php" class="text-light"><button type="button" class="btn btn-outline-light rounded-pill">Sign Up</button></a>';                    
                  }
                ?>
                
            </div>
            <div class="margin-top">
                <h1 class="font-weight-bold text-light title-h1">DUNIA MUSIK</h1>
                <p class="text-light title-p">Cukup login dan download lagu favoritmu sepuasnya</p>
            </div>
          </div>
          <div class="container">
            <h2 class="font-weight-bold">TOP HITS</h2><br>
              <div class="row">
                <?php
                  include_once 'connect_db.php';

                  $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                  $sql = "SELECT * FROM lagu INNER JOIN artist ON lagu.ID_ARTIST = artist.ID_ARTIST WHERE tag = 'hits'";
                  $stmt = $db->prepare($sql);
                  $stmt->execute();

                  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    echo'
                    <div class="col-md-2 image">
                    <img class="image-2" src="img/2.jpg">
                    <p class="font-weight-bold">'.$row['JUDUL'].'
                        <br>
                        <span class="font-weight-normal">'.$row['NAMA_ARTIST'].'</span>
                    </p>
                  </div>';
                  }
                ?>
                  
                  
              </div>
          </div>
          <br>
          <div style="background-image: url(img/6.jpg); background-size: cover;">
            <div class="container"><br>
                <h2 class="font-weight-bold text-light">TOP TRENDING</h2><br>
                <div class="row">

                  <?php
                    $sql = "SELECT * FROM lagu INNER JOIN artist ON lagu.ID_ARTIST = artist.ID_ARTIST WHERE tag = 'trending'";
                    $stmt = $db->prepare($sql);
                    $stmt->execute();

                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                      echo'
                      <div class="col-md-2">
                        <img class="image-2" src="img/7.jpg">
                        <p class="font-weight-bold text-light">'.$row['JUDUL'].'
                            <br>
                            <span class="font-weight-normal text-light">'.$row['NAMA_ARTIST'].'</span>
                        </p>
                     </div>';
                    }
                  ?>
                    
                    
              </div>
            </div>
          </div>
          
          <?php include_once 'script.html'?>
  </body>
</body>
</html>