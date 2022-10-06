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
        $confirm_password_err = "Please retype your password.";     
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

<html>
<?php include("htmlhead.php"); ?>


<body onload="performOnLoadFunctions();">
<table width="800" cellpadding="0" cellspacing="0" border="0" align="center">
	<tr>
		<td bgcolor="#FFFFFF" style="padding-bottom: 25px;">
		
<?php include("headeralt.php"); ?>

<div style="padding: 0px 5px 0px 5px;">




<script>
function formValidator()
{
	/*
	var field_signup_email = document.theForm.field_signup_email;
	var field_signup_username = document.theForm.field_signup_username;
	var field_signup_password_1 = document.theForm.field_signup_password_1;
	var field_signup_password_2 = document.theForm.field_signup_password_2;
	*/

	var signup_button = document.theForm.signup_button;

	signup_button.disabled='true';
	signup_button.value='Please wait...';
}
</script>

<div class="tableSubTitle">Sign Up</div>

Please enter your account information below. All fields are required.<br><br>
<table width="100%" cellpadding="5" cellspacing="0" border="0">
<form method="post" name="theForm" id="theForm" name="theForm" id="theForm" onsubmit="return formValidator();" action="signup.php">


<input type="hidden" name="field_command" value="signup_submit">

<!--	<tr>
		<td width="200" align="right"><span class="label">Email Address:</span></td>
		<td><input type="text" size="30" maxlength="60" name="email" value=""></td>
	</tr> -->
	<tr>
		<td align="right"><span class="label">User Name:</span></td>
		<td><input type="text" size="20" maxlength="20" name="username" value=""></td>
        <td><span style="color: red;"><?php echo $username_err; ?></span></td>
	</tr>
	<tr>
		<td align="right"><span class="label">Password:</span></td>
		<td><input type="password" size="20" maxlength="20" name="password" value=""></td>
        <td><span style="color: red;"><?php echo $password_err; ?></span></td>
	</tr>
	<tr>
		<td align="right"><span class="label">Retype Password:</span></td>
		<td><input type="password" size="20" maxlength="20" name="confirm_password" value=""></td>
        <td><span style="color: red;"><?php echo $confirm_password_err; ?></span></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><br>- I certify I am over 13 years old.
		<br>- I agree to the <a href="terms.php" target="_blank">terms of use</a> and <a href="privacy.php" target="_blank">privacy policy</a>.</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input name="signup_button" type="submit" value="Sign Up"></td>
	</tr>
	</form>
	<tr>
		<td>&nbsp;</td>
		<td><br>Or, <a href="index.php">return to the homepage</a>.</td>
	</tr>
</table>

		</div>
		</td>
	</tr>
</table>

<?php include("footer.php"); ?>

<div id="sheet" style="position:fixed; top:0px; visibility:hidden; width:100%; text-align:center;">
<table width="100%">
<tr>
<td align="center">
<div id="sheetContent" style="filter:alpha(opacity=50); -moz-opacity:0.5; opacity:0.5; border: 1px solid black; background-color:#cccccc; width:40%; text-align:left;"></div>
</td>
</tr>
</table>
</div>

<div id="tooltip"></div>

</body>
</html>