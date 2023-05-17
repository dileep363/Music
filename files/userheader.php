<?php
session_start();
if(isset($_SESSION['username1'])){
    $acde=$_SESSION['username1'];
		 
}else{	
    header("Location: login.php");
    die();
}
?>
  <!-- Scroll to Top symbol -->
  <button onclick="topFunction()" id="topBtn" title="Go to top">
    <span class="material-symbols-outlined">
      expand_less
      </span>
  </button>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="home_main.html">
            <img class="tunez-logo" src="./OIG (4).jpg" height="50px" width="50px" alt="tunez-logo"> Tunez
        </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active home-button btn" aria-current="page" href="home_main.php">
                    <i class="fa-solid fa-house"> </i> &nbspHome
                </a>
              </li>
              <li class="nav-item">
                    
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            
                            <i class="fa-solid fa-cubes"></i> &nbspCategories
                        </a>
                      
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <li><a class="dropdown-item" href="#latest-songs">Latest</a></li>
                          <li><a class="dropdown-item" href="#bollywood-songs">Bollywood</a></li>
                          <li><a class="dropdown-item" href="#tollywood-songs">Tollywood</a></li>
                        </ul>
                      </div>

              </li>
              <li class="nav-item">
                <a class="nav-link btn" href="liked.php">
                    <i class="fa-solid fa-heart"></i> &nbspLiked
                </a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link btn" href="#">
                    <i class="fa-solid fa-list"></i> &nbspPlaylists
                </a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link btn" href="./contactus.php">
                    <i class="fa-solid fa-circle-question"></i> &nbspContact Us
                </a>
              </li>
            </ul>
            <div id="acc">
                <ul>
                    <li class="nav-item dropdown profile-pic">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           <?php echo"$acde" ;?> <span class="material-symbols-sharp" id="profile-logo">account_circle</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="index.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
        </div>
        </div>
    </div>
    </nav>
    
    <!-- Successful Login Toast -->
    