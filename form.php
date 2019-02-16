<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Text Alert Sign Up</title>
  <link rel="stylesheet" type="text/css" href="custom.css" />
</head>
  <body>
	<?php
	 echo 'Thanks for submitting the form.<br />';
	?>
	  
	<h2>Sign Up for Text Alerts</h2>

    <form action="form.php">
    <label for="firstname">First name:</label>
    <input type="text" id="firstname" name="firstname" pattern="[a-zA-Z]{1,}" required>
    <br>
    <label for="lastname">Last name:</label>
    <input type="text" id="lastname" name="lastname" pattern="[a-zA-Z]{1,}" required>
    <br>
    <label for="email">What is your email address?</label>
    <input type="text" id="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
    <br>
    <input type="submit" value="Submit">
  </form>
 </body>
</html>
