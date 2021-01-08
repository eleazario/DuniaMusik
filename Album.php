<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'head.html'?>
    <link rel="stylesheet" href="css/stylealbum.css">

    <title>Dunia Musik</title>
</head>
<body>
    <!-- Nav -->
    <?php include_once 'nav.html'?>

    <div class="album container-fluid">
        <h1 class="font-weight-bold text-light">ALBUM</h1>
        <hr class="garis">

        <div class="row justify-content-center">
            <?php 
                include_once('connect_db.php');

                $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "SELECT * from artist inner join album on artist.ID_ARTIST = album.ID_ARTIST";
                $stmt = $db->prepare($sql);
                $stmt->execute();    
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    echo '<div class="col-3"><img class="image-2" src="img/2.jpg"><h4 class="text-white">'.$row['NAMA_ALBUM'].'</h4><P class="text-white">'.$row['NAMA_ARTIST'].'</P></div>';
                }
            ?>
        </div>        
    </div>

    <?php include_once 'script.html'?>
</body>
</html>