<?php

include('files/connection.php');
$sql="select * from songs order by song_id desc ";
$songs=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Ubuntu font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

    <!-- Icons Kit -->
    <script src="https://kit.fontawesome.com/f16043e6d0.js" crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <!-- Wavesurfer -->
    <script src="https://unpkg.com/wavesurfer.js"></script>


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp%3Aopsz%2Cwght%2CFILL%2CGRAD%4020..48%2C100..700%2C0..1%2C-50..200">
    
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="./latest_style.css">

    <title>Tunez</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./OIG (4).jpg" type="image/x-icon">

</head>
<body>
<?php
include("files/userheader.php");
?>

    <!-- Main Body -->

    <!-- Latest Heading -->
    <div class="welcome-box-full">
            <strong><font id="greeting">Latest</font></strong>
    </div>


    <!-- Text -->
    <div class="welcome-text">
      <!-- Find the perfect music for your every mood -->
      Explore the latest musical masterpieces
    </div>


    <!-- Search Bar -->
    <div class="search-container">
      <input type="text" name="search" placeholder="Search latest music" class="search-input search-margin">
      <a href="#" class="search-btn search-margin">
              <i class="fas fa-search"></i>      
      </a>
  </div>


  <!-- Section Divider -->
  <hr class="hr-blurry latest-hr">

  <!-- Popular/Latest Collection -->
  <!-- Row 1 -->
<?php 
$count = 0;
foreach ($songs as $key => $a):
    if ($count % 5 == 0): ?>
        <div class="container">
        <div class="row">
    <?php endif; ?>
    <div class="col latest">  
        <img class="img-collection" onclick="updatedSong('uploads/<?php echo $a['song_mp3']; ?>','uploads/<?php echo $a['song_pic']; ?>','<?php echo $a['song_name']; ?>','<?php echo $a['artist_name']; ?>')" 
        src="uploads/<?php echo $a['song_pic']; ?>"  
        height="200px" width="200px" alt="song-image"> <br>
        <label id="song_id" style="visibility:hidden"><?php echo $a['song_id'];?></label>
        <div class="sn"><?php echo $a['song_name']; ?></div> 
        <div class="mn"><?php echo $a['artist_name']; ?></div>
    </div>
    <?php $count++; ?>
    <?php if ($count % 5 == 0): ?>
        </div>
        </div>
    <?php endif; ?>
<?php endforeach; ?>




  <!-- Music Bar -->
  <div class="music-bar row">
    <div class="col-1">
        <img class="playing-song-img" src="./OIG (5).jpg" height="50px" width="50px" alt="song-image">
    </div>
    <div class="col-9 main-music-part">
      <div class="col-1" id="play-btn">
        <!-- <i class="fa-solid fa-play music-bar-sub-parts"></i> -->
        <img class="music-bar-sub-parts" src="pause-play.png" height="24px" width="24px" alt="play/pause btn">
      </div>
      <div class="col-11" id="waveform"></div>
    </div>
    <div class="col-1">
      <div class="btn">
        <i class="bar-btn fa-solid fa-heart music-bar-sub-parts"></i>
      </div>
    </div>
    <div class="col-1">
      <div class="btn">
        <span class="material-symbols-outlined playlist-add music-bar-sub-parts">
          playlist_add
          </span>
      </div>
    </div>
  </div>

  <!-- Sound Wave JS -->
<script>
  var currentWavesurfer = null;

  function updatedSong(e,sp,sn,mn) {
    var path = e;

    // stop the currently playing audio player, if any
    if (currentWavesurfer) {
      currentWavesurfer.stop();
      currentWavesurfer.destroy();
    }

    var playBtn = document.getElementById('play-btn');

    var wavesurfer = WaveSurfer.create({
      container: '#waveform',
      waveColor: 'white',
      progressColor: 'rgb(0, 255, 255)',
      barwidth: 4,
      responsive: true,
      height: 64,
      barradius: 4
    });

    wavesurfer.load(path);
    currentWavesurfer = wavesurfer;

    playBtn.onclick = function() {
      wavesurfer.playPause();

      if (playBtn.src.includes("pause-play.png")) {
        playBtn.src = "./pause-play.png";
      } else {
        playBtn.src = "./pause-play.png";
      }
    }

    wavesurfer.on('finish', function() {
      playBtn.src = "./pause-play.png";
      wavesurfer.stop();
    })
  }
</script>



  <!-- Footer -->
  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
        </a>
        <span class="text-muted">&copy; 2023 MSDS Project</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-muted" target="_blank" href="#"><i class="fa-brands fa-instagram"></i></a></li>
        </ul>
    </footer>
    </div>


  <!-- Sound Wave JS -->



  <!-- Scroll to Top Button -->
  <script>
    // Get the button
    let mybutton = document.getElementById("topBtn");
    
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
    </script>



</body>
</html>