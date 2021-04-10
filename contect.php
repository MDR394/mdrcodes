<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];

//check input fields

if (empty($name) || empty($email) || empty ($message))
{
    echo "Please fill all this fields";
}
else
{
    mail("mdawoodrafique394@gmail.com", $subject , $message , "From: $name<$email>");
}
?>
