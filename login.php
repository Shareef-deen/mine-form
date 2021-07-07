<?php
 
$dbconn = pg_connect("host=ec2-52-23-45-36.compute-1.amazonaws.com port=5432 dbname=d4uid6vt60f3aj user=olgznmgjlsgnev password=edb7d1f6e93f335049b1a8aa59207e56f65db1a183c9b7da4857231ff25dfe91");

if (isset($_POST['submit'])) {  
$password = $_POST['password'];
$email = $_POST['email'];

$query = pg_query( "SELECT * FROM person WHERE email='$email' AND password='$password';");
if ( $query ) {
	header("location: welcome.php");
}
}

?>


<!DOCTYPE html>
<html>
<head>
  <link href="signup.css" rel="stylesheet" type="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <style>
   
  </style>
  <body>
<div id="login-box">
  <div class="left">
    <h1>Sign in</h1>
    
    <form method="post" action="login.php" class="signin-form">
    <input type="text" id="email" name="email" placeholder=" E-mail" /><br>
    <input type="password" id="password" name="password" placeholder="Password" /><br>
	<input id="signmeup" type="submit" name="submit"  value="Login" />
	 <div  id="button">
      <a  href="index.php" type="button" style="color:white">Register here   </a>
    </div>
	</form>
   


  </div>
 
  </div>


</body> 
</html>
