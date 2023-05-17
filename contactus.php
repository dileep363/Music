<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject="Add these songs";
    $email = $_POST['mail'];
    $moviename=$_POST['subject'];
    $songnames = $_POST['message'];
    $message="Movie Name:".$moviename."\n"."Songnames:".$songnames;
    
    $mailTo = "dileeppujala@gmail.com";
    $headers ="From: dileeppujala@gmail.com";
    if(mail($mailTo, $subject, $message,$headers) && mail($email,"Regarding Songs Upload","Songs will be added shortly",$headers)){
        echo "<script>alert('Feedback sent successfully')</script>";
    }
    else{
        echo "<script>alert('Feedback not sent ')</script>";
    }
}
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
    <link rel="stylesheet" href="./help_style.css">

	<title>Contact Us</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./OIG (4).jpg" type="image/x-icon">

</head>
	<style>
		
		form {
			max-width: 500px;
			margin: 0 auto;
			padding: 20px;
			box-sizing: border-box;
			background-color: #f2f2f2;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
		}
		label {
			display: block;
			margin-bottom: 10px;
			font-weight: bold;
		}
		input, textarea {
			width: 100%;
			padding: 10px;
			box-sizing: border-box;
			border: none;
			border-radius: 5px;
			margin-bottom: 20px;
		}
	
		#submit{
			padding:15px;
			background-color:red;
			color:white;
			font-size:20px;
			cursor:pointer;
			width:150px;
			margin:20px auto 0;
			border-radius:30px;
		}
	</style>
<body>
<?php
include("files/userheader.php");
?>
	<h1><center>Contact Us</center></h1>
	<form method="post" action="contactus.php" >
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" placeholder="your name" required>

		<label for="email">Email:</label>
		<input type="email" id="email" name="mail" placeholder="your email id" required>

		<label for="phone"> Phone number:</label>
		<input type="text" id="phone" name="phone" placeholder="your phone nnumber" required>

		<label for="subject">Movie Name:</label>
		<input type="text" id="subject" name="subject" placeholder="enter Movie Name" required>
		
		<label for="message">Song Name:</label>
		<textarea id="message" name="message" placeholder="enter songs one by one" rows="4" required></textarea>

		<input type="submit" value="Send Mail" name="submit" id="submit">
	</form>
</body>
</html>
