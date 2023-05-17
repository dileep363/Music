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
    if(mail($mailTo, $subject, $message,$headers)){
        echo 'Email sent sucessfully';
    }
    else{
        echo 'Error: Unable to send email';
    }

    if(mail($email,"Regarding Songs Upload","Songs will be added shortly",$headers))
    {
        echo"sent to receiver";
    }
    else{
        echo "not sent";
    }
}
?>