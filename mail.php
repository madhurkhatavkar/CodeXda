<?php
if (isset($_POST['submit'])){  
$email= $_POST['email'];
$message= $_POST['message'];
$to = "madhurdk2001@gmail.com";
$subject = "Mail From CodeXDA";
$txt ="Email = " . $email . "\n\n Message =" . $message;
$headers = "From: noreply@codexda.com";

mail($to,$subject,$txt,$headers);
//redirect
header("Location: mail.php?mailsent");
}
?>
