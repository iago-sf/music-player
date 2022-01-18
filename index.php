<?php 
  $archives = scandir('./music');
  $music = [];

  for ($i=0; $i < count($archives); $i++) { 
    if(pathinfo($archives[$i], PATHINFO_EXTENSION) == 'mp3'){
      array_push($music, $archives[$i]);
    }
  }
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
    echo 'There is no music';
  }
  ?>
  </div>

  <div id="controlBar">
    <div id="songName">
      This should be a song
    </div>
    <div id="songControls">
      <i id="lastSong" class="controlButton bi bi-skip-start-fill"></i>
      <i id="playPause" class="controlButton bi bi-play-fill"></i>
      <i id="nextSong" class="controlButton bi bi-skip-end-fill"></i>
    </div>
  </div>
  
  <script src="js/player.js"></script>
</body>
</html>