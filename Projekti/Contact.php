<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Merrni të dhënat nga POST request dhe bëni sanitizimin e tyre
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Përgjigjuni me një mesazh të thjeshtë
    echo "Thank you, $name! We have received your message: '$message' from email: $email.";
} else {
    echo "Invalid request method.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico.PNG">
    <link rel="stylesheet" href="contact.css">
</head>
<body>
</body>
</html>

    
        <style>
          body {
                       background-image: url('../img/projekti.img.jpg');
                       background-attachment: fixed;
                       background-size: cover;    
                       background-position: center;
                       background-repeat: no-repeat;
                       background-origin: content-box;
                       background-attachment: fixed;
                       margin: 0; 
                       height: 100vh;
                       width: 100vw; 
                       display: flex; 
                       align-items: center;
                       justify-content: center; 
          }
          input, textarea, button{
            width: 100%;
          }
      </style>
          
    </head>
    <body>
    <div class="contact-form-container">
        <h2>Contact Us</h2>
        <form id="contactForm" method="post" action="Contact.php">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</body>
</html>

  <!-- <script>
    function submitForm(){
    let nameInput = document.getElementById('name');
if (nameInput.value.length === 0) {
    alert('Please enter your name.');
}

let emailInput = document.getElementById('email');
if (emailInput.value.includes('@')) {
    console.log('Valid email address.');
} else {
    alert('Invalid email address.');
}
let messageInput = document.getElementById('message');
let messageLength = messageInput.value.length;
switch (true) {
    case messageLength < 10:
        alert('Message is too short.');
        break;
    case messageLength >= 10 && messageLength < 50:
       console.log('Message length is okay.');
        break;
    default:
      alert('Message is too long.');
}
    }
   </script> -->
   <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "elona.fetahu@student.uni-pr.edu"; 
    $subject = "New Contact Message from $name";
    $body = "You have received a new message from your website contact form.\n\n".
            "Here are the details:\n".
            "Name: $name\n".
            "Email: $email\n".
            "Message: $message\n";

    $headers = "From: elona.fetahu@student.uni-pr.edu\n"; // Ndryshoje këtë me adresën tënde të email-it të dërgimit
    $headers .= "Reply-To: $email"; // Përgjigju direkt në email-in e dërguesit

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Your message has been sent successfully!'); window.location.href='Contact.php';</script>";
    } else {
        echo "<script>alert('Failed to send the message. Please try again later.'); window.location.href='Contact.php';</script>";
    }
}
?>

    </body>
     <html>
    
    