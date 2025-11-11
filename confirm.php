<!doctype html>
<html>
<head>
    <title>Building a Dynamic Form with PHP - Confirmation</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h1>Building a Dynamic Form with PHP</h1>
<p>Elijah Hilfiker</p>
<p>11/10/2025</p>
<?php
//This checks to make sure that the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    //trim inputs remove the extra white spaces.
    $name = trim($name);
    $email = trim($email);
    $message = trim($message);
    //This adds a filter that sanitizes the email by removing any characters that are not allowed. This is mostly for security from what I found.
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    //This checks for any empty fields.
    if (empty($name) || empty($email) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $output = "please fill out all of the fields";
        $class = "error";
    }
    else {
    //This is the outpput for a successful submission.
        $output = "Thank you, " . htmlspecialchars($name) . ", your message has been received.";
        $class = "success";
    }
    //Echo's displays the messages on the page.
    echo "<div class='$class'>$output</div>";
    echo "<p>name: $name</p>";
    echo "<p>email: $email</p>";
    echo "<p>message: $message</p>";
}
?>
</body>
</html>