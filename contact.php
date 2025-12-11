<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Me</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Form styles */
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 20px;
            text-align: left;
        }

        input, textarea {
            padding: 12px;
            border-radius: 10px;
            border: 1px solid #ccc;
            font-size: 16px;
            width: 100%;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
            min-height: 120px;
        }

        input[type="submit"] {
            background-color: #ff6f61;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
            font-size: 18px;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #e55a4f;
        }

        .success, .error {
            margin-top: 15px;
            padding: 12px;
            border-radius: 10px;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
        }

        .error {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container">
    <h1>Contact Me</h1>
    <p>Fill out the form below to send me a message, or reach me at:</p>
    <p>Email: <a href="mailto:turtogaritchel31@gmail.com">turtogaritchel31@gmail.com</a><br>
       Phone: 09162927660<br>
       Instagram: <a href="https://www.instagram.com/Cheyengg" target="_blank">@Cheyengg</a>
    </p>

    <?php
    $success = $error = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars(trim($_POST['name']));
        $email = htmlspecialchars(trim($_POST['email']));
        $subject = htmlspecialchars(trim($_POST['subject']));
        $message = htmlspecialchars(trim($_POST['message']));

        if (empty($name) || empty($email) || empty($subject) || empty($message)) {
            $error = "Please fill in all fields.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Please enter a valid email address.";
        } else {
            $to = "yourname@example.com"; // Replace with your email
            $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
            $headers = "From: $email";

            if (mail($to, $subject, $body, $headers)) {
                $success = "Thank you! Your message has been sent.";
            } else {
                $error = "Sorry, there was an error sending your message. Please try again.";
            }
        }
    }
    ?>

    <?php if($success) echo "<div class='success'>$success</div>"; ?>
    <?php if($error) echo "<div class='error'>$error</div>"; ?>

    <form method="post" action="">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <input type="text" name="subject" placeholder="Subject" required>
        <textarea name="message" placeholder="Your Message" required></textarea>
        <input type="submit" value="Send Message">
    </form>
</div>

</body>
</html>
