


<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
//echo $email; die();
$subject= $_POST['subject'];
$message=$_POST['message'];
$to = "mohiyudheenmukkan@gmail.com";
$subject = "Mail From Elmek Design Academy";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Subject =" . $subject ."\r\n Message =" . $message;
$headers = "From: noreply@elmek.com" . "\r\n" ;
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>