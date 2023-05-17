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



    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp%3Aopsz%2Cwght%2CFILL%2CGRAD%4020..48%2C100..700%2C0..1%2C-50..200">
    
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./latest_style.css">

    <title>Tunez</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./OIG (4).jpg" type="image/x-icon">

</head>
<body>
<?php
  include("<files/userheader.php");
  ?>
  <center>
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <img src="pikachu_face.png" class="rounded me-2" alt="favicon" height="30px" width="25px">
        <strong class="me-auto">Message</strong>
        <small>Just now</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        You have logged in successfully!
      </div>
  </div>
  </center>

  <script>
    window.onload = (event) => {
      let myAlert = document.querySelector('.toast');
      let bsAlert = new bootstrap.Toast(myAlert);
      bsAlert.show();
    }
  </script>

    <!-- Main Body -->

    <!-- Greetings / Good morning -->
    <div class="welcome-box-full">
            <script>  
                var welcome;  
                var date = new Date();  
                var hour = date.getHours();  
                var minute = date.getMinutes();  
                var second = date.getSeconds();  
                if (minute < 10) {  
                  minute = "0" + minute;  
                }  
                if (second < 10) {  
                  second = "0" + second;  
                }  
                if (hour < 12) {  
                  welcome = "Good Morning";  
                } else if (hour < 17) {  
                  welcome = "Good Afternoon";  
                } else {  
                  welcome = "Good Evening";  
                }  
                document.write("<strong>" + "<font id='greeting'>" + welcome + "</font>" + "</strong>");  
            </script> 
    </div>

    


    <!-- Text -->
    <div class="welcome-text">
      Find the perfect music for your every mood
    </div>

    <!-- Sound Wave GIF -->
    <div class="wave-gif">
      <img 
      class="sound-wave-gif"
      src="https://cdn.dribbble.com/users/2968360/screenshots/7533259/__.gif" 
      height="180px" width="1200px"
      alt="sound-wave-gif">
    </div>

    <!-- Search Bar -->
    <div class="search-container">
      <input type="text" name="search" placeholder="Search music" class="search-input search-margin">
      <a href="#" class="search-btn search-margin">
              <i class="fas fa-search"></i>      
      </a>
  </div>

  <!-- Section Divider -->
  <hr class="hr-blurry">

  <!-- Popular/Latest Collection -->
  <div class="latest-heading" id="latest-songs">
      Latest
      <a class="view-all" href="latest.php">View all ></a>
  </div>
  <div class="container">
      <div class="row">
        <?php 
          $count = 0;
          foreach ($songs as $key => $a):?>
      
          <div class="col latest">  
            <a href="latest.php"> <img class="img-collection"  height="150px" width="150px" onclick="updatedSong('uploads/<?php echo $a['song_mp3']; ?>')" 
            src="uploads/<?php echo $a['song_pic']; ?>" 
            height="200px" width="200px" alt="song-image"></a> <br>
            <div class="sn"><?php echo $a['song_name']; ?></div> 
            <div class="mn"><?php echo $a['artist_name']; ?></div>
          </div>
        <?php $count++; 
        if ($count==6){
            break;
        }?>
        <?php endforeach; ?>
  </div>
      </div>



  <!-- Section Divider -->
  <hr class="hr-blurry">
  
  <!-- Bollywood Collection -->
  <div class="latest-heading" id="bollywood-songs">
    Bollywood
    <a class="view-all" href="bollywood.php">View all ></a>
  </div>
  <div class="container">
    <div class="row">
      <div class="col latest">
      <a href="bollywood.php"><img class="img-collection" 
          onclick="updatedSong('./songs/bollywood/128-Aasman Ko Chukar - Hanuman Returns 128 Kbps.mp3')"
          src="https://pagalfree.com/images/128Aasman%20Ko%20Chukar%20-%20Hanuman%20Returns%20128%20Kbps.jpg" 
          height="150px" width="150px" alt="song-image"></a> <br>
          <div class="sn">Aasman Ko Chukar</div> 
          <div class="mn">Hanuma</div>
          <!-- </a> -->
        </div>
        <div class="col latest">
        <a href="bollywood.php"><img class="img-collection" 
          onclick="updatedSong('./songs/bollywood/128-Tum Hi Ho - Aashiqui 2 128 Kbps.mp3')"
          src="https://pagalfree.com/images/128Tum%20Hi%20Ho%20-%20Aashiqui%202%20128%20Kbps.jpg"  
          height="150px" width="150px" alt="song-image"></a> <br>
          <div class="sn">Tum Hi Ho</div> 
          <div class="mn">Aashiqui 2</div>
      </div>
      <div class="col latest">
      <a href="bollywood.php"><img class="img-collection" 
        onclick="updatedSong('./songs/bollywood/128-Baarish - Half Girlfriend 128 Kbps.mp3')"
        src="https://pagalfree.com/images/128Baarish%20-%20Half%20Girlfriend%20128%20Kbps.jpg" 
        height="150px" width="150px" alt="song-image"></a> <br>
        <div class="sn">Baarish</div> 
        <div class="mn">Half Girlfriend</div>
      </div>
      <div class="col latest">
      <a href="bollywood.php"><img class="img-collection" 
        onclick="updatedSong('./songs/bollywood/128-Ranjha - Shershaah 128 Kbps.mp3')"
        src="https://pagalfree.com/images/128Ranjha%20-%20Shershaah%20128%20Kbps.jpg" 
        height="150px" width="150px" alt="song-image"></a> <br>
        <div class="sn">Ranjha</div> 
        <div class="mn">Shershaah</div>
      </div>
      <div class="col latest">
      <a href="bollywood.php"><img class="img-collection" 
        onclick="updatedSong('./songs/bollywood/128-Pal Pal Dil Ke Paas - Title Track - Pal Pal Dil Ke Paas 128 Kbps.mp3')"
        src="https://pagalfree.com/images/128Pal%20Pal%20Dil%20Ke%20Paas%20-%20Celebration%20-%20Pal%20Pal%20Dil%20Ke%20Paas%20128%20Kbps.jpg" 
        height="150px" width="150px" alt="song-image"></a> <br>
        <div class="sn">Pal Pal Dil Ke Pass</div> 
        <div class="mn">Pal Pal Dil Ke Pass</div>
      </div>
      <div class="col latest">
      <a href="bollywood.php"><img class="img-collection" 
          onclick="updatedSong('./songs/bollywood/128-Kesariya - Brahmastra 128 Kbps.mp3')"
          src="https://pagalfree.com/images/128Kesariya%20-%20Brahmastra%20128%20Kbps.jpg" 
          height="150px" width="150px" alt="song-image"> </a><br>
          <div class="sn">Kesariya</div> 
          <div class="mn">Brahmastra</div>
        <!-- </a> -->
      </div>
    </div>
  </div>

  <!-- Section Divider -->
  <hr class="hr-blurry">

  <!-- Tollywood Collection -->
  <div class="latest-heading" id="tollywood-songs">
    Tollywood
    <a class="view-all" href="tollywood.php">View all ></a>
  </div>
  <div class="container">
    <div class="row">
      <div class="col latest">
        <!-- <a href="www.google.com"> -->
          <a href="tollywood.php"><img class="img-collection" 
          onclick="updatedSong('songs/tollywood/[iSongs.info] 07 - Appudo Ippudo.mp3')"
          src="songs/tollywood/pics/Bommarillu.jpg" 
          height="150px" width="150px" alt="song-image"> </a><br>
          <div class="sn">Appudo Ippudo</div> 
          <div class="mn">Bommarillu</div>
        <!-- </a> -->
      </div>
      <div class="col latest">
      <a href="tollywood.php"><img class="img-collection" 
        onclick="updatedSong('songs/tollywood/[iSongs.info] 08 - Badulu Tochani.mp3')"
        src="songs/tollywood/pics/Mr Perfect.jpg"
        height="150px" width="150px" alt="song-image"> </a><br>
        <div class="sn">Badulu Tochani</div> 
          <div class="mn">Mr Perfect</div>
      </div>
      <div class="col latest">
      <a href="tollywood.php"><img class="img-collection" 
        onclick="updatedSong('songs/tollywood/[iSongs.info] O Manasa Omanasa.mp3')"
        src="songs/tollywood/pics/Bhadra.jpg" 
        height="150px" width="150px" alt="song-image"></a> <br>
        <div class="sn">O Manasa Omanasa</div> 
          <div class="mn">Bhadra</div>
      </div>
      <div class="col latest">
      <a href="tollywood.php"> <img class="img-collection" 
        onclick="updatedSong('songs/tollywood/[iSongs.info] 01 - Itu Itu Ani Chitikelu Evvarivo.mp3')"
        src="songs/tollywood/pics/Kanche.jpg" 
        height="150px" width="150px" alt="song-image"></a> <br>
        <div class="sn">Itu Itu Ani Chitikelu Evvarivo</div> 
          <div class="mn">Kanche</div>
      </div>
      <div class="col latest">
      <a href="tollywood.php"><img class="img-collection" 
        onclick="updatedSong('songs/tollywood/[iSongs.info] 01 - Yemito.mp3')"
        src="songs/tollywood/pics/Andhala Rakshasi.jpg" 
        height="150px" width="150px" alt="song-image"> </a><br>
        <div class="sn">Yemito</div> 
          <div class="mn">Andhala Rakshasi</div>
      </div>
      <div class="col latest">
      <a href="tollywood.php"><img class="img-collection" 
        onclick="updatedSong('songs/tollywood/[iSongs.info] 05 - Niddura Pothunna.mp3')"
        src="songs/tollywood/pics/Nuvve Nuvve.jpg" 
        height="150px" width="150px" alt="song-image"> </a><br>
        <div class="sn">Niddura Pothunna</div> 
          <div class="mn">Nuvve Nuvve</div>
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
        <span class="text-muted">&copy; 2023 Tunez Inc. All rights reserved.</span>
        </div>

        <div class="nav col-md-4 justify-content-end list-unstyled d-flex">
          <li class="ms-3"><a class="text-muted social-icons" target="_blank" href="#"><i class="fa-brands fa-facebook"></i></a></li>
          <li class="ms-3"><a class="text-muted social-icons" target="_blank" href="#"><i class="fa-brands fa-instagram"></i></a></li>
          <li class="ms-3"><a class="text-muted social-icons" target="_blank" href="#"><i class="fa-brands fa-twitter"></i></a></li>
          <li class="ms-3"><a class="text-muted social-icons" target="_blank" href="#"><i class="fa-brands fa-youtube"></i></a></li>
        </div>
    </footer>
    </div>


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