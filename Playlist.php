<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'head.html'?>
    <link rel="stylesheet" href="css/styleplaylist.css">

    <title>Dunia Musik</title>
</head>
<body>
    <!-- Nav -->
    <?php include_once 'nav.html'?>

      <!-- Playlist -->
        <div class="playlist">
          <h1 class="font-weight-bold text-light">PLAYLIST TERBARU</h1>
          <hr class="garis">
        </div>
        <br><br>
        <div class="container">
          <div class="row">
            <div class="col-md-2">
              <button type="button" class="btn btn-dark border-0 rounded-0 font-weight-bold button-1">Ramadhan</button>
            </div>
            <div class="col-md-2">
              <button type="button" class="btn btn-dark border-0 rounded-0 font-weight-bold button-2">Idul Fitri</button>
            </div>
            <div class="col-md-2">
              <button type="button" class="btn btn-dark border-0 rounded-0 font-weight-bold button-3">Santai</button>
            </div>
            <div class="col-md-2">
              <button type="button" class="btn btn-dark border-0 rounded-0 font-weight-bold button-4">Senja</button>
            </div>
            <div class="col-md-2">
              <button type="button" class="btn btn-dark border-0 rounded-0 font-weight-bold button-5">
                <p>Semangat</p>
              </button>
            </div>
            <div class="col-md-2">
              <button type="button" class="btn btn-dark border-0 rounded-0 font-weight-bold button-6">Religi</button>
            </div>
          </div>
        </div>
        <br><br>
        <div class="container">
          <table class="table table-borderless">
            <tr class="text-light">
              <th colspan="8" class="font-weight-bold font">MOOD</th>
            </tr>
            <tr>
              <td></td>
            </tr>
            <tr class="text-light">
              <td></td>
              <td></td>
              <td>Weekand</td>
              <td>Holiday</td>
              <td>Love</td>
              <td>Karaoke</td>
              <td>Religius</td>
              <td>Broken Hart</td>
            </tr>
            <tr class="text-light">
              <td></td>
              <td></td>
              <td>Happy</td>
              <td>Party</td>
              <td>Sleep</td>
              <td>Broken Hart</td>
              <td>Moodbooster</td>
              <td>Dinner</td>
            </tr>
            <tr>
              <td></td>
            </tr>
            <tr>
              <td></td>
            </tr>
            <tr>
              <td></td>
            </tr>
          </table>
        </div>

        <?php include_once 'script.html'?>
</body>
</html>