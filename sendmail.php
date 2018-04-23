<?php
$to="ms.oldorf@mathildeoldorf.dk";
$navn="Mathilde";
$emne="Hej";
$besked="Vil du med i biffen?";
$subject="Besked fra" . $navn . ": ". $to;
$message="<h1 style='color:blue'>" . $emne . " " . $besked;
$header = "Content-type: text/html; charset=utf-8" . "\r\n";
$header.="from:ms.oldorf@gmail.com";

mail($to, $subject, $message, $header);

;?>
