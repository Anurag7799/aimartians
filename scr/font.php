<?php
$name = $_POST['name'];
$visitor_email =$_POST['email'];
$phone =$_POST['phone'];
$massage =$_POST['massage'];

$email_from = 'aimartians.org';

$email_phone = 'new frome Submission';

$email_body = "Uers Name: $name./n" .
    "Uers Name: $visitor_email./n" .
    "Uers Name: $phone./n" .
    "Uers Name: $massage./n";

$to = 'feedback@aimartians.org';
$headers = "From: $email_from /r/n";
$headers .= "Reply-To: $visitor_email /r/n";

mail($to, $email_phone, $email_body, $headers);
header("Loction: content.html");
?>