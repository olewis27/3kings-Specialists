<?php

$firstname = $_REQUEST["firstname"];
$lastname = $_REQUEST["lastname"];
$address = $_REQUEST["address"];
$employer = $_REQUEST["employer"];
$profession = $_REQUEST["profession"];
$license = $_REQUEST["license"];
$city = $_REQUEST["city"];
$zip = $_REQUEST["zip"];
$state = $_REQUEST["state"];
$phoneareacode = $_REQUEST["phoneareacode"];
$phone = $_REQUEST["phone"];
$discount = $_REQUEST["discount"];
$email = $_REQUEST["email"];



$hr='-----';
$to = "3kingsuespecialist@gmail.com"; $subject = "Website Registration"; $email = $_REQUEST['email'] ; 
$message .= "--$mime_boundary\n";


$message .="Name: ";
$message .="$firstname";
$message .="$hr";
$message .="$lastname";
$message .="$hr";
$message .="Address:";
$message .="$address";
$message .="$hr";
$message .="City:";
$message .="$city";
$message .="$hr";
$message .="State:";
$message .="$state";
$message .="$hr";
$message .="ZIP:";
$message .="$zip";
$message .="$hr";
$message .="Phone:";
$message .="$phoneareacode - $phone";
$message .="$hr";
$message .="Employer:";
$message .="$employer";
$message .="$hr";
$message .="Profession:";
$message .="$profession";
$message .="$hr";
$message .="License Number:";
$message .="$license";
$message .="$hr";
$message .="Disount?:";
$message .="$discount";
$message .="$hr";
$message .="Email:";
$message .="$email";
$message .="$hr";


# -=-=-=- FINAL BOUNDARY
$message .= "--$mime_boundary--\n\n";
$sent = mail($to, $subject, $message, $headers) ; if($sent) {header("Location: http://www.3kingsuespecialists.com/payment1.htm"); } else {print "We encountered an error with your submission."; }  



?> 

<HTML>
<HEAD>



</HEAD>

<center>
  <br />
</center>
</BODY>
</HTML>