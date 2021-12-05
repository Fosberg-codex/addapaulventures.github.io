
<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['number'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "fosberg1addai@gmail.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo" message sent";

?>