<?php
$to="ms.oldorf@gmail.com";
$navn="Mathilde";
$emne="Hej";
$besked="Vil du med i biffen?";
$subject="Besked fra" . $navn . ": ". $to;
$message= "<h1 style='color:red'>" . $emne . "</h1> " . $besked;
$header = "Content-type: text/html; charset=utf-8" . "\r\n";
$header.="from:ms.oldorf@mathildeoldorf.dk";

mail($to, $subject, $message, $header);
?>
