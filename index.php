<!DOCTYPE html>
<html>
<title>AART Courier Service</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {

    height: 100%;
    color: black;
    line-height: 1.8;
    background-color: #80A1D4;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('1.jpg');
    min-height: 400px;
}


.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-black" id="myNavbar">
    <a class="w3-bar-item w3-button w3-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button">HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small">ABOUT</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <!--<div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">MY <span class="w3-hide-small">WEBSITE</span> LOGO</span>
  </div>-->
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">ABOUT</h3>
   <p>COURIER MANAGEMENT SYSTEM is one of the most reputed and fast growing courier services to the clients.Our services are widely acknowledge for their features like time saving and very efficient in use.Sending the courier across the internet and no need to visit anywhere.The system is used for daily activities such as booking a courier and track courier etc.</p>
   <br>
   <p>A Courier company is one which delivers messages, packages and mail and is known for their speed, security, tracking service and specialisation.
   Courier services became increasingly popular with the arrival of Internet shopping. Being able to order large and multiple items from online sellers required specialist delivery services that would enable customers to not only receive their items but also enable online sellers to offer things such as next day delivery. Something that is only possible with a courier service.</p>


      <div class="w3-center" style="padding:0px 16px" id="LOGIN">
        <div class="w3-grayscale" style="margin-top:32px">
          <div class="w3-center w3-margin-bottom">
               <a href="login.php" class="w3-hover-blue w3-button w3-black w3-round-xxlarge">Admin Login</a>
          </div>
          <div class="w3-center m3 w3-margin-bottom">
                 <a href="track-status.php" class="w3-hover-blue w3-button w3-black w3-round-xxlarge">Track status</a>
          </div>
        </div>
      </div>
      </div>
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16 w3-opacity w3-hover-white">
  <p>Designed and Developed by Preetham , Deepak and Srikar</p>

</footer>

<script>
  function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
