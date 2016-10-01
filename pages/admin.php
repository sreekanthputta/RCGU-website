<?php
session_start();
include_once 'dbconnect.php';
if(!isset($_SESSION['user']))
{
	header("Location: login");
}
$res=mysqli_query($con, "SELECT * FROM registrations WHERE id=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res);
if(!($userRow['Login Right']=='Admin')){
	header("Location: login");
}
?>
<!DOCTYPE html>
<html lang="en">
<title>Home | RCGU</title>
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
<h1 style="text-align:center;"><strong>Home</strong></h1>
<p style="float:center"><a href="../database">Database</a></p>
<p style="float:center"><a href="../home">Members Page</a></p>
<p style="float:center"><a href="../changepassword">Change Password</a></p>
</div>
<br>
<?php 
include('footerfile.php'); 
?>
</body>
</html>