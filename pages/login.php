<?php
session_start();
include_once 'dbconnect.php';
if(isset($_SESSION['user'])!="")
{
	$res=mysqli_query($con, "SELECT * FROM registrations WHERE id=".$_SESSION['user']);
	$userRow=mysqli_fetch_array($res);
	if($userRow['Login Right']=='Member'){
		header("Location: home");
	}
	else if($userRow['Login Right']=='Admin'){
		header("Location: admin");
	}
}

if(isset($_POST['btn-login']))
{
	$uname = mysqli_real_escape_string($con, $_POST['uname']);
	$upass = mysqli_real_escape_string($con, $_POST['upass']);
	$query = "SELECT * FROM registrations WHERE Email='".$uname."'";
	$res=mysqli_query($con, $query);
	$count = mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row
	if($count==0){
		$query = "SELECT * FROM registrations WHERE Phone='".$uname."'";
		$res=mysqli_query($con, $query);
		$count = mysqli_num_rows($res);
		$row=mysqli_fetch_array($res);
	}
	else{
		$row=mysqli_fetch_array($res);
	}
	
	if($count == 1 && $row['Password']==md5($upass))
	{
		$_SESSION['user'] = $row['id'];
		if($row['Login Right']=='Member'){
			header("Location: home");
		}
		else if($row['Login Right']=='Admin'){
			header("Location: admin");
		}
	}
	else
	{
		?>
        <script>alert('Username / Password Seems Wrong!');</script>
        <?php
	}
	
}
?>
<!DOCTYPE html>
<html lang="en">
<title>Login | RCGU</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/style.css">
<link rel="stylesheet" href="/style1.css">
<head>
<meta charset="utf-8">
<link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" href="/images/favicon/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/images/favicon/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/images/favicon/manifest.json">
<link rel="mask-icon" href="/images/favicon/safari-pinned-tab.svg" color="#343e00">
<link rel="shortcut icon" href="/images/favicon/favicon.ico">
<meta name="msapplication-config" content="/images/favicon/browserconfig.xml">
<meta name="theme-color" content="#ffffff">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
</head>
<body>
<?php 
include('headerfile.php'); 
?>
<br>
<div class="container" style="z-index:100">
<h1 style="text-align:center;"><strong>Login</strong></h1>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="uname" placeholder="Email or Phone number" required /></td>
</tr>
<tr>
<td><input type="password" name="upass" placeholder="Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-login">Sign In</button></td>
</tr>
<tr>
<td>Not a member yet?? <a href="signup">Sign Up</a></td>
</tr>
</table>
</form>
</div>
</div>
<br>
<?php 
include('footerfile.php'); 
?>
</body>
</html>