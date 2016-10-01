<!DOCTYPE html>
<html>
<title>RCGU</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/style.css">
<link rel="stylesheet" href="/style1.css">
<script src="/js/classie.js"></script>
<script>
    function init() {
        window.addEventListener('scroll', function(e){
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 100,
                header = document.querySelector("header");
				navigation = document.querySelector("navigation");
				var d = document.getElementById("navigation");
            if (distanceY > shrinkOn) {
                classie.add(header,"smaller");
				d.className = "navigation smaller";
				
            } else {
                if (classie.has(header,"smaller")||classie.has(navigation,"smaller")) {
                    classie.remove(header,"smaller");
					d.className = "navigation";
                }
            }
        });
    }
    window.onload = init();
</script>
<script>
 $(document).ready(function() { 
    $(window).resize(function(){
            var width = $(window).width();

            if(width > 700 ){
                $('#containerdiv').addClass('container clearfix');
				$('#no1').show();
				document.getElementById("home").style.width = "14.285%";
				document.getElementById("about").style.width = "14.285%";
				document.getElementById("bod").style.width = "14.285%";
				document.getElementById("contact").style.width = "14.285%";
				document.getElementById("register").style.width = "14.285%";
				$('#no2').show();
            }
            else if(width <= 700){
                $('#containerdiv').removeClass('container clearfix');
				$('#no1').hide();
				document.getElementById("home").style.width = "20%";
				document.getElementById("about").style.width = "20%";
				document.getElementById("bod").style.width = "20%";
				document.getElementById("contact").style.width = "20%";
				document.getElementById("register").style.width = "20%";
				$('#no2').hide();
            }

            
            })

.resize();

    });
</script>

<div id="headerr">
<header>
<div class="container clearfix" id="containerdiv">
<div class="w3-row" >
  <div class="w3-col s4 w3-center">
   <img src="/images/rotaract_logo.png" id="logo" style="float: left;">
  </div>
  <div class="w3-col s5  w3-center" >
   <img src="/images/rcgu_logo.png" id="logo" style="margin: 0 auto;">
  </div>
  <div class="w3-col s3  w3-center">
 <img src="/images/rotary2016_logo.png" id="logo" style="float: right;">
  </div>
  
</div>
</div>
</header>
<div>

</div>
<div id="navigation" class="navigation">
<ul class="w3-navbar w3-card-8  w3-white w3-center">
  <ul style="width:14.285%" class="w3-hide-small" id="no1">&nbsp;</ul>
  <ul style="width:14.285%" id="home"><a href="/">Home</a></ul>
  <ul style="width:14.285%" id="about"><a href="/about/">About Us</a></ul>
  <ul style="width:14.285%" id="bod"><a href="/bod/">BOD</a></ul>
  <style>
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    width: 12.2%;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}
.dropdown:hover .dropdown-content {
    display: block;
}
</style>
  <!--<ul style="width:14.285%" class="dropdown"><a href="#">Alumni</a>
  <div class="dropdown-content">
      <a href="2015-16.html">2015-16</a>
      <a href="2014-15.html">2014-15</a>
      <a href="2013-14.html">2013-14</a>
    </div></ul>-->
  <ul style="width:14.285%" id="contact"><a href="/contact/">Contact Us</a></ul>
  <ul style="width:14.285%" id="register"><a href="/register/">Register</a></ul>
  <ul style="width:14.285%" class="w3-hide-small" id="no2">&nbsp;</ul>
</ul>
</div>
<script type="text/javascript">
jQuery(function($) {
var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
//alert($('ul a').length);
$('ul a').each(function() { 
    if ((this.href === path)) {
        $(this).addClass('w3-grey');
    }
    //alert(this.href);
});
}); 
</script>

<div id="spacerr1" class="spacer1" style="background-color:white;">
  </div>

  <div class="spacer" >
    &nbsp;
</div>

</div>

</html>