<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: ../login");
}
$res=mysqli_query($con, "SELECT * FROM registrations WHERE id=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="en">
<title>Database | RCGU</title>
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
<p style="float:right; padding:20px"><?php echo $userRow['Name']." ".$userRow['Last Name'].", "?><a href="../logout">logout</a></p>
<div class="container" style="z-index:100; ">
<?php
$name=$_GET["name"];
?>
<h1 style="text-align:center;"><strong><?php echo $name?></strong></h1>

<?php

include_once 'dbconnect.php';

?>
<?php
$query= "SHOW COLUMNS FROM ".$name;
$result = mysqli_query($con,$query);
echo "<div style=\"overflow-x:auto;\"><table>"; 
echo "<tr>";
$columncount=0;
while($row = mysqli_fetch_array($result)){
	$columnname[$columncount]=$row['Field'];
	echo "<th>".$columnname[$columncount]."</th>";
	$columncount++;
}
echo "</tr>"; 
$query="SELECT * FROM ".$name;
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result)){  
echo "<tr>";
for($i=0;$i<$columncount;$i++){
	echo "<td>";
	if(strlen($row[$columnname[$i]])>100){
		echo "<div style=\"height:100px; overflow-x:visible;  overflow-y:scroll;\">";	
	}
	echo $row[$columnname[$i]];
	if(strlen($row[$columnname[$i]])>10){
		echo "</div>";
	}
	echo "</td>";
}
echo "</tr>";
}

echo "</table></div>"; //Close the table in HTML
$query2= "SELECT Name, Phone FROM ".$table;
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

