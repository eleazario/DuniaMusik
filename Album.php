<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'head.html'?>
    <link rel="stylesheet" href="css/stylealbum.css">

    <title>Dunia Musik</title>
</head>
<body>
    <!-- CSS Background -->
    <style>
        body{
          background-color: #323232;
        }
      </style>
    <!-- Nav -->
    <?php include_once 'nav.html'?>

      Album
      <div class="album">
        <h1 class="font-weight-bold text-light">ALBUM</h1>
        <hr class="garis">
      </div>
      <br>
      <div class="row" id="Daftar-Album">

      </div>

      <?php include_once 'script.html'?>
        <script src="js/album.js"></script>
</body>
</html>