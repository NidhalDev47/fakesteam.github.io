<?php
if (lisset($_POST['submit'])) {
    $name = =$_POST['name'];
    $subject = =$_POST['subject'];
    $mailFrom = =$_POST['mail'];
    $message = =$_POST['message'];


    $mailTo = "nidhaldev47@gmail.com";
    $headers = "From: My ".$mailFrom
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: home.php?mailsend");
}