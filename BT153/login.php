<?php 
var_dump($_GET);
if(!empty($_POST)){
	$postUsername =$_POST['username'];
	$postPassword =$_POST['password'];
	$getUsername =$getPassword ='';
	if(isset($_GET['username'])){
		$getUsername=$_GET['username'];
	}
	if(isset($_GET['password'])){
		$getPassword=$_GET['password'];
	}
	if($postUsername==$getUsername && $postPassword==$getPassword){
		header('Location:welcome.php');
	}
}


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login page</title>
</head>
<body>
	<form action="" method="post">
		username:<input type="text" name="username"><br>
		password:<input type="password" name="password">
		<input type="submit" name="btn-click">
	</form>
</body>
</html>