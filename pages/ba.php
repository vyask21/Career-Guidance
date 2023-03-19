<?php
ob_start();
session_start();
include_once("db_connect.php");
?>

<!DOCTYPE html>
<html>
<title>BA</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <!--a href="#home" class="w3-bar-item w3-button">Gourmet au Catering</a-->
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <!--a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#menu" class="w3-bar-item w3-button">Menu</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a-->
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="w3-image" src="ba.png" alt="Hamburger Catering" width="1600" height="800">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <h1 class="w3-xxlarge">Bachelor of Arts</h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="ba1.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">What is B.A</h1><br>
      <!--h5 class="w3-center">Tradition since 1889</h5-->
      <p class="w3-large" style="text-align:justify">Full form of BA is Bachelor of Arts. BA is an extremely popular undergraduate course that students puruse right after their class 12th. Here are some important facts to konw about Bachelor or Arts:

      Bachelor or Arts is usually of three years duration.
      As part of a BA course the students need to study five compulsory subjects along with few elective subjects. These subjects vary depending on the discipline selected by candidates.
      Candidates can pursue a BA course as a full time course or even as a part time course, correspondence course or in a distance education mode.
      BA courses are offered by colleges under various streams such as Design, Hospitality, Mass Communication and Pure Humanities </p>

     
    </div>
  </div>
 
  <hr>

  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="ba2.png" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">BA Eligibility Criteria</h1><br>
     

      <p class="w3-large" style="text-align:justify">The eligibility criteria for a BA course specifies that candidates should have completed their 10+2 from a recognised board. Apart from this, some colleges also specify that aspirants should have secured minimum 50% aggregate marks at their Class 12 level in order to be eligible to pursue a BA course offered by them. Some colleges also offer 5% marks relaxation in this criteria for SC/ ST candidates.</p>
      <h5 class="w3-center">BA Subjects</h5>
      <p class="w3-large" style="text-align:justify">BA English  </p>
      <p class="w3-large" style="text-align:justify">BA Political Science  </p>
      <p class="w3-large" style="text-align:justify">BA History </p>
      <p class="w3-large" style="text-align:justify">BA Psychology  </p>
      <p class="w3-large" style="text-align:justify">BA Philosophy  </p>
      <p class="w3-large" style="text-align:justify">BA Economics </p>
      <!--h5 class="w3-center">PHYSICS</h5>
      <p class="w3-large" style="text-align:justify">Physics is a natural science that involves the study of matter and its motion through space-time, as well as all applicable concepts such as energy and force. Broadly speaking, it is general analysis of nature, conducted in order to better understand how the world and the universe behave.</p>
      <h5 class="w3-center">CHEMISTRY</h5>
      <p class="w3-large" style="text-align:justify">Chemistry is the science of matter and the changes that it undergoes. The science of matter also comes under the scope of physics. However, physics takes a more general and fundamental approach, chemistry is more specialized, being concerned with the composition, behavior, structure, and properties of matter, as well as the changes it undergoes during chemical reactions.</p-->



     
      <!--p class="w3-large w3-text-grey w3-hide-medium">Science can be defined as a systematic study and investigation of natural phenomena and occurrences by way of observation, theoretical explanation as well as experimentation. A scientific study of any phenomena involves careful observation, formulation of hypotheses, conducting experiments to test and prove the hypotheses and henceforth drawing conclusions that confirm or deny the hypothetical assumption. Such scientific studies help in the formulation of universal laws that help humans to know more about the world we live in and how various natural processes and phenomena occur.</p-->
    </div>
  </div>
 
  <!-- Menu Section -->
  <!--div class="w3-row w3-padding-64" id="menu">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="science2.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
    </div>
    <div class="w3-col l6 w3-padding-large">

      <h1 class="w3-center">Below is a generic description of the three sub-divisions of Science</h1><br>
      <h4>Bread Basket</h4>
      <p class="w3-text-grey">Assortment of fresh baked fruit breads and muffins 5.50</p><br>
   
      <h4>Honey Almond Granola with Fruits</h4>
      <p class="w3-text-grey">Natural cereal of honey toasted oats, raisins, almonds and dates 7.00</p><br>
   
      <h4>Belgian Waffle</h4>
      <p class="w3-text-grey">Vanilla flavored batter with malted flour 7.50</p><br>
   
      <h4>Scrambled eggs</h4>
      <p class="w3-text-grey">Scrambled eggs, roasted red pepper and garlic, with green onions 7.50</p><br>
   
      <h4>Blueberry Pancakes</h4>
      <p class="w3-text-grey">With syrup, butter and lots of berries 8.50</p>    
    </div>
   
    <div class="w3-col l6 w3-padding-large">
      <img src="/w3images/tablesetting.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
    </div>
  </div-->

  <hr>

  <!-- Contact Section -->
  <!--div class="w3-container w3-padding-64" id="contact">
    <h1>Contact</h1><br>
    <p>We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste. Do not hesitate to contact us.</p>
    <p class="w3-text-blue-grey w3-large"><b>Catering Service, 42nd Living St, 43043 New York, NY</b></p>
    <p>You can also contact us by phone 00553123-2323 or email catering@catering.com, or you can send us a message here:</p>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="number" placeholder="How many people" required name="People"></p>
      <p><input class="w3-input w3-padding-16" type="datetime-local" placeholder="Date and time" required name="date" value="2020-11-16T20:00"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message \ Special requirements" required name="Message"></p>
      <p><button class="w3-button w3-light-grey w3-section" type="submit">SEND MESSAGE</button></p>
    </form>
  </div-->
 
<!-- End page content -->
</div>

<!-- Footer -->
<!--footer class="w3-center w3-light-grey w3-padding-32">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer-->

</body>
</html>