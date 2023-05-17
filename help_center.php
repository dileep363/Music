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
    <link rel="stylesheet" href="./help_style.css">

    <title>Tunez</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./OIG (4).jpg" type="image/x-icon">

</head>
<body>


    <!-- Main Body -->

    <!-- Latest Heading -->
    <div class="welcome-box-full">
            <strong><font id="greeting">Help Center</font></strong>
    </div>


    <!-- Text -->
    <div class="welcome-text">
      <!-- Find the perfect music for your every mood -->
      Need some assistance with your tunes? You've come to the right place. <br> Our help center has everything you need to rock on.
    </div>

    <hr class="hr-blurry">

    <!-- FAQs -->
    <div class="container">

        <h2>Frequently Asked Questions - FAQs</h2>
    
        <button class="accordion">
            What sets Tunez  apart from other music players?
        </button>
        <div class="panel">
            <p>
                Tunez is free for all its users forever. One can become a user just by creating an account.
            </p>
        </div>
    
        <button class="accordion">
            How compatible is the Tunez website?
        </button>
        <div class="panel">
            <p>
                Tunez is compatible with all the web browsers. Its been used by our thousands of customers. 
                We also have a dedicated support staff to help answer your queries.
            </p>
        </div>
    
        <button class="accordion">
            How much of data is used by the website?
        </button>
        <div class="panel">
            <p>
                Tunez is designed in such a way that the user gets uninterrupted playback as it uses a very small amount of data for
                playing the desired songs.
            </p>
        </div>

    </div>

    <!-- Section Divider -->
    <hr class="hr-blurry">
    <!-- Further Queries -->
    <div class="container further-query">
        For further queries, you can reach out to us at <font class="help-mail"> help@tunez.com </font>
    </div>

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;
        
        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
              panel.style.display = "none";
            } else {
              panel.style.display = "block";
            }
          });
        }
        </script>



  <!-- Section Divider -->
  <hr class="hr-blurry latest-hr">
  


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
        <li class="ms-3"><a class="text-muted" target="_blank" href="#"><i class="fa-brands fa-facebook"></i></a></li>
        </ul>
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