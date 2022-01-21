<?php 
    if(isset($_POST['download'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        
        $to = "info@prestigesmartcity.online";
        $gmail="updesh.virus@gmail.com";
        $subject = "Prestige Smartcity Contact";
        $body = "Name: $name\n"."Mobile: $mobile\n"."Email: $email\n";
        $headers = "From: $email \r\n";
        $headers .= "Reply To: $email \r\n";
        $mail = mail($to, $subject, $body, $headers);
        $mail2= mail($gmail, $subject, $body, $headers);
        if($mail&&$mail2){
          header( "refresh:5;url=https://prestigesmartcity.online/" );

        }
        else{
        echo"<script>alert('<strong>Error sending your message. Please try again later.)';window.location.href='index.html';</script>";
        }
    }
   if(isset($_POST['schedule'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $message=$_POST['message'];
        $to = "info@prestigesmartcity.online";
        $subject = "Prestige Smartcity Contact";
        $body = "Name: $name\n"."Mobile: $mobile\n"."Email: $email\n"."Message: $message";
        $headers = "From: $email \r\n";
        $headers .= "Reply To: $email \r\n";
        $gmail="updesh.virus@gmail.com";
        $mail = mail($to, $subject, $body, $headers);
        $mail2= mail($gmail, $subject, $body, $headers);
        if($mail&&$mail2){
                   header( "refresh:5;url=https://prestigesmartcity.online/" );
        }
        else{
        echo"<script>alert('<strong>Error sending your message. Please try again later.)';window.location.href='index.html';</script>";
        }
    }
     if(isset($_POST['popup'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        
        $to = "info@prestigesmartcity.online";
        $subject = "Prestige Smartcity Contact";
        $body = "Name: $name\n"."Mobile: $mobile\n"."Email: $email\n";
        $headers = "From: $email \r\n";
        $headers .= "Reply To: $email \r\n";
        $gmail="updesh.virus@gmail.com";
        $mail = mail($to, $subject, $body, $headers);
        $mail2= mail($gmail, $subject, $body, $headers);
        if($mail&&$mail2){
                   header( "refresh:5;url=https://prestigesmartcity.online/" );
        }
        else{
        echo"<script>alert('<strong>Error sending your message. Please try again later.)';window.location.href='index.html';</script>";
        }
    }
   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="" />
    <meta name="description" content="">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>The Prestige City - Sarjapur Road, Bangalore</title>
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="body-inner">
    <header id="header" data-responsive-fixed="true" class="light">
            <div class="header-inner">
                <div class="container">
                    <div id="logo"><img src="images/logo.png">
                    </div>
                    <div id="mainMenu-trigger">
                        <a class="lines-button x"><span class="lines"></span></a>
                    </div>
                    <div class="header-extras">
                        <ul>
                            <li>
                                <a href="tel:+919886219880" id="mob"> <i class="icon-phone"></i> +919886219880</a>
                            </li>
                        </ul>
                    </div>
                    <div id="mainMenu" class="menu-one-page">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="#section2">Highlights</a></li>
                                    <li><a href="#section3">Gallery</a></li>
                                    <li><a href="#section4">Price</a></li>
                                    <li><a href="#section5">Amenties</a></li>
                                    <li><a href="#section6">Location</a></li>
                                    <li><a href="#section7">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="m-t-40 p-b-80">
            <div class="container">
                   
                        <div class="text-center">
                            <h1 class="text-medium">Thank you!</h1>
                            <p class="lead">Your submission is recieved and we will contact you soon.</p>
                            <div class="seperator m-t-20 m-b-20"></div>
                            <a href="index.html" class="btn">BACK TO HOME</a>
                        </div>
            </div>
        </section>
        <footer id="footer" class="dark">
            <div class="copyright-content">
                <div class="container">
                    <div class="copyright-text text-center text-light">© 2021, All Rights Reserved</div>
                    <p class="text-center footer-copyright small"><strong>Disclaimer : </strong>The content is for
                        information
                        purposes only and does not constitute an offer to avail of any service. Prices
                        mentioned are subject to change without notice and properties mentioned are subject
                        to availability. Images for representation purpose only. This is not the official
                        website. Website maintained by our online marketing agency pact partners. We may
                        share data with rera registered brokers/companies for further processing. We may
                        also send updates to the mobile number/email id registered with us.
                    </p>
                </div>
            </div>
        </footer>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/functions.js"></script>
</body>

</html>