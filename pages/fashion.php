<?php
ob_start();
session_start();
include_once("db_connect.php");
?>

<!DOCTYPE html>
<html>
<title>Fashion</title>
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
  <img class="w3-image" src="fashion1.jpg" alt="Hamburger Catering" width="1600" height="800">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <h1 class="w3-xxlarge">Fashion</h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="fashion2.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">Why Opt For Fashion Designing As A Career?</h1><br>
      <!--h5 class="w3-center">Tradition since 1889</h5-->
      <p class="w3-large" style="text-align:justify">“Good design is a lot like clear thinking made visual” – Edward Tufte

      So, along with clear thinking, if you feel you have what it takes to be a successful fashion designer, you have a career in fashion designing that’s waiting to be explored.

      While in the initial years, fashion was just a concept, today it’s become a way of life for many people. So much so that many want to pursue it as a full-time career. If you ask anyone what is the first thing that comes to their mind when they hear the word ‘fashion’ – runway, models, fancy clothes, etc. are the first things that pop up. But, not just this, fashion designing gives you a way to express your ideas and put it on display for the world to take notice.

      Over the years the fashion industry has grown and how. It has managed to reach the smallest of town and inspired individuals to choose fashion designing for a career. </p>

      <!--p class="w3-large w3-text-grey w3-hide-medium" style="text-align:justify">Science can be defined as a systematic study and investigation of natural phenomena and occurrences by way of observation, theoretical explanation as well as experimentation. A scientific study of any phenomena involves careful observation, formulation of hypotheses, conducting experiments to test and prove the hypotheses and henceforth drawing conclusions that confirm or deny the hypothetical assumption. Such scientific studies help in the formulation of universal laws that help humans to know more about the world we live in and how various natural processes and phenomena occur.</p-->
    </div>
  </div>
 
  <hr>

  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="fashion3.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">Below is a generic description </h1><br>
      <h5 class="w3-center">1. Convert Your Passion Into Your Profession :</h5>
      <p class="w3-large" style="text-align:justify">There are no two ways about it that fashion designing is a fantastic career option and has tremendous potential in the Indian market. If you’re someone with a creative streak, then this profession is tailor-made for you. You get the opportunity to blend your design knowledge, artistic capabilities, and fashion trend together to create something magnificent. Imagine, getting paid for what you love to do. Amazing, isn’t it? Even within fashion designing, there are several other fields that you can opt for like fashion stylist, fashion illustrator, etc.  </p>
      <h5 class="w3-center">2. Fashion Designing – A Thriving Industry :</h5>
      <p class="w3-large" style="text-align:justify">There are some best fashion designing colleges in Pune that offer 1 year fashion designing courses in Pune, where the learning is in abundance and the course fee is quite affordable. If you’re someone who’s totally mesmerized by the glamorous world of fashion, then you should go for it. The fashion industry is full of opportunities and there are many fashion designers who are gradually making their mark in this industry. What’s best is you get to learn from the best in the industry. Once you make a mark in this industry, this profession can take you places – quite literally and get paid well for doing something that you love.</p>
      <h5 class="w3-center">3. A Budding International Fashion Market :</h5>
      <p class="w3-large" style="text-align:justify">There is so much happening on the international fashion circuit that the Indian fashion industry is bound to get influenced by it to a great extent. We’ve also witnessed numerous international brands setting foot in India and making a name for themselves here. With the advent of international brands in India, the door to career opportunities in the fashion industry is now wide open. With the international and the existing Indian markets joining forces, the fashion industry has already got the kick-start that it needs.

      It now time for you to decide how you want to go about it. We would suggest that the best colleges for fashion designing are situated in Pune. There is a dearth of fashion designing institutes in Pune, where you can do a 1 year fashion designing course in Pune. You can enrol in the International Institute of fashion design Pune and complete a course there. Since this is your career decision, you should explore and make the right choice.</p>



     
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