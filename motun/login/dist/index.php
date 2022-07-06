<?php

include 'connect.php';

session_start();


?>

<?php
if(isset($_POST['submit'])) {

	$email = mysqli_real_escape_string($con, trim($_POST["email"]));
	$password = mysqli_real_escape_string($con, trim($_POST["password"]));

	$query = "SELECT * FROM users WHERE email = '$email' and user_type = 'admin'";

	$select_user_query = mysqli_query($con, $query);

	// if(!$select_user_query) {
	// 	echo "<script>alert('Incorrect Details');</script>";
    // 	header("Location: http://localhost/motun/home/index.html");
	// };


	while($row = mysqli_fetch_assoc($select_user_query)){
		$user_id = $row["id"];
		$user_name = $row["name"];
		$user_email = $row["email"];
		$user_password = $row["password"];
	}


	if($email !== $user_email  || $password !== $user_password) {
		// echo "<script>alert('Incorrect Details');</script>";
    	header("Location: index.php?error=Incorrect Details");  
	}else if ($email == $user_email && $password == $user_password){

		$_SESSION['user_id'] = $user_id;
		$_SESSION['user_name'] = $user_name;
		$_SESSION['user_email'] = $user_email;
		$_SESSION['user_password'] = $user_password;

		header("Location: http://localhost/motun/dashboard");
	} else {
		echo "<script>alert('Incorrect Details');</script>";
    	// header("Location: index.php?error=Incorrect Details");
	}

}
?>




<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Log In</title>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form  method="post" class="login">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" name="email" class="login__input" placeholder="User name / Email">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" name="password" class="login__input" placeholder="Password">
				</div>
				
					
					<input  class="button login__submit" class="button__text" class="button__icon fas fa-chevron-right" type="submit" name="submit" value="LOG IN">
					
										
				</input>
					
							
			</form>
			<div class="social-login">
				<h3>Administrative Log In</h3>
				<div class="social-icons">
					<a href="#" class="social-login__icon fab fa-instagram"></a>
					<a href="#" class="social-login__icon fab fa-facebook"></a>
					<a href="#" class="social-login__icon fab fa-twitter"></a>
				</div>
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
<!-- partial -->
  
</body>
</html>
