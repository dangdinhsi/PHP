<?php 
if(!empty($_POST))
{
	$username = $_POST['username'];
	$password =$_POST['password'];
	if($username!='' && $password!=''){
		header('Location: login.php?username='.$username.'&password='.$password);
	}
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register page</title>
	
</head>
</head>
<body>
	<form method="post">
		username:<input type="text" name="username" value=""><br>
		password:<input type="password" name="password"><br>
		fullname:<input type="text" name="fullname"><br>
		email:<input type="" name="email"><br>
		phone:<input type="text" name="phone"><br>
		address:<input type="text" name="address"><br>
		<input type="submit" name="btn-submit">
	</form>
</body>
</html>