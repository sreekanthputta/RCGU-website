<!DOCTYPE html>
<html>
<title>Contact Us | RCGU</title>
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

?>
<?php


if(isset($_POST['btn-signup']))
{
	
	$cname = mysqli_real_escape_string($con, $_POST['cname']);
	$cemail = mysqli_real_escape_string($con, $_POST['cemail']);
	$cmsg = mysqli_real_escape_string($con, $_POST['cmsg']);
	

	$cname = trim($cname);
	$cemail = trim($cemail);
	$cmsg = trim($cmsg);
	

		if(mysqli_query($con, "INSERT INTO feedback(`id`, `Name`, `Email`, `Message`) VALUES(NULL, '$cname','$cemail','$cmsg')"))
		{
		?>
			<script>alert('Message sent successfully');</script>
			<?php
		}
		else
		{
			?>
			<script>alert('Something went wrong, please try after some time or contact admin.');</script>
			<?php
		}	
}		

?>

<body style="margin-bottom:50px;">
<?php 
include('headerfile.php'); 
?>
<br>
<style>
.divider{
    position:absolute;
    left:50%;
    top:10%;
    bottom:10%;
    border-left:1px solid grey;
}
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 3px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

	.contact{
		height:470px;
	}
	
@media all and (max-width: 600px) {
	.contact{
		height:800px;	
	}
}
</style>
<div class="container" style="z-index:100; "></div><div class="contact">
<div id="left">
<h1 style="text-align:center;width:75%; margin: 15px auto 15px auto"><strong>Message Us</strong></h1>
<div id="errormsgdiv" style="float: right; width:75%; margin: 0 15px 15px 0"><h3 id="errormsg" style="color:white"></h3></div>
<p style="float: right; width:75%; margin: 0 15px 15px 0">*Required</p>
<form name="rcgu" method="post">
<div style=" width:75%;" class="feedback1"><input type="text" name="cname" placeholder="Full Name*" required style="width:100%"/></div>
<div style=" width:75%;" class="feedback1"><input type="email" name="cemail" placeholder="Email*" required style="width:100%"/></div>
<div style=" width:75%;" class="feedback1"><textarea name="cmsg" rows="7" placeholder="Message*" required style="width:100%"></textarea></div>
<div style=" width:75%;" class="feedback1"><tr>
<td><button type="submit" name="btn-signup" class="button" id="buttonid" style="margin: 0 auto">Submit</button></td>
</tr></div>
</form>
</div>
<div id="right" style="height: 0px; ">
<div><br><br><br></div>
<h4 style="text-align:center;width:75%;" class="details"><strong>Chandini Chowdary R.</strong></h4>
<p style="text-align:center;width:75%;"class="details">President</p>
<h6 style="text-align:center;width:75%;"class="details">Phone Number: 9059044819</h6>
<br style="line-height:0px;">
<h4 style="text-align:center; width:75%;"class="details"><strong>M. N. S. Prudhvi Kumar</strong></h4>
<p style="text-align:center; width:75%;"class="details">Secretary</p>
<h6 style="text-align:center; width:75%;"class="details">Phone Number: 8885475405</h6>
<br style="line-height:0px;">
<h4 style="text-align:center; width:75%;"class="details"><strong>Email: </strong>gitamrotaract@gmail.com</h4>
</div>

</div>



<br>


<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
</script>

<?php
include('footerfile.php');
?>
</body>
</html>

