<?php 
if(isset($_POST['submit'])){
    $to = "fearlesshyena@gmail.com";
    $from = $_POST['email'];
    $first_name = $_POST['first_name'];
    $phone_number = $_POST['phone_number'];
    $subject = "Контактна форма - Skillo";
    $subject2 = "Копие от вашата контактна форма - Skillo";
    $message = $first_name . " телефон: " . $phone_number . " написа:" . "\n\n" . $_POST['message'];
    $message2 = "Копие от съобщението ви " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
    header("Location: http://skillo-bg.com/kontakti.html?message=success");
    }
?>