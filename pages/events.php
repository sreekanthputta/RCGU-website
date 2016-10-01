<!DOCTYPE html>
<html>
<title>Events | RCGU</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/style.css">
<link rel="stylesheet" href="/style1.css">
<head>
<link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" href="/images/favicon/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/images/favicon/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/images/favicon/manifest.json">
<link rel="mask-icon" href="/images/favicon/safari-pinned-tab.svg" color="#343e00">
<link rel="shortcut icon" href="/images/favicon/favicon.ico">
<meta name="msapplication-config" content="/images/favicon/browserconfig.xml">
<meta name="theme-color" content="#ffffff">
</head>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<?php

include_once 'dbconnect.php';
$query = "SELECT * FROM events"; 
$result = mysqli_query($con, $query);
?>


<body style="margin-bottom:50px;">
<?php 
include('headerfile.php'); 
?>

<div class="container" style="z-index:100; word-wrap: break-word;">
<br>
<h1 style="text-align:center;"><strong>Events</strong></h1>
<?php
while($row = mysqli_fetch_array($result)){  
$id=$row['id'];
$name= $row['Name'];
$desc = $row['Description'];
$photos = $row['Photos'];
$starttime = $row['Start Time'];
$endtime = $row['End Time'];
$date = $row['Date'];
$venue = $row['Venue'];
echo "<div onclick=\"location.href='/events/".$id."'\"; style=\"border-top:1px solid grey;border-bottom:1px solid grey; cursor: pointer; cursor: hand;\">\n"; 
echo "	<img src=\"/images/events/".$id."1.jpg\" alt=\"".$name."\" align=\"center\" style=\"width:100%\">\n"; 
echo "	<h4><strong>".$name."</strong></h4>\n"; 
echo "	<p style=\"text-align:right; font-size: 50%\">".$starttime." to ".$endtime.", ".$date." at ".$venue."<p>\n"; 
echo "	<p> ".substr($desc, 0, 100)."...<span style=\"color:blue\">read more</span> </p>\n"; 
echo "	\n"; 
echo "</div><br><br>\n";
}
mysqli_close($con);
?>


</div>

<br>

<?php 
include('footerfile.php'); 
?>
</body>
</html>

