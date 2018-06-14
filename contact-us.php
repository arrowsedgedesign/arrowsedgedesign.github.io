<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arrow's Edge Design -Home</title>
    <meta name='description' content="Arrows Edge is a small web design and development company covering Stark County and northeastern Ohio. We have a passion for creating beautiful, custom websites and providing the best customer service possible. Arrows Edge is your one-stop way to get you small business online." > 
    <link rel='icon' href='images/logo.jpg'>
    <link rel='stylesheet' href='css/bootstrap.min.css'>
    <link rel='stylesheet' href="css/base-styles.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- fonts -->
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Quattrocento' rel='stylesheet' type='text/css'>
    
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
    
<body>

    <!--HTML for navbar new -->
<nav class="navigation">
    <div class="hero"><a href='index-static.html'><img src='images/arrowsedgelogo.png' class="logo-nav"></a>
    </div>
    
    <div class="links-area">
        <ul class="center header-link-text">
            <li><a href="index-static.html" class="option">Home</a></li>
            <li><a href="our-services.html" class="option">Our Services</a></li>
            <li><a href="our-work.html" class="option">Our Work</a></li>
            <li><a href="contact-us.php" class="option active">Contact Us</a></li>
            <li><a href="https://www.facebook.com/arrowsedgedesign/" target="_blank" class="option">Facebook &nbsp; <img src='images/facebook-logo.png' class="fb-logo"></a></li>
        </ul>
    </div>
</nav>
    <!-- end of HTML for navbar -->
    
    <div class="container-form page-footer-spacing">
        <div class='form-intro height-spacing col-sm-10 col-md-offset-1'>We would love to hear from you.<br> Please fill out the form below with any questions you have and we will respond within 24-48 hours.<br> Thank you!</div>
       
<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: Online Web Form';
    $to = 'arrowsedgedesign@gmail.com';
    $subject = 'Web Form Submission';
        
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
?>
        
<?php
            if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
        echo '<div class="success col-sm-10 col-sm-offset-1 page-footer-spacing">Your message has been sent!</div>';
    } else { 
        echo '<div class="failure col-sm-10 col-sm-offset-1 page-footer-spacing">Something went wrong, go back and try again!</div>'; 
    }
}
?>        
<form method="post" action="contact-us.php" class='form-horizontal col-md-8 col-md-offset-2'>
     
    <div class="form-group">
        <label class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input name="name" placeholder="First & Last Name" class="form-control">
        </div>
    </div> 
     
    <div class="form-group">
        <label class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input name="email" type="email" placeholder="email@example.com" class="form-control">
        </div>
    </div> 
        
    <div class="form-group">
        <label class="col-sm-2 control-label">Message</label>
        <div class="col-sm-10">
            <textarea name="message" rows='4' placeholder="Please explain the details of your project or question..." class='form-control'></textarea>
        </div>
    </div>
  
    <div class="form-group recaptcha">
        <div class="recaptcha">
            <div class="g-recaptcha col-sm-10 col-sm-offset-2" data-sitekey="6LfCHRwUAAAAAEDX0BZEImjQ60If0b1vQ8sg5owd"></div>
        </div>
    </div>
    
    <div class="form-group">
        <div class="col-md-10 col-md-offset-2 page-footer-spacing">  
            <input id="submit" name="submit" type="submit" value="Submit" class="btn btn-blue">
        </div>
    </div>
      

    
</form>
        
    </div>
    
    <!-- HTML for footer -->
    <footer>
        <div class='footer-call-to-action'>
            <p class="footer-quote-head">Get in touch</p>
            <br>
            <p class="footer-quote-text">Ready to get started? Still not sure? Let us answer your questions<br><br><a href="contact-us.php"><button class="btn" id="footer-btn">Contact Us</button></a> </p>
        </div>

        <div class='footer-links'>
            <ul>
                <li><a href="index-static.html">Home</a></li>
                <li><a href="our-services.html">Our Services</a></li>
                <li><a href="our-work.html">Our Work</a>
                <li><a href="blog.html">Blog</a>
                <li><a href="index.html">Video</a>
                <li><a href="https://www.facebook.com/arrowsedgedesign/">Facebook</a></li>
            </ul>
        </div>
        <div class='clearfix'></div>
    </footer>
    <!-- end of HTML for footer -->
    
</body>