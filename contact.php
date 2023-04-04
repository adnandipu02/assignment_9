<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<div class="logo">
			<a href="homepage.html"><img src="logo.png" alt="My Logo"></a>
		</div>
		<nav>
			<ul>
				<li><a href="homepage.html">Home</a></li>
				<li><a href="blog.html">Blog</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	</header>
	<main class="container">
		<h1>Contact Us</h1>
		<p>Please use the form below to send us a message.</p>
		<form method="post" action="process.php">
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" id="name" name="name" required>
			</div>
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" id="email" name="email" required>
			</div>
			<div class="form-group">
				<label for="subject">Subject:</label>
				<input type="text" id="subject" name="subject" required>
			</div>
			<div class="form-group">
				<label for="message">Message:</label>
				<textarea id="message" name="message" required></textarea>
			</div>
			<div class="form-group">
				<button type="submit">Submit</button>
			</div>
		</form>
	</main>
	<footer>
		<p>Copyright © 2023 
	</footer>
</body>
</html>

<!-- process.php -->
<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = "your-email@domain.com";
$headers = "From: " . $email . "\r\n" .
    "Reply-To: " . $email . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

mail($to, $subject, $message, $headers);

echo "Thank you for contacting us. We will get back to you soon.";

?>