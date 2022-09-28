<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
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

<h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</h1>
    <p>
        <a href="reset-password.php">Change password</a>
        <a href="logout.php">Logout</a>
    </p>

		<div class="spacer">&nbsp;</div>
	<?php include("footer.php"); ?>

</div> <!-- end baseDiv -->
</body>

</html>