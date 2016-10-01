<!DOCTYPE html>
<html>
<title>BOD | RCGU</title>
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
include('headerfile.php'); 
?><body>

<br>

<div class="container" style="z-index:100">
<h1 style="text-align:center;"><strong>Board of Directors</strong></h1>
<script>
var names = ["Chandini Chowdary R.","M. N. S. Prudhvi Kumar","S.A. Javed","Yelagandula Anurag","S. Smita","M. Yogeshwar Reddy","Perla N.V.L.S. Saikiran","Y. Pavan Sri Hari","M. Neeharika","S. Sarath Kumar","A.D.N.V.S. Manikanth","Putta Sreekanth","Srivatsan Ramesh","T. Kali Mohan","G. Sai Siddarth", "Sri Vamsi", "Thanneru Akhil", "Ch. Murali Krishna"];
var desig = ["President","Secretary","Vice-President","Joint-Secretary","Treasurer","Sergeant-at-arms","Dir. Club Services","Dir. Community Services","Dir. Professional Services","Dir. International Services","Dir.New Generations","Chairman - Web Services","Chairman - Membership","Chairman -Rotary Teach","Chairman - Editorial Board","Photographer","District Rotaract Secretary","District Director - Club Services"]
var email = ["chandini@rcgu.org","prudhvi@rcgu.org","javed@rcgu.org","anurag@rcgu.org","smita@rcgu.org","yogesh@rcgu.org","saikiran@rcgu.org","pavan@rcgu.org","neeharika@rcgu.org","sarath@rcgu.org","manikanth@rcgu.org","sreekanth@rcgu.org","srivatsan@rcgu.org","mohan@rcgu.org","siddarth@rcgu.org","srivamsi@rcgu.org","akhil@rcgu.org","murali@rcgu.org"]
for(var i=0;i<names.length-2;i+=2){
document.write("<div class=\"w3-row\" style=\"position:relative\" >");
document.write("<div class=\"w3-col s6  w3-center imagestyle\"> <br> <img src=\"/images/bod/"+i+".jpg\"  ></div>");
if(!(((names.length-2)%2!=0)&(i==(names.length-2)-1))){document.write("<div class=\"w3-col s6  w3-center imagestyle\"> <br> <img src=\"/images/bod/"+(i+1)+".jpg\" > </div>");}
document.write("</div>");
document.write("<div class=\"w3-row\" style=\"position:relative\" >");
document.write("<div class=\"w3-col s6  w3-center\"> <a>"+names[i]+"<br>"+desig[i]+/*"<br>Email: "+email[i]+*/"</a> </div>");
if(!(((names.length-2)%2!=0)&(i==(names.length-2)-1))){document.write("<div class=\"w3-col s6  w3-center\"> <a>"+names[i+1]+"<br>"+desig[i+1]+/*"<br>Email: "+email[i+1]+*/"</a> </div>");}
document.write("</div>");
}
</script>
<h1 style="text-align:center;"><strong>District Board Representatives</strong></h1>
<script>
for(var i=names.length-2;i<names.length;i+=2){
document.write("<div class=\"w3-row\" style=\"position:relative\" >");
document.write("<div class=\"w3-col s6  w3-center imagestyle\"> <br> <img src=\"/images/bod/"+i+".jpg\"  ></div>");
if(!(((names.length-2)%2!=0)&(i==(names.length-2)-1))){document.write("<div class=\"w3-col s6  w3-center imagestyle\"> <br> <img src=\"/images/bod/"+(i+1)+".jpg\" > </div>");}
document.write("</div>");
document.write("<div class=\"w3-row\" style=\"position:relative\" >");
document.write("<div class=\"w3-col s6  w3-center\"> <a>"+names[i]+"<br>"+desig[i]+/*"<br>Email: "+email[i]+*/"</a> </div>");
if(!((names.length%2!=0)&(i==names.length-1))){document.write("<div class=\"w3-col s6  w3-center\"> <a>"+names[i+1]+"<br>"+desig[i+1]+/*"<br>Email: "+email[i+1]+*/"</a> </div>");}
document.write("</div>");
}
</script>


</div>


<?php 
include('footerfile.php'); 
?>
</body>
</html>

