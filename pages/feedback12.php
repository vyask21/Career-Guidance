<?php
session_start();
include_once("db_connect.php");

$error = false;
if((isset($_POST['sname']) && !empty($_POST['sname']))
&& (isset($_POST['marks']) && !empty($_POST['marks']))
&& (isset($_POST['result']) && !empty($_POST['result']))){ 

    $sname = $_POST['sname'];
    $marks = $_POST['marks'];
    $result = $_POST['result'];          
        
    $query = "INSERT INTO `feedback12` (sname, marks, result) VALUES ('$sname', '$marks', '$result')";
    $result = mysqli_query($conn, $query);
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Feedback Successful!');
    window.location.href='knowmore12th.php';
    </script>");

    if (!$error) {
        
            $success_message = "Thank you for contacting us! We'll get in touch with you shortly.";
        }
    else {
            $error_message = "Error. Please try again later!";
        }
    
    
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Feedback Form</title>
    <!-- <script type="text/javascript">
        function preventBack() {
            window.history.forward(); 
        }
          
        setTimeout("preventBack()", 0);
          
        window.onunload = function () { null };
    </script> -->
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
      background: url("feedback.jpg") no-repeat center;
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
        <h1>Kindly give the feeback.</h1>
        <!--p>We provide Educational and Career guidance to Students to achieve the zenith of success.</p-->
        <div class="btn-group">
          <!--a class="btn-item" href="https://www.w3docs.com/learn-html.html">Learn HTML</a>
          <a class="btn-item" href="https://www.w3docs.com/quiz/#">Select Quiz</a-->
        </div>
      </div>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2>Enter the Details</h2>
        </div>
        <div class="info">
          <!-- <input class="name" type="text" name="marks" placeholder="Enter your Name">
          <input class="acamarks" type="text" name="marks" placeholder="Enter the marks scored">
          <input class="acamarks" type="text" name="marks" placeholder="Result"> -->                                                               
            <input type="text" name="sname" placeholder="Enter your Name" required class="form-control" required />                     			
						<input type="text" name="marks" placeholder="Enter the marks scored" required class="form-control" required />
            <input type="text" name="result" placeholder="Result" required class="form-control" required/>          
         </div>
        <div class="checkbox">
          <input type="checkbox" name="checkbox"><span>I agree to the <a href="https://www.w3docs.com/privacy-policy">Privacy Policy for WebBasedCareerGuidanceSystem</a></span>
        </div>
        <button type="submit">Submit</button>
      </form>
    </div>
  </body>
</html>