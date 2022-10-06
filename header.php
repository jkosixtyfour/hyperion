<div id="logoTagDiv">
	<a href="." name="&amp;lid=Logo&amp;lpos=GlobalNav"><img src="onsitelogo.png" alt="Home" width="123" height="63" border="0" onmouseover="showDiv('logoHomeTip');" onmouseout="hideDiv('logoHomeTip');"/></a>
	</div>
	<div id="logoHomeTip" style="display: none;">
	Home
	</div>
<?php
if(!isset($_SESSION['username'])) {
    echo '<b><a href="register.php">Sign Up</a></b>
    <span class="utilDelim">|</span>
    <a href="my_account.php">My Account</a>
    <span class="utilDelim">|</span>
    <a href="recently_watched.php">History</a>
    <span class="utilDelim">|</span>
    <a href="help_center.php">Help</a>
    <span class="utilDelim">|</span>                        
    <a href="login.php">Log In</a>
<form name="logoutForm" method="post" action="logout.php">
    <input type="hidden" name="action_logout" value="1">
</form>
</div>';
  } else {
    $statement = $link->prepare("SELECT * FROM users WHERE username = ? LIMIT 1");
            $statement->bind_param("s", $_SESSION['username']);
            $statement->execute();
            $result = $statement->get_result();
            if($result->num_rows === 0) exit('No rows');
            while($row = $result->fetch_assoc()) {
                echo '<div id="utilDiv">Hi, <a href="./profile.php?user=".$row["id"]."">'.$_SESSION["username"].'</a></strong> <span class="utilDelim">|</span> <a href="./my_account.php">My Account</a> <span class="utilDelim">|</span> <a href="./logout.php">Logout</a> <span class="utilDelim">|</span> <a href="./help_center.php">Help</a></div>
                <div>
                ';
            }
            $statement->close();
  }
  ?>

	
	<div id="searchDiv">
		<form name="searchForm" id="searchForm" method="get" action="results.php">
		<input tabindex="10000" type="text" name="search_query" maxlength="128" class="searchField" value="">
		&nbsp;
		<input type="submit" name="search" value="Search">
	</form>

	</div>
		
	<div id="gNavDiv">
		
		
		<div id="upload"><a href="my_videos_upload.php"><img src="https://web.archive.org/web/20061214124217im_/http://www.youtube.com/img/pic_upload_130x28.gif" width="130" height="28" alt="upload" border="0"/></a></div>

		<div class="tab">
			<a href="community.php"><img src="https://web.archive.org/web/20061214124217im_/http://www.youtube.com/img/tab_community_118x28.gif" width="118" height="28" border="0" alt="community"/></a></div>
		<div class="tab">
			<a href="members.php"><img src="https://web.archive.org/web/20061214124217im_/http://www.youtube.com/img/tab_channels_118x28.gif" width="118" height="28" border="0" alt="channels"/></a></div>
		<div class="tab">
			<a href="categories.php"><img src="https://web.archive.org/web/20061214124217im_/http://www.youtube.com/img/tab_categories_118x28.gif" width="118" height="28" border="0" alt="categories"/></a></div>
		<div class="tab">
			<a href="browse.php"><img src="https://web.archive.org/web/20061214124217im_/http://www.youtube.com/img/tab_videos_118x28.gif" width="118" height="28" border="0" alt="videos"/></a></div>
	</div>
<!-- end gNavDiv -->
		<div id="gNavBottom">&nbsp;</div>