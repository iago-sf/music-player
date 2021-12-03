<?php 
  $music = array_diff(scandir('./music'), array('..', '.'));;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/styles.css">
  <title>Music player</title>
</head>
<body>
  <div id="songs" hidden>
  <?php 
  if($music){
    foreach($music as $song)
    {
      echo "<div>$song</div>";
    }
  } else {
    echo 'No hay musica';
  }
  ?>
  </div>

  <div id="controlBar">
    <div id="songName">
      hola esto es una cancion
    </div>
    <div id="songControls">
      <i id="lastSong" class="bi bi-skip-start-fill"></i>
      <i id="playPause" class="bi bi-play-fill"></i>
      <i id="nextSong" class="bi bi-skip-end-fill"></i>
    </div>
  </div>
  
  <script src="js/player.js"></script>
</body>
</html>