<?php
session_start();
include_once("db_connect.php");
if (isset($_POST['login'])) {	    
    $username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
    // Check if user exists in the database
    $result = mysqli_query($conn, "SELECT * FROM adminr WHERE adname = '" .$username. "' and adpass = '" .$password. "'");
    if ($row = mysqli_fetch_array($result)) {
		// $_SESSION['user_id'] = $row['uid'];
		// $_SESSION['user_name'] = $row['user'];
        //header("Location: aindex.php");
        echo '<script type="text/JavaScript">  
            alert("Admin login Successful!"); 
            setTimeout(function () {
            $alert.popmake("close");
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
    <link rel="stylesheet" type="text/css" href="Adminlogin.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<div class="container">
    <h2>Admin Login</h2>
    <body background="Book1.jpeg" style="background-size: cover;"></body>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
                <fieldset>
                    <legend>Login</legend>
                    <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="username" placeholder="Your name" required class="form-control" />
                    </div>
                    <div class="form-group">
                    <label for="name">Password</label>
                    <input type="password" name="password" placeholder="Your Password" required class="form-control" />
                    </div>
                    <div class="form-group">
                    <input type="submit" name="login" value="Login" class="btn btn-primary" /><a href="admin.php"></a>
                    </div>
                </fieldset>
            </form>
            <span class="text-danger"><?php if (isset($error_message)) { echo $error_message; } ?></span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
        New User? <a href="AdminSignup.html" style="text-decoration: none; font-family: sans-serif;color: yellow;">&nbsp;Sign Up Here</a><br>
        Home?<a href="index.php" style="text-decoration: none; font-family: sans-serif;color: yellow;">&nbsp;back</a><br>
        </div>
    </div>
</div>
</html>