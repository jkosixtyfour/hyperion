<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
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
<div id="suSignupDiv" class="contentBox">
		<h2>Join hyperion</h2>
        It's free and easy. Just fill out the account info below. <span class="smallText"><b>(All fields required)</b></span><br/>
        
        
		
	
	<br/>
	
	<form name="signupForm" id="signupForm" method="post" action="register.php">
		<input type="hidden" name="current_form" value="signupForm"/>
		<input type="hidden" name="signup_type" value="u"/>
			
		
	
		
	
		
	
		
	
		
	
		
	

	
		<table class="dataEntryTableSmall" border="0">
		<!--	<tr>
				<td class="formLabel">	<nobr>Email Address:</nobr>
</td>
				<td class="formFieldSmall" width="100"><input tabindex="1" type="text" size="25" maxlength="60" name="email" value=""/></td>
				<td rowspan="4" width="110">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<div style="margin-left:-5px;margin-top:-5px">
						<map name="upsellmap">
							<area href="/web/20061215011047/http://www.youtube.com/signup?signup_type=m" alt="Musicians" title="Musicians" shape="poly" coords="3,11,7,30,86,21,85,1">
							<area href="/web/20061215011047/http://www.youtube.com/signup?signup_type=m" alt="Musicians" title="Musicians" shape="rect" coords="1,59,91,74">
							<area href="/web/20061215011047/http://www.youtube.com/signup?signup_type=c" alt="Comedians" title="Comedians" shape="poly" coords="25,49,20,29,104,19,104,39">
							<area href="/web/20061215011047/http://www.youtube.com/signup?signup_type=c" alt="Comedians" title="Comedians" shape="rect" coords="6,73,104,89">
						</map>
						
						<img src="/web/20061215011047im_/http://www.youtube.com/img/pic_upsell_musciciancomedian_107x91.gif" border="0" width="107" height="91" usemap="#upsellmap">
					</div>
				</td>
			</tr> -->
			<tr>
				<td class="formLabel">	<nobr>User Name:</nobr>
</td>
				<td class="formFieldSmall"><input tabindex="2" type="text" size="20" maxlength="20" name="username" value=""/></td>
			</tr>
			<tr>
				<td class="formLabel">	<nobr>Password:</nobr>
</td>
				<td class="formFieldSmall"><input tabindex="3" type="password" size="20" maxlength="20" name="password" value=""/></td>
			</tr>
			<tr>
				<td class="formLabel">	<nobr>Confirm Password:</nobr>
</td>
				<td class="formFieldSmall"><input tabindex="4" type="password" size="20" maxlength="20" name="confirm_password" value=""/></td>
			</tr>

			<!--Begin Display of Comedy Style If Comedian Account-->
			<tr>
				
				<td class="formFieldSmall"> &nbsp;</td>
				<td class="formFieldSmall" colspan="2">
				<!--	<br/><input tabindex="17" type="checkbox" name="weekly_tube" checked value="checkbox">&nbsp;Sign me up for the "Broadcast Yourself" email			
-->	<br/>- I agree to the <a href="/web/20061215011047/http://www.youtube.com/t/terms" target="_blank">terms of use</a> and <a href="/web/20061215011047/http://www.youtube.com/t/privacy" target="_blank">privacy policy</a>.
					<p><input tabindex="18" name="action_signup" type="submit" value="Sign Up"></p>	
				</td>
			</tr>
		</table>
	</form>
</div>
		
<div id="suSigninDiv">
	<h2>Log In</h2>
	<p>Already a Member? Login here.</p>
	
	<form method="post" action="login.php" name="loginForm" id="loginForm">
		<input type="hidden" name="current_form" value="loginForm"/>
			
		
	
		
	
		
	
		
	
		
	
		
	

		<table class="dataEntryTableSmall">
			<tr>
				<td class="formLabel">	<nobr>User Name:</nobr>
</td>
				<td class="formFieldSmall"><input tabindex="101" type="text" size="20" name="username" value=""></td>

                <td style="font-size:6pt;color:red;"><?php echo $username_err; ?></td>
			</tr>
			<tr>
				<td class="formLabel">	<nobr>Password:</nobr>
</td>
				<td class="formFieldSmall"><input tabindex="102" type="password" size="20" name="password"></td>
			</tr>	
			<tr>
				<td class="formLabel">&nbsp;</td>
				<td class="formFieldSmall"><input tabindex="103" type="submit" name="action_login" value="Log In">
				<p class="smallText"><b>Forgot:</b>&nbsp;<a href="forgot_username">Username</a> | <a href="/web/20061215011047/http://www.youtube.com/forgot">Password</a></p>
				</td>
			</tr>
		</table>
	</form>
	<br/>
	<h2>What Is Hyperion?</h2>
	<p>hyperion is a way to get your videos to the people who matter to you.<br>
	With YouTube you can:</p>
	<ul>			
		<li>Upload, tag and share your videos worldwide</li>
		<li>Browse thousands of original videos uploaded by community members</li>
		<li>Find, join and create video groups to connect with people with similar interests</li>
		<li>Customize your experience with playlists and subscriptions</li>
		<li>Integrate hyperion with your website using video embeds or APIs</li>
	</ul>
	<p>To learn more about our service, please see the <a href="help_center.php">Help Center</a>.</p>
</div>

<script type="text/javascript">

	document.signupForm.email.focus();

</script>



		<div class="spacer">&nbsp;</div>
	<?php include("footer.php"); ?>

</div> <!-- end baseDiv -->
</body>

</html>