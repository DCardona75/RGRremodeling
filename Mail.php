<?php


$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$mailheader = "from:".$name."<".$email.">\r\n";

$recipient = "senokicleans@gmail.com";

$mail($recipient,$message,$mailheader) or die("Error");

echo"Message sent";

echo'

<!DOCTYPE html>
<html lang="en">
    <link rel="icon" href="assets/IMG2/logo-v1.png">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Creative Design landing page.">
    <meta name="author" content="Devcrud">
    <title>RGR Remodeling</title>

    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">

    <!-- Bootstrap + Creative Design main styles -->
	<link rel="stylesheet" href="assets/css/creative-design.css">
    <link rel="stylesheet" href ="assets/css/Mailmessge.css">

</head>
<body>
    

    <!-- Contact Section -->
   <h6>
       Thank you for Contacting us
       <br>
       We will get back to you soon
    </h6>
    
    <div class="button">
   <center>
       <p class="Back">To go back to the homepage, <a href="index.html">Click Here</a>.</p>
    </center>
</div>
     

</body>
</html>

';
?>