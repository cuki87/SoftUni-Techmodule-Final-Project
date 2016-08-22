<?php
if(isset($_POST['submit'])){
    $to = "pepi.vasilev@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $full_name = $_POST['first_name'];
    $subject = "Писмо от сайта";
    $subject2 = "Поръчка от \"Кухнята на Мони\"";
    $message = $full_name . " wrote the following:" . "\r\n" . $_POST['message'];
    $message2 = "Благодарим Ви, г-н/г-жо" . $full_name . " за писмото. Ще се свържем с Вас възможно при първа възможност." . "\r\n" ."Поздрави, Мони!". "\r\n";

    $headers = "От:" . $from;
    $headers2 = "От:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Писмото е изпратено успешно!";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
}
?>