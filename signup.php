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

    <title>Register Page</title>

    <script>
    pass2.oninput=()=>{
    var passw1=document.getElementById('pass1').value;
    if(passw1==pass2.value || pass2.value.length==0)
    {
        document.getElementById('pass2').style.border="solid 2px black";

    }
    else{
        document.getElementById('pass2').style.border="solid 4px red";

    }
    };
</script>
</head>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
$usernam=$_POST['uname'];
$ema=$_POST['uemail'];
$passw=$_POST['upassword'];
$repas=$_POST['repass'];
if($passw!=$repas){
echo "<script>alert('passwords are not matched')</script>";
}
else{
$server='localhost';
include "files/connection.php";
if(!$conn){
echo "not connected";
}
    $sql="insert into users values('$usernam','$ema','$passw')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        header("location:login.php",true);
    }
    else{
        header("not inserted",false);
        }
    }
}
?>
<body class="signBody">
    <form action="<?php $_PHP_SELF ?>" method="post">
    <!-- Container ( With Image ) -->
    <div class="container-lg col-lg-8">

    <!-- Container ( Login Box ) -->
    <div class="container-md box1 signCont">

        <p class="h1" id="loginHeading">Register</p>

        <!-- Username -->
            <div class="username">
                <div class="input-group input-group-md">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Username</span>
                    <input type="text" class="form-control inp1" placeholder="Enter username"
                     aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" name="uname" required>
                  </div>
            </div>
        
        <!-- Email -->
        <div class="umail">
            <div class="input-group input-group-md">
                <span class="input-group-text" id="inputGroup-sizing-lg">Email</span>
                <input type="email" class="form-control inp1" placeholder="Enter your email address"
                 aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" name="uemail" required>
              </div>
        </div>

        <!-- New Password -->
            <div class="password">
                <div class="input-group input-group-md">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Password</span>
                    <input type="password" class="form-control inp1" placeholder="Enter new Password"
                     aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" id='pass1' name="upassword" required>
                  </div>
            </div>

        <!-- Confirm Password -->
        <div class="password">
            <div class="input-group input-group-md">
                <span class="input-group-text" id="inputGroup-sizing-lg">Password</span>
                <input type="password" class="form-control inp1" placeholder="Confirm new Password"
                 aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" name="repass" id='pass2' required><br>
              </div>
        </div>

        <!-- Register -->
        <div class="d-grid gap-2 col-6 mx-auto">
            <input id="registerButton" class="btn btn-primary" type="submit" value="submit">
          </div>

    </div>
</form>
</body>
</html>