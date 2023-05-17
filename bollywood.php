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
            <strong><font id="greeting">Bollywood</font></strong>
    </div>


    <!-- Text -->
    <div class="welcome-text">
      <!-- Find the perfect music for your every mood -->
      Make your day colorful with the new hits of Bollywood
    </div>


    <!-- Search Bar -->
    <div class="search-container">
      <input type="text" name="search" placeholder="Search bollywood music" class="search-input search-margin">
      <a href="#" class="search-btn search-margin">
              <i class="fas fa-search"></i>      
      </a>
  </div>


  <!-- Section Divider -->
  <hr class="hr-blurry latest-hr">

  <!-- Popular/Latest Collection -->
  <!-- Row 1 -->
  <div class="container">
    <div class="row">
      <div class="col latest">
        <!-- <a href="www.google.com"> -->
          <img class="img-collection" 
          onclick="updatedSong('./songs/bollywood/128-Aasman Ko Chukar - Hanuman Returns 128 Kbps.mp3')"
          src="https://pagalfree.com/images/128Aasman%20Ko%20Chukar%20-%20Hanuman%20Returns%20128%20Kbps.jpg" 
          height="200px" width="200px" alt="song-image"> <br>
          <div class="sn">Aasman Ko Chukar</div> 
          <div class="mn">Hanuma</div>
          <!-- </a> -->
        </div>
        <div class="col latest">
          <img class="img-collection" 
          onclick="updatedSong('./songs/bollywood/128-Tum Hi Ho - Aashiqui 2 128 Kbps.mp3')"
          src="https://pagalfree.com/images/128Tum%20Hi%20Ho%20-%20Aashiqui%202%20128%20Kbps.jpg"  
          height="200px" width="200px" alt="song-image"> <br>
        <div class="sn">Tum Hi Ho</div> 
          <div class="mn">Aashiqui 2</div>
      </div>
      <div class="col latest">
        <img class="img-collection" 
        onclick="updatedSong('./songs/bollywood/128-Baarish - Half Girlfriend 128 Kbps.mp3')"
        src="https://pagalfree.com/images/128Baarish%20-%20Half%20Girlfriend%20128%20Kbps.jpg" 
        height="200px" width="200px" alt="song-image"> <br>
        <div class="sn">Baarish</div> 
        <div class="mn">Half Girlfriend</div>
      </div>
      <div class="col latest">
        <img class="img-collection" 
        onclick="updatedSong('./songs/bollywood/128-Ranjha - Shershaah 128 Kbps.mp3')"
        src="https://pagalfree.com/images/128Ranjha%20-%20Shershaah%20128%20Kbps.jpg" 
        height="200px" width="200px" alt="song-image"> <br>
        <div class="sn">Ranjha</div> 
          <div class="mn">Shershaah</div>
      </div>
      <div class="col latest">
        <img class="img-collection" 
        onclick="updatedSong('./songs/bollywood/128-Pal Pal Dil Ke Paas - Title Track - Pal Pal Dil Ke Paas 128 Kbps.mp3')"
        src="https://pagalfree.com/images/128Pal%20Pal%20Dil%20Ke%20Paas%20-%20Celebration%20-%20Pal%20Pal%20Dil%20Ke%20Paas%20128%20Kbps.jpg" 
        height="200px" width="200px" alt="song-image"> <br>
        <div class="sn">Pal Pal Dil Ke Pass</div> 
          <div class="mn">Pal Pal Dil Ke Pass</div>
      </div>
    </div>
  </div>

  <!-- Row 2 -->
  <div class="container">
    <div class="row">
      <div class="col latest">
        <!-- <a href="www.google.com"> -->
          <img class="img-collection" 
          onclick="updatedSong('./songs/bollywood/128-Kesariya - Brahmastra 128 Kbps.mp3')"
          src="https://pagalfree.com/images/128Kesariya%20-%20Brahmastra%20128%20Kbps.jpg" 
          height="200px" width="200px" alt="song-image"> <br>
          <div class="sn">Kesariya</div> 
          <div class="mn">Brahmastra</div>
        <!-- </a> -->
      </div>
      <div class="col latest">
        <img class="img-collection" 
        onclick="updatedSong('./songs/bollywood/128-Tu Jo Mila - Bajrangi Bhaijaan 128 Kbps.mp3')"
        src="https://pagalfree.com/images/128Tu%20Jo%20Mila%20-%20Bajrangi%20Bhaijaan%20128%20Kbps.jpg" 
        height="200px" width="200px" alt="song-image"> <br>
        <div class="sn">Tu Jo Mila</div> 
          <div class="mn">Bajrangi Bhaijaan</div>
      </div>
      <div class="col latest">
        <img class="img-collection" 
        onclick="updatedSong('./songs/bollywood/128-Apna Bana Le - Bhediya 128 Kbps.mp3')"
        src="https://pagalfree.com/images/128Apna%20Bana%20Le%20-%20Bhediya%20128%20Kbps.jpg" 
        height="200px" width="200px" alt="song-image"> <br>
        <div class="sn">Apna Bana Le</div> 
          <div class="mn">Bhediya</div>
      </div>
      <div class="col latest">
        <img class="img-collection" 
        onclick="updatedSong('./songs/bollywood/128-Ae Dil Hai Mushkil Title Track - Ae Dil Hai Mushkil 128 Kbps.mp3')"
        src="https://pagalfree.com/images/128Ae%20Dil%20Hai%20Mushkil%20Title%20Track%20-%20Ae%20Dil%20Hai%20Mushkil%20128%20Kbps.jpg" 
        height="200px" width="200px" alt="song-image"> <br>
        <div class="sn">Ae Dil Hai Mushkil</div> 
          <div class="mn">Ae Dil Hai Mushkil</div>
        </div>
      <div class="col latest">
        <img class="img-collection" 
        onclick="updatedSong('./songs/bollywood/128-Khairiyat - Chhichhore 128 Kbps.mp3')"
        src="https://pagalfree.com/images/128Khairiyat%20-%20Chhichhore%20128%20Kbps.jpg" 
        height="200px" width="200px" alt="song-image"> <br>
        <div class="sn">Khairiyat</div> 
          <div class="mn">Chhichhore</div>
      </div>
    </div>
  </div>

  <!-- Row 3 -->
  <div class="container">
    <div class="row">
      <div class="col latest">
        <!-- <a href="www.google.com"> -->
          <img class="img-collection" 
          onclick="updatedSong('./songs/bollywood/128-Teri Meri - Bodyguard 128 Kbps.mp3')"
          src="https://pagalfree.com/images/128Teri%20Meri%20-%20Bodyguard%20128%20Kbps.jpg" 
          height="200px" width="200px" alt="song-image"> <br>
          <div class="sn">Teri Meri</div> 
          <div class="mn">Bodyguard</div>
        <!-- </a> -->
      </div>
      <div class="col latest">
        <img class="img-collection" 
        onclick="updatedSong('./songs/bollywood/192-Shayad - Love Aaj Kal 192 Kbps.mp3')"
        src="https://pagalfree.com/images/192Shayad%20-%20Love%20Aaj%20Kal%20192%20Kbps.jpg" 
        height="200px" width="200px" alt="song-image"> <br>
        <div class="sn">Shayad</div> 
          <div class="mn">Love Aaj Kal</div>
      </div>
      <div class="col latest">
        <img class="img-collection" 
        onclick="updatedSong('./songs/bollywood/128-Kaise Hua - Kabir Singh 128 Kbps.mp3')"
        src="https://i1.sndcdn.com/artworks-000552464109-kj58vp-t500x500.jpg" 
        height="200px" width="200px" alt="song-image"> <br>
        <div class="sn">Kaise Hua</div> 
          <div class="mn">Kabir Singh</div>
      </div>
      <div class="col latest">
        <img class="img-collection" 
        onclick="updatedSong('./songs/bollywood/128-Chammak Challo - Ra-One 128 Kbps.mp3')"
        src="https://pagalfree.com/images/128Chammak%20Challo%20-%20Ra-One%20128%20Kbps.jpg" 
        height="200px" width="200px" alt="song-image"> <br>
        <div class="sn">Chammak Challo</div> 
          <div class="mn">Ra One</div>
      </div>
      <div class="col latest">
        <img class="img-collection" 
        onclick="updatedSong('./songs/bollywood/128-Namo Namo - Kedarnath 128 Kbps.mp3')"
        src="https://pagalfree.com/images/128Namo%20Namo%20-%20Kedarnath%20128%20Kbps.jpg" 
        height="200px" width="200px" alt="song-image"> <br>
        <div class="sn">Namo Namo</div> 
          <div class="mn">Kedarnath</div>
      </div>
    </div>
  </div>

  <!-- Row 4 -->
  <div class="container">
    <div class="row">
      <div class="col latest">
        <!-- <a href="www.google.com"> -->
          <img class="img-collection" 
          onclick="updatedSong('./songs/bollywood/128-Mehabooba - KGF Chapter 2 128 Kbps.mp3')"
          src="https://cdn.statusqueen.com/dpimages/thumbnail/kgf-2843.jpg" 
          height="200px" width="200px" alt="song-image"> <br>
          <div class="sn">Mehabooba</div> 
          <div class="mn">KGF : Chapter 2</div>
        <!-- </a> -->
      </div>
      <div class="col latest">
        <img class="img-collection" 
        onclick="updatedSong('./songs/bollywood/128-Baby Wont You Tell Me - Saaho 128 Kbps.mp3')"
        src="https://pagalfree.com/images/128Baby%20Wont%20You%20Tell%20Me%20-%20Saaho%20128%20Kbps.jpg"
        height="200px" width="200px" alt="song-image"> <br>
        <div class="sn">Baby Wont You Tell Me</div> 
          <div class="mn">Saaho</div>
      </div>
      <div class="col latest">
        <img class="img-collection" 
        onclick="updatedSong('./songs/bollywood/128-Srivalli - Pushpa - The Rise 128 Kbps.mp3')"
        src="https://pagalfree.com/images/128Srivalli%20-%20Pushpa%20-%20The%20Rise%20128%20Kbps.jpg" 
        height="200px" width="200px" alt="song-image"> <br>
        <div class="sn">Srivalli</div> 
          <div class="mn">Pushpa : The Rise</div>
      </div>
      <div class="col latest">
        <img class="img-collection" 
        onclick="updatedSong('./songs/bollywood/128-Pal - Jalebi 128 Kbps.mp3')"
        src="https://pagalfree.com/images/128Pal%20-%20Jalebi%20128%20Kbps.jpg" 
        height="200px" width="200px" alt="song-image"> <br>
        <div class="sn">Pal</div> 
          <div class="mn">Jalebi</div>
      </div>
      <div class="col latest">
        <img class="img-collection" 
        onclick="updatedSong('./songs/bollywood/128-Manwa Laage - Happy New Year 128 Kbps.mp3')"
        src="https://pagalfree.com/images/128Manwa%20Laage%20-%20Happy%20New%20Year%20128%20Kbps.jpg" 
        height="200px" width="200px" alt="song-image"> <br>
        <div class="sn">Manwa Laage</div> 
          <div class="mn">Happy New Year</div>
      </div>
    </div>
  </div>





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
  <script>
  var currentWavesurfer = null;

  function updatedSong(e) {
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