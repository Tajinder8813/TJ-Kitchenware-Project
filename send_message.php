<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- Include Font Awesome for icons -->
     
    <!-- These links (FontAwesome & Goggle) are used for Icons -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <title>Send us a Message</title>
</head>

<body>
    <!--header section code -->
    <header class="header">

        <a href="index.html" class="logo">
            <img src="images/Black and White Modern Elegant Clothing Store Logo.png" alt="Logo-Image">
           TJ Kitchenware Store</a>
        <nav class="navbar">
            <a href="I:\MCA\term 4\Kitchenware\index.html">Home</a>
            <a href="about.html">About Us</a>
            <a href="index.html">Products</a>
            <a href="index.html">Testimonials</a>
            <a href="index.html">Contact Us</a>
        </nav>
        <i class="bx bx-menu" id="menu-icon"></i>

    </header>
    <!--Send us message section code -->
    <section class="send_message" id="send_message">
        <h2 class="heading">Send Us a Message</h2>
        <h3>Feel free to contact us and we will get back to you as soon as we can!!</h3>
        <form action="send_message_temp.php" method="POST">
            <div class="dbl-field">
                <div class="field">
                    <input type="text" name="full_name" placeholder="Full Name" required>
                    <i class='bx bxs-user'></i>                  
                </div>
                <div class="field">
                    <input type="email" name="email" placeholder="Email Adress" required>
                    <i class='bx bxs-envelope'></i>                 
                </div>
            </div>
            <div class="dbl-field">
                <div class="field">
                    <input type="text" name="phone" placeholder="Phone Number" required>
                    <i class='bx bxs-phone'></i>                   
                </div>
                <div class="field">
                    <input type="text" name="subject" placeholder="Email Subject " required>
                    <i class='bx bx-message-rounded-detail' ></i>  
                </div>
            </div>
            
            <div class="message">
                <i class='bx bxs-message'></i>
                <textarea name="message"  placeholder="Write your message"></textarea>
            </div>
            <div class="button-area">
                <button type="submit" name="submit" class="btn">Send Messages</button><br>
            </div>
        </form>
    </section>
    <!--Footer section code -->
    <footer class="footer">
        <div class="social">
            <a href="https://api.linkedin.com/login"><i class='bx bxl-linkedin'></i></a>
            <a href="https://github.com/login?return_to=https%3A%2F%2Fgithub.com%2Ftopics%2Flogin">
                <i class='bx bxl-github'></i></a>
            <a href="https://en-gb.facebook.com/login.php/"><i class='bx bxl-facebook'></i></a>
            <a href="https://www.instagram.com/accounts/login/?next=https%3A%2F%2Fwww.instagram.com%2Faccounts%2Fonetap%2F%3F__coig_login%3D1">
                <i  class='bx bxl-instagram'></i></a>

        </div>
        <p class="copyright">
            &copy; TJ Kitchenware Store - All Rights Reserved!!
        </p>

    </footer>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <skript src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="skript.js"></script>
    <script>
        var messageText = "<?= $_SESSION['status']?? ''; ?>";
        if (messageText != '') {
            Swal.fire({
            title: "Thank You!?",
            text: messageText,
            icon: "Success"
            });
            <?php unset($_SESSION['status']); ?>  
        }
</script>

</body>
</html>