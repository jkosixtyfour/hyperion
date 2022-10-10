<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tr valign="top">
		<td width="130" rowspan="2" style="padding: 0px 5px 5px 5px;"><a href="index.php"><img src="img/logo_new.png" width="120" height="48" alt="YouTube" border="0" style="vertical-align: middle; "></a></td>
		<td valign="top">
		
		<table width="670" cellpadding="0" cellspacing="0" border="0">
			<tr valign="top">
				<td style="padding: 0px 5px 0px 5px; font-style: italic;">Upload, tag and share your videos worldwide!</td>
				<td align="right">
				
				<table cellpadding="0" cellspacing="0" border="0">
					<tr>
		
							<?php
if(!isset($_SESSION['username'])) {
    echo '<td><a href="signup.php"><strong>Sign Up</strong></a></td>
    <td style="padding: 0px 5px 0px 5px;">|</td>
    <td><a href="login.php">Log In</a></td>
    <td style="padding: 0px 5px 0px 5px;">|</td>
    <td style="padding-right: 5px;"><a href="help.php">Help</a></td>';
  } else {
    $statement = $link->prepare("SELECT * FROM users WHERE username = ? LIMIT 1");
            $statement->bind_param("s", $_SESSION['username']);
            $statement->execute();
            $result = $statement->get_result();
            if($result->num_rows === 0) echo('Uh oh, something is wrong with your session:<br> The logged in user couldn&#39t be found.');
            while($row = $result->fetch_assoc()) {
                echo '<td>Hello, <a href="./profile.php?user='.$_SESSION["username"].'">'.$_SESSION["username"].'</a>! <img src="img/mail.gif" border="0"> (<a href="#">0</a>)</td>
                <td style="padding: 0px 5px 0px 5px;">|</td>
                <td><a href="logout.php">Log Out</a></td>
                <td style="padding: 0px 5px 0px 5px;">|</td>
                <td style="padding-right: 5px;"><a href="help.php">Help</a></td>';
            }
            $statement->close();
  }
  ?>									
					</tr>
				</table>
				
				</td>
			</tr>
		</table>
		</td>
	</tr>
	<tr valign="bottom">
		<td>
		<table cellpadding="0" cellspacing="0" border="0">
			<tr>
				<td>
				<table style=" background-color: #DDDDDD; margin: 5px 2px 0px 5px; border-bottom: 1px solid #DDDDDD; " cellpadding="0" cellspacing="0" border="0">
					<tr>
						<td><img src="img/box_login_tl.gif" width="5" height="5"></td>
						<td><img src="img/pixel.gif" width="1" height="5"></td>
						<td><img src="img/box_login_tr.gif" width="5" height="5"></td>
					</tr>
					<tr>
						<td><img src="img/pixel.gif" width="5" height="1"></td>
						<td style="padding: 0px 20px 5px 20px; font-size: 13px; font-weight: bold;"><a href="index.php">Home</a></td>
						<td><img src="img/pixel.gif" width="5" height="1"></td>
					</tr>
				</table>
				</td>
				<td>
				<table style=" background-color: #BECEEE; margin: 5px 2px 1px 0px; " cellpadding="0" cellspacing="0" border="0">
					<tr>
						<td><img src="img/box_login_tl.gif" width="5" height="5"></td>
						<td><img src="img/pixel.gif" width="1" height="5"></td>
						<td><img src="img/box_login_tr.gif" width="5" height="5"></td>
					</tr>
					<tr>
						<td><img src="img/pixel.gif" width="5" height="1"></td>
						<td style="padding: 0px 20px 5px 20px; font-size: 13px; font-weight: bold;"><a href="browse.php">Watch&nbsp;Videos</a></td>
						<td><img src="img/pixel.gif" width="5" height="1"></td>
					</tr>
				</table>
				</td>
				<td>
				<table style=" background-color: #BECEEE; margin: 5px 2px 1px 0px; " cellpadding="0" cellspacing="0" border="0">
					<tr>
						<td><img src="img/box_login_tl.gif" width="5" height="5"></td>
						<td><img src="img/pixel.gif" width="1" height="5"></td>
						<td><img src="img/box_login_tr.gif" width="5" height="5"></td>
					</tr>
					<tr>
						<td><img src="img/pixel.gif" width="5" height="1"></td>
						<td style="padding: 0px 20px 5px 20px; font-size: 13px; font-weight: bold;"><a href="my_videos_upload.php">Upload&nbsp;Videos</a></td>
						<td><img src="img/pixel.gif" width="5" height="1"></td>
					</tr>
				</table>
				</td>
				<td>
				<table style=" background-color: #BECEEE; margin: 5px 2px 1px 0px; " cellpadding="0" cellspacing="0" border="0">
					<tr>
						<td><img src="img/box_login_tl.gif" width="5" height="5"></td>
						<td><img src="img/pixel.gif" width="1" height="5"></td>
						<td><img src="img/box_login_tr.gif" width="5" height="5"></td>
					</tr>
					<tr>
						<td><img src="img/pixel.gif" width="5" height="1"></td>
						<td style="padding: 0px 20px 5px 20px; font-size: 13px; font-weight: bold;"><a href="my_friends_invite.php">Invite&nbsp;Friends</a></td>
						<td><img src="img/pixel.gif" width="5" height="1"></td>
					</tr>
				</table>
				</td>
			</tr>
		</table>
		</td>
	</tr>
	
</table>

<table align="center" width="800" bgcolor="#DDDDDD" cellpadding="0" cellspacing="0" border="0" style="margin-bottom: 10px;">
	<tr>
		<td><img src="img/box_login_tl.gif" width="5" height="5"></td>
		<td><img src="img/pixel.gif" width="1" height="5"></td>
		<td><img src="img/box_login_tr.gif" width="5" height="5"></td>
	</tr>
	<tr>
		<td><img src="img/pixel.gif" width="5" height="1"></td>
		<td width="790" align="center" style="padding: 2px;">

		<table cellpadding="0" cellspacing="0" border="0">
			<tr>
				<td style="font-size: 10px;">&nbsp;</td>
				
								
				<td style="  "><a href="my_videos.php">My Videos</a></td>
				<td style="padding: 0px 10px 0px 10px;">|</td>
				<td style="  "><a href="my_favorites.php">My Favorites</a></td>
				<td style="padding: 0px 10px 0px 10px;">|</td>
				<td style="  "><a href="my_friends.php">My Friends</a></td>
				<!-- <td>&nbsp;|&nbsp;</td>
				<td style="  "><a href="my_groups.php">My Groups</a></td> -->
				<td style="padding: 0px 10px 0px 10px;">|</td>
				<td style="  "><a href="my_messages.php">My Messages</a></td>
				<td style="padding: 0px 10px 0px 10px;">|</td>
				<td style="  "><a href="my_profile.php">My Profile</a></td>
				
								
								
								
				<td style="font-size: 10px;">&nbsp;</td>
			</tr>
		</table>
			
		</td>
		<td><img src="img/pixel.gif" width="5" height="1"></td>
	</tr>
	<tr>
		<td style="border-bottom: 1px solid #FFFFFF"><img src="img/box_login_bl.gif" width="5" height="5"></td>
		<td style="border-bottom: 1px solid #BBBBBB"><img src="img/pixel.gif" width="1" height="5"></td>
		<td style="border-bottom: 1px solid #FFFFFF"><img src="img/box_login_br.gif" width="5" height="5"></td>
	</tr>
</table>

<div style="padding: 0px 5px 0px 5px;">




<table align="center" cellpadding="0" cellspacing="0" border="0" style="margin-bottom: 10px;">
	<tr>
		<form name="searchForm" id="searchForm" method="GET" action="results.php">
	 		<td style="padding-right: 5px;"><input tabindex="1" type="text" value="" name="search" maxlength="128" style="color:#ff3333; font-size: 12px; width: 300px;"></td>
			<td><input type="submit" value="Search Videos"></td>
		</form>
		<script language="javascript">
			onLoadFunctionList.push(function () { document.searchForm.search.focus(); });
		</script>
	</tr>
</table>