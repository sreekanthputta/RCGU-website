<?php
session_start();
include_once 'dbconnect.php';
if(!isset($_SESSION['user'])){
	header("Location: login");
}
$res=mysqli_query($con, "SELECT * FROM registrations WHERE id=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res);
if(isset($_POST['btn-login']))
{
	$upass0 = md5(mysqli_real_escape_string($con, $_POST['upass0']));
	$upass1 = md5(mysqli_real_escape_string($con, $_POST['upass1']));
	$upass2 = md5(mysqli_real_escape_string($con, $_POST['upass2']));
	$query = "SELECT * FROM registrations WHERE Email='".$userRow['Email']."'";
	$res=mysqli_query($con, $query);
	$count = mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row
	
	if($upass1==$upass2){
		if($count == 1){
			if($userRow['Password']==$upass0)
			{
				$query="UPDATE registrations SET Password='$upass1' WHERE Email='".$userRow['Email']."'";
				if(mysqli_query($con, $query)){
					?>
					<script>alert("Password successfully changed");</script>
					<?php
				}
				else{
					?>
					<script>alert("Some error occured.");</script>
					<?php
				}
			}	
			else
			{
				?>
				<script>alert("Old Password doesn't match with this account");</script>
				<?php
			}
		}
		else{
			?>
			<script>alert("You are not registered. Please register yourself in rcgu.org/register");</script>
			<?php
		}
	}
	else{
		?>
        <script>alert("Passwords Doesn't match");</script>
        <?php
	}
	
}
?>
<!DOCTYPE html>
<html lang="en">
<title>Change Password | RCGU</title>
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
<p style="float:right; padding:20px"><?php echo $userRow['Name']." ".$userRow['Last Name'].", "?><a href="../logout">logout</a></p>
<div class="container" style="z-index:100">
<h1 style="text-align:center;"><strong>Change Password</strong></h1>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="password" name="upass0" placeholder="Old Password" required /></td>
</tr>
<tr>
<td><input type="password" name="upass1" placeholder="New Password" required /></td>
</tr>
<tr>
<td><input type="password" name="upass2" placeholder="Retype Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-login">Change Password</button></td>
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