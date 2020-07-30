<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>True Word Ministry</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="style.js"></script>
    <!--  Decor -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Manrope&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="index.html"><h1>TW<span> Ministry </span></h1></a>
            </div>
            <div class="nav-menu">
                <i class="fas fa-bars" id="mobile"></i>
                <ul class="menu-list">
                    <a href="index.html">
                        <li>Home</li>
                    </a>
                    <a href="about.html">
                        <li>About</li>
                    </a>
                    <a href="services.html">
                        <li>Services</li>
                    </a>
                    <a href="contact.html">
                        <li>Contact Us</li>
                    </a>
                </ul>
            </div>
        </nav>
    </header>
    <div class="bg">
        <div class="box" style="background-color: transparent;">
            <h1>Thank You! We'll Contact You Soon.</h1>
        </div>
    </div>
    <?php 
    if(isset($_POST['submit'])) {
        $name = $_POST['user_name'];
        $email = $_POST['user_email'];
        $number = $_POST['user_number'];
        $message = $_POST['user_comment'];

        $to="Truwordministry@gmail.com";
        $subject="Contacting TW Ministry";
        $message="Name: ".$name."\n"."Phone Number: ".$number."Message: "."\n\n".$message;
        $headers="From: ".$email;
        

        /* if(mail($to, $subject, $message, $headers)) {
            echo "<h1>Sent Succesfully! Thank You"." ".$name.", We will contact you soon!</h1>";
        } 
        else {
            echo "<h1>Did you fill out every field?</h1>";
        } */
    }
?>
</body>
</html>