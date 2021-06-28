<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/product-slider.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <script type="module" src="js/script.js" defer></script>
    <title>Contact form</title>
</head>
<body>
<div class="nav-parent">
        <nav>          
            <div class="icon">
                <i class="fa fa-bars"></i>
            </div>
        </nav>
        <ul class="nav-items">
        <a href="#"><img src="./foto/logo.png" alt=""></a>
            <div class="nav-links">
                <a href="index.php"><li>Home</li></a>
                <a href="http://31716.hosts1.ma-cloud.nl/website/wordpress/"><li>Shop</li></a>
                <a href="about.php"><li>About</li></a>
                <a href="contactPage.php"><li>Contact</li></a>
            </div>
        </ul>
</div>
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