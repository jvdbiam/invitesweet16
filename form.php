<?php
//get data from form 
echo "<pre>";
print_r($_POST);
echo "</pre>";
die();
$fname = $_POST['fname'];
$lname= $_POST['lname'];
$satus= $_POST['satus'];
$to = "sweet16invitejoren@gmail.com";
$subject = "Mail From website";
$txt ="fname = ". $fname . "\r\n  lname = " . $lname . "\r\n satus =" . $satus;
$headers = "From: joren.vandenbroucke@telenet.be" . "\r\n" .
"CC: joren.vandenbroucke@telenet.be";
if($lname!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:success.html");
?>