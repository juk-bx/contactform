<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$to="theforgelabsojas@gmail.com";

$mail_subject="Contact Form: ".$subject;

$mail_message="Name: ".$name."\n";
$mail_message.="Email: ".$email."\n\n";
$mail_message.="Message:\n".$message;

$headers="From: theforgelabsojas@gmail.com\r\n";
$headers.="Reply-To: ".$email."\r\n";

$mail_status=mail($to,$mail_subject,$mail_message,$headers);

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Message Status</title>

<style>

body{
font-family:Arial;
background:linear-gradient(135deg,#43cea2,#185a9d);
height:100vh;
display:flex;
justify-content:center;
align-items:center;
}

.card{
background:white;
padding:40px;
border-radius:10px;
text-align:center;
width:400px;
box-shadow:0 10px 25px rgba(0,0,0,0.3);
}

h1{
color:#333;
}

.success{
color:green;
font-size:20px;
}

.fail{
color:red;
font-size:20px;
}

a{
display:inline-block;
margin-top:20px;
padding:10px 20px;
background:#667eea;
color:white;
text-decoration:none;
border-radius:5px;
}

</style>

</head>

<body>

<div class="card">

<h1>Contact Form</h1>

<?php
if($mail_status){
echo "<p class='success'>✅ Message Sent Successfully!</p>";
}
else{
echo "<p class='fail'>❌ Message Failed to Send</p>";
}
?>

<a href="contact.html">Send Another Message</a>

</div>

</body>
</html>