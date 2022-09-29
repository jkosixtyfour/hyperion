<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: my_account.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
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

<h1>Login</h1>

<div id="siSignupDiv">
	<h2>New to Hyperion?</h2>
	
	<p>hyperion is a way to get your videos to the people who matter to you. With hyperion you can:</p>

	<ul>			
		<li>Upload, tag and share your videos worldwide</li>
		<li>Browse thousands of original videos uploaded by community members</li>
		<li>Find, join and create video groups to connect with people with similar interests</li>
		<li>Customize your experience with playlists and subscriptions</li>
		<li>Integrate hyperion with your website using video embeds or APIs</li>
	</ul>
		
	<h3><a href="signup.php">Sign up now</a> and open a free account.</h3>
		
	<p>To learn more about our service, please see our <a href="/web/20061213175221/http://www.youtube.com/t/help_center">Help Center</a>.</p>
</div>

<div class="contentBox" style="float: right; background-color: #EEE;">
	<h2 class="marT0">Hyperion Members</h2>
	<p>Login to access your account.</p>
	
	<table class="dataEntryTableSmall">
		<form name="loginForm" id="loginForm" method="post">
		<input type="hidden" name="current_form" value="loginForm"/>
			
		
	
		
	
		
	
		
	
		
	
		
	

		<tr>
			<td class="formLabel">	<nobr>User Name:</nobr>
</td>
			<td class="formFieldSmall"><input tabindex="1" type="text" size="20" name="username" value=""></td>
		</tr>
		<tr>
			<td class="formLabel">	<nobr>Password:</nobr>
</td>
			<td class="formFieldSmall"><input tabindex="2" type="password" size="20" name="password"></td>
		</tr>
		<tr>
			<td class="formLabel">&nbsp;</td>
			<td class="formFieldSmall"><input type="submit" name="action_login" value="Log In">
				<p class="smallText"><b>Forgot:</b>&nbsp;<a href="/web/20061213175221/http://www.youtube.com/forgot_username">Username</a> | <a href="/web/20061213175221/http://www.youtube.com/forgot">Password</a></p>
			</td>
		</tr>
		</form>
	</table>
</div>

<script type="text/javascript">
document.loginForm.username.focus();
</script>

		<div class="spacer">&nbsp;</div>
	<?php include("footer.php"); ?>

</div> <!-- end baseDiv -->
</body>

</html>