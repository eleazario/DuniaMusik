<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'head.html'?>
    <link rel="stylesheet" href="css/stylefavoritsaya.css">
    <link rel="stylesheet" href="css/audioplayer.css">

    <title>Dunia Musik</title>
</head>
<body>
    <!-- Nav -->
    <?php include_once 'nav.html'?>

      <div class="jumbotron">
        <div class="container">
            <div class="row mx-auto">
                <div>
                    <i class="fas fa-heart icon-heart"></i>
                </div>
                <div class="col-md-6">
                    <h1 class="text-light font-weight-bold h-1">Favorit Saya</h1>
                    <p  class="text">Lagu & Album Musik</p>
                </div>
            </div><br><br>
               <div class="Dunia-musik-area mt-100 d-flex align-items-center flex-wrap" data-animation = "fadeInUp" data-delay = "900ms">
                 <div class="Dunia-musik-thumbnail">
                   <img src="img/3.jpg" alt="" width="220" height="220">
                 </div>
                  <div class="Dunia-Musik-Konten">
                    <h2 class="text-light">Pura-Pura Lupa</h2>
                    <div class="music-meta-data">
                      <p class="text-light">By Petrus Mahendra</p>
                    </div>
                    <!--Music Player-->
                    <div class="Dunia-musik-player">
                      <audio src="" preload="auto" controls>
                        <source src="audio/musik.mp3">
                      </audio>
                    </div>
                     <!-- Likes, Share & Download -->
                  <div class="likes-share-download d-flex align-items-center justify-content-between">
                    <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Like (29)</a>
                    <div>
                      <a href="#" class="mr-4 ml-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
                      <a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download (12)</a>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="Dunia-musik-area mt-100 d-flex align-items-center flex-wrap" data-animation = "fadeInUp" data-delay = "900ms">
                <div class="Dunia-musik-thumbnail">
                  <img src="img/35.jpg" alt="" width="220" height="220">
                </div>
                 <div class="Dunia-Musik-Konten">
                   <h2 class="text-light">Hanya Rindu</h2>
                   <div class="music-meta-data">
                     <p class="text-light">By Andmesh</p>
                   </div>
                   <!--Music Player-->
                   <div class="Dunia-musik-player">
                     <audio src="" preload="auto" controls>
                       <source src="audio/musik.mp3">
                     </audio>
                   </div>
                    <!-- Likes, Share & Download -->
                 <div class="likes-share-download d-flex align-items-center justify-content-between">
                   <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Like (29)</a>
                   <div>
                     <a href="#" class="mr-4 ml-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
                     <a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download (12)</a>
                   </div>
                 </div>
               </div>
             </div><br>
        </div>

        <?php include_once 'script.html'?>
        <script src="js/audioplayer.js"></script>
</body>
</html>