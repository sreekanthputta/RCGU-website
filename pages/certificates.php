<!DOCTYPE html>
<html lang="en">
<title>Certificates | RCGU</title>
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

<body >
<?php 
include('headerfile.php'); 
?>
<br>

<div class="container" style="z-index:100">
<h1 style="text-align:center;"><strong>Members of RCGU</strong></h1>

<?php

include_once 'dbconnect.php';

?>

<?php

$query = "SELECT * FROM certificates"; 
$result = mysqli_query($con,$query);

echo "<table style=\"word-wrap:break-word\">"; 
echo "<tr><th>Name</th><th>ID</th></tr>"; 
while($row = mysqli_fetch_array($result)){  
echo "<tr><td>" . $row['Name'] . "</td><td>" . $row['Pin'] . "</td></tr>";  
}

echo "</table>"; //Close the table in HTML
/*
?>
<table>
<td><div><input type="text" name="uname" placeholder="ID" required style="width:100%"/></div></td>
<td><div><button onclick="buttonclicked()" type="submit" name="btn-signup" class="button" id="buttonid" style="width:100%;margin: 0 auto">Register</button></div></td>
</table>
<?php
$query= "SELECT * FROM certificates WHERE Pin=".
*/
mysqli_close($con);

?>

</div>

<br>
<?php 
include('footerfile.php'); 
?>
<script>
function buttonclicked(){
		
}
</script>
</body>
</html>

