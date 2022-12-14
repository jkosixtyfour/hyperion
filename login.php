<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: my_account.php");
    exit;
}
 
// Include config file in pagehead
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username; 
                            $_SESSION["user"] = htmlspecialchars($_POST['username']);                          
                            
                            // Redirect user to account page
                            header("location: my_account.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">



<html>
<?php include ("pagehead.php"); ?>


<body>
<div id="baseDiv">	
<?php include("header.php"); ?>
<script type="text/javascript" src="/web/20061214124217js_/http://www.youtube.com/js/components_yts1157352107.js"></script>
<script type="text/javascript" src="/web/20061214124217js_/http://www.youtube.com/js/AJAX_yts1161839869.js"></script>
<script type="text/javascript" src="/web/20061214124217js_/http://www.youtube.com/js/video_bar_yts1157352107.js"></script>

<script type="text/javascript">
</script>

<div style="padding: 0px 5px 0px 5px;">


<h1>Log In</h1>

<table width="795" align="center" cellpadding="0" cellspacing="0" border="0">
	<tbody><tr valign="top">
		<td style="padding-right: 15px;" width="515">
		
		
		<span class="highlight">What is YouTube?</span>

		YouTube is a way to get your videos to the people who matter to you. With YouTube you can:
		
		<ul>
		<li> Show off your favorite videos to the world
		</li><li> Blog the videos you take with your digital camera or cell phone
		</li><li> Securely and privately show videos to your friends and family around the world
		</li><li> ... and much, much more!
		</li></ul>

		<br><span class="highlight"><a href="signup.php">Sign up now</a> and open a free account.</span>
		<br><br><br>
		
		To learn more about our service, please see our <a href="help.php">Help</a> section.<br><br><br>
		</td>
		<td width="280">
		
		<table width="280" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="#E5ECF9">
			<tbody><tr>
				<td><img src="/web/20050806235603im_/http://www.youtube.com/img/box_login_tl.gif" width="5" height="5"></td>
				<td width="100%"><img src="/web/20050806235603im_/http://www.youtube.com/img/pixel.gif" width="1" height="5"></td>
				<td><img src="/web/20050806235603im_/http://www.youtube.com/img/box_login_tr.gif" width="5" height="5"></td>
			</tr>
			<tr>
				<td><img src="/web/20050806235603im_/http://www.youtube.com/img/pixel.gif" width="5" height="1"></td>
				<td align="center">
		<table width="100%" cellpadding="5" cellspacing="0" border="0">
			<form method="post" action="login.php"></form>

			<input type="hidden" name="field_command" value="login_submit">
				<tbody><tr>
					<td align="center" colspan="2"><div style="font-size: 14px; font-weight: bold; color:#003366; margin-bottom: 5px;">YouTube Log In</div></td>
				</tr>
				<tr>
					<td align="right"><span class="label">User Name:</span></td>
					<td><input type="text" size="20" name="field_login_username" value=""></td>
				</tr>
				<tr>
					<td align="right"><span class="label">Password:</span></td>
					<td><input type="password" size="20" name="field_login_password"></td>
				</tr>
				<tr>
					<td align="right"><span class="label">&nbsp;</span></td>
					<td><input type="submit" value="Log In"></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><a href="forgot.php">Forgot your password?</a><br><br></td>
				</tr>
			
			</tbody></table>
			
			</td>
				<td><img src="/web/20050806235603im_/http://www.youtube.com/img/pixel.gif" width="5" height="1"></td>
			</tr>
			<tr>
				<td><img src="/web/20050806235603im_/http://www.youtube.com/img/box_login_bl.gif" width="5" height="5"></td>
				<td><img src="/web/20050806235603im_/http://www.youtube.com/img/pixel.gif" width="1" height="5"></td>
				<td><img src="/web/20050806235603im_/http://www.youtube.com/img/box_login_br.gif" width="5" height="5"></td>
			</tr>
		</tbody></table>
			
		</td>
	</tr>
</tbody></table>

		</div>

		<div class="spacer">&nbsp;</div>
	<?php include("footer.php"); ?>

</div> <!-- end baseDiv -->
</body>

</html>