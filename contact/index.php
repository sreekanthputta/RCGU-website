<!DOCTYPE html>
<html>
<title>Rotaract Club of GITAM University</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/style.css">
<link rel="stylesheet" href="/style1.css">
<script src="/js/jquery-1.10.2.js"></script>
<script> 
$(function(){
  $("#headerfile").load("/headerfile.html"); 
  $("#footerfile").load("/footerfile.html"); 
});
</script> 
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
<div id="headerfile"></div>
<br>
<style>
#left {
    width:50%;
    float:left;
    background:white;border-right:1px solid grey;
}

#right {
    width:50%;
    float:right;
    background:white;border-left:1px solid grey;
}
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
</style>
<div class="container" style="z-index:100; "></div><div style="height:470px">
<div id="left">
<h2 style="text-align:center;float: right; width:75%; margin: 0 15px 15px 0"><strong>Feedback</strong></h2>
<div id="errormsgdiv" style="float: right; width:75%; margin: 0 15px 15px 0"><h3 id="errormsg" style="color:white"></h3></div>
<p style="float: right; width:75%; margin: 0 15px 15px 0">*Required</p>
<form name="rcgu" method="post">
<div style="float: right; width:75%; margin: 0 15px 15px 0"><input type="text" name="cname" placeholder="Full Name*" required style="width:100%"/></div>
<div style="float: right; width:75%; margin: 0 15px 15px 0"><input type="email" name="cemail" placeholder="Email*" required style="width:100%"/></div>
<div style="float: right; width:75%; margin: 0 15px 15px 0"><textarea name="cmsg" rows="7" placeholder="Message*" required style="width:100%"></textarea></div>
<div style="float: right; width:75%; margin: 0 15px 15px 0"><tr>
<td><button type="submit" name="btn-signup" class="button" id="buttonid" style="margin: 0 auto">Submit</button></td>
</tr></div>
</form>
</div>
<div id="right" style="height: 469px; ">
<div><br><br><br></div>
<h4 style="text-align:center;float: left; width:75%; margin: 0 15px 0px 0"><strong>Chandini Chowdary R.</strong></h4>
<p style="text-align:center;float: left; width:75%; margin: 0 15px 5px 0">President</p>
<h6 style="text-align:center;float: left; width:75%; margin: 0 15px 55px 0">Phone Number: 9059044819</h6>
<h4 style="text-align:center;float: left; width:75%; margin: 0 15px 0px 0"><strong>M. N. S. Prudhvi Kumar</strong></h4>
<p style="text-align:center;float: left; width:75%; margin: 0 15px 5px 0">Secretary</p>
<h6 style="text-align:center;float: left; width:75%; margin: 0 15px 5px 0">Phone Number: 8885475405</h6>
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

<div id="footerfile"></div>
</body>
</html>

