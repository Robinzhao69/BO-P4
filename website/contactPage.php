<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact form</title>
</head>
<body>
    <main>
    <p>SEND E-MAIL</p>
    <form class="contact-form" action="contactform.php" method="post"></form>
        <input type="text" name="name" placeholder="Full name">
        <input type="text" name="mail" placeholder="Your e-mail">
        <input type="text" name="subject" placeholder="Subject">
        <textarea name="message" placeholder="Message"></textarea>
        <button type="submit" name="submit">SEND MAIL</button>
    </main>
</body>
</html>