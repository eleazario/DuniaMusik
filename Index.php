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
            <div class="">
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
                  $sql = "SELECT * FROM artist JOIN lagu ON artist.ID_ARTIST = lagu.ID_ARTIST JOIN album ON lagu.ID_ALBUM = album.ID_ALBUM WHERE tag = 'hits'";
                  $stmt = $db->prepare($sql);
                  $stmt->execute();

                  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    echo'
                    <div class="col-md-2 image">
                    <img class="image-2" src="data:image/jpeg;base64,'.base64_encode($row['COVER_ALBUM']).'">
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
                    $sql = "SELECT * FROM artist JOIN lagu ON artist.ID_ARTIST = lagu.ID_ARTIST JOIN album ON lagu.ID_ALBUM = album.ID_ALBUM WHERE tag = 'trending'";
                    $stmt = $db->prepare($sql);
                    $stmt->execute();

                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                      echo'
                      <div class="col-md-2">
                        <img class="image-2" src="data:image/jpeg;base64,'.base64_encode($row['COVER_ALBUM']).'">
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
          <script>
                          $('#FormSearch').submit(function(e){
                  $.ajax({
                      url: 'https://accounts.spotify.com/api/token',
                      type: 'post',
                      dataType: 'json',
                      headers: {
                          'Authorization': 'Basic ODRjODM3Mjg3ZGZlNDcyZjllYTlhOGE5YTMxMTMyZTM6NzdmOGE4NDQ3YzlhNDE2NGFiYzUwMWViM2UxMzc2NTU=',
                          'Content-Type': 'application/x-www-form-urlencoded'
                      },
                      data: {
                          'grant_type': 'client_credentials'
                      },        
                      success:function(auth){
                          $.ajax({
                              url: 'https://api.spotify.com/v1/search',
                              type: 'get',
                              dataType: 'json',
                              headers: {
                                  'Authorization' : auth.token_type + ' ' + auth.access_token                    
                              },
                              data: {
                                  'q': $('#FormSearch input').val(),
                                  'type': 'track,artist',
                                  'market': 'ID',
                                  'limit': '10',
                                  'offset': '5'
                              },
                              success:function(result){
                                  var track = result.tracks.items;
                                  console.log(track);
                                  $('#Content').html('');

                                  $('#Content').append('<div class="judul"><h1 class="font-weight-bold text-light">S E A R C H</h1><hr class="garis"></div><br><br><div class="search p-5"></br><ul id="UlItem" class="list-group" style="opacity: 100%;"></ul>');
                                  $.each(track,function(i,data){
                                      var artist = data.artists;
                                      
                                      albumRead = function(){
                                          $.each(artist,function(n,index){
                                              return(index.name);
                                          });
                                      }
                                      $('#UlItem').append('<li class="list-group-item bg-secondary"><h5>'+ data.name +'</h5>'+ data.album.name +'<br><b>' +'</b></li>');
                                  
                                  })
                              },
                              error:function(result){
                                  
                                  alert(result.responseJSON.error.message)
                              }
                          })
                      },
                      error:function(auth){
                          alert('auth error');
                      }
                  })
                  e.preventDefault()
              })

          </script>
  </body>
</body>
</html>