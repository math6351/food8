<?php
$to="ms.oldorf@gmail.com";

$type=$_REQUEST['type'];
$navn=$_REQUEST['navn'];
$email=$_REQUEST['email'];
$telefon=$_REQUEST['telefon'];
$cvr=$_REQUEST['cvr'];

$besked=$_REQUEST['besked'];
$subject="Besked fra " . $navn . ": ". $email;
$message= $type . " " . $navn . "<br> CVR nr. " . $cvr . "<br>" . $besked . "<br>". "Telefon nr. " $telefon;

$header = "Content-type: text/html; charset=utf-8" . "\r\n";
$header.="from:ms.oldorf@mathildeoldorf.dk";

mail($to, $subject, $message, $header);
header("Location: omfood8.html");
?>
