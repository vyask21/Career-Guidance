<?php
ob_start();
session_start();
include_once("db_connect.php");
?>

<!DOCTYPE html>
<html>
<title>10TH Colleges</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<style>
body, html {height: 100%}
body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
.menu {display: none}
.bgimg {
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url("colleges.jpg");
  min-height: 90%;
}
</style>
<body>
  <!-- Navbar (sit on top) -->
<div class="w3-top w3-hide-small">
  <div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
    <!--a href="#" class="w3-bar-item w3-button">HOME</a>
    <a href="#menu" class="w3-bar-item w3-button">MENU</a>
    <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
    <a href="#myMap" class="w3-bar-item w3-button">CONTACT</a-->
  </div>
</div>
  
<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-padding">
    <!--span class="w3-tag w3-xlarge">Open from 10am to 12pm</span-->
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white w3-hide-small" style="font-size:100px">list<br>OF COLLEGES</span>
    <span class="w3-text-white w3-hide-large w3-hide-medium" style="font-size:60px"><b>thin<br>CRUST PIZZA</b></span>
    <p><a href="#menu" class="w3-button w3-xxlarge w3-black">Let me see the Colleges</a></p>
  </div>
</header>

<!-- Menu Container -->
<div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="menu">
  <div class="w3-content">
  
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">JUNIOR COLLEGES</h1>
    <div class="w3-row w3-center w3-border w3-border-dark-grey">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Pizza');" id="myLink">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Science</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Pasta');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Commerce</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Starter');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Arts</div>
      </a>
    </div>

    <div id="Pizza" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Fergusson College</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Pune</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, fresh mozzarella, fresh basil</p-->
      <hr>
   
      <h1><b>St. Xaviers College</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Four cheeses (mozzarella, parmesan, pecorino, jarlsberg)</p-->
      <hr>
      
      <h1><b>D.G Ruparel College of Arts, Science and Commerce</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, chicken, onions</p-->
      <hr>

      <h1><b>V.G. Vaze College of Arts, Science and Commerce</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, fresh pineapple, bacon, fresh basil</p-->
      <hr>

      <h1><b>B.K Birla College of Arts, Science and Commerce</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Thane</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>SIES College of Arts Science and Commerce</b> <!--span class="w3-tag w3-grey w3-round">New</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, parma, bacon, fresh arugula</p-->
      <hr>

      <h1><b>Jai Hind College</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>MIT Junior College of Science & Commerce</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Pune</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>Sinhgad College of Science</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Pune</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>Indira College of Commerce & Science</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Pune</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>Wilson College</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><a href="https://collegedunia.com/science/maharashtra-colleges">More Colleges</a></h1>



    </div>

    <div id="Pasta" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>RA Podar College of Commerce and Economics</b> <!--span class="w3-tag w3-grey w3-round">Popular</span--> <span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Special sauce, mozzarella, parmesan, ground beef</p-->
      <hr>
   
      <h1><b>Narsee Monjee College of Commerce and Economics</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Ravioli filled with cheese</p-->
      <hr>
      
      <h1><b>St. Xaviers College</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, onions, ground beef</p-->
      <hr>

      <h1><b>HR College of Commerce and Economics</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Salmon, shrimp, lobster, garlic</p-->
      <hr>

      <h1><b>KJ Somaiya College of Arts and Commerce</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Salmon, shrimp, lobster, garlic</p-->
      <hr>

      <h1><b>B.K Birla College of Arts, Science and Commerce</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Thane</span></h1>
      <!--p class="w3-text-grey">Salmon, shrimp, lobster, garlic</p-->
      <hr>

      <h1><b>Mulund College of Commerce</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Salmon, shrimp, lobster, garlic</p-->
      <hr>

      <h1><b>DY Patil University</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Navi Mumbai</span></h1>
      <!--p class="w3-text-grey">Salmon, shrimp, lobster, garlic</p-->
      <hr>

      <h1><b>KPB Hinduja College of Commerce</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Salmon, shrimp, lobster, garlic</p-->
      <hr>

      <h1><b>St. Mira's College for Girls</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Pune</span></h1>
      <!--p class="w3-text-grey">Salmon, shrimp, lobster, garlic</p-->
      <hr>

      <h1><b>Wilson College</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Salmon, shrimp, lobster, garlic</p-->
      <hr>

      <h1><b>Elphinstone College</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Salmon, shrimp, lobster, garlic</p-->
      <hr>

      <h1><b>The New College</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Kolhapur</span></h1>
      <!--p class="w3-text-grey">Salmon, shrimp, lobster, garlic</p-->
      <hr>

      <h1><a href="https://collegedunia.com/commerce/maharashtra-colleges">More Colleges</a></h1>

    </div>


    <div id="Starter" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>St. Xaviers College</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, fresh mozzarella, fresh basil</p-->
      <hr>
   
      <h1><b>Fergusson College</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Pune</span></h1>
      <!--p class="w3-text-grey">Four cheeses (mozzarella, parmesan, pecorino, jarlsberg)</p-->
      <hr>
      
      <h1><b>D.G Ruparel College of Arts, Science and Commerce</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, chicken, onions</p-->
      <hr>

      <h1><b>KJ Somaiya College of Arts and Commerce</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, fresh pineapple, bacon, fresh basil</p-->
      <hr>

      <h1><b>B.K Birla College of Arts, Science and Commerce</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Thane</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>Jai Hind College</b> <!--span class="w3-tag w3-grey w3-round">New</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, parma, bacon, fresh arugula</p-->
      <hr>

      <h1><b>DY Patil University</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Navi Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>Pillai College of Arts, Commerce and Science</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Navi Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>St. Mira's College for Girls</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Pune</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>St. Andrews College of Arts, Science and Commerce</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>Wilson College</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>SIES College of Arts, Science and Commerce</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>Symbiosis College of Arts and Commerce</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Pune</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>St. Francis De Sales College</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Nagpur</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>Elphinstone College</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>The New College</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Kolhapur</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>Hislop College</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Nagpur</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><a href="https://collegedunia.com/arts/maharashtra-colleges">More Colleges</a></h1>
      

  </div>
</div>

<footer class="w3-center w3-black w3-padding-48 w3-xxlarge">
  <p>Powered by <!--a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green"-->Career Guidance</a></p>
</footer>

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-red";
}
document.getElementById("myLink").click();
</script>

</body>
</html>