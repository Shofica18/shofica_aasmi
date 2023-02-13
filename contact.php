<?php
$name = $_REQUEST['name'];
$mail = $_REQUEST['email'];
$message = $_REQUEST['message'];

if(empty($name) || empty($mail) || empty($message)){
    echo "Please fill all the fields";
}
else{
    mail("shoficaaasmi@gmail.com","Portfolio Message", $message, "From : $name < $mail>");
}
?>