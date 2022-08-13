<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = "amaansaifi262@gmail.com";

$txt = "Name = ". $name . "\r\n Email = ". $email . "\r\n Subject = ". $subject . "\r\n Message =" .$message;

$headers = "From: hello@amaanahmad.com" . "\r\n" .;
// "CC: amaannikk@gmail.com";
if ($email!=NULL) {
    mail($to,$subject,$txt,$headers);
    header("Location:thankyou.html"); 
}

?>