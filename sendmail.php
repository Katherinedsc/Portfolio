<?php
if(isset($_POST['demo-name']) && isset($_POST['demo-email']) && isset($_POST['demo-message'])) {
    $name = $_POST['demo-name'];
    $email = $_POST['demo-email'];
    $message = $_POST['demo-message'];
    $category = $_POST['demo-category'];
    $priority = $_POST['demo-priority'];

    $to = 'your-email@example.com'; // Change this to your email address
    $subject = 'New message from your website';
    $body = "Name: $name\n\nEmail: $email\n\nCategory: $category\n\nPriority: $priority\n\nMessage:\n$message";

    // Send the email
    if(mail($to, $subject, $body)) {
        echo 'Thank you for your message. We will get back to you soon!';
    } else {
        echo 'There was a problem sending your message. Please try again later.';
    }
} else {
    echo 'Please fill out all required fields.';
}
?>

?>

