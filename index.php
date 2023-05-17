<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="CSS/styles.css">

    <title>Login Page</title>
</head>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    session_start();
    include "files/connection.php";
    $usernam=$_POST['uname'];
    $passw=$_POST['upassword'];
    $sql="SELECT * FROM users WHERE username='$usernam' AND userpassword='$passw'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);
    if($count==1)
    {
        $_SESSION['username1']=$usernam;
        $_SESSION['password']=$passw;
        header('location:home_main.php',true);
    }
    else{
        echo "<script>alert('Incorrect Username Or Password')</script>";
    }
}
?>

<body>
    <form action="<?php $_PHP_SELF ?>" method="post">
           <!-- Container ( With Image ) -->
    <div class="container-lg col-lg-8">

    <!-- Container ( Login Box ) -->
    <div class="container-md box1">

        <p class="h1" id="loginHeading">Login</p>

        <!-- Username -->
            <div class="username">
                <div class="input-group input-group-md">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Username</span>
                    <input type="text" class="form-control inp1" placeholder="Enter username"
                     aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" name='uname'>
                  </div>
            </div>

        <!-- Password -->
            <div class="password">
                <div class="input-group input-group-md">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Password</span>
                    <input type="password" class="form-control inp1" placeholder="Enter password"
                     aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" name="upassword">
                  </div>
            </div>

        <!-- Submit -->
        <div class="d-grid gap-2 col-6 mx-auto">
            <input id="submitLogin" class="btn btn-primary" type="submit" value="submit"></button>
          </div>

        <div><br>
            <font style="color: white;">Don't have an account yet?</font><br>
            <a id="registerText" href="signup.php" target="_self" rel="noopener noreferrer">Register Here</a>
        </div>
    <a href="adminlogin.php" target="_self">admin login</a>
        </div>
    </div>
</form>
</body>
</html>