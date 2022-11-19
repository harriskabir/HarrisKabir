<?php
    $message_sent = false;
    if(isset($_POST['email']) && $_POST['email' != '']) {
        
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            //submit form
            $userName = $_POST['full-name'];
            $userNum = $_POST['phone-number'];
            $userEmail = $_POST['email'];
            $message = $_POST['message'];

            $to = "developer@harriskabir.com";
            $subject = "New response to contact form";
            $body = "";

            $body .="From: ".$userName. "\r\n";
            $body .="Number: ".$userNum. "\r\n";
            $body .="Email: ".$userEmail. "\r\n";
            $body .="Message: ".$message. "\r\n";

            mail($to, $subject, $body);

            $message_sent = true;
        } 
    }

    if($message_sent) {
        header("Location: https://harriskabir.com/thanks");
        exit();
    } else {
        function formFailAlert() {
            echo "<script>alert('Please try again');</script>";
        }
    } 
?>

