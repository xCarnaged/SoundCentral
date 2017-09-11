<?php   
session_start();  
if(!isset($_SESSION["sess_user"])){  
    header("location:login.php");  
} else {  
?>  
<!doctype html>  
<html>  
<head>  
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/technology-icons.css">
    <link rel="shortcut icon" type="image/png" href="img/Mlogo.png">
    <title>Sound System Rental</title>  
</head>  
<body>  
        <div id = "header">
            <nav>
                <ul id = "menu">
                    <img src="img/Rental.png"  align="left">
                    <li><a href = "index.php" class = "current">Home</a></li>
                    <li class="dropdown">
                         <a href = "#" class="dropbtn">Products</a>
                            <div class="dropdown-content">
                                <a href="speakers.html">Speakers</a>
                                <a href="phones.html">Headphones & Microphones</a>
                                <a href="package.html">Promos & Packages</a>
                            </div>
                    </li>        
                      <li class="dropdown">
                         <a href="#" class="dropbtn">Services</a>
                             <div class="dropdown-content">
                                  <a href="onlinerent.html">Online Rent Reservation</a>
                            </div>
                      </li>
                    <li><a href = "Contact.html" >Contact</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
    </div>

<!--    <div style="background-color:white;background-image:url(img/ss2.jpg);background-repeat:no-repeat;background-position:center;width:100%;height:800px;">
    </div>
    <div style="background-color:white;background-image:url(img/ss1.jpg);background-repeat:no-repeat;background-position:center;width:100%;height:800px;">-->
    <div class="display-container">
  <img class="mySlides" src="img/ss1.jpg" style="width:100%">
  <img class="mySlides" src="img/ss3.jpg" style="width:100%">
  <img class="mySlides" src="img/ss4.jpg" style="width:100%">
  <img class="mySlides" src="img/ss2.jpg" style="width:100%">
  <button class="dsp-btn" onclick="plusDivs(-1)">Prev</button>
  <button class="dsp-btn" onclick="plusDivs(1)">Next</button>
</div>
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


<section>
    
    <h3><center><B>ABOUT US</B></center></h3>
        <p align="center"> <br><br>Providing individuals with High Class Sound Equipments.

            <br>With a wide range of equipment availability.

            <br>

            <br></p>   
</section>
<footer>
    <ul class = "socialMedia">    
        <li><a href="https://www.facebook.com" target = "_blank"><i class = "fa fa-facebook"></i></a></li>
        <li><a href="https://www.plus.google.com" target = "_blank"><i class = "fa fa-google-plus"></i></a></li>
        <li><a href="https://www.twitter.com" target = "_blank"><i class = "fa fa-twitter"></i></a></li>
        <li><a href="https://www.youtube.com" target = "_blank"><i class = "fa fa-youtube"></i></a></li>
    </ul>
</footer>
<footer class = "last">
    <p>&copy; Mananquil</p> 
<h2>Welcome, <?=$_SESSION['sess_user'];?>!</h2>  
</body>  
</html>  
<?php  
}  
?>