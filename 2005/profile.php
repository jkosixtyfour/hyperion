
<html>
<?php include("htmlhead.php"); ?>


<body onload="performOnLoadFunctions();">
<table width="800" cellpadding="0" cellspacing="0" border="0" align="center">
	<tr>
		<td bgcolor="#FFFFFF" style="padding-bottom: 25px;">
		
<?php include("headeralt.php"); ?>

<div style="padding-bottom: 15px;">
<table align="center" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td><strong>Profile</strong></td>
		<td style="padding: 0px 5px 0px 5px;">|</td>
		<td><a href="profile_videos.php?user=txgeek">Public Videos</a> (2)</td>
		<td style="padding: 0px 5px 0px 5px;">|</td>
		<td><a href="profile_videos_private.php?user=txgeek">Private Videos</a> (0)</td>
		<td style="padding: 0px 5px 0px 5px;">|</td>
		<td><a href="profile_favorites.php?user=txgeek">Favorites</a> (0)</td>
		<td style="padding: 0px 5px 0px 5px;">|</td>
		<td><a href="profile_friends.php?user=txgeek">Friends</a> (0)</td>
		<td style="padding: 0px 5px 0px 5px;">|</td>
		<td><a href="profile_play_list?user=txgeek">Playlists</a> (0)</td>
	</tr>
</table>
</div>
<?php
$statement = $link->prepare("SELECT `username`, `id`, `description`, `created_at`, `hometown`, `relationship_status`, `gender` FROM `users` WHERE `username` = ? LIMIT 1");
$statement->bind_param("s", $_GET['user']);
$statement->execute();
$result = $statement->get_result();
while($row = $result->fetch_assoc()) {
echo '
<table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
	<tr valign="top">
		
		<td width="595" style="padding-right: 15px;">
		<div style="border: 1px solid #CCCCCC; padding: 15px 15px 30px 15px;">
		<div style="font-size: 18px; font-weight: bold; color: #CC6633; margin-bottom: 2px;">Hello. I&#39m '.$row['username'].'.</div>
				
		<div style="font-size: 14px; font-weight: bold; color: #999999;">I have watched 0 videos!</div>

			<!-- Personal Information: -->
			
			<div class="profileLabel">Last Login:</div>
			Not implemented	
			<div class="profileLabel">Signed up:</div>
			'.$row['created_at'].'
					
					
						
				<div class="profileLabel">Gender:</div>
				'.$row['gender'].'			
					
						
				<div class="profileLabel">Relationship Status:</div>
				'.$row['relationship_status'].'			
					
					
						
				<div class="profileLabel">About Me:</div>
				'.$row['description'].'	
					
						
			<!-- Location Information -->
		
						
				<div class="profileLabel">Hometown:</div>
				'.$row['hometown'].'				
					
					
					
					
					
					
					
					
					
					
		</div>
		</td>
		
		<td width="180">
		
		<table width="180" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="#E5ECF9">
			<tr>
				<td><img src="/web/20051110050810im_/http://www.youtube.com/img/box_login_tl.gif" width="5" height="5"></td>
				<td width="170"><img src="/web/20051110050810im_/http://www.youtube.com/img/pixel.gif" width="1" height="5"></td>
				<td><img src="/web/20051110050810im_/http://www.youtube.com/img/box_login_tr.gif" width="5" height="5"></td>
			</tr>
			<tr>
				<td><img src="/web/20051110050810im_/http://www.youtube.com/img/pixel.gif" width="5" height="1"></td>
				<td align="center" style="padding: 5px;">
				
				<div style="padding: 5px; text-align: center;">
					
								
					<div style="font-size: 14px; font-weight: bold; color: #003366;">Latest Video Added</div>
			
					<div style="padding-bottom: 10px;">
					<a href="watch.php?v=-AYXQGafadU"><img src="http://web.archive.org/web/20051110050810im_/http://static.youtube.com/get_still.php?video_id=-AYXQGafadU" class="moduleFeaturedThumb" width="120" height="90"></a>
					<div class="moduleFeaturedTitle"><a href="watch.php?v=-AYXQGafadU">demo</a></div>
					<div class="moduleFeaturedDetails">Added: 2 months ago</div>
				
					</div>
		
									
				
						<div style="padding-bottom: 10px;"><a href="signup.php">Sign up</a> or <a href="login.php">log in</a> to add '.$row['username'].' as a friend.</div>
				
										
				<form method="post" action="outbox.php?user='.$row['username'].'">
				<input type="submit" value="Send Message">
				</form>
				<form method="post" action="/web/20051110050810/http://www.youtube.com/subscription_center.php?add_user=redst0nes">
				<input type="submit" value="Subscribe to '.$row['username'].'&#39s Videos">
				</form>
				
				</div>
				
				</td>
				<td><img src="/web/20051110050810im_/http://www.youtube.com/img/pixel.gif" width="5" height="1"></td>
			</tr>
			<tr>
				<td><img src="/web/20051110050810im_/http://www.youtube.com/img/box_login_bl.gif" width="5" height="5"></td>
				<td><img src="/web/20051110050810im_/http://www.youtube.com/img/pixel.gif" width="1" height="5"></td>
				<td><img src="/web/20051110050810im_/http://www.youtube.com/img/box_login_br.gif" width="5" height="5"></td>
			</tr>
			</table>
			'; } ?>
			<div style="padding-top: 15px;">
        		<!-- <table width="180" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="#EEEEDD">
				<tr>
					<td><img src="/web/20051110050810im_/http://www.youtube.com/img/box_login_tl.gif" width="5" height="5"></td>
					<td><img src="/web/20051110050810im_/http://www.youtube.com/img/pixel.gif" width="1" height="5"></td>
					<td><img src="/web/20051110050810im_/http://www.youtube.com/img/box_login_tr.gif" width="5" height="5"></td>
				</tr>
				<tr>
					<td><img src="/web/20051110050810im_/http://www.youtube.com/img/pixel.gif" width="5" height="1"></td>
					<td width="170">
					<div style="padding: 2px 5px 10px 5px;">
					<div style="font-size: 14px; font-weight: bold; margin-bottom: 8px; color: #666633;">Last 4 users online...</div>
					
					
					<div style="font-size: 12px; font-weight: bold; margin-bottom: 5px;"><a href="profile.php?user=lboris21">lboris21</a></div>

					<div style="font-size: 12px; margin-bottom: 8px; padding-bottom: 10px; border-bottom: 1px dashed #CCCC66;"><a href="profile_videos.php?user=lboris21"><img src="/web/20051110050810im_/http://www.youtube.com/img/icon_vid.gif" alt="Videos" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="profile_videos.php?user=lboris21">0</a>)
					 | <a href="profile_favorites.php?user=lboris21"><img src="/web/20051110050810im_/http://www.youtube.com/img/icon_fav.gif" alt="Favorites" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="profile_favorites.php?user=lboris21">0</a>)
					 | <a href="profile_friends.php?user=lboris21"><img src="/web/20051110050810im_/http://www.youtube.com/img/icon_friends.gif" alt="Friends" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="profile_friends.php?user=lboris21">0</a>)</div>

					
					<div style="font-size: 12px; font-weight: bold; margin-bottom: 5px;"><a href="profile.php?user=xkcyyx">xkcyyx</a></div>

					<div style="font-size: 12px; margin-bottom: 8px; padding-bottom: 10px; border-bottom: 1px dashed #CCCC66;"><a href="profile_videos.php?user=xkcyyx"><img src="/web/20051110050810im_/http://www.youtube.com/img/icon_vid.gif" alt="Videos" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="profile_videos.php?user=xkcyyx">0</a>)
					 | <a href="profile_favorites.php?user=xkcyyx"><img src="/web/20051110050810im_/http://www.youtube.com/img/icon_fav.gif" alt="Favorites" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="profile_favorites.php?user=xkcyyx">1</a>)
					 | <a href="profile_friends.php?user=xkcyyx"><img src="/web/20051110050810im_/http://www.youtube.com/img/icon_friends.gif" alt="Friends" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="profile_friends.php?user=xkcyyx">0</a>)</div>

					
					<div style="font-size: 12px; font-weight: bold; margin-bottom: 5px;"><a href="profile.php?user=lgh125645">lgh125645</a></div>

					<div style="font-size: 12px; margin-bottom: 8px; padding-bottom: 10px; border-bottom: 1px dashed #CCCC66;"><a href="profile_videos.php?user=lgh125645"><img src="/web/20051110050810im_/http://www.youtube.com/img/icon_vid.gif" alt="Videos" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="profile_videos.php?user=lgh125645">0</a>)
					 | <a href="profile_favorites.php?user=lgh125645"><img src="/web/20051110050810im_/http://www.youtube.com/img/icon_fav.gif" alt="Favorites" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="profile_favorites.php?user=lgh125645">0</a>)
					 | <a href="profile_friends.php?user=lgh125645"><img src="/web/20051110050810im_/http://www.youtube.com/img/icon_friends.gif" alt="Friends" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="profile_friends.php?user=lgh125645">0</a>)</div>

					
					<div style="font-size: 12px; font-weight: bold; margin-bottom: 5px;"><a href="profile.php?user=krazibitch">krazibitch</a></div>

					<div style="font-size: 12px; margin-bottom: 8px; padding-bottom: 10px; border-bottom: 1px dashed #CCCC66;"><a href="profile_videos.php?user=krazibitch"><img src="/web/20051110050810im_/http://www.youtube.com/img/icon_vid.gif" alt="Videos" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="profile_videos.php?user=krazibitch">0</a>)
					 | <a href="profile_favorites.php?user=krazibitch"><img src="/web/20051110050810im_/http://www.youtube.com/img/icon_fav.gif" alt="Favorites" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="profile_favorites.php?user=krazibitch">2</a>)
					 | <a href="profile_friends.php?user=krazibitch"><img src="/web/20051110050810im_/http://www.youtube.com/img/icon_friends.gif" alt="Friends" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="profile_friends.php?user=krazibitch">0</a>)</div>

									
				<div style="font-weight: bold; margin-bottom: 5px;">Icon Key:</div>
				<div style="margin-bottom: 4px;"><img src="/web/20051110050810im_/http://www.youtube.com/img/icon_vid.gif" alt="Videos" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"> - Videos</div>
				<div style="margin-bottom: 4px;"><img src="/web/20051110050810im_/http://www.youtube.com/img/icon_fav.gif" alt="Favorites" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"> - Favorites</div>
				<img src="/web/20051110050810im_/http://www.youtube.com/img/icon_friends.gif" alt="Friends" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"> - Friends

					</div>
					</td>
					<td><img src="/web/20051110050810im_/http://www.youtube.com/img/pixel.gif" width="5" height="1"></td>
				</tr>
				<tr>
					<td><img src="/web/20051110050810im_/http://www.youtube.com/img/box_login_bl.gif" width="5" height="5"></td>
					<td><img src="/web/20051110050810im_/http://www.youtube.com/img/pixel.gif" width="1" height="5"></td>
					<td><img src="/web/20051110050810im_/http://www.youtube.com/img/box_login_br.gif" width="5" height="5"></td>
				</tr>
				</table> -->
		</div>
		</tr>


		</table>
	
		</td>
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