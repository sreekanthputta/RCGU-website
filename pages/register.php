<!DOCTYPE html>
<html lang="en">
<title>Register | RCGU</title>
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
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
	<script>
	$( function() {
		$( "#udob" ).datepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: '1900:' + new Date().getFullYear(),
			dateFormat: 'dd-mm-yy'
		});
	} );
	</script>
</head>


<body onload="Box2(0);Box4(0);">
<?php 
include('headerfile.php'); 
?>
<br>

<div class="container" style="z-index:100">
<h1 style="text-align:center;"><strong>Registration</strong></h1>

<div id="errormsgdiv"><h3 id="errormsg" style="color:white"></h3></div>
<?php

include_once 'dbconnect.php';

?>
<p style="color:red">*Required Field</p>
<script type="text/javascript">
var varieties1=[
["Select"],
["Select", "Biotechnology", "Civil", "CSE", "EEE", "ECE", "EIE", "IE", "IT", "Mechanical", "Physics", "Chemistry","English", "Maths"],
["Select", "Applied Mathematics", "Biochemistry", "Biotechnology", "Chemistry", "Computer Science", "Environmental Studies", "Electronics/Physics", "Microbiology", "English"],
];
var varieties2=[
["Select"],
["Select", "2016-20", "2016-21"],
["Select", "2015-19", "2015-20"],
["Select", "2014-18", "2014-19"],
["Select", "2013-17", "2013-18"],
["Select", "2012-16", "2012-17"],
];
function Box2(idx) {
var f=document.rcgu;
f.ubranch.options.length=null;	
if(idx<=2){
	f.ubranch.options[0]=new Option(varieties1[idx][0], ""); 
	for(var i=1; i<varieties1[idx].length; i++) {
    f.ubranch.options[i]=new Option(varieties1[idx][i], varieties1[idx][i]); 
    }	
	document.getElementById('branchselect').style.display = 'block';
	document.getElementById('branchtext').style.display = 'none';
	document.getElementById('branchtext1').required = false;
	document.getElementById('branchselect1').required = true;
}
else{
	document.getElementById('branchselect').style.display = 'none';
	document.getElementById('branchtext').style.display = 'block';
	document.getElementById('branchtext1').required = true;
	document.getElementById('branchselect1').required = false;
}
    
}
function Box4(idx) {
var f=document.rcgu;
f.uterm.options.length=null;
f.uterm.options[0]=new Option(varieties2[idx][0], ""); 
for(var i=1; i<varieties2[idx].length; i++) {
    f.uterm.options[i]=new Option(varieties2[idx][i], varieties2[idx][i]); 
    }    
}
$(document).ready(function() {
    $("input[type=number]").on("focus", function() {
        $(this).on("keydown", function(event) {
            if (event.keyCode === 38 || event.keyCode === 40) {
                event.preventDefault();
            }
        });
    });

});

function maxLengthCheck(object) {
    if (object.value.length > object.maxLength)
      object.value = object.value.slice(0, object.maxLength)
  }
  
  function handleClick(myRadio) {
	if(myRadio.value=="No"){
		document.getElementById('hometown').style.display = 'block';
		document.getElementById('hometown').required = true;
	}
	else if(myRadio.value=="Yes"){
		document.getElementById('hometown').style.display = 'none';
		document.getElementById('hometown').required = false;
	}
}
</script>
<?php

if(isset($_POST['btn-signup']))
{
	
	$sectionvalue=' ';
	$uname = mysqli_real_escape_string($con, $_POST['uname']);
	$uemail = mysqli_real_escape_string($con, $_POST['uemail']);
	//$upass = md5(mysqli_real_escape_string($con, $_POST['pass']));
	$upin = mysqli_real_escape_string($con, $_POST['upin']);
	$uphone = mysqli_real_escape_string($con, $_POST['uphone']);
	$ugender = mysqli_real_escape_string($con, $_POST['ugender']);
	$dob = date_create($_POST['udob']);
	$dob1 = date_format($dob,"d-m-Y");
	$udob = mysqli_real_escape_string($con, $dob1);
	
	$uhostel = mysqli_real_escape_string($con, $_POST['uhostel']);
	$ulocal = mysqli_real_escape_string($con, $_POST['ulocal']);
	$uhometown = mysqli_real_escape_string($con, $_POST['uhometown']);
	$ucollege = mysqli_real_escape_string($con, $_POST['ucollege']);
	
	$uyear = mysqli_real_escape_string($con, $_POST['uyear']);
	$uterm = mysqli_real_escape_string($con, $_POST['uterm']);
	$usection = mysqli_real_escape_string($con, $_POST['usection']);
	$ublood = mysqli_real_escape_string($con, $_POST['ublood']);
	$ubloodwilling = mysqli_real_escape_string($con, $_POST['ubloodwilling']);
	
	$umname = mysqli_real_escape_string($con, $_POST['umname']);
	$ulname = mysqli_real_escape_string($con, $_POST['ulname']);
	$upresentaddressline1 = mysqli_real_escape_string($con, $_POST['upresentaddressline1']);
	$upresentaddressline2 = mysqli_real_escape_string($con, $_POST['upresentaddressline2']);
	$upresentaddressline3 = mysqli_real_escape_string($con, $_POST['upresentaddressline3']);
	$ucity = mysqli_real_escape_string($con, $_POST['ucity']);
	$upostal= mysqli_real_escape_string($con, $_POST['upostal']);
	$ustate = mysqli_real_escape_string($con, $_POST['ustate']);
	$upermanent = mysqli_real_escape_string($con, $_POST['upermanent']);

if($ucollege=='GIT'|| $ucollege=='GIS'){
	$ubranch = mysqli_real_escape_string($con, $_POST['ubranch']);
}
else{
	$ubranch = mysqli_real_escape_string($con, $_POST['uprogram']);
}

	$uname = trim($uname);
	$uemail = trim($uemail);
	//$upass = trim($upass);
	$upin = trim($upin);
	$uphone = trim($uphone);
	$ugender = trim($ugender);
	$udob = trim($udob);
	$uhostel = trim($uhostel);
	$ulocal = trim($ulocal);
	$uhometown = trim($uhometown);
	$ucollege = trim($ucollege);
	$ubranch = trim($ubranch);
	$uyear = trim($uyear);
	$uterm = trim($uterm);
	$usection = trim($usection);
	$ublood = trim($ublood);
	$ubloodwilling = trim($ubloodwilling);
	$umname = trim($umname);
	$ulname = trim($ulname);
	$upresentaddressline1 = trim($upresentaddressline1);
	$upresentaddressline2 = trim($upresentaddressline2);
	$upresentaddressline3 = trim($upresentaddressline3);
	$ucity = trim($ucity);
	$upostal= trim($upostal);
	$ustate = trim($ustate);
	$upermanent = trim($upermanent);
	
	// email exist or not
	$query = "SELECT `Email`, `Pin`, `Phone` FROM registrations WHERE `Email`='$uemail' or `Pin`='$upin' or `Phone`='$uphone'";
	$result = mysqli_query($con, $query);	
	$count = mysqli_num_rows($result); // if email not found then register
	
	/*	if($count==0){
	$query = "SELECT `Pin` FROM registrations WHERE `Pin`='$upin'";
	$result = mysqli_query($con, $query);	
	$count = mysqli_num_rows($result); // if email not found then register
	
	if($count==0){
	$query = "SELECT `Phone` FROM registrations WHERE `Phone`='$uphone'";
	$result = mysqli_query($con, $query);	
		$count = mysqli_num_rows($result); // if email not found then register
		}}*/
	
	if($count == 0){
		
		if(mysqli_query($con, "INSERT INTO registrations(`id`, `Name`, `Middle Name`, `Last Name`, `Pin`, `Email`, `Phone`, `Gender`, `Date of Birth`, `Hostel`, `Local`, `Present Address Line1`, `Present Address Line2`, `Present Address Line3`, `City`, `Postal Code`, `State`, `Permanent`, `Home Town`, `College`, `Branch`, `Year`, `Term`, `Section`, `Blood Group`, `Blood Donation Willingness`) VALUES(NULL, '$uname','$umname','$ulname','$upin','$uemail','$uphone','$ugender','$udob','$uhostel','$ulocal','$upresentaddressline1','$upresentaddressline2','$upresentaddressline3','$ucity','$upostal','$ustate','$upermanent','$uhometown','$ucollege','$ubranch','$uyear','$uterm','$usection','$ublood','$ubloodwilling')"))
		{
		?><script>
		document.getElementById("errormsg").innerHTML = "Successfully Registered";
		document.getElementById("errormsgdiv").style.backgroundColor	 = "green"</script>	<?php
		}
		else
		{
			?><script>
		document.getElementById("errormsg").innerHTML = "Error while registering, Please try again later or contact admin";
		document.getElementById("errormsgdiv").style.backgroundColor	 = "Red"</script>	<?php
		}		
	}
	else if(($count !=0)){
			?><script>
		document.getElementById("errormsg").innerHTML = "Already registered with the Email, Phone Number or College ID. Contact admin";
		document.getElementById("errormsgdiv").style.backgroundColor	 = "Red"</script>	<?php
	}
	
}
?>

<style>
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    /* display: none; <- Crashes Chrome on hover */
    -webkit-appearance: none;
    margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
}
</style>
<div id="login-form">
<form name="rcgu" method="post">
<table align="center" width="30%" border="0">
<div style="height:40px"><div class="divname"><a>First Name*</a></div>
<div class="divinput"><input type="text" name="uname" placeholder="First Name*" required style="width:100%"/></div></div>
<div style="height:40px"><div class="divname"><a>Middle Name</a></div>
<div class="divinput"><input type="text" name="umname" placeholder="Middle Name" required style="width:100%"/></div></div>
<div style="height:40px"><div class="divname"><a>Last Name*</a></div>
<div class="divinput"><input type="text" name="ulname" placeholder="Last Name*" required style="width:100%"/></div></div>
<div style="height:40px"><div class="divname"><a>College ID*</a></div>
<div class="divinput"><input type="number" name="upin" placeholder="College ID*" maxlength = "10" oninput="maxLengthCheck(this)" required style="width:100%"/></div></div>
<div style="height:40px"><div class="divname"><a>Email*</a></div>
<div class="divinput"><input type="email" name="uemail" placeholder="Email*" required style="width:100%"/></div></div>
<div style="height:40px"><div class="divname"><a>Phone Number*</a></div>
<div class="divinput"><input type="number" name="uphone" placeholder="Phone Number*" maxlength = "10"  oninput="maxLengthCheck(this)" required style="width:100%"/></div></div>
<div style="height:40px"><div class="divname"><a>Gender*</a></div>
<div class="divinput"><input type="radio" name="ugender" value="Male" id="male" required>  <label for="male">Male</label>    <input type="radio" name="ugender" value="Female" id="female">  <label for="female">Female</label></div></div>
<div style="height:40px"><div class="divname"><a>Date of Birth*</a></div>
<div class="divinput"><input type="text" name='udob' id="udob" placeholder="Date of Birth*" required style="width:100%"/></div></div>
<div style="height:40px"><div class="divname"><a>Hostel*</a></div>
<div class="divinput"><input type="radio" name="uhostel" value="Yes" id="hostelyes" required>  <label for="hostelyes">Yes</label>    <input type="radio" name="uhostel" value="No" id="hostelno"> <label for="hostelno">No</label></div></div>
<div style="height:40px"><div class="divname"><a>Local*</a></div>
<div class="divinput"><input type="radio" name="ulocal" value="Yes" id="localyes" required>  <label for="localyes">Yes</label>    <input type="radio" name="ulocal" value="No" id="localno">  <label for="localno">No</label></div></div>
<div style="height:40px"><div class="divname"><a>Present Address*</a></div>
<div class="divinput"><input type="text" name="upresentaddressline1" placeholder="Line1*" required style="width:100%"/></div></div>
<div style="height:40px"><div class="divname"><a></a></div>
<div class="divinput"><input type="text" name="upresentaddressline2" placeholder="Line2" style="width:100%"/></div></div>
<div style="height:40px"><div class="divname"><a></a></div>
<div class="divinput"><input type="text" name="upresentaddressline3" placeholder="Line3" style="width:100%"/></div></div>
<div style="height:40px"><div class="divname"><a>City*</a></div>
<div class="divinput"><input type="text" name="ucity" placeholder="City*" required style="width:100%"/></div></div>
<div style="height:40px"><div class="divname"><a>Postal Code*</a></div>
<div class="divinput"><input type="number" name="upostal" placeholder="Postal Code*" maxlength = "6" oninput="maxLengthCheck(this)" required style="width:100%"/></div></div>
<div style="height:40px"><div class="divname"><a>State*</a></div>
<div class="divinput"><input type="text" name="ustate" placeholder="State*" required style="width:100%"/></div></div>
<div style="height:85px"><div class="divname"><a>Is the above address permanent*</a></div>
<div class="divinput"><input type="radio" name="upermanent" value="Yes" id="permanentyes" onclick="handleClick(this);" required>  <label for="permanentyes">Yes</label>    <input type="radio" name="upermanent" value="No" id="permanentno" onclick="handleClick(this);"> <label for="permanentno">No</label></div></div>
<div style="height:40px; display:none" id="hometown"><div class="divname"><a>Home Town*</a></div>
<div class="divinput"><input type="text" name="uhometown" placeholder="Home Town*" style="width:100%"/></div></div>
<div style="height:40px"><div style="float: left; width:25%;"><a>College*</a></div>
<div style="float: left; width:25%;"><select name="ucollege" onchange="Box2(this.selectedIndex)" required style="width:100%">
    <option value="">Select</option>
	<option value="GIT">GIT</option>
    <option value="GIS">GIS</option>
    <option value="GIM">GIM</option>
	<option value="GSIB">GSIB</option>
    <option value="GIP">GIP</option>
    <option value="GSA">GSA</option>
	<option value="GSL">GSL</option>
    <option value="CDL">CDL</option>
	
</select></div>
<div style="float: left; width:25%;"><a style="padding-left: 10px">Branch*</a></div>
<div style="float: right; width:25%;"><div id= "branchselect" >
<select name="ubranch" id="branchselect1" style="width:100%"><option value="">Select</option></select></div>
<div id= "branchtext" ><input type="text" name="uprogram" placeholder="Program" id="branchtext1" style="width:100%;" />
</div></div></div>
<script>var count=0; if(count===0){document.getElementById('branchtext').style.display='none';count++;}</script>


<div style="height:40px"><div style="float: left; width:25%;"><a>Year*</a></div>
<div style="float: left; width:25%;"><select name="uyear" onchange="Box4(this.selectedIndex)" required style="width:100%">
    <option value="">Select</option>
    <option value="1">1</option>
    <option value="2">2</option>
	<option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select></div>
<div style="float: left; width:25%;"><a style="padding-left: 10px;">Term*</a></div>
<div style="float: left; width:25%;"><select name="uterm" required style="width:100%"><option value="">Select</option></select></div></div>
<div style="height:40px"><div <div class="divname"><a>Section</a></div>
<div class="divinput"><input type="text" name="usection" placeholder="Section"  style="width:100%"/></div></div>
<div style="height:40px"><div <div class="divname"><a>Blood Group*</a></div>
<div class="divinput"><select name="ublood" required style="width:100%">
    <option value="">Select</option>
	<option value="-">Do not know</option>
	<option value="A+">A+ve</option>
    <option value="A-">A-ve</option>
    <option value="B+">B+ve</option>
	<option value="B-">B-ve</option>
    <option value="AB+">AB+ve</option>
    <option value="AB-">AB-ve</option>
	<option value="O+">O+ve</option>
    <option value="O-">O-ve</option>
	
</select></div></div>
<div style="height:40px"><div <div class="divname"><a>Are you willing to donate blood*</a></div>
<div class="divinput"><input type="radio" name="ubloodwilling" value="Yes" id="bloodyes" required>  <label for="bloodyes">Yes</label>    <input type="radio" name="ubloodwilling" value="No" id="bloodno">  <label for="bloodno">No</label></div></div>
<style>
/*label {
	display: inline-block;
	cursor: pointer;
	position: relative;
	padding-left: 25px;
	margin-right: 15px;
	font-size: 13px;
}

input[type=radio] {
	display: none;
}
label:before {
	content: "";
	display: inline-block;

	width: 16px;
	height: 16px;

	margin-right: 10px;
	position: absolute;
	left: 0;
	bottom: 1px;
	background-color: #aaa;
	box-shadow: inset 0px 2px 3px 0px rgba(0, 0, 0, .3), 0px 1px 0px 0px rgba(255, 255, 255, .8);
}

.radio label:before {
	border-radius: 8px;
}


input[type=radio]:checked + label:before {
    content: "\2713";
	text-shadow: 1px 1px 1px rgba(0, 0, 0, .2);
	font-size: 15px;
	color: #f3f3f3;
	text-align: center;
    line-height: 15px;
}*/



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
<tr>
<td><button type="submit" name="btn-signup" class="button" id="buttonid" style="width:100%;margin: 0 auto">Register</button></td>
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

