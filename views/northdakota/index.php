<html>
<head>
<title> North Dakota P1 </title>
<meta charset="utf-8" />
<link rel= "stylesheet" href="style.css">
<meta name= "author" content= "Isaac Hall, Zachary Rule">
<meta name= "description" content= "This site is part of a CSU CT 310 Course Project.">
</head>
<body>

<?php echo $header; ?>

<?php 
if (!(isset($_POST['username']) || isset ($_POST['password']))) {?>
	<form action="login.php" method="POST">
		<input type="text" name="username" placeholder="Please enter username"/>
		<input type="password" name="password" placeholder="Please enter password"/>
		<input type="submit" value="submit">
	</form>
<?php 
}
else {
	$username = $_POST['username'];
	$password = $_POST['password'];
	if(($username === 'ct310') && (md5($password) === 'a6cebbf02cc311177c569525a0f119d7')){
		session_start();
		$_SESSION['username'] = 'ct310';
		$_SESSION['id'] = 12345;
		header('Location: loggedin.php');
	}elseif(($username === 'zachrule') && (md5($password) === '3bc5be6ae2353708a6612962db3e587b')){
                session_start();
                $_SESSION['username'] = 'zachrule';
                $_SESSION['id'] = 123456;
                header('Location: loggedin.php');
        }
// hardcode username and password here
	else{
		echo 'Invalid Credentials';
	}
}
?>
	
<h1> North Dakota </h1>
<nav>
<a href="">About Us</a><p>|</p>
<a href="">Theodore Roosevelt National Park</a><p>|</p>
<a href="">International Peace Garden</a><p>|</p>
<a href="">Maah Daah Hey Trail</a><p>|</p>
</nav>

<?php echo $footer; ?>

</body>
</html>
