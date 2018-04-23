<?php
$to="ms.oldorf@mathildeoldorf.dk";
$navn="Mathilde";
$emne="Hej";
$besked="Vil du med i biffen?";
$subject="Besked fra" . $navn . ": ". $email;
$message=$emne . " " . $besked;
$header="from:ms.oldorf@gmail.com";

mail($to, $subject, $message, $header);
?>
