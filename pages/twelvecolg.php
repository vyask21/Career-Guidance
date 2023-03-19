<?php
ob_start();
session_start();
include_once("db_connect.php");
?>

<!DOCTYPE html>
<html>
<title>12th Colleges</title>
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
<div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="menu1">
  <div class="w3-content">
  
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">ENGINEERING COLLEGES</h1>
    <div class="w3-row w3-center w3-border w3-border-dark-grey">
      <a href="javascript:void(1)" onclick="openMenu(event, 'Pizza1');" id="myLink1">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Engineering</div>
      </a>
      <!--a href="javascript:void(1)" onclick="openMenu(event, 'Pasta1');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Commerce</div>
      </a>
      <a href="javascript:void(1)" onclick="openMenu(event, 'Starter1');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Arts</div>
      </a-->
    </div>

    <div id="Pizza1" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>IIT Bombay</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, fresh mozzarella, fresh basil</p-->
      <hr>
   
      <h1><b>Institute of Chemical Technology</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Four cheeses (mozzarella, parmesan, pecorino, jarlsberg)</p-->
      <hr>
      
      <h1><b>College of Engineering</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Pune</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, chicken, onions</p-->
      <hr>

      <h1><b>VJTI</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, fresh pineapple, bacon, fresh basil</p-->
      <hr>

      <h1><b>Sardar Patel Institute of Technology</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>Walchand College of Engineering</b> <!--span class="w3-tag w3-grey w3-round">New</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Sangli</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, parma, bacon, fresh arugula</p-->
      <hr>

      <h1><b>Ramrao Adik Institute of Technology</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Navi Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>Pillai College of Engineering</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Navi Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>K.J Somaiya College of Engineering</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>Pimpri Chinchwad College of Engineering</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Pune</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>DJ Sanghvi College of Engineering</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>Amity University</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>Vidyalankar Institute of Technology</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>Indian Institute of Information Technology</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Nagpur</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>Atharva College of Engineering</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><a href="https://collegedunia.com/engineering/maharashtra-colleges">More Colleges</a></h1>


    </div>

    <!--div id="Pasta" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Lasagna</b> <span class="w3-tag w3-grey w3-round">Popular</span> <span class="w3-right w3-tag w3-dark-grey w3-round">$13.50</span></h1>
      <p class="w3-text-grey">Special sauce, mozzarella, parmesan, ground beef</p>
      <hr>
   
      <h1><b>Ravioli</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$14.50</span></h1>
      <p class="w3-text-grey">Ravioli filled with cheese</p>
      <hr>
      
      <h1><b>Spaghetti Classica</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$11.00</span></h1>
      <p class="w3-text-grey">Fresh tomatoes, onions, ground beef</p>
      <hr>

      <h1><b>Seafood pasta</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$25.50</span></h1>
      <p class="w3-text-grey">Salmon, shrimp, lobster, garlic</p>
    </div-->


    <!--div id="Starter" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Today's Soup</b> <span class="w3-tag w3-grey w3-round">Seasonal</span><span class="w3-right w3-tag w3-dark-grey w3-round">$5.50</span></h1>
      <p class="w3-text-grey">Ask the waiter</p>
      <hr>
   
      <h1><b>Bruschetta</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$8.50</span></h1>
      <p class="w3-text-grey">Bread with pesto, tomatoes, onion, garlic</p>
      <hr>
      
      <h1><b>Garlic bread</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$9.50</span></h1>
      <p class="w3-text-grey">Grilled ciabatta, garlic butter, onions</p>
      <hr>
      
      <h1><b>Tomozzarella</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$10.50</span></h1>
      <p class="w3-text-grey">Tomatoes and mozzarella</p>
    </div><br-->

  </div>
</div>

<div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="menu2">
  <div class="w3-content">
  
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">LAW COLLEGES</h1>
    <div class="w3-row w3-center w3-border w3-border-dark-grey">
      <a href="javascript:void(1)" onclick="openMenu(event, 'Pizza2');" id="myLink1">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Law</div>
      </a>
      <!--a href="javascript:void(1)" onclick="openMenu(event, 'Pasta1');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Commerce</div>
      </a>
      <a href="javascript:void(1)" onclick="openMenu(event, 'Starter1');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Arts</div>
      </a-->
    </div>

    <div id="Pizza2" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Symbiosis Law School</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Pune</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, fresh mozzarella, fresh basil</p-->
      <hr>
   
      <h1><b>ILS Law College</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Pune</span></h1>
      <!--p class="w3-text-grey">Four cheeses (mozzarella, parmesan, pecorino, jarlsberg)</p-->
      <hr>
      
      <h1><b>Bharati Vidyapeeth New Law College</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Pune</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, chicken, onions</p-->
      <hr>

      <h1><b>Government Law College</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, fresh pineapple, bacon, fresh basil</p-->
      <hr>

      <h1><b>Sinhgad Law College</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Pune</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>DY Patil University</b> <!--span class="w3-tag w3-grey w3-round">New</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Navi Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, parma, bacon, fresh arugula</p-->
      <hr>

      <h1><b>Bharati Vidyapeeth Deemed University</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Pune</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>Dayanand College of Law</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Latur</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>Navjeevan Law College</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Nashik</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>PES'S Modern Law College</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Pune</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><a href="https://collegedunia.com/law/maharashtra-colleges">More Colleges</a></h1>

      


    </div>

    <!--div id="Pasta" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Lasagna</b> <span class="w3-tag w3-grey w3-round">Popular</span> <span class="w3-right w3-tag w3-dark-grey w3-round">$13.50</span></h1>
      <p class="w3-text-grey">Special sauce, mozzarella, parmesan, ground beef</p>
      <hr>
   
      <h1><b>Ravioli</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$14.50</span></h1>
      <p class="w3-text-grey">Ravioli filled with cheese</p>
      <hr>
      
      <h1><b>Spaghetti Classica</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$11.00</span></h1>
      <p class="w3-text-grey">Fresh tomatoes, onions, ground beef</p>
      <hr>

      <h1><b>Seafood pasta</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$25.50</span></h1>
      <p class="w3-text-grey">Salmon, shrimp, lobster, garlic</p>
    </div-->


    <!--div id="Starter" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Today's Soup</b> <span class="w3-tag w3-grey w3-round">Seasonal</span><span class="w3-right w3-tag w3-dark-grey w3-round">$5.50</span></h1>
      <p class="w3-text-grey">Ask the waiter</p>
      <hr>
   
      <h1><b>Bruschetta</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$8.50</span></h1>
      <p class="w3-text-grey">Bread with pesto, tomatoes, onion, garlic</p>
      <hr>
      
      <h1><b>Garlic bread</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$9.50</span></h1>
      <p class="w3-text-grey">Grilled ciabatta, garlic butter, onions</p>
      <hr>
      
      <h1><b>Tomozzarella</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$10.50</span></h1>
      <p class="w3-text-grey">Tomatoes and mozzarella</p>
    </div><br-->

  </div>
</div>

<div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="menu3">
  <div class="w3-content">
  
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">BSc COLLEGES</h1>
    <div class="w3-row w3-center w3-border w3-border-dark-grey">
      <a href="javascript:void(2)" onclick="openMenu(event, 'Pizza3');" id="myLink2">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Bachelor of Science</div>
      </a>
      <!--a href="javascript:void(1)" onclick="openMenu(event, 'Pasta1');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Commerce</div>
      </a>
      <a href="javascript:void(1)" onclick="openMenu(event, 'Starter1');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Arts</div>
      </a-->
    </div>

    <div id="Pizza3" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Fergusson College</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Pune</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, fresh mozzarella, fresh basil</p-->
      <hr>
   
      <h1><b>St. Xaviers College</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Four cheeses (mozzarella, parmesan, pecorino, jarlsberg)</p-->
      <hr>
      
      <h1><b>D.G Ruparel College of Arts, Science and Commerce</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, chicken, onions</p-->
      <hr>

      <h1><b>Ramnarain Ruia Autonomous College</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
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

      <h1><a href="https://collegedunia.com/bsc/maharashtra-colleges">More Colleges</a></h1>

      


    </div>

    <!--div id="Pasta" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Lasagna</b> <span class="w3-tag w3-grey w3-round">Popular</span> <span class="w3-right w3-tag w3-dark-grey w3-round">$13.50</span></h1>
      <p class="w3-text-grey">Special sauce, mozzarella, parmesan, ground beef</p>
      <hr>
   
      <h1><b>Ravioli</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$14.50</span></h1>
      <p class="w3-text-grey">Ravioli filled with cheese</p>
      <hr>
      
      <h1><b>Spaghetti Classica</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$11.00</span></h1>
      <p class="w3-text-grey">Fresh tomatoes, onions, ground beef</p>
      <hr>

      <h1><b>Seafood pasta</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$25.50</span></h1>
      <p class="w3-text-grey">Salmon, shrimp, lobster, garlic</p>
    </div-->


    <!--div id="Starter" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Today's Soup</b> <span class="w3-tag w3-grey w3-round">Seasonal</span><span class="w3-right w3-tag w3-dark-grey w3-round">$5.50</span></h1>
      <p class="w3-text-grey">Ask the waiter</p>
      <hr>
   
      <h1><b>Bruschetta</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$8.50</span></h1>
      <p class="w3-text-grey">Bread with pesto, tomatoes, onion, garlic</p>
      <hr>
      
      <h1><b>Garlic bread</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$9.50</span></h1>
      <p class="w3-text-grey">Grilled ciabatta, garlic butter, onions</p>
      <hr>
      
      <h1><b>Tomozzarella</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$10.50</span></h1>
      <p class="w3-text-grey">Tomatoes and mozzarella</p>
    </div><br-->

  </div>
</div>

<div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="menu4">
  <div class="w3-content">
  
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">BCom COLLEGES</h1>
    <div class="w3-row w3-center w3-border w3-border-dark-grey">
      <a href="javascript:void(3)" onclick="openMenu(event, 'Pizza4');" id="myLink3">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Bachelor of Commerce</div>
      </a>
      <!--a href="javascript:void(1)" onclick="openMenu(event, 'Pasta1');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Commerce</div>
      </a>
      <a href="javascript:void(1)" onclick="openMenu(event, 'Starter1');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Arts</div>
      </a-->
    </div>

    <div id="Pizza4" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>St. Xaviers College</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, fresh mozzarella, fresh basil</p-->
      <hr>
   
      <h1><b>Narsee Monjee College of Commerce and Economics</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Four cheeses (mozzarella, parmesan, pecorino, jarlsberg)</p-->
      <hr>
      
      <h1><b>D.G Ruparel College of Arts, Science and Commerce</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, chicken, onions</p-->
      <hr>

      <h1><b>RA Podar College of Commerce and Economics</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
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

      <h1><b>Brihan Maharashtra College of Commerce</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Pune</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>Elphinstone College</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>The New College</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Kolhapur</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>BP Sulakhe Commerce College</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Solapur</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><a href="https://collegedunia.com/bcom/maharashtra-colleges">More Colleges</a></h1>


      


    </div>

    <!--div id="Pasta" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Lasagna</b> <span class="w3-tag w3-grey w3-round">Popular</span> <span class="w3-right w3-tag w3-dark-grey w3-round">$13.50</span></h1>
      <p class="w3-text-grey">Special sauce, mozzarella, parmesan, ground beef</p>
      <hr>
   
      <h1><b>Ravioli</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$14.50</span></h1>
      <p class="w3-text-grey">Ravioli filled with cheese</p>
      <hr>
      
      <h1><b>Spaghetti Classica</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$11.00</span></h1>
      <p class="w3-text-grey">Fresh tomatoes, onions, ground beef</p>
      <hr>

      <h1><b>Seafood pasta</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$25.50</span></h1>
      <p class="w3-text-grey">Salmon, shrimp, lobster, garlic</p>
    </div-->


    <!--div id="Starter" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Today's Soup</b> <span class="w3-tag w3-grey w3-round">Seasonal</span><span class="w3-right w3-tag w3-dark-grey w3-round">$5.50</span></h1>
      <p class="w3-text-grey">Ask the waiter</p>
      <hr>
   
      <h1><b>Bruschetta</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$8.50</span></h1>
      <p class="w3-text-grey">Bread with pesto, tomatoes, onion, garlic</p>
      <hr>
      
      <h1><b>Garlic bread</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$9.50</span></h1>
      <p class="w3-text-grey">Grilled ciabatta, garlic butter, onions</p>
      <hr>
      
      <h1><b>Tomozzarella</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$10.50</span></h1>
      <p class="w3-text-grey">Tomatoes and mozzarella</p>
    </div><br-->

  </div>
</div>

<div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="menu5">
  <div class="w3-content">
  
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">BA COLLEGES</h1>
    <div class="w3-row w3-center w3-border w3-border-dark-grey">
      <a href="javascript:void(4)" onclick="openMenu(event, 'Pizza5');" id="myLink4">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Bachelor of Arts</div>
      </a>
      <!--a href="javascript:void(1)" onclick="openMenu(event, 'Pasta1');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Commerce</div>
      </a>
      <a href="javascript:void(1)" onclick="openMenu(event, 'Starter1');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Arts</div>
      </a-->
    </div>

    <div id="Pizza5" class="w3-container menu w3-padding-32 w3-white">
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

      <h1><a href="https://collegedunia.com/ba/maharashtra-colleges">More Colleges</a></h1>


      


    </div>

    <!--div id="Pasta" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Lasagna</b> <span class="w3-tag w3-grey w3-round">Popular</span> <span class="w3-right w3-tag w3-dark-grey w3-round">$13.50</span></h1>
      <p class="w3-text-grey">Special sauce, mozzarella, parmesan, ground beef</p>
      <hr>
   
      <h1><b>Ravioli</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$14.50</span></h1>
      <p class="w3-text-grey">Ravioli filled with cheese</p>
      <hr>
      
      <h1><b>Spaghetti Classica</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$11.00</span></h1>
      <p class="w3-text-grey">Fresh tomatoes, onions, ground beef</p>
      <hr>

      <h1><b>Seafood pasta</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$25.50</span></h1>
      <p class="w3-text-grey">Salmon, shrimp, lobster, garlic</p>
    </div-->


    <!--div id="Starter" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Today's Soup</b> <span class="w3-tag w3-grey w3-round">Seasonal</span><span class="w3-right w3-tag w3-dark-grey w3-round">$5.50</span></h1>
      <p class="w3-text-grey">Ask the waiter</p>
      <hr>
   
      <h1><b>Bruschetta</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$8.50</span></h1>
      <p class="w3-text-grey">Bread with pesto, tomatoes, onion, garlic</p>
      <hr>
      
      <h1><b>Garlic bread</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$9.50</span></h1>
      <p class="w3-text-grey">Grilled ciabatta, garlic butter, onions</p>
      <hr>
      
      <h1><b>Tomozzarella</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$10.50</span></h1>
      <p class="w3-text-grey">Tomatoes and mozzarella</p>
    </div><br-->

  </div>
</div>

<div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="menu6">
  <div class="w3-content">
  
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">Fashion Designing COLLEGES</h1>
    <div class="w3-row w3-center w3-border w3-border-dark-grey">
      <a href="javascript:void(5)" onclick="openMenu(event, 'Pizza6');" id="myLink5">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Fashion Designing</div>
      </a>
      <!--a href="javascript:void(1)" onclick="openMenu(event, 'Pasta1');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Commerce</div>
      </a>
      <a href="javascript:void(1)" onclick="openMenu(event, 'Starter1');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Arts</div>
      </a-->
    </div>

    <div id="Pizza6" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>National Institute of Fashion Technology</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Navi Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, fresh mozzarella, fresh basil</p-->
      <hr>
   
      <h1><b>Symbiosis Institute of Design</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Pune</span></h1>
      <!--p class="w3-text-grey">Four cheeses (mozzarella, parmesan, pecorino, jarlsberg)</p-->
      <hr>
      
      <h1><b>D.G Ruparel College of Arts, Science and Commerce</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, chicken, onions</p-->
      <hr>

      <h1><b>Sardar Patel Mahavidyalaya</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Chandrapur</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, fresh pineapple, bacon, fresh basil</p-->
      <hr>

      <h1><b>JD Institute of Fashion Technology</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>MIT Institute of Design</b> <!--span class="w3-tag w3-grey w3-round">New</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Pune</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, parma, bacon, fresh arugula</p-->
      <hr>

      <h1><b>FAD International</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Pune</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>Atharva College of Fashion and Arts</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>School of Fashion Technology</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Pune</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><a href="https://collegedunia.com/design/fashion-design/maharashtra-colleges">More Colleges</a></h1>

      


      


    </div>

    <!--div id="Pasta" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Lasagna</b> <span class="w3-tag w3-grey w3-round">Popular</span> <span class="w3-right w3-tag w3-dark-grey w3-round">$13.50</span></h1>
      <p class="w3-text-grey">Special sauce, mozzarella, parmesan, ground beef</p>
      <hr>
   
      <h1><b>Ravioli</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$14.50</span></h1>
      <p class="w3-text-grey">Ravioli filled with cheese</p>
      <hr>
      
      <h1><b>Spaghetti Classica</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$11.00</span></h1>
      <p class="w3-text-grey">Fresh tomatoes, onions, ground beef</p>
      <hr>

      <h1><b>Seafood pasta</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$25.50</span></h1>
      <p class="w3-text-grey">Salmon, shrimp, lobster, garlic</p>
    </div-->


    <!--div id="Starter" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Today's Soup</b> <span class="w3-tag w3-grey w3-round">Seasonal</span><span class="w3-right w3-tag w3-dark-grey w3-round">$5.50</span></h1>
      <p class="w3-text-grey">Ask the waiter</p>
      <hr>
   
      <h1><b>Bruschetta</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$8.50</span></h1>
      <p class="w3-text-grey">Bread with pesto, tomatoes, onion, garlic</p>
      <hr>
      
      <h1><b>Garlic bread</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$9.50</span></h1>
      <p class="w3-text-grey">Grilled ciabatta, garlic butter, onions</p>
      <hr>
      
      <h1><b>Tomozzarella</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$10.50</span></h1>
      <p class="w3-text-grey">Tomatoes and mozzarella</p>
    </div><br-->

  </div>
</div>

<div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="menu7">
  <div class="w3-content">
  
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">MEDICAL COLLEGES</h1>
    <div class="w3-row w3-center w3-border w3-border-dark-grey">
      <a href="javascript:void(6)" onclick="openMenu(event, 'Pizza7');" id="myLink6">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Medical Colleges</div>
      </a>
      <!--a href="javascript:void(1)" onclick="openMenu(event, 'Pasta1');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Commerce</div>
      </a>
      <a href="javascript:void(1)" onclick="openMenu(event, 'Starter1');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Arts</div>
      </a-->
    </div>

    <div id="Pizza7" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Armed Forces Medical College</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Pune</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, fresh mozzarella, fresh basil</p-->
      <hr>
   
      <h1><b>Grant Medical College</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Four cheeses (mozzarella, parmesan, pecorino, jarlsberg)</p-->
      <hr>
      
      <h1><b>Dr D Y Patil Medical College</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Pune</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, chicken, onions</p-->
      <hr>

      <h1><b>Seth GS Medical College</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, fresh pineapple, bacon, fresh basil</p-->
      <hr>

      <h1><b>BJ Government Medical College</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Pune</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>MGM Medical College</b> <!--span class="w3-tag w3-grey w3-round">New</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Aurangabad</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, parma, bacon, fresh arugula</p-->
      <hr>

      <h1><b>Lokmanya Tilak Medical College</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Sion</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>Krishna Institute of Medical Sciences</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Karad</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>Terna Medical College</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Navi Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>Bharati Vidyapeeth Deemed University Medical College</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Pune</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>KJ Somaiya Medical College</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Navi Mumbai</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>ACPM Medical College</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Dhule</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><b>Government Medical College</b> <!--span class="w3-tag w3-red w3-round">Hot!</span--><span class="w3-right w3-tag w3-dark-grey w3-round">Aurangabad</span></h1>
      <!--p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p-->
      <hr>

      <h1><a href="https://collegedunia.com/mbbs/maharashtra-colleges">More Colleges</a></h1>

      


      


    </div>

    <!--div id="Pasta" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Lasagna</b> <span class="w3-tag w3-grey w3-round">Popular</span> <span class="w3-right w3-tag w3-dark-grey w3-round">$13.50</span></h1>
      <p class="w3-text-grey">Special sauce, mozzarella, parmesan, ground beef</p>
      <hr>
   
      <h1><b>Ravioli</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$14.50</span></h1>
      <p class="w3-text-grey">Ravioli filled with cheese</p>
      <hr>
      
      <h1><b>Spaghetti Classica</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$11.00</span></h1>
      <p class="w3-text-grey">Fresh tomatoes, onions, ground beef</p>
      <hr>

      <h1><b>Seafood pasta</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$25.50</span></h1>
      <p class="w3-text-grey">Salmon, shrimp, lobster, garlic</p>
    </div-->


    <!--div id="Starter" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Today's Soup</b> <span class="w3-tag w3-grey w3-round">Seasonal</span><span class="w3-right w3-tag w3-dark-grey w3-round">$5.50</span></h1>
      <p class="w3-text-grey">Ask the waiter</p>
      <hr>
   
      <h1><b>Bruschetta</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$8.50</span></h1>
      <p class="w3-text-grey">Bread with pesto, tomatoes, onion, garlic</p>
      <hr>
      
      <h1><b>Garlic bread</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$9.50</span></h1>
      <p class="w3-text-grey">Grilled ciabatta, garlic butter, onions</p>
      <hr>
      
      <h1><b>Tomozzarella</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$10.50</span></h1>
      <p class="w3-text-grey">Tomatoes and mozzarella</p>
    </div><br-->

  </div>
</div>


<!-- About Container -->
<!--div class="w3-container w3-padding-64 w3-red w3-grayscale w3-xlarge" id="about">
  <div class="w3-content">
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">About</h1>
    <p>The Pizza Restaurant was founded in blabla by Mr. Italiano in lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <p><strong>The Chef?</strong> Mr. Italiano himself<img src="/w3images/chef.jpg" style="width:150px" class="w3-circle w3-right" alt="Chef"></p>
    <p>We are proud of our interiors.</p>
    <img src="/w3images/onepage_restaurant.jpg" style="width:100%" class="w3-margin-top w3-margin-bottom" alt="Restaurant">
    <h1><b>Opening Hours</b></h1>
    
    <div class="w3-row">
      <div class="w3-col s6">
        <p>Mon & Tue CLOSED</p>
        <p>Wednesday 10.00 - 24.00</p>
        <p>Thursday 10:00 - 24:00</p>
      </div>
      <div class="w3-col s6">
        <p>Friday 10:00 - 12:00</p>
        <p>Saturday 10:00 - 23:00</p>
        <p>Sunday Closed</p>
      </div>
    </div>
    
  </div>
</div-->

<!-- Image of location/map -->
<!--img src="/w3images/map.jpg" class="w3-image w3-greyscale" style="width:100%;" id="myMap"-->

<!-- Contact -->
<!--div class="w3-container w3-padding-64 w3-blue-grey w3-grayscale-min w3-xlarge">
  <div class="w3-content">
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">Contact</h1>
    <p>Find us at some address at some place or call us at 05050515-122330</p>
    <p><span class="w3-tag">FYI!</span> We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste.</p>
    <p class="w3-xxlarge"><strong>Reserve</strong> a table, ask for today's special or just send us a message:</p>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="How many people" required name="People"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="datetime-local" placeholder="Date and time" required name="date" value="2020-11-16T20:00"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message \ Special requirements" required name="Message"></p>
      <p><button class="w3-button w3-light-grey w3-block" type="submit">SEND MESSAGE</button></p>
    </form>
  </div>
</div-->

<!-- Footer -->
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