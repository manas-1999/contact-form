<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$age= $_POST['age'];
$mobile= $_POST['mobile'];
$to = "sharmamanas153@gmail.com";   
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n age =" . $age. "\r\n  Mobile = " . $mobile;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>