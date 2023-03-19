<?php
ob_start();
session_start();
include_once("db_connect.php");
if(isset($_POST['submit']))
{
$sname = mysqli_real_escape_string($conn, $_POST['sname']);
// $std = mysqli_real_escape_string($conn, $_POST['std']);
$tenth = mysqli_real_escape_string($conn, $_POST['tenth']);
$twelfth = mysqli_real_escape_string($conn, $_POST['twelfth']);
$aoi = mysqli_real_escape_string($conn, $_POST['aoi']);
$favs = mysqli_real_escape_string($conn, $_POST['favs']);

$query = "INSERT INTO register12 (sname,tenth,twelfth,aoi,fav) VALUES ('$sname','$tenth','$twelfth','$aoi','$favs')";

$result = mysqli_query($conn, $query);
if($result){
  // echo '<script type="text/JavaScript">  
  //    alert("Details provided successfully!"); 
  //    setTimeout(function () {
  //     $alert.popmake("close");
  // }, 5000); // 5 Seconds
  //    </script>';
  header("Location: quiz12.php");
}
if(!$result)
{
$success_message = "Error!";
}
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Educational registration form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #eee;
      }
      body {
      background: url("careertrial.jpg") no-repeat center;
      background-size: cover;
      }
      h1, h2 {
      text-transform: uppercase;
      font-weight: 400;
      }
      h2 {
      margin: 0 0 0 8px;
      }
      .main-block {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100%;
      padding: 25px;
      background: rgba(0, 0, 0, 0.5); 
      }
      .left-part, form {
      padding: 25px;
      }
      .left-part {
      text-align: center;
      }
      .fa-graduation-cap {
      font-size: 72px;
      }
      form {
      background: rgba(0, 0, 0, 0.7); 
      }
      .title {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      }
      .info {
      display: flex;
      flex-direction: column;
      }
      input, select {
      padding: 5px;
      margin-bottom: 30px;
      background: transparent;
      border: none;
      border-bottom: 1px solid #eee;
      }
      input::placeholder {
      color: #eee;
      }
      option:focus {
      border: none;
      }
      option {
      background: black; 
      border: none;
      }
      .checkbox input {
      margin: 0 10px 0 0;
      vertical-align: middle;
      }
      .checkbox a {
      color: #26a9e0;
      }
      .checkbox a:hover {
      color: #85d6de;
      }
      .btn-item, button {
      padding: 10px 5px;
      margin-top: 20px;
      border-radius: 5px; 
      border: none;
      background: #26a9e0; 
      text-decoration: none;
      font-size: 15px;
      font-weight: 400;
      color: #fff;
      }
      .btn-item {
      display: inline-block;
      margin: 20px 5px 0;
      }
      button {
      width: 100%;
      }
      button:hover, .btn-item:hover {
      background: #85d6de;
      }
      @media (min-width: 568px) {
      html, body {
      height: 100%;
      }
      .main-block {
      flex-direction: row;
      height: calc(100% - 50px);
      }
      .left-part, form {
      flex: 1;
      height: auto;
      }
      }
    </style>
  </head>
  <body>
    <div class="main-block">
      <div class="left-part">
        <i class="fas fa-graduation-cap"></i>
        <h1>Register for our free guidance</h1>
        <p>We provide Educational and Career guidance to Students to achieve the zenith of success.</p>
        <!-- <div class="btn-group">
          <a class="btn-item" href="https://www.w3docs.com/learn-html.html">Learn HTML</a>
          <a class="btn-item" href="#">Select Quiz</a>
        </div> -->
      </div>
      <form method="POST">
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2>Enter the Details</h2>
        </div>
        <div class="info">
          
          <input class="name" type="text" name="sname" placeholder="Student Name" required>
          <!-- <select name="std">
            <option value="" selected>Select Grade</option>
            <option value="10th">10th</option>
            <option value="12th">12th</option>
          </select> -->
          <input class="acamarks" type="text" name="tenth" placeholder="10th Percentage" required>
          <input class="acamarkss" type="text" name="twelfth" placeholder="12th Percentage" >
          <input class="aoi" type="text" name="aoi" placeholder="Area of Interest" required>


          
          <select name="favs">
            <option value="" selected>Favorite Subject*</option>
            <option value="Math">Mathematics</option>
            <option value="Science">Science</option>
            <option value="Social Sciences">Social Sciences</option>
            <option value="English">English</option>
            </select>
        </div>
        <div class="checkbox">
          <input type="checkbox" name="checkbox"><span>I agree to the <a href="https://www.w3docs.com/privacy-policy">Privacy Policy for WebBasedCareerGuidanceSystem</a></span>
        </div>
        <button type="submit" name="submit">Submit</button>
        <div class="col-md-4 col-md-offset-4 text-center">
        <!-- Already registered? <a href="StudentSignup.php" style="text-decoration: none; font-family: sans-serif;color: yellow;">&nbsp;Sign Up Here</a><br> -->
        Home?<a href="careeroptions.php" style="text-decoration: none; font-family: sans-serif;color: yellow;">&nbsp;back</a>
        </div>
      </form>
    </div>
  </body>
</html>