<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Demo Contact Form'; 
		$to = 'example@domain.com'; 
		$subject = 'Message from Contact Demo ';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arrow's Edge Design - Contact Us</title>
    <link rel='icon' href='images/logo.jpg'>
    <link rel='stylesheet' href="css/base-styles.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="arrowsedge/css/style.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>    
    <script src="js/bootstrap.min.js"></script>
    
    <!-- fonts -->
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Quattrocento' rel='stylesheet' type='text/css'>
</head>
    
    
<body>
  
    
<!-- HTML for navbar -->
<nav class="navbar nav navbar-inverse navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand logo-fit" href="index.html"><img id ="logo-bar" src="images/new-logo-bar.png" alt="Arrow's Edge Logo"></a>
        
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
    </div>
      
    <ul class="nav navbar-nav navbar-inverse navbar-right collapse navbar-collapse">
        <li><a href="index.html">Home</a></li>
        <li><a href="our-services.html">Our Services</a></li>
        <li><a href="#" data-toggle="dropdown">About Us<span class="caret"></span></a>
            <ul class="dropdown-menu inverse-dropdown">
                <li><a href="blog.html">Blog</a></li>
                <li><a href="our-work.html">Our Work</a></li>
                <li class="divider"></li>
                <li><a href="https://www.facebook.com/arrowsedgedesign/">Facebook</a></li>
            </ul>    
        </li>
        <li><a href="contact-us.html">Contact Us</a></li>
      </ul>
      
  </div>
</nav>
    
<!-- end of HTML for navbar -->
    
    <div class="container-form">
        <p class='form-offline'>Form is temporarily offline. If you would like to get in touch with us, please send an email to:<br> arrowsedgedesign@gmail.com <br>Thank you!</p>
<form class="form-horizontal col-md-8 col-md-offset-2" role="form" method="post" action="index.php">
	
    <div class="form-group">
		<label for="name" class="col-sm-2 control-label">Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
            <?php echo "<p class='text-danger'>$errName</p>";?>
		</div>
	</div>
    
	<div class="form-group">
		<label for="email" class="col-sm-2 control-label">Email</label>
		<div class="col-sm-10">
			<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
            <?php echo "<p class='text-danger'>$errEmail</p>";?>
		</div>
	</div>
    
	<div class="form-group">
		<label for="message" class="col-sm-2 control-label">Message</label>
		<div class="col-sm-10">
			<textarea class="form-control" rows="4" name="message"></textarea>
            <?php echo "<p class='text-danger'>$errMessage</p>";?>
		</div>
	</div>
    
	<div class="form-group">
		<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
		</div>
	</div>
    
	<div class="form-group">
		<div class="col-md-10 col-md-offset-2 hidden-xs hidden-sm">
			<input id="submit" name="submit" type="submit" value="Send" class="btn btn-blue">
		</div>
	</div>
    
    	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2 hidden-md hidden-lg hidden-xl">
			<input id="submit" name="submit" type="submit" value="Send" class="btn btn-blue-xs-2">
		</div>
	</div>
    
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<! Will be used to display an alert to the user>
            <?php echo $result; ?>s
		</div>
	</div>
</form>
    </div>
    
 
    
<!-- end of HTML for body of page --> 
    

</body>
</html>