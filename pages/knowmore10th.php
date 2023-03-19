<?php
ob_start();
session_start();
include_once("db_connect.php");
?>

<!DOCTYPE html>
<html>
<title>Know more</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h5 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
  background-image: url('knowmore.png');
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
</style>
<body>

<div class="bgimg w3-display-container w3-text-white">
  <div class="w3-display-middle w3-jumbo">

  	</div>
  <div class="w3-display-topleft w3-container w3-xlarge">
  	<p><a href='tencolg.php'><button class="w3-button w3-black">List of Colleges</button></a></p>
  	<p><a href='science.php'><button class="w3-button w3-black">Science</button></a></p>
  	<p><a href='commerce.php'><button class="w3-button w3-black">Commerce</button></a></p>
  	<p><a href='arts.php'><button class="w3-button w3-black">Arts</button></a></p>
    <p><a href='feedback10.php'><button class="w3-button w3-black">Feedback</button></a></p>
    <p><a href='fulldemo.php'><button class="w3-button w3-black">Logout</button></a></p>

  	</div>
</div>
</body>