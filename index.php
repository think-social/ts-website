<!DOCTYPE html>
<html>
<head>
<title>Think Social</title>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="icon" href="assets/TS_Logo.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar">
      <!--<a href="#home" class="w3-bar-item w3-button w3-wide"><b>TS</b></a>-->
      <a href="#home" class="w3-bar-item w3-button w3-wide"><img src="assets/TS_Logo.png" alt="" width="30" height="30"></a>
      <!-- Right-sided navbar links -->
      <div class="w3-right w3-hide-small">
        <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
        <!-- <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a> -->
        <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> WORK</a>
        <a href="#plans" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> PLANS</a>
        <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
      </div>
      <!-- Hide right-floated links on small screens and replace them with a menu icon -->
  
      <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
  </div>
  
  <!-- Sidebar on small screens when clicking the menu icon -->
  <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
    <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
    <a href="#plans" onclick="w3_close()" class="w3-bar-item w3-button">PLANS</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
  </nav>

<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px" >
    <header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">

  <!-- Slideshow -->
  <div class="w3-container">
    <div class="w3-display-container mySlides">
      <img src="assets/1.png" style="width:100%">
      <div class="w3-display-topleft w3-container w3-padding-32">
        <!--<span class="w3-white w3-padding-large w3-animate-bottom">Client 1</span>-->
      </div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="assets/2.png" style="width:100%">
      <div class="w3-display-middle w3-container w3-padding-32">
        <!--<span class="w3-white w3-padding-large w3-animate-bottom">Client 2</span>-->
      </div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="assets/3.png" style="width:100%">
      <div class="w3-display-topright w3-container w3-padding-32">
        <!--<span class="w3-white w3-padding-large w3-animate-bottom">Client 3</span>-->
      </div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="assets/4.png" style="width:100%">
      <div class="w3-display-topright w3-container w3-padding-32">
        <!--<span class="w3-white w3-padding-large w3-animate-bottom">Client 4</span>-->
      </div>
    </div>

    <!-- Slideshow next/previous buttons -->
    <div class="w3-container w3-dark-grey w3-padding w3-xlarge">
      <div class="w3-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-circle-left w3-hover-text-teal"></i></div>
      <div class="w3-right" onclick="plusDivs(1)"><i class="fa fa-arrow-circle-right w3-hover-text-teal"></i></div>
    
      <div class="w3-center">
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
      </div>
    </div>
  </div>
  </header>
  
  <!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
    <h3 class="w3-center">ABOUT THE COMPANY</h3>
    <p class="w3-center w3-large">Key features of our company</p>
    <div class="w3-row-padding w3-center" style="margin-top:64px">
      <div class="w3-quarter">
        <i class="fa fa-camera w3-margin-bottom w3-jumbo w3-center"></i>
        <p class="w3-large">Reels</p>
        <p>We have a great team of skilled people in our team, who can make a good quality content about your business.</p>
      </div>
      <div class="w3-quarter">
        <i class="fa fa-google w3-margin-bottom w3-jumbo"></i>
        <p class="w3-large">Google</p>
        <p>We can make your business visible for customers from around the world on Google.</p>
      </div>
      <div class="w3-quarter">
        <i class="fa fa-users w3-margin-bottom w3-jumbo"></i>
        <p class="w3-large">Network</p>
        <p>We have a great network which would be benificial for the growth of your business. </p>
      </div>
      <div class="w3-quarter">
        <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
        <p class="w3-large">Support</p>
        <p>We provide all possible support for the convience of our customers.</p>
      </div>
    </div>
  </div>
  
    
  
  <!-- Grid -->
  <div class="w3-row w3-container">
      <div class="w3-center w3-padding-64">
        <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">What We Offer</span>
      </div>
      <div class="w3-col l3 m6 w3-light-grey w3-container w3-padding-16">
        <h3>Posts</h3>
        <p>We provide premium quality posters/flyers for instagram post to promote your business.</p>
      </div>
  
      <div class="w3-col l3 m6 w3-grey w3-container w3-padding-16">
        <h3>Reels</h3>
        <p>Our team has experienced reels creaters who would make excellent reels for you.</p>
      </div>
  
      <div class="w3-col l3 m6 w3-dark-grey w3-container w3-padding-16">
        <h3>Account Management</h3>
        <p>We can manage your social media accounts with regular posting of content as demanded by our client.</p>
      </div>
  
      <div class="w3-col l3 m6 w3-black w3-container w3-padding-16">
        <h3>Website</h3>
        <p>We can develop you excellent websites for further growth of your business across the globe.</p>
      </div>
    </div></div>
  
  <!-- Promo Section - "We know design" -->
  <div class="w3-container w3-light-grey" style="padding:128px 16px">
    <div class="w3-row-padding">
      <div class="w3-col m6">
        <h3>Our Vision</h3>
        <p>"Elevate Your Online Presence" ,<br>We are here for you! to give wings to your business with some touch-ups. <br>Social media is one of the best way to attract masses more and more, in this contemporary world.</p>
        <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> View Our Works</a></p>
      </div>
      <div class="w3-col m6">
        <img class="w3-image w3-round-large" src="assets/screen.webp" alt="Buildings" width="700" height="394">
      </div>
    </div>
  </div>
  
  
  
  <!-- Promo Section "Statistics" -->
  <div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
    <div class="w3-quarter">
      <span class="w3-xxlarge">2</span>
      <br>Partners
    </div>
    <div class="w3-quarter">
      <span class="w3-xxlarge">50+</span>
      <br>Projects Done
    </div>
    <div class="w3-quarter">
      <span class="w3-xxlarge">12</span>
      <br>Happy Clients
    </div>
    <div class="w3-quarter">
      <span class="w3-xxlarge">50+</span>
      <br>Meetings
    </div>
  </div>
  
  <!-- Work Section -->
  <div class="w3-container" style="padding:128px 16px" id="work">
    <h3 class="w3-center">OUR WORK</h3>
    <p class="w3-center w3-large">What we've done for people, click on the image to view more</p>
  
    <div class="w3-row-padding" style="margin-top:64px">
      <div class="w3-col l3 m6">
        <img src="assets/bulb.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
      </div>
      <div class="w3-col l3 m6">
        <img src="assets/inter.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
      </div>
      <div class="w3-col l3 m6">
        <img src="assets/natur.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
      </div>
      <div class="w3-col l3 m6">
        <img src="assets/pub.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
      </div>
    </div>
  
    <div class="w3-row-padding w3-section">
      <div class="w3-col l3 m6">
        <img src="assets/pizza.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
      </div>
      <div class="w3-col l3 m6">
        <img src="assets/plate.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
      </div>
      <div class="w3-col l3 m6">
        <img src="assets/heal.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
      </div>
      <div class="w3-col l3 m6">
        <img src="assets/bari.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
      </div>
    </div>
  </div>
  
  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
    <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption" class="w3-opacity w3-large"></p>
    </div>
  </div>
  
  
  
  <!-- plans Section -->
  <div class="w3-container w3-center w3-dark-grey" style="padding:128px 16px" id="plans">
    <h3>Plans</h3>
    <p class="w3-large">We have some prebuild plans for growth of your business. <br>Choose a plan that fits your needs.</p>
    <div class="w3-row-padding" style="margin-top:64px">
      <div class="w3-third w3-section">
        <ul class="w3-ul w3-white w3-hover-shadow">
          <li class="w3-grey w3-xlarge w3-padding-32">Basic</li>
          <li class="w3-padding-16"> Instagram Post</li>
          <li class="w3-padding-16"> Product/Ambience Photo-Shoot</li>
        </ul>
      </div>
      <div class="w3-third">
        <ul class="w3-ul w3-white w3-hover-shadow">
          <li class="w3-red w3-xlarge w3-padding-48">Premium</li>
          <li class="w3-padding-16"> Reels creation and uploading</li>
          <li class="w3-padding-16"> Business Growth Discussion</li>
          <li class="w3-padding-16"> Social media handeling</li>
          <li class="w3-padding-16">Includes all the features of Basic Plan</li>
          
        
        </ul>
      </div>
      
    </div>
  </div>
  
  <!-- Contact Section -->
  <div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
    <h3 class="w3-center">CONTACT</h3>
    <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
    <div style="margin-top:48px">
      <form action="mail.php" method="POST" target="_blank">
          <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Phone Number" required name="Phone" required></p>
          <p><input class="w3-input w3-border" type="email" placeholder="Email" required name="Email" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message" required></p>
          <p>
            <button class="w3-button w3-black" type="submit" name="Send">
              <i class="fa fa-paper-plane"></i> SEND MESSAGE
            </button>
          </p>
        </form><br>
      
      
    </div>
  </div>
  
   <!-- Footer -->
   <footer  id="footer">
    <!-- <div class="w3-row w3-section"> -->
      <div class="w3-third w3-container w3-black w3-large" style="height:250px">
        <h2>Contact Info</h2>
        <p><i class="fa fa-map-marker" style="width:30px"></i> Navsari-Surat</p>
        <p><i class="fa fa-phone" style="width:30px"></i> +91 7984175557</p>
        <p><i class="fa fa-envelope" style="width:30px"> </i> <a href="mailto:contact@thinksocial.live" style="text-decoration: none;">contact@thinksocial.live</a></p>
      </div>
      <div class="w3-third w3-center w3-large w3-dark-grey w3-text-white "  style="height:250px">
        <h2>Connect with us</h2>
        <p><a href="https://www.instagram.com/think.socialmedia/" target="_blank" style="text-decoration: none;" class="w3-hover-text-yellow"><i class="w3-xlarge fa fa-instagram"></i>&nbsp; think.socialmedia</a></p>
        <!--<p><a href="#" target="_blank" style="text-decoration: none;" class="w3-hover-text-yellow"><i class="w3-xlarge fa fa-facebook-official"></i>&nbsp; think.socialmedia</a></p>-->
        <!--<p><a href="#" target="_blank" style="text-decoration: none; "class="w3-hover-text-yellow"><i class="w3-xlarge fa fa-youtube-play"></i>&nbsp; think.socialmedia</a></p>-->
      </div>
      <div class="w3-third w3-center w3-large w3-grey w3-justify w3-text-white" style="height:250px">
        <img src="assets/TS_Logo.png" alt="" width="240" height="240">

      </div>
    <!-- </div> -->
    <div class="w3-container w3-blue-gray w3-text-white">
      <center>
      <p>© 2023 - All Rights Reserved. Developed by <a href="https://vinitservers.me" title="Vinit Patel" target="_blank" class="w3-hover-text-yellow">Vinit Patel</a></p>
    </center>
    </div>
  </footer>

  


<script>
// Slideshow
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}

// remove
document.addEventListener('DOMContentLoaded', () => {
  var disclaimer =  document.querySelector("img[alt='www.000webhost.com']");
   if(disclaimer){
       disclaimer.remove();
   }  
 });

</script>

</body>
</html>
