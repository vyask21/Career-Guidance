<?php
session_start();
include_once("db_connect.php");
if (isset($_POST['login'])) {	    
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    // Check if user exists in the database
    $result = mysqli_query($conn, "SELECT * FROM student WHERE sname = '" .$username. "' and spass = '" .$password. "'");
    if ($row = mysqli_fetch_array($result)) {
		  //$_SESSION['user_id'] = $row['uid'];
		  //$_SESSION['user_name'] = $row['user'];
        header("Location: careeroptions.php");
        echo '<script type="text/JavaScript">  
            alert("Student login Successful!"); 
            setTimeout(function () {
            $alert.popmake("close");
            window.location.href = "fulldemo.php"
            }, 5000);
            </script>';
	//to check error in detail 
    /* else if(!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
    } */ 
    }else {
		$error_message = "<h4>Incorrect Email or Password!!!</h4>";
	}
}
?>

<html>
<head>
  <title>Student Login</title>
  <link rel="stylesheet" type="text/css" href="Studentlogin.css">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<div class="container">
  <h2>Student Login</h2>

  <body background="Book1.jpeg" style="background-size: cover;"></body>
  <div class="row">
    <div class="col-md-4 col-md-offset-4 well">
      <form role="form" method="post" name="loginform" onsubmit="return validateform()">
        <fieldset>
          <legend>Login</legend>
          <div class="form-group">
          <label for="username">Name</label>
          <input type="text" name="username" placeholder="Your name" required class="form-control" />
          </div>
          <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" placeholder="Your Password" required class="form-control" />
          </div>
          <div class="form-group">
          <input type="submit" name="login" value="Login" class="btn btn-primary" /><a href="main.php"></a>
          <!--input type="button" name="login" class="btn btn-success"><a href="main.html">SUBMIT</a></button-->
          </div>
        </fieldset>
      </form>
      <span class="text-danger"><?php if (isset($error_message)) { echo $error_message; } ?></span>
    </div>
  </div>
    <div class="row">
      <div class="col-md-4 col-md-offset-4 text-center">
      New User? <a href="StudentSignup.php" style="text-decoration: none; font-family: sans-serif;color: yellow;">&nbsp;Sign Up Here</a><br>
      Home?<a href="fulldemo.php" style="text-decoration: none; font-family: sans-serif;color: yellow;">&nbsp;back</a>
      </div>
    </div>
</div>

<!-- javascript -->
  <!-- <script>  
  function validateform(){  
  var username=document.loginform.username.value;  
  var password=document.loginform.password.value;  
   
  if (username==null || username==""){  
    alert("Name can't be blank");  
    return false;  
  }else if(password.length<3){  
    alert("Password must be at least 6 characters long.");  
    return false;  
    }  
  }  
  </script> -->
  
</html>