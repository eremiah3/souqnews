<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comment = $_POST["msg"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $website = $_POST["website"];

    // Set your email address here
    $to = "agboolagbolahan14@gmail.com";

    $subject = "New Comment on Your Website";

    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Website: $website\n\n";
    $message .= "Comment:\n$comment";

    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Comment sent successfully.";
    } else {
        echo "Error sending the comment. Please try again later.";
    }
}
?>
