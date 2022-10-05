
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">


<html>

<!-- machid: 104 -->
<head>
	
	<title>hyperion - Rebroadcast Yourself.</title>

	<link rel="stylesheet" href="https://web.archive.org/web/20070831182909cs_/http://youtube.com/css/styles_yts1187851135.css" type="text/css">
	<link rel="stylesheet" href="https://web.archive.org/web/20070831182909cs_/http://youtube.com/css/base_yts1188285490.css" type="text/css">
	<link rel="search" type="application/opensearchdescription+xml" href="#" title="YouTube Video Search">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	

	<meta name="description" content="Share your videos with friends and family">
	<meta name="keywords" content="video,sharing,camera phone,video phone">

	<link rel="alternate" title="YouTube - [RSS]" href="/web/20070831182909/http://youtube.com/rssls">

	<script type="text/javascript" src="/web/20070831182909js_/http://youtube.com/js/ui_yts1187851120.js"></script>
	<script type="text/javascript" src="/web/20070831182909js_/http://youtube.com/js/AJAX_yts1181801895.js"></script>
	<script type="text/javascript" src="/web/20070831182909js_/http://youtube.com/js/ytutil_yts1187851120.js"></script>
	<script type="text/javascript" src="/web/20070831182909js_/http://youtube.com/js/watch_queue_yts1181801895.js"></script>
	<script language="javascript" type="text/javascript">
		onLoadFunctionList = new Array();
		function performOnLoadFunctions()
		{
			for (var i in onLoadFunctionList)
			{
				onLoadFunctionList[i]();
			}
		}
	</script>
	<script type="text/javascript">var quicklist_count=0;</script>
	<script language="javascript" type="text/javascript"> function _hbLink (a,b) { return false; } </script>

	

<script type="text/javascript" src="/web/20070831182909js_/http://youtube.com/swfobject.js"></script>
<script type="text/javascript" src="/web/20070831182909js_/http://youtube.com/js/components_yts1187851120.js"></script>
<script type="text/javascript" src="/web/20070831182909js_/http://youtube.com/js/video_bar_yts1187851120.js"></script>

<script type="text/javascript">

function swapVideoList(linkObj)
{
	var linkId = linkObj.id;
	var queryData = '';
	var newDivId = '';
	var headlineObj = document.getElementById('hpVideoListHead');
	var moreLinkObj = document.getElementById('hpFeaturedMoreTop');
	var bottomMoreLinkObj = document.getElementById('hpFeaturedMoreBottom');
	if (document.getElementById('hpEditorContainer'))
	{
		var editorObj = document.getElementById('hpEditorContainer');
	}
	if (linkId == 'hpMostViewedLink') {
		queryData = 'videoListType=mostViewed';
		newDivId = 'hpMostViewed';
		headlineObj.innerHTML = "Most Viewed Videos";
		moreLinkObj.innerHTML = "<a href=\"/browse?s=mp\">See More Most Viewed Videos</a>";
		bottomMoreLinkObj.innerHTML = "<a href=\"/browse?s=mp\">See More Most Viewed Videos</a>";
	}
	else if (linkId == 'hpMostDiscussedLink') {
		queryData = 'videoListType=mostDiscussed';
		newDivId = 'hpMostDiscussed';
		headlineObj.innerHTML = "Most Discussed Videos";
		moreLinkObj.innerHTML = "<a href=\"/browse?s=md\">See More Most Discussed Videos</a>";
		bottomMoreLinkObj.innerHTML = "<a href=\"/browse?s=md\">See More Most Discussed Videos</a>";
	}
	else if (linkId == 'hpTopFavoritesLink') {
		queryData = 'videoListType=topFavorites';
		newDivId = 'hpTopFavorites';
		headlineObj.innerHTML = "Top Favorites";
		moreLinkObj.innerHTML = "<a href=\"/browse?s=mf\">See More Top Favorites</a>";
		bottomMoreLinkObj.innerHTML = "<a href=\"/browse?s=mf\">See More Top Favorites</a>";
	}
	else if (linkId == 'hpFeaturedLink') {
		if (document.getElementById('hpEditorContainer')) editorObj.style.visibility = 'visible';
		newDivId = 'hpFeatured';
		headlineObj.innerHTML = "Featured Videos";
		moreLinkObj.innerHTML = "<a href=\"/browse?s=rf\">See More Featured Videos</a>";
		bottomMoreLinkObj.innerHTML = "<a href=\"/browse?s=rf\">See More Featured Videos</a>";
	} 
//	alert(queryData);
	self.containerDiv = 'hpVideoList'
	self.fillDiv = fillDiv
	self.linkId = linkId
	self.newDivId = newDivId
	document.getElementById(newDivId + 'Tab').className = 'hilite';
	if (newDivId != 'hpMostViewed') {
		document.getElementById('hpMostViewedTab').className = '';
	}
	if (newDivId != 'hpMostDiscussed') {
		document.getElementById('hpMostDiscussedTab').className = '';
	}
	if (newDivId != 'hpTopFavorites') {
		document.getElementById('hpTopFavoritesTab').className = '';
	}
	if (newDivId != 'hpFeatured') {
		document.getElementById('hpFeaturedTab').className = '';
		if (document.getElementById('hpEditorContainer')) editorObj.style.visibility = 'hidden';
	}
	if (document.getElementById(newDivId))
	{
		document.getElementById(newDivId).style.display = 'block';
		if (newDivId != 'hpMostViewed' && document.getElementById('hpMostViewed')) document.getElementById('hpMostViewed').style.display = 'none';
		if (newDivId != 'hpMostDiscussed' && document.getElementById('hpMostDiscussed')) document.getElementById('hpMostDiscussed').style.display = 'none';
		if (newDivId != 'hpTopFavorites' && document.getElementById('hpTopFavorites')) document.getElementById('hpTopFavorites').style.display = 'none';
		if (newDivId != 'hpFeatured' && document.getElementById('hpFeatured')) document.getElementById('hpFeatured').style.display = 'none';
	}
	else if (queryData != '') {
		postUrlXMLResponse('/ajax_video_list',queryData,self.fillDiv);
	}
}
function fillDiv(req)
{
	if (document.getElementById('hpMostViewed')) document.getElementById('hpMostViewed').style.display = 'none';
	if (document.getElementById('hpMostDiscussed')) document.getElementById('hpMostDiscussed').style.display = 'none';
	if (document.getElementById('hpTopFavorites')) document.getElementById('hpTopFavorites').style.display = 'none';
	if (document.getElementById('hpFeatured')) document.getElementById('hpFeatured').style.display = 'none';
	//alert('wtf');
	var newContent = getNodeValue(req.responseXML, "html_content");
	var newdiv = document.createElement('div');
	newdiv.setAttribute("id",self.newDivId);
	newdiv.innerHTML = newContent;
	var container = document.getElementById(self.containerDiv);
	container.appendChild(newdiv);
	//alert(newContent);
}

function hide_active_sharing()  {
	hideDiv("active_sharing_div");
}
</script>

</head>


<body onload="performOnLoadFunctions();" topmargin="0" marginheight="0">
<div id="baseDiv">
		<div id="logoTagDiv">
	<a href="." name="&amp;lid=Logo&amp;lpos=GlobalNav"><img src="onsitelogo.png" alt="Home" width="123" height="63" border="0" onmouseover="showDiv('logoHomeTip');" onmouseout="hideDiv('logoHomeTip');"/></a>
	</div>
	<div id="logoHomeTip" style="display: none;">Home</div>

			<div id="localePickerBox">
	<script type="text/javascript">
		function selectLocale(loc) {
			var current_url, next_url;
			current_url = location.href;

			//Check if the URL string contains any site redirect values; if yes, chop string to remove those values
			if (current_url.indexOf('?locale=')!=-1) {
				url_array = current_url.split("?locale=");
				current_url = url_array[0];
				}
			else if (current_url.indexOf('&locale=')!=-1) {
				url_array = current_url.split("&locale=");
				current_url = url_array[0];
				}
		
			//Check if the URL string already has parameters; if yes start with "&", if no start with "?"
			if (current_url.indexOf('?')==-1) {
				next_url = current_url + "?" + "locale=" + loc + "&persist_locale=1";
				}
			else {
				next_url = current_url + "&" + "locale=" + loc + "&persist_locale=1";
				}
			window.location = next_url;
			picked_locale = '<img src="/img/flags/' + loc + '.gif" align="center">';
			changeCountryDisplay(loc);
			}
	
		function changeCountryDisplay(locale) {
			locDiv = "countryDiv_" + locale;
			document.getElementById(locDiv).style.fontWeight = "bold";
			document.getElementById(locDiv).blur();	
			if (locale != "en_US") unBold("countryDiv_en_US");
			if (locale != "en_GB") unBold("countryDiv_en_GB");
			if (locale != "en_IE") unBold("countryDiv_en_IE");
			if (locale != "ja_JP") unBold("countryDiv_ja_JP");
			if (locale != "fr_FR") unBold("countryDiv_fr_FR");
			if (locale != "de_DE") unBold("countryDiv_de_DE");
			if (locale != "it_IT") unBold("countryDiv_it_IT");
			if (locale != "es_ES") unBold("countryDiv_es_ES");
			if (locale != "nl_NL") unBold("countryDiv_nl_NL");
			if (locale != "pl_PL") unBold("countryDiv_pl_PL");
			if (locale != "pt_BR") unBold("countryDiv_pt_BR");
			}
		
		function unBold(divID) {
			if (document.getElementById(divID)) {
				document.getElementById(divID).style.fontWeight = "normal";
				}
			}
		
		function getLocale() {
			return en_US;
			}
		function closeLocalePicker() {
            var localePickerBox = document.getElementById('localePickerBox');
			if (!localePickerBox) localePickerBox = document.getElementById('localePickerBoxProfile');
			if (localePickerBox) 
			{
				if (localePickerBox.style.display != 'none')
					localePickerBox.style.display = 'none';
			}
		}
		addListener(document, 'click', function (e) 
		{
			//alert(e);
			var element = e.target || e.srcElement;
			if (element.className.indexOf('localePickerLink') == -1 && element.className.indexOf('currentFlag') == -1)
			{
				closeLocalePicker();
			}
		});
	</script>
	<div>
		<div class="flagDiv dropdownDivider">
			<a href="#" onclick="selectLocale('en_US'); return false;"><img src="/web/20070831182909im_/http://youtube.com/img/flags/en_US.gif" width="17" class="currentFlag"></a> <a id="countryDiv_en_US" href="#" onclick="selectLocale('en_US'); return false;" class="localePickerTitle">Global</a>
		</div>
		<div class="flagDiv">
			<a href="#" onclick="selectLocale('pt_BR'); return false;" class="localePickerFlagLink"><img src="/web/20070831182909im_/http://youtube.com/img/flags/pt_BR.gif" width="17" class="currentFlag"></a> <a href="#" id="countryDiv_pt_BR" onclick="selectLocale('pt_BR'); return false;" class="localePickerTitle">Brasil</a>
		</div>
		<div class="flagDiv">
			<a href="#" onclick="selectLocale('fr_FR'); return false;" class="localePickerFlagLink"><img src="/web/20070831182909im_/http://youtube.com/img/flags/fr_FR.gif" width="17" class="currentFlag"></a> <a id="countryDiv_fr_FR" href="#" onclick="selectLocale('fr_FR'); return false;" class="localePickerTitle">France</a>
		</div>
		<div class="flagDiv">
			<a href="#" onclick="selectLocale('en_IE'); return false;" class="localePickerFlagLink"><img src="/web/20070831182909im_/http://youtube.com/img/flags/en_IE.gif" width="17" class="currentFlag"></a> <a id="countryDiv_en_IE" href="#" onclick="selectLocale('en_IE'); return false;" class="localePickerTitle">Ireland</a>
		</div>
		<div class="flagDiv">
			<a href="#" onclick="selectLocale('it_IT'); return false;" class="localePickerFlagLink"><img src="/web/20070831182909im_/http://youtube.com/img/flags/it_IT.gif" width="17" class="currentFlag"></a> <a id="countryDiv_it_IT" href="#" onclick="selectLocale('it_IT'); return false;" class="localePickerTitle">Italia</a>
		</div>
		<div class="flagDiv">
			<a href="#" onclick="selectLocale('ja_JP'); return false;" class="localePickerFlagLink"><img src="/web/20070831182909im_/http://youtube.com/img/flags/ja_JP.gif" width="17" class="currentFlag"></a> <a id="countryDiv_ja_JP" href="#" onclick="selectLocale('ja_JP'); return false;" class="localePickerTitle">日本</a>
		</div>
		<div class="flagDiv">
			<a href="#" onclick="selectLocale('nl_NL'); return false;" class="localePickerFlagLink"><img src="/web/20070831182909im_/http://youtube.com/img/flags/nl_NL.gif" width="17" class="currentFlag"></a> <a id="countryDiv_nl_NL" href="#" onclick="selectLocale('nl_NL'); return false;" class="localePickerTitle">Nederland</a>
		</div>
		<div class="flagDiv">
			<a href="#" onclick="selectLocale('pl_PL'); return false;" class="localePickerFlagLink"><img src="/web/20070831182909im_/http://youtube.com/img/flags/pl_PL.gif" width="17" class="currentFlag"></a> <a href="#" id="countryDiv_pl_PL" onclick="selectLocale('pl_PL'); return false;" class="localePickerTitle">Polska</a>
		</div>
		<div class="flagDiv">
			<a href="#" onclick="selectLocale('es_ES'); return false;" class="localePickerFlagLink"><img src="/web/20070831182909im_/http://youtube.com/img/flags/es_ES.gif" width="17" class="currentFlag"></a> <a id="countryDiv_es_ES" href="#" onclick="selectLocale('es_ES'); return false;" class="localePickerTitle">España</a>
		</div>
		<div class="flagDiv">
			<a href="#" onclick="selectLocale('en_GB'); return false;" class="localePickerFlagLink"><img src="/web/20070831182909im_/http://youtube.com/img/flags/en_GB.gif" width="17" class="currentFlag"></a> <a id="countryDiv_en_GB" href="#" onclick="selectLocale('en_GB'); return false;" class="localePickerTitle">United Kingdom</a>
		</div>
	
		<div class="alignR smallText"><a href="#" onclick="closeLocalePicker(); return false;">Close</a></div>
	</div>
	</div>

		<br>
<div id="utilDiv">
	

		<b><a href="signup.php">Sign Up</a></b>
		<span class="utilDelim">|</span>
		<a href="my_account.php">My Account</a>
		<span class="utilDelim">|</span>
		<a href="#">History</a> 
		<span class="utilDelim">|</span>
		<a href="http://www.redst0ne.xyz/support/hyperion/">Help</a>

		<span class="utilDelim">|</span>                        
			<a href="/web/20070831182909/http://youtube.com/login?next=/" onclick="_hbLink('LogIn','UtilityLinks');">Log In</a>
			<span class="utilDelim">|</span>
		<span class=""><a href="#" class="localePickerLink" onclick="window.parent.toggleDisplay('localePickerBox');return false;">Site:</a><a href="#" class="localePickerLink" onclick="window.parent.toggleDisplay('localePickerBox');return false;"><img src="/web/20070831182909im_/http://youtube.com/img/flags/en_US.gif" align="absmiddle" class="currentFlag" alt="Site:"></span></a>
		<!--<span class=""><a href="#" onclick="toggleDisplay('localePickerBox');return false;">Site:</a><a href="#" onclick="toggleDisplay('localePickerBox');return false;"><img src="/img/flags/en_US.gif" align="absmiddle" class="currentFlag" alt="Site:"></a>-->
			</span>	
			<form name="logoutForm" method="post" target="_top" action="/web/20070831182909/http://youtube.com/index">
		<input type="hidden" name="action_logout" value="1">
	</form>
</div>

		
	<div id="gNavDiv">
		

<div id="upload"><img src="/web/20070831182909im_/http://youtube.com/img/pic_upload_bug_22x23.gif" width="22" height="23" align="absmiddle"> &nbsp;<a href="/web/20070831182909/http://youtube.com/my_videos_upload">Upload</a></div>
		
<div class="tab">

 <a href="/web/20070831182909/http://youtube.com/community" class="tab"><b><b><b><p class="tab_label" id="tab4">Discord</p></b></b></b></a>

</div>

<div class="tab" valign="bottom">

<a href="/web/20070831182909/http://youtube.com/members" class="tab"><b><b><b><p class="tab_label" id="tab4">Channels</p></b></b></b></a>

</div>

<div class="tab" valign="bottom">

<a href="/web/20070831182909/http://youtube.com/categories" class="tab"><b><b><b><p class="tab_label" id="tab2">Categories</p></b></b></b></a>

</div>

<div class="tab">

<a href="/web/20070831182909/http://youtube.com/browse?s=mp" class="tab"><b><b><b><p class="tab_label" id="tab1">Videos</p></b></b></b></a>

</div>



</div>
<!-- end gNavDiv -->

<div id="gNavBottom"><div id="searchDiv">	<form name="searchForm" id="searchForm" method="get" action="/web/20070831182909/http://youtube.com/results">
		<input tabindex="10000" type="text" name="search_query" maxlength="128" class="searchField" value="">
		&nbsp;
			<input type="submit" name="search" value="Search">
	</form>
</div></div>
	
	
	
	


<div id="hpMainContent"> 
		<div>
	<div id="active_sharing_div" name="active_sharing_div" style="display:block"></div>
	<script type="text/javascript">
		// <![CDATA[
		var fo = new SWFObject("active_sharing.swf", "active_sharing", "550", "115", 7, "#FFFFFF");
		fo.addVariable("t", "Videos being watched right now...");
		fo.write("active_sharing_div");
		// ]]>
	</script>
</div>

			<div class="hpContentBlock" style="margin-left:18px; border:0px #CCC solid;">
		<div class="hpBlockHeading hpBlockHeadingGray">Promoted Videos</div>
		<div>
			<div class="hpSVidEntry marB0">
				<div class="videoIconWrapperOuter">
					<div class="videoIconWrapperInner">
					<div class="vstill"><a href="/web/20070831182909/http://youtube.com/cthru?YKY-f1j3yiXrIXjQGwEwrVfcGG5ERUo5YvK0uIcS0hX0y5T2w5pVjCd8J5casPIkCgnEPyK5s_z4q3eU-IGcTZuPge2gn0egmtZylnaeMSkoxTzvASZGCNzad5MF1F5E6zgtI1OhNADBQ-JUsPtzEnLv40bJ-BgTTyaVMC7PJLWEZJJs3Q9ayJ8v5InBJiXiZF_L4nmJ1zfb18y5rmAomA==" name="&amp;lid=DV+-+BeyoncéIrreplaceable+-+beyonce&amp;lpos=hp-s0"><img src="http://web.archive.org/web/20070831182909im_/http://img.youtube.com/vi/dsQvXgCcng8/default.jpg" class="vimg120"></a></div>
					</div>
					</div>

				<div class="vtitle smallText">
					<a href="/web/20070831182909/http://youtube.com/cthru?YKY-f1j3yiXrIXjQGwEwrVfcGG5ERUo5YvK0uIcS0hX0y5T2w5pVjCd8J5casPIkCgnEPyK5s_z4q3eU-IGcTZuPge2gn0egmtZylnaeMSkoxTzvASZGCNzad5MF1F5E6zgtI1OhNADBQ-JUsPtzEnLv40bJ-BgTTyaVMC7PJLWEZJJs3Q9ayJ8v5InBJiXiZF_L4nmJ1zfb18y5rmAomA==" name="&amp;lid=DV+-+BeyoncéIrreplaceable+-+beyonce&amp;lpos=hp-s0">Beyoncé-Irreplac eable</a>
				</div>
				<div class="vfacets" style="margin-bottom: 0px;">
				<a href="/web/20070831182909/http://youtube.com/user/beyonce" class="dg">beyonce</a>
				</div>
			</div>
			<div class="hpSVidEntry marB0">
				<div class="videoIconWrapperOuter">
					<div class="videoIconWrapperInner">
					<div class="vstill"><a href="/web/20070831182909/http://youtube.com/cthru?pAjz-reQ26i4I23WnYBLEHCXP8LprxFTqMsBSw0fzPHd8H5NExdaTCGIdGiDgCwW1mJx5Y6U4gOoLx2xKqb0XOT01306eDcx1m4f3koRXYxEqedQ8mJ6rqK7eT0jJ_0vFJp9lWANuGntIPKJIYakNlJVKEEOSY0YBKGMWOA7SNaYAGqfms-XPT_g6smQnng-BfUaffJLitbnmSh-XIZqew==" name="&amp;lid=DV+-+GameTrailersCountdownTopTenFranchises+-+gametrailers&amp;lpos=hp-s1"><img src="http://web.archive.org/web/20070831182909im_/http://img.youtube.com/vi/dSeYlDeUXOY/default.jpg" class="vimg120"></a></div>
					</div>
					</div>

				<div class="vtitle smallText">
					<a href="/web/20070831182909/http://youtube.com/cthru?pAjz-reQ26i4I23WnYBLEHCXP8LprxFTqMsBSw0fzPHd8H5NExdaTCGIdGiDgCwW1mJx5Y6U4gOoLx2xKqb0XOT01306eDcx1m4f3koRXYxEqedQ8mJ6rqK7eT0jJ_0vFJp9lWANuGntIPKJIYakNlJVKEEOSY0YBKGMWOA7SNaYAGqfms-XPT_g6smQnng-BfUaffJLitbnmSh-XIZqew==" name="&amp;lid=DV+-+GameTrailersCountdownTopTenFranchises+-+gametrailers&amp;lpos=hp-s1">GameTrailers Countd...</a>
				</div>
				<div class="vfacets" style="margin-bottom: 0px;">
				<a href="/web/20070831182909/http://youtube.com/user/gametrailers" class="dg">gametrailers</a>
				</div>
			</div>
			<div class="hpSVidEntry marB0">
				<div class="videoIconWrapperOuter">
					<div class="videoIconWrapperInner">
					<div class="vstill"><a href="/web/20070831182909/http://youtube.com/cthru?oU_M7hbL7Ielpoqp10tGcO3JWHPqUuBFDqJKYbOGo_jCsG0Z8wYllwJLHKTCpG0lfkRaP8Lf4tMvzxK371aYoG4cdrx-6gHKeLltZBfDLEYiCp86QDvrxUeASnIzhXuFSCpd1YUBDfH3oijIA6LrKcd4NA0ry5fq5iDquZHInt1_Q7ea8Y2QBUpdRYrcxcWo0jrWBmhXz5mLl3D8ysKV6Q==" name="&amp;lid=DV+-+NicoleScherzingerWhateverULikeCleanWithLogosClosedCaptioned+-+universalmusicgroup&amp;lpos=hp-s2"><img src="http://web.archive.org/web/20070831182909im_/http://img.youtube.com/vi/UJPbvzFPZVY/default.jpg" class="vimg120"></a></div>
					</div>
					</div>

				<div class="vtitle smallText">
					<a href="/web/20070831182909/http://youtube.com/cthru?oU_M7hbL7Ielpoqp10tGcO3JWHPqUuBFDqJKYbOGo_jCsG0Z8wYllwJLHKTCpG0lfkRaP8Lf4tMvzxK371aYoG4cdrx-6gHKeLltZBfDLEYiCp86QDvrxUeASnIzhXuFSCpd1YUBDfH3oijIA6LrKcd4NA0ry5fq5iDquZHInt1_Q7ea8Y2QBUpdRYrcxcWo0jrWBmhXz5mLl3D8ysKV6Q==" name="&amp;lid=DV+-+NicoleScherzingerWhateverULikeCleanWithLogosClosedCaptioned+-+universalmusicgroup&amp;lpos=hp-s2">Nicole Scherzinger ...</a>
				</div>
				<div class="vfacets" style="margin-bottom: 0px;">
				<a href="/web/20070831182909/http://youtube.com/user/universalmusicgroup" class="dg">universalmusicgroup</a>
				</div>
			</div>
			<div class="hpSVidEntry marB0">
				<div class="videoIconWrapperOuter">
					<div class="videoIconWrapperInner">
					<div class="vstill"><a href="/web/20070831182909/http://youtube.com/cthru?Q5WwkNrTpEBBm0Il2mJ5e88fPYtuNHZPyZ4EKUy2Lg-v8VJjrnjsQDmbaKLQ4CKXAcZElPppIAe9uahpmzGgb9LHS7p8Q-R94AgWUR5EoX31gEYc7ENImKePi20C7L-497GTyURjaEiW4lGFttcJ_fk7ZzEE5vYSWJQrk_jcUuU4ZXCgF3hI0k9jRVTl10Q_wbisKoXkTElW7E6RsZPpeQ==" name="&amp;lid=DV+-+CanTexasTakeTheBigXII+-+CBS&amp;lpos=hp-s3"><img src="http://web.archive.org/web/20070831182909im_/http://img.youtube.com/vi/xA0iblVziT4/default.jpg" class="vimg120"></a></div>
					</div>
					</div>

				<div class="vtitle smallText">
					<a href="/web/20070831182909/http://youtube.com/cthru?Q5WwkNrTpEBBm0Il2mJ5e88fPYtuNHZPyZ4EKUy2Lg-v8VJjrnjsQDmbaKLQ4CKXAcZElPppIAe9uahpmzGgb9LHS7p8Q-R94AgWUR5EoX31gEYc7ENImKePi20C7L-497GTyURjaEiW4lGFttcJ_fk7ZzEE5vYSWJQrk_jcUuU4ZXCgF3hI0k9jRVTl10Q_wbisKoXkTElW7E6RsZPpeQ==" name="&amp;lid=DV+-+CanTexasTakeTheBigXII+-+CBS&amp;lpos=hp-s3">Can Texas Take The ...</a>
				</div>
				<div class="vfacets" style="margin-bottom: 0px;">
				<a href="/web/20070831182909/http://youtube.com/user/CBS" class="dg">CBS</a>
				</div>
			</div>
		<div class="clearL" style="height: 1px;"></div>
		</div>
	</div>


	<div id="hpFeaturedHeading">
			<div id="hpFeaturedMoreTop"><a id="hpVideoListMoreLink" href="/web/20070831182909/http://youtube.com/browse?s=rf">See More Featured Videos</a></div>
		<h1 id="hpVideoListHead">Featured Videos</h1>
	</div>

	<div id="hpFeaturedAndSmallTabs">
		
			<div id="hpEditorContainer">&nbsp;</div>
		<ul id="hpSmallTabsContainer">
			<li id="hpTopFavoritesTab"><a href="#" id="hpTopFavoritesLink" name="&amp;lid=hpTopFavoritesTab&amp;lpos=hpTabs" onclick="swapVideoList(this); return false;">Top Favorites</a></li> 
			<li id="hpMostDiscussedTab"><a href="#" id="hpMostDiscussedLink" name="&amp;lid=hpMostDiscussedTab&amp;lpos=hpTabs" onclick="swapVideoList(this); return false;">Most Discussed</a></li> 
			<li id="hpMostViewedTab"><a href="#" id="hpMostViewedLink" name="&amp;lid=hpMostViewedTab&amp;lpos=hpTabs" onclick="swapVideoList(this); return false;">Most Viewed</a></li> 
			<li id="hpFeaturedTab" class="hilite"><a href="#" id="hpFeaturedLink" name="&amp;lid=hpFeaturedTab&amp;lpos=hpTabs" onclick="swapVideoList(this); return false;">Featured</a></li> 
		</ul>

	</div>

	<div id="hpVideoList">
		<div id="hpFeatured">

				<div class="vEntry">
	<table cellspacing="0" cellpadding="0" border="0" width="100%">
		<tr>
			<td width="130" valign="top" rowspan="2">
				<div class="QLContainer">
					<div class="videoIconWrapperOuter">
					<div class="videoIconWrapperInner"><a href="/web/20070831182909/http://youtube.com/watch?v=Fj08LvJpKWk" onclick="_hbLink('Punchy2','VidHorz');"><img src="http://web.archive.org/web/20070831182909im_/http://img.youtube.com/vi/Fj08LvJpKWk/default.jpg" class="vimg120"/></a>
						<div class="QLIcon QLIconSearch"><a href="#" onclick="clicked_add_icon('Fj08LvJpKWk', 0);return false;" title=""><img id="add_button_Fj08LvJpKWk" border="0" onmouseover="mouse_over_add_icon('Fj08LvJpKWk');return false;" onmouseout="mouse_out_add_icon('Fj08LvJpKWk');return false;" src="" alt=""></a></div>

					</div>
					</div>
				</div>
			</td>
			<td valign="top" width="256">
				<div class="vtitle">
				<a class="vtitlelink" href="/web/20070831182909/http://youtube.com/watch?v=Fj08LvJpKWk" onclick="_hbLink('Punchy2','VidHorz');">Punchy 2</a><br/> 
				</div>
				<div class="vdesc">
									
		
	<span id="BeginvidDescFj08LvJpKWk">
	Punchy returns in this EPIC SEQUEL to the original viral video sensation by Wicked Awesome Films... AH-DOO-BA-DEE-2!
	</span>
	



				</div>
			</td>
			<td valign="top" width="146" class="vInfo">
				<div>
					<span class="smgrayText">From:</span> <a href="/web/20070831182909/http://youtube.com/user/wickedawesomefilms">wickedawesomefilms</a>
				</div>
				<div>
					<span class="smgrayText">Views:</span> 83,730
				</div>
				<div style="white-space: nowrap">
							
	

	
	<img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_half_11x11.gif" align="top">
	


				</div>
			</td>
		</tr>
		<tr>
			<td>
				<span class="smgrayText padB10">Time:</span> <span class="runtime">06:28</span>
			</td>
			<td class="vMore">
				<span class="grayText">More in</span> <a href="/web/20070831182909/http://youtube.com/categories_portal?c=23" onclick="_hbLink('','');">Comedy</a>
			</td>
		</tr>
	</table>
	</div> <!-- end vEntry -->


				<div class="vEntry">
	<table cellspacing="0" cellpadding="0" border="0" width="100%">
		<tr>
			<td width="130" valign="top" rowspan="2">
				<div class="QLContainer">
					<div class="videoIconWrapperOuter">
					<div class="videoIconWrapperInner"><a href="/web/20070831182909/http://youtube.com/watch?v=bxabHg--WBE" onclick="_hbLink('JimiHendrixonFireGoodbyeArt04','VidHorz');"><img src="http://web.archive.org/web/20070831182909im_/http://img.youtube.com/vi/bxabHg--WBE/default.jpg" class="vimg120"/></a>
						<div class="QLIcon QLIconSearch"><a href="#" onclick="clicked_add_icon('bxabHg--WBE', 0);return false;" title=""><img id="add_button_bxabHg--WBE" border="0" onmouseover="mouse_over_add_icon('bxabHg--WBE');return false;" onmouseout="mouse_out_add_icon('bxabHg--WBE');return false;" src="" alt=""></a></div>

					</div>
					</div>
				</div>
			</td>
			<td valign="top" width="256">
				<div class="vtitle">
				<a class="vtitlelink" href="/web/20070831182909/http://youtube.com/watch?v=bxabHg--WBE" onclick="_hbLink('JimiHendrixonFireGoodbyeArt04','VidHorz');">Jimi Hendrix on Fire - Goodbye A...</a><br/> 
				</div>
				<div class="vdesc">
									
		
	<span id="BeginvidDescbxabHgWBE">
	This image is made of roughly 7,000 matches.  I colored some black and some white (with help). 

This is part of a series of pie
	</span>
	
			<span id="RemainvidDescbxabHgWBE" style="display: none">This image is made of roughly 7,000 matches.  I colored some black and some white (with help). 

This is part of a series of pieces that I am titling "goodbye art" because there is nothing left for me to keep at the end.  I make a new piece each week and have a theme, the theme for the month is "Fire" so each piece will involve fire in some way.

Check out my art at 
http://www.philinthecircle.com

Music is by Ben Abrahamson
www.myspace.com/abrahamsonguit ar</span>
			<span id="MorevidDescbxabHgWBE" class="smallText">(<a href="#" class="eLink" onclick="showInline('RemainvidDescbxabHgWBE'); hideInline('MorevidDescbxabHgWBE'); hideInline('BeginvidDescbxabHgWBE'); showInline('LessvidDescbxabHgWBE'); return false;">more</a>)</span>
			<span id="LessvidDescbxabHgWBE" style="display: none" class="smallText">(<a href="#" class="eLink" onclick="hideInline('RemainvidDescbxabHgWBE'); hideInline('LessvidDescbxabHgWBE'); showInline('BeginvidDescbxabHgWBE'); showInline('MorevidDescbxabHgWBE'); return false;">less</a>)</span>



				</div>
			</td>
			<td valign="top" width="146" class="vInfo">
				<div>
					<span class="smgrayText">From:</span> <a href="/web/20070831182909/http://youtube.com/user/Philinthecircle">Philinthecircle</a>
				</div>
				<div>
					<span class="smgrayText">Views:</span> 148,752
				</div>
				<div style="white-space: nowrap">
							
	

	
	<img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_half_11x11.gif" align="top">
	


				</div>
			</td>
		</tr>
		<tr>
			<td>
				<span class="smgrayText padB10">Time:</span> <span class="runtime">02:27</span>
			</td>
			<td class="vMore">
				<span class="grayText">More in</span> <a href="/web/20070831182909/http://youtube.com/categories_portal?c=22" onclick="_hbLink('','');">People &amp; Blogs</a>
			</td>
		</tr>
	</table>
	</div> <!-- end vEntry -->


				<div class="vEntry">
	<table cellspacing="0" cellpadding="0" border="0" width="100%">
		<tr>
			<td width="130" valign="top" rowspan="2">
				<div class="QLContainer">
					<div class="videoIconWrapperOuter">
					<div class="videoIconWrapperInner"><a href="/web/20070831182909/http://youtube.com/watch?v=JHUuqsSCn5g" onclick="_hbLink('HarmonicaBeatboxFinalCut','VidHorz');"><img src="http://web.archive.org/web/20070831182909im_/http://img.youtube.com/vi/JHUuqsSCn5g/default.jpg" class="vimg120"/></a>
						<div class="QLIcon QLIconSearch"><a href="#" onclick="clicked_add_icon('JHUuqsSCn5g', 0);return false;" title=""><img id="add_button_JHUuqsSCn5g" border="0" onmouseover="mouse_over_add_icon('JHUuqsSCn5g');return false;" onmouseout="mouse_out_add_icon('JHUuqsSCn5g');return false;" src="" alt=""></a></div>

					</div>
					</div>
				</div>
			</td>
			<td valign="top" width="256">
				<div class="vtitle">
				<a class="vtitlelink" href="/web/20070831182909/http://youtube.com/watch?v=JHUuqsSCn5g" onclick="_hbLink('HarmonicaBeatboxFinalCut','VidHorz');">Harmonica + Beatbox: Final Cut</a><br/> 
				</div>
				<div class="vdesc">
									
		
	<span id="BeginvidDescJHUuqsSCn5g">
	Yuri Lane performs beatbox harmonica in this short video directed by Marty Nowak. (The previous version had some distortion from Y
	</span>
	
			<span id="RemainvidDescJHUuqsSCn5g" style="display: none">Yuri Lane performs beatbox harmonica in this short video directed by Marty Nowak. (The previous version had some distortion from YouTube's compression.)</span>
			<span id="MorevidDescJHUuqsSCn5g" class="smallText">(<a href="#" class="eLink" onclick="showInline('RemainvidDescJHUuqsSCn5g'); hideInline('MorevidDescJHUuqsSCn5g'); hideInline('BeginvidDescJHUuqsSCn5g'); showInline('LessvidDescJHUuqsSCn5g'); return false;">more</a>)</span>
			<span id="LessvidDescJHUuqsSCn5g" style="display: none" class="smallText">(<a href="#" class="eLink" onclick="hideInline('RemainvidDescJHUuqsSCn5g'); hideInline('LessvidDescJHUuqsSCn5g'); showInline('BeginvidDescJHUuqsSCn5g'); showInline('MorevidDescJHUuqsSCn5g'); return false;">less</a>)</span>



				</div>
			</td>
			<td valign="top" width="146" class="vInfo">
				<div>
					<span class="smgrayText">From:</span> <a href="/web/20070831182909/http://youtube.com/user/yurilane">yurilane</a>
				</div>
				<div>
					<span class="smgrayText">Views:</span> 395,106
				</div>
				<div style="white-space: nowrap">
							
	

	
	<img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_half_11x11.gif" align="top">
	


				</div>
			</td>
		</tr>
		<tr>
			<td>
				<span class="smgrayText padB10">Time:</span> <span class="runtime">01:13</span>
			</td>
			<td class="vMore">
				<span class="grayText">More in</span> <a href="/web/20070831182909/http://youtube.com/categories_portal?c=10" onclick="_hbLink('','');">Music</a>
			</td>
		</tr>
	</table>
	</div> <!-- end vEntry -->


				<div class="vEntry">
	<table cellspacing="0" cellpadding="0" border="0" width="100%">
		<tr>
			<td width="130" valign="top" rowspan="2">
				<div class="QLContainer">
					<div class="videoIconWrapperOuter">
					<div class="videoIconWrapperInner"><a href="/web/20070831182909/http://youtube.com/watch?v=weKJjknf748" onclick="_hbLink('MiloshTheCityWalterRobot','VidHorz');"><img src="http://web.archive.org/web/20070831182909im_/http://img.youtube.com/vi/weKJjknf748/default.jpg" class="vimg120"/></a>
						<div class="QLIcon QLIconSearch"><a href="#" onclick="clicked_add_icon('weKJjknf748', 0);return false;" title=""><img id="add_button_weKJjknf748" border="0" onmouseover="mouse_over_add_icon('weKJjknf748');return false;" onmouseout="mouse_out_add_icon('weKJjknf748');return false;" src="" alt=""></a></div>

					</div>
					</div>
				</div>
			</td>
			<td valign="top" width="256">
				<div class="vtitle">
				<a class="vtitlelink" href="/web/20070831182909/http://youtube.com/watch?v=weKJjknf748" onclick="_hbLink('MiloshTheCityWalterRobot','VidHorz');">Milosh- The City (Walter Robot)</a><br/> 
				</div>
				<div class="vdesc">
									
		
	<span id="BeginvidDescweKJjknf748">
	When his only friend shuts off, Walter Robot is forced to trek into the unknown to find the true meaning of life on his lonely pla
	</span>
	
			<span id="RemainvidDescweKJjknf748" style="display: none">When his only friend shuts off, Walter Robot is forced to trek into the unknown to find the true meaning of life on his lonely planet. 

Music: Milosh- The City
From the album Meme (www.plugresearch.com)

Directed by Walter Robot 
http://www.walterrobot.com/</span>
			<span id="MorevidDescweKJjknf748" class="smallText">(<a href="#" class="eLink" onclick="showInline('RemainvidDescweKJjknf748'); hideInline('MorevidDescweKJjknf748'); hideInline('BeginvidDescweKJjknf748'); showInline('LessvidDescweKJjknf748'); return false;">more</a>)</span>
			<span id="LessvidDescweKJjknf748" style="display: none" class="smallText">(<a href="#" class="eLink" onclick="hideInline('RemainvidDescweKJjknf748'); hideInline('LessvidDescweKJjknf748'); showInline('BeginvidDescweKJjknf748'); showInline('MorevidDescweKJjknf748'); return false;">less</a>)</span>



				</div>
			</td>
			<td valign="top" width="146" class="vInfo">
				<div>
					<span class="smgrayText">From:</span> <a href="/web/20070831182909/http://youtube.com/user/walterrobot">walterrobot</a>
				</div>
				<div>
					<span class="smgrayText">Views:</span> 78,508
				</div>
				<div style="white-space: nowrap">
							
	

	
	<img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_half_11x11.gif" align="top">
	


				</div>
			</td>
		</tr>
		<tr>
			<td>
				<span class="smgrayText padB10">Time:</span> <span class="runtime">04:04</span>
			</td>
			<td class="vMore">
				<span class="grayText">More in</span> <a href="/web/20070831182909/http://youtube.com/categories_portal?c=1" onclick="_hbLink('','');">Film &amp; Animation</a>
			</td>
		</tr>
	</table>
	</div> <!-- end vEntry -->


				<div class="vEntry">
	<table cellspacing="0" cellpadding="0" border="0" width="100%">
		<tr>
			<td width="130" valign="top" rowspan="2">
				<div class="QLContainer">
					<div class="videoIconWrapperOuter">
					<div class="videoIconWrapperInner"><a href="/web/20070831182909/http://youtube.com/watch?v=lSHCxNmOwfY" onclick="_hbLink('MaryWinRiversideOdetoBlipBlipversion','VidHorz');"><img src="http://web.archive.org/web/20070831182909im_/http://img.youtube.com/vi/lSHCxNmOwfY/default.jpg" class="vimg120"/></a>
						<div class="QLIcon QLIconSearch"><a href="#" onclick="clicked_add_icon('lSHCxNmOwfY', 0);return false;" title=""><img id="add_button_lSHCxNmOwfY" border="0" onmouseover="mouse_over_add_icon('lSHCxNmOwfY');return false;" onmouseout="mouse_out_add_icon('lSHCxNmOwfY');return false;" src="" alt=""></a></div>

					</div>
					</div>
				</div>
			</td>
			<td valign="top" width="256">
				<div class="vtitle">
				<a class="vtitlelink" href="/web/20070831182909/http://youtube.com/watch?v=lSHCxNmOwfY" onclick="_hbLink('MaryWinRiversideOdetoBlipBlipversion','VidHorz');">Mary Win - Riverside (Ode to Bli...</a><br/> 
				</div>
				<div class="vdesc">
									
		
	<span id="BeginvidDesclSHCxNmOwfY">
	Visit - http://www.marywinmusic.com
For more of my music click on my username.

Thanks so much to all my subscribers for helpin
	</span>
	
			<span id="RemainvidDesclSHCxNmOwfY" style="display: none">Visit - http://www.marywinmusic.com
For more of my music click on my username.

Thanks so much to all my subscribers for helping me get featured : )

______________________________ ____

★Update★ Blip Blip was a "foster" kitten with my local Humane Society. After returning him, he was adopted the very next day =^-^=

★ Also ★ there seems to be some confusion about why Blip Blip was returned to the Humane Society. I am a foster parent who takes in kittens who are too young to adopt out and provides a safe &amp; loving environment until they reach an adoptable age. Blip Blip was never in any danger of being destroyed. Once a foster kitten is returned, the Humane Society makes potential adopters fill out a questionnaire to ensure that they are sincere and capable. Also, the adopter must pay an adoption fee of $100+ to the Humane Society. Fostering is charitable and I receive no pay. If I chose to keep my fosters I would have too many cats and since most of these foster kittens go to homes where they are the only cat, they can receive the attention they deserve. I already have three cats and he would have to share the love. Blip Blip deserves to be #1. Hope this helps people better understand the foster program.
______________________________ ____ 

I was practicing a song when my foster kitty, Blip Blip, made himself at home. So, out came the camera, song ready or not (not, I know there are some  picking and timing glitches but hey, opportunity came a knockin'. I wasn't even planning on releasing this song. I was just practicing when this little guy made me rush for the camera). 

This is not so much a music video but an ode to Blip Blip and a perfect way to put together all his film clips. I raised him from just 3 weeks old to about 4 months old. He's a dear and it was very hard to return him to the Humane Society(I'm part of their foster program). But, I knew he'd make a great companion for some lucky person and I already have plenty of cats. He's a little thinker and I miss him.
______________________________ ____

"Riverside"
words &amp; music by Mary Win
copyright 2007

You'll always be here in my heart  

I lie still
My heart chills
Soft breeze flies
Loving riverside

I'll always keep you in my heart

Smokey wine
We've lost time
Mountains near
I'll always hold you dear

I'll always keep you in my heart

Your blue eyes 
Smiling into mine
Your warm touch 
Can never be too much

I'll always keep you in my heart

Sun will shine 
As our times pass by
Hands held laced
I'll always see your face

I'll always keep you in my heart


______________________________ ____

I started posting videos so I can share my music with people all over the world.

As for me, I always seem to be watching funny kittens &amp; puppies or any other super cute pet videos. Yes, I admit to being a cat person. Dogs are cool but cats curl up on your keyboard when you're working and give you an excuse to take lunch. I enjoy Family Guy, love Robot Chicken, Inuyasha, Naruto (most anime), American Idol and Planet Earth (in HD). The Office is a great comedy but very embarrassing (secret crush on Dwight).
 
And now a little rant... I've noticed something about females in my generation. I live by a skate-park and everytime I pass-by "busty teen babes" just sit idly on their hands, acting sexy, as guys perform skateboard tricks and stunts (not idle). The girls' dress code is the "all empowering" "look at my breasts" camisoles or the popular "I just got boobs" tank top, paired with hot ultra low rider "look at my pubic bone" jeans, thong or g-string. Being half nude sex objects for boys to show off to one another is a dead-end road.

Anyway, hope I didn't bore you but I'm a yapper.
~Mary</span>
			<span id="MorevidDesclSHCxNmOwfY" class="smallText">(<a href="#" class="eLink" onclick="showInline('RemainvidDesclSHCxNmOwfY'); hideInline('MorevidDesclSHCxNmOwfY'); hideInline('BeginvidDesclSHCxNmOwfY'); showInline('LessvidDesclSHCxNmOwfY'); return false;">more</a>)</span>
			<span id="LessvidDesclSHCxNmOwfY" style="display: none" class="smallText">(<a href="#" class="eLink" onclick="hideInline('RemainvidDesclSHCxNmOwfY'); hideInline('LessvidDesclSHCxNmOwfY'); showInline('BeginvidDesclSHCxNmOwfY'); showInline('MorevidDesclSHCxNmOwfY'); return false;">less</a>)</span>



				</div>
			</td>
			<td valign="top" width="146" class="vInfo">
				<div>
					<span class="smgrayText">From:</span> <a href="/web/20070831182909/http://youtube.com/user/marywinmusic">marywinmusic</a>
				</div>
				<div>
					<span class="smgrayText">Views:</span> 194,661
				</div>
				<div style="white-space: nowrap">
							
	

	
	<img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_half_11x11.gif" align="top">
	


				</div>
			</td>
		</tr>
		<tr>
			<td>
				<span class="smgrayText padB10">Time:</span> <span class="runtime">04:12</span>
			</td>
			<td class="vMore">
				<span class="grayText">More in</span> <a href="/web/20070831182909/http://youtube.com/categories_portal?c=15" onclick="_hbLink('','');">Pets &amp; Animals</a>
			</td>
		</tr>
	</table>
	</div> <!-- end vEntry -->


				<div class="vEntry">
	<table cellspacing="0" cellpadding="0" border="0" width="100%">
		<tr>
			<td width="130" valign="top" rowspan="2">
				<div class="QLContainer">
					<div class="videoIconWrapperOuter">
					<div class="videoIconWrapperInner"><a href="/web/20070831182909/http://youtube.com/watch?v=Lnhr7Ex_qKs" onclick="_hbLink('ElodieTommyWallachWebcast15','VidHorz');"><img src="http://web.archive.org/web/20070831182909im_/http://img.youtube.com/vi/Lnhr7Ex_qKs/default.jpg" class="vimg120"/></a>
						<div class="QLIcon QLIconSearch"><a href="#" onclick="clicked_add_icon('Lnhr7Ex_qKs', 0);return false;" title=""><img id="add_button_Lnhr7Ex_qKs" border="0" onmouseover="mouse_over_add_icon('Lnhr7Ex_qKs');return false;" onmouseout="mouse_out_add_icon('Lnhr7Ex_qKs');return false;" src="" alt=""></a></div>

					</div>
					</div>
				</div>
			</td>
			<td valign="top" width="256">
				<div class="vtitle">
				<a class="vtitlelink" href="/web/20070831182909/http://youtube.com/watch?v=Lnhr7Ex_qKs" onclick="_hbLink('ElodieTommyWallachWebcast15','VidHorz');">Elodie - Tommy Wallach - Webcast...</a><br/> 
				</div>
				<div class="vdesc">
									
		
	<span id="BeginvidDescLnhr7Ex_qKs">
	A song in English and French, with full translation. No story this time, because this took about 25 hours altogether. Phew. Please
	</span>
	
			<span id="RemainvidDescLnhr7Ex_qKs" style="display: none">A song in English and French, with full translation. No story this time, because this took about 25 hours altogether. Phew. Please, please, subscribe! Hey, buy my CD http://www.cdbaby.com/tommywal lach or friend me at http://www.myspace.com/tommywa llach . Woo!</span>
			<span id="MorevidDescLnhr7Ex_qKs" class="smallText">(<a href="#" class="eLink" onclick="showInline('RemainvidDescLnhr7Ex_qKs'); hideInline('MorevidDescLnhr7Ex_qKs'); hideInline('BeginvidDescLnhr7Ex_qKs'); showInline('LessvidDescLnhr7Ex_qKs'); return false;">more</a>)</span>
			<span id="LessvidDescLnhr7Ex_qKs" style="display: none" class="smallText">(<a href="#" class="eLink" onclick="hideInline('RemainvidDescLnhr7Ex_qKs'); hideInline('LessvidDescLnhr7Ex_qKs'); showInline('BeginvidDescLnhr7Ex_qKs'); showInline('MorevidDescLnhr7Ex_qKs'); return false;">less</a>)</span>



				</div>
			</td>
			<td valign="top" width="146" class="vInfo">
				<div>
					<span class="smgrayText">From:</span> <a href="/web/20070831182909/http://youtube.com/user/snovision">snovision</a>
				</div>
				<div>
					<span class="smgrayText">Views:</span> 70,970
				</div>
				<div style="white-space: nowrap">
							
	

	
	<img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_half_11x11.gif" align="top">
	


				</div>
			</td>
		</tr>
		<tr>
			<td>
				<span class="smgrayText padB10">Time:</span> <span class="runtime">04:25</span>
			</td>
			<td class="vMore">
				<span class="grayText">More in</span> <a href="/web/20070831182909/http://youtube.com/categories_portal?c=10" onclick="_hbLink('','');">Music</a>
			</td>
		</tr>
	</table>
	</div> <!-- end vEntry -->


				<div class="vEntry">
	<table cellspacing="0" cellpadding="0" border="0" width="100%">
		<tr>
			<td width="130" valign="top" rowspan="2">
				<div class="QLContainer">
					<div class="videoIconWrapperOuter">
					<div class="videoIconWrapperInner"><a href="/web/20070831182909/http://youtube.com/watch?v=mgZsMUn44ds" onclick="_hbLink('AliveinBaghdadArabJournalistDiscussesIraq','VidHorz');"><img src="http://web.archive.org/web/20070831182909im_/http://img.youtube.com/vi/mgZsMUn44ds/default.jpg" class="vimg120"/></a>
						<div class="QLIcon QLIconSearch"><a href="#" onclick="clicked_add_icon('mgZsMUn44ds', 0);return false;" title=""><img id="add_button_mgZsMUn44ds" border="0" onmouseover="mouse_over_add_icon('mgZsMUn44ds');return false;" onmouseout="mouse_out_add_icon('mgZsMUn44ds');return false;" src="" alt=""></a></div>

					</div>
					</div>
				</div>
			</td>
			<td valign="top" width="256">
				<div class="vtitle">
				<a class="vtitlelink" href="/web/20070831182909/http://youtube.com/watch?v=mgZsMUn44ds" onclick="_hbLink('AliveinBaghdadArabJournalistDiscussesIraq','VidHorz');">Alive in Baghdad - Arab Journali...</a><br/> 
				</div>
				<div class="vdesc">
									
		
	<span id="BeginvidDescmgZsMUn44ds">
	visit http://www.aliveinbaghdad.org each monday for new videos about life in Iraq! Make a donation to support our work at http://w
	</span>
	
			<span id="RemainvidDescmgZsMUn44ds" style="display: none">visit http://www.aliveinbaghdad.org each monday for new videos about life in Iraq! Make a donation to support our work at http://www.aliveinbaghdad.org/ donate/

Shadi Al-Kasim is one of many Arab journalists who find the US presence in Iraq problematic, but are increasingly critical of the violence in Iraq and question the actions of the Iraqi people as well.

Shadi tries to explain some background on Iraq and detail some of the complexities on the ground.

As the balance of power shifts in Washington, perhaps these words will spark some discussion and introspection on the proper next steps in Iraq.</span>
			<span id="MorevidDescmgZsMUn44ds" class="smallText">(<a href="#" class="eLink" onclick="showInline('RemainvidDescmgZsMUn44ds'); hideInline('MorevidDescmgZsMUn44ds'); hideInline('BeginvidDescmgZsMUn44ds'); showInline('LessvidDescmgZsMUn44ds'); return false;">more</a>)</span>
			<span id="LessvidDescmgZsMUn44ds" style="display: none" class="smallText">(<a href="#" class="eLink" onclick="hideInline('RemainvidDescmgZsMUn44ds'); hideInline('LessvidDescmgZsMUn44ds'); showInline('BeginvidDescmgZsMUn44ds'); showInline('MorevidDescmgZsMUn44ds'); return false;">less</a>)</span>



				</div>
			</td>
			<td valign="top" width="146" class="vInfo">
				<div>
					<span class="smgrayText">From:</span> <a href="/web/20070831182909/http://youtube.com/user/AliveInBaghdad">AliveInBaghdad</a>
				</div>
				<div>
					<span class="smgrayText">Views:</span> 132,034
				</div>
				<div style="white-space: nowrap">
							
	

	
	<img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_half_11x11.gif" align="top">
	


				</div>
			</td>
		</tr>
		<tr>
			<td>
				<span class="smgrayText padB10">Time:</span> <span class="runtime">03:23</span>
			</td>
			<td class="vMore">
				<span class="grayText">More in</span> <a href="/web/20070831182909/http://youtube.com/categories_portal?c=25" onclick="_hbLink('','');">News &amp; Politics</a>
			</td>
		</tr>
	</table>
	</div> <!-- end vEntry -->


				<div class="vEntry">
	<table cellspacing="0" cellpadding="0" border="0" width="100%">
		<tr>
			<td width="130" valign="top" rowspan="2">
				<div class="QLContainer">
					<div class="videoIconWrapperOuter">
					<div class="videoIconWrapperInner"><a href="/web/20070831182909/http://youtube.com/watch?v=hamN7CMZw9w" onclick="_hbLink('Satacracy88Episode10part1','VidHorz');"><img src="http://web.archive.org/web/20070831182909im_/http://img.youtube.com/vi/hamN7CMZw9w/default.jpg" class="vimg120"/></a>
						<div class="QLIcon QLIconSearch"><a href="#" onclick="clicked_add_icon('hamN7CMZw9w', 0);return false;" title=""><img id="add_button_hamN7CMZw9w" border="0" onmouseover="mouse_over_add_icon('hamN7CMZw9w');return false;" onmouseout="mouse_out_add_icon('hamN7CMZw9w');return false;" src="" alt=""></a></div>

					</div>
					</div>
				</div>
			</td>
			<td valign="top" width="256">
				<div class="vtitle">
				<a class="vtitlelink" href="/web/20070831182909/http://youtube.com/watch?v=hamN7CMZw9w" onclick="_hbLink('Satacracy88Episode10part1','VidHorz');">Satacracy 88 Episode 10 part 1</a><br/> 
				</div>
				<div class="vdesc">
									
		
	<span id="BeginvidDeschamN7CMZw9w">
	Satacracy 88, winner of the 2007 Emmy Award for Outstanding Broadband Drama, hits its 10th episode!  Watch it now for some new twi
	</span>
	
			<span id="RemainvidDeschamN7CMZw9w" style="display: none">Satacracy 88, winner of the 2007 Emmy Award for Outstanding Broadband Drama, hits its 10th episode!  Watch it now for some new twist and turns!  Starring Diahnna Nicole Baxter, Cassie Pappas, and Christie D'Amore.  Directed by Brad Winderbaum and Produced by Andy Dugan</span>
			<span id="MorevidDeschamN7CMZw9w" class="smallText">(<a href="#" class="eLink" onclick="showInline('RemainvidDeschamN7CMZw9w'); hideInline('MorevidDeschamN7CMZw9w'); hideInline('BeginvidDeschamN7CMZw9w'); showInline('LessvidDeschamN7CMZw9w'); return false;">more</a>)</span>
			<span id="LessvidDeschamN7CMZw9w" style="display: none" class="smallText">(<a href="#" class="eLink" onclick="hideInline('RemainvidDeschamN7CMZw9w'); hideInline('LessvidDeschamN7CMZw9w'); showInline('BeginvidDeschamN7CMZw9w'); showInline('MorevidDeschamN7CMZw9w'); return false;">less</a>)</span>



				</div>
			</td>
			<td valign="top" width="146" class="vInfo">
				<div>
					<span class="smgrayText">From:</span> <a href="/web/20070831182909/http://youtube.com/user/itsallinyourhands">itsallinyourhands</a>
				</div>
				<div>
					<span class="smgrayText">Views:</span> 277,651
				</div>
				<div style="white-space: nowrap">
							
	

	
	<img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_half_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_empty_11x11.gif" align="top">
	


				</div>
			</td>
		</tr>
		<tr>
			<td>
				<span class="smgrayText padB10">Time:</span> <span class="runtime">01:53</span>
			</td>
			<td class="vMore">
				<span class="grayText">More in</span> <a href="/web/20070831182909/http://youtube.com/categories_portal?c=24" onclick="_hbLink('','');">Entertainment</a>
			</td>
		</tr>
	</table>
	</div> <!-- end vEntry -->


				<div class="vEntry">
	<table cellspacing="0" cellpadding="0" border="0" width="100%">
		<tr>
			<td width="130" valign="top" rowspan="2">
				<div class="QLContainer">
					<div class="videoIconWrapperOuter">
					<div class="videoIconWrapperInner"><a href="/web/20070831182909/http://youtube.com/watch?v=nerafD96cPw" onclick="_hbLink('CamouflageBackMassage','VidHorz');"><img src="http://web.archive.org/web/20070831182909im_/http://img.youtube.com/vi/nerafD96cPw/default.jpg" class="vimg120"/></a>
						<div class="QLIcon QLIconSearch"><a href="#" onclick="clicked_add_icon('nerafD96cPw', 0);return false;" title=""><img id="add_button_nerafD96cPw" border="0" onmouseover="mouse_over_add_icon('nerafD96cPw');return false;" onmouseout="mouse_out_add_icon('nerafD96cPw');return false;" src="" alt=""></a></div>

					</div>
					</div>
				</div>
			</td>
			<td valign="top" width="256">
				<div class="vtitle">
				<a class="vtitlelink" href="/web/20070831182909/http://youtube.com/watch?v=nerafD96cPw" onclick="_hbLink('CamouflageBackMassage','VidHorz');">Camouflage Back Massage</a><br/> 
				</div>
				<div class="vdesc">
									
		
	<span id="BeginvidDescnerafD96cPw">
	Rap video about giving extremely hard back massages while looking totally fly in camo.
http://www.myspace.com/kingsol omonandgiggl
	</span>
	
			<span id="RemainvidDescnerafD96cPw" style="display: none">Rap video about giving extremely hard back massages while looking totally fly in camo.
http://www.myspace.com/kingsol omonandgiggles</span>
			<span id="MorevidDescnerafD96cPw" class="smallText">(<a href="#" class="eLink" onclick="showInline('RemainvidDescnerafD96cPw'); hideInline('MorevidDescnerafD96cPw'); hideInline('BeginvidDescnerafD96cPw'); showInline('LessvidDescnerafD96cPw'); return false;">more</a>)</span>
			<span id="LessvidDescnerafD96cPw" style="display: none" class="smallText">(<a href="#" class="eLink" onclick="hideInline('RemainvidDescnerafD96cPw'); hideInline('LessvidDescnerafD96cPw'); showInline('BeginvidDescnerafD96cPw'); showInline('MorevidDescnerafD96cPw'); return false;">less</a>)</span>



				</div>
			</td>
			<td valign="top" width="146" class="vInfo">
				<div>
					<span class="smgrayText">From:</span> <a href="/web/20070831182909/http://youtube.com/user/kingandgiggles">kingandgiggles</a>
				</div>
				<div>
					<span class="smgrayText">Views:</span> 277,079
				</div>
				<div style="white-space: nowrap">
							
	

	
	<img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_half_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_empty_11x11.gif" align="top">
	


				</div>
			</td>
		</tr>
		<tr>
			<td>
				<span class="smgrayText padB10">Time:</span> <span class="runtime">03:52</span>
			</td>
			<td class="vMore">
				<span class="grayText">More in</span> <a href="/web/20070831182909/http://youtube.com/categories_portal?c=10" onclick="_hbLink('','');">Music</a>
			</td>
		</tr>
	</table>
	</div> <!-- end vEntry -->


				<div class="vEntry">
	<table cellspacing="0" cellpadding="0" border="0" width="100%">
		<tr>
			<td width="130" valign="top" rowspan="2">
				<div class="QLContainer">
					<div class="videoIconWrapperOuter">
					<div class="videoIconWrapperInner"><a href="/web/20070831182909/http://youtube.com/watch?v=l-vf1voQ9Bw" onclick="_hbLink('THEYOUTUBEUSERRUNCHARITYGROUP','VidHorz');"><img src="http://web.archive.org/web/20070831182909im_/http://img.youtube.com/vi/l-vf1voQ9Bw/default.jpg" class="vimg120"/></a>
						<div class="QLIcon QLIconSearch"><a href="#" onclick="clicked_add_icon('l-vf1voQ9Bw', 0);return false;" title=""><img id="add_button_l-vf1voQ9Bw" border="0" onmouseover="mouse_over_add_icon('l-vf1voQ9Bw');return false;" onmouseout="mouse_out_add_icon('l-vf1voQ9Bw');return false;" src="" alt=""></a></div>

					</div>
					</div>
				</div>
			</td>
			<td valign="top" width="256">
				<div class="vtitle">
				<a class="vtitlelink" href="/web/20070831182909/http://youtube.com/watch?v=l-vf1voQ9Bw" onclick="_hbLink('THEYOUTUBEUSERRUNCHARITYGROUP','VidHorz');">THE YOUTUBE USER-RUN CHARITY GROUP</a><br/> 
				</div>
				<div class="vdesc">
									
		
	<span id="BeginvidDesclvf1voQ9Bw">
	Thanks for the Feature, YouTube! This is the video I made on Day Three of the "Obscenity of War Project." The charity is legit. Th
	</span>
	
			<span id="RemainvidDesclvf1voQ9Bw" style="display: none">Thanks for the Feature, YouTube! This is the video I made on Day Three of the "Obscenity of War Project." The charity is legit. The cause is a good one. Check it out!

MY GMAIL: 
bobmerlign@gmail.com

music by: anton glamb (used with permission) "Backing Down" www.myspace.com/antonglamb

MY PERSONAL DONATION SITE: http://www.homesforourtroops.o rg/site/TR?px=1068401&pg;=perso nal&fr;_id=1070</span>
			<span id="MorevidDesclvf1voQ9Bw" class="smallText">(<a href="#" class="eLink" onclick="showInline('RemainvidDesclvf1voQ9Bw'); hideInline('MorevidDesclvf1voQ9Bw'); hideInline('BeginvidDesclvf1voQ9Bw'); showInline('LessvidDesclvf1voQ9Bw'); return false;">more</a>)</span>
			<span id="LessvidDesclvf1voQ9Bw" style="display: none" class="smallText">(<a href="#" class="eLink" onclick="hideInline('RemainvidDesclvf1voQ9Bw'); hideInline('LessvidDesclvf1voQ9Bw'); showInline('BeginvidDesclvf1voQ9Bw'); showInline('MorevidDesclvf1voQ9Bw'); return false;">less</a>)</span>



				</div>
			</td>
			<td valign="top" width="146" class="vInfo">
				<div>
					<span class="smgrayText">From:</span> <a href="/web/20070831182909/http://youtube.com/user/minouye">minouye</a>
				</div>
				<div>
					<span class="smgrayText">Views:</span> 155,694
				</div>
				<div style="white-space: nowrap">
							
	

	
	<img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_half_11x11.gif" align="top">
	


				</div>
			</td>
		</tr>
		<tr>
			<td>
				<span class="smgrayText padB10">Time:</span> <span class="runtime">03:00</span>
			</td>
			<td class="vMore">
				<span class="grayText">More in</span> <a href="/web/20070831182909/http://youtube.com/categories_portal?c=22" onclick="_hbLink('','');">People &amp; Blogs</a>
			</td>
		</tr>
	</table>
	</div> <!-- end vEntry -->


				<div class="vEntry">
	<table cellspacing="0" cellpadding="0" border="0" width="100%">
		<tr>
			<td width="130" valign="top" rowspan="2">
				<div class="QLContainer">
					<div class="videoIconWrapperOuter">
					<div class="videoIconWrapperInner"><a href="/web/20070831182909/http://youtube.com/watch?v=xGlZbNJP--c" onclick="_hbLink('AbbeyIsSile','VidHorz');"><img src="http://web.archive.org/web/20070831182909im_/http://img.youtube.com/vi/xGlZbNJP--c/default.jpg" class="vimg120"/></a>
						<div class="QLIcon QLIconSearch"><a href="#" onclick="clicked_add_icon('xGlZbNJP--c', 0);return false;" title=""><img id="add_button_xGlZbNJP--c" border="0" onmouseover="mouse_over_add_icon('xGlZbNJP--c');return false;" onmouseout="mouse_out_add_icon('xGlZbNJP--c');return false;" src="" alt=""></a></div>

					</div>
					</div>
				</div>
			</td>
			<td valign="top" width="256">
				<div class="vtitle">
				<a class="vtitlelink" href="/web/20070831182909/http://youtube.com/watch?v=xGlZbNJP--c" onclick="_hbLink('AbbeyIsSile','VidHorz');">Abbey Is Sile</a><br/> 
				</div>
				<div class="vdesc">
									
		
	<span id="BeginvidDescxGlZbNJPc">
	This is a story written by an actual six year old girl (notice the spelling!) and adapted into a video by The Story Pirates - a no
	</span>
	
			<span id="RemainvidDescxGlZbNJPc" style="display: none">This is a story written by an actual six year old girl (notice the spelling!) and adapted into a video by The Story Pirates - a non-profit company that promotes a love of creative writing.

The Striking Viking Story Pirates (www.storypirates.com) adapt and perform stories written by kids as a way of celebrating the words and ideas of young people.  This story was written by Six-Year-Old Sofia Morales Bello Barceló.

Director: Jeff Tomsic.
Music: Eli Bolin.
For more info: http://www.storypirates.com/</span>
			<span id="MorevidDescxGlZbNJPc" class="smallText">(<a href="#" class="eLink" onclick="showInline('RemainvidDescxGlZbNJPc'); hideInline('MorevidDescxGlZbNJPc'); hideInline('BeginvidDescxGlZbNJPc'); showInline('LessvidDescxGlZbNJPc'); return false;">more</a>)</span>
			<span id="LessvidDescxGlZbNJPc" style="display: none" class="smallText">(<a href="#" class="eLink" onclick="hideInline('RemainvidDescxGlZbNJPc'); hideInline('LessvidDescxGlZbNJPc'); showInline('BeginvidDescxGlZbNJPc'); showInline('MorevidDescxGlZbNJPc'); return false;">less</a>)</span>



				</div>
			</td>
			<td valign="top" width="146" class="vInfo">
				<div>
					<span class="smgrayText">From:</span> <a href="/web/20070831182909/http://youtube.com/user/StoryPirates">StoryPirates</a>
				</div>
				<div>
					<span class="smgrayText">Views:</span> 223,362
				</div>
				<div style="white-space: nowrap">
							
	

	
	<img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_half_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_empty_11x11.gif" align="top">
	


				</div>
			</td>
		</tr>
		<tr>
			<td>
				<span class="smgrayText padB10">Time:</span> <span class="runtime">02:23</span>
			</td>
			<td class="vMore">
				<span class="grayText">More in</span> <a href="/web/20070831182909/http://youtube.com/categories_portal?c=24" onclick="_hbLink('','');">Entertainment</a>
			</td>
		</tr>
	</table>
	</div> <!-- end vEntry -->


				<div class="vEntry">
	<table cellspacing="0" cellpadding="0" border="0" width="100%">
		<tr>
			<td width="130" valign="top" rowspan="2">
				<div class="QLContainer">
					<div class="videoIconWrapperOuter">
					<div class="videoIconWrapperInner"><a href="/web/20070831182909/http://youtube.com/watch?v=EfetdPWDtko" onclick="_hbLink('MúmTheyMadeFrogsSmokeTilTheyExplodedFatcatRecords','VidHorz');"><img src="http://web.archive.org/web/20070831182909im_/http://img.youtube.com/vi/EfetdPWDtko/default.jpg" class="vimg120"/></a>
						<div class="QLIcon QLIconSearch"><a href="#" onclick="clicked_add_icon('EfetdPWDtko', 0);return false;" title=""><img id="add_button_EfetdPWDtko" border="0" onmouseover="mouse_over_add_icon('EfetdPWDtko');return false;" onmouseout="mouse_out_add_icon('EfetdPWDtko');return false;" src="" alt=""></a></div>

					</div>
					</div>
				</div>
			</td>
			<td valign="top" width="256">
				<div class="vtitle">
				<a class="vtitlelink" href="/web/20070831182909/http://youtube.com/watch?v=EfetdPWDtko" onclick="_hbLink('MúmTheyMadeFrogsSmokeTilTheyExplodedFatcatRecords','VidHorz');">Múm &quot;They Made Frogs Smoke Til T...</a><br/> 
				</div>
				<div class="vdesc">
									
		
	<span id="BeginvidDescEfetdPWDtko">
	Director Ingibjörg Birgisdóttir

Date 2007
	</span>
	



				</div>
			</td>
			<td valign="top" width="146" class="vInfo">
				<div>
					<span class="smgrayText">From:</span> <a href="/web/20070831182909/http://youtube.com/user/Fatcatrecords">Fatcatrecords</a>
				</div>
				<div>
					<span class="smgrayText">Views:</span> 294,858
				</div>
				<div style="white-space: nowrap">
							
	

	
	<img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_half_11x11.gif" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_empty_11x11.gif" align="top">
	


				</div>
			</td>
		</tr>
		<tr>
			<td>
				<span class="smgrayText padB10">Time:</span> <span class="runtime">04:19</span>
			</td>
			<td class="vMore">
				<span class="grayText">More in</span> <a href="/web/20070831182909/http://youtube.com/categories_portal?c=10" onclick="_hbLink('','');">Music</a>
			</td>
		</tr>
	</table>
	</div> <!-- end vEntry -->

		</div>
	</div> <!-- end Video List -->
	<div id="hpFeaturedMoreBottom">
		<div class="floatR"><a href="/web/20070831182909/http://youtube.com/browse?s=rf">See More Featured Videos</a></div>
		<div class="clear"></div>
	</div>
</div>


<div id="hpSideContent">
	<div class="hpSideBlock">
		<div id="hpEmbedTopCap" z-index="10">
			
	

<!-- begin ad tag -->
	<script type="text/javascript">
		ord=Math.random()*10000000000000000 + 7;
		document.write('<script language="JavaScript" src="http://web.archive.org/web/20070831182909/http://ad.doubleclick.net/adj/you.home/_default;sz=300x35;kvideoid=DejRrm-LhnY;tile=1;dcopt=ist;ord=' + ord + '?" type="text/javascript"><\/script>');
	</script>
	<noscript><a href="http://web.archive.org/web/20070831182909/http://ad.doubleclick.net/jump/_default;sz=300x35;ord=123456789" target="_blank"><img src="http://web.archive.org/web/20070831182909im_/http://ad.doubleclick.net/ad/_default;sz=300x35;ord=123456789" width="300" height="35" border="0" alt=""></a>
	</noscript>
	<!-- End ad tag -->

		</div> <!-- end ad block -->
					
<div id="hpEmbedVideo">
	<script type="text/javascript">
                // <![CDATA[
                var fo = new SWFObject("/admp.swf?vids=DejRrm-LhnY&eurl=/index&iurl=http%3A//img.youtube.com/vi/DejRrm-LhnY/default.jpg&t=OEgsToPDskK4UQADckZCkybObIEWAqZX&hl=en&BASE_YT_URL=http://youtube.com/", "hpPVA", "300", "250", 7, "#FFFFFF");
		fo.addParam("wmode", "opaque");
                fo.write("hpEmbedVideo");
                // ]]>
        </script>
</div>
		
		<div id="hpEmbedUnderBlock">
			<table cellpadding="0" cellspacing="0" width="100%"><tr valign="top">
			<td width="60%"> <!-- begin embedInfo -->
				<div class="vtitle"><a href="/web/20070831182909/http://youtube.com/watch?v=DejRrm-LhnY">Hot Tub</a></div>
				<div class="vfacets">
					<span class="grayText">From:</span> <i><a href="/web/20070831182909/http://youtube.com/user/CrowntownTV" class="dg">CrowntownTV</a></i><br/>
					<span class="grayText">Comments:</span> <a href="/web/20070831182909/http://youtube.com/comment_servlet?all_comments&amp;v=DejRrm-LhnY&amp;fromurl=/watch?v=DejRrm-LhnY">44</a>
				</div>
			</td> <!-- end embedInfo -->
			
			<td width="40%" align="center">
				<div id="ratingDiv">
						<div id="ratingMessage" class="label smallText">Login to rate video</div>
								
	

	
	<img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_19x20.png" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_19x20.png" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_full_19x20.png" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_empty_19x20.png" align="top"><img class="rating" src="/web/20070831182909im_/http://youtube.com/img/icn_star_empty_19x20.png" align="top">
		<div class="rating ratingCount">845 ratings</div>
	


				</div> <!-- end ratings Div -->
			</td>
			
			</tr></table>
			


		</div> <!-- end embedUnderBlock -->	


	</div> <!-- end hpContentBlock -->


		<div class="hpContentBlock">
			<div class="contentBox">
				<div>
					<div class="floatR"><span class="smallText"><b><a href="/web/20070831182909/http://youtube.com/signup">Sign Up</a> | <a href="http://web.archive.org/web/20070831182909/http://www.google.com/support/youtube/bin/topic.py?topic=10546&amp;hl=en_US">Help</a></b></div>
					<div class="floatL">
						<span class="headerTitle hpBlockHeadingGray"> Login </span>
					</div>
					<div class="clear"></div>
				</div>

				<table width="270">
					<form method="post" name="loginForm" id="loginForm" action="signup">
					<input type="hidden" name="action_login" value="1">
					<tr>
						<td align="right"><span class="smallText"><b>Username:</b></span></td>
						<td><input tabindex="1" class="smallText" type="text" size="16" name="username" value="" class="hpLoginField"></td>
					</tr>
					<tr>
						<td align="right"><span class="smallText"><b>Password:</b></span></td>
						<td><input tabindex="2" class="smallText" type="password" size="16" name="password" class="hpLoginField">
					</tr>
					<tr>
						<td></td>
						<td>
							<span><input type="submit" class="smallText" value="Login"></span>	
						</td>
					</tr>
					</form>
				</table>
				<div class="bottomBorderDotted"></div>
				<div class="alignC"><span class="smallText"><b><a href="http://web.archive.org/web/20070831182909/https://www.google.com/accounts/ServiceLogin?service=youtube&amp;hl=en_US&amp;continue=http://www.youtube.com/signup%3Fhl%3Den_US&amp;passive=true">Login with your Google account</a>&nbsp; <a href="#" onclick="window.open('/t/help_gaia','login_help','width=580,height=480,resizable=yes,scrollbars=yes,status=0');" rel="nofollow"><img src="/web/20070831182909im_/http://youtube.com/img/icn_help_grey_16x16.gif" border="0" align="absmiddle"></a></b></span></div>
			</div>
		</div> <!-- end hpContentBlock -->


	<div class="hpContentBlock padT10">
			
	

<!-- begin ad tag -->
	<script type="text/javascript">
		ord=Math.random()*10000000000000000 + 6;
		document.write('<script language="JavaScript" src="http://web.archive.org/web/20070831182909/http://ad.doubleclick.net/adj/com.ythome/promo1;sz=300x50;kvideoid=DejRrm-LhnY;tile=2;ord=' + ord + '?" type="text/javascript"><\/script>');
	</script>
	<noscript><a href="http://web.archive.org/web/20070831182909/http://ad.doubleclick.net/jump/promo1;sz=300x50;ord=123456789" target="_blank"><img src="http://web.archive.org/web/20070831182909im_/http://ad.doubleclick.net/ad/promo1;sz=300x50;ord=123456789" width="300" height="50" border="0" alt=""></a>
	</noscript>
	<!-- End ad tag -->

	</div>


	<div class="hpSideBlock padT10">
		<div class="hpYellowBlock">
			<div class="hpBlockHeading" style="color:#CC6600">What's New</div>
				<div class="hpWNentry">
					<div class="hpWNimage"><a href="/web/20070831182909/http://youtube.com/mobile"><img src="/web/20070831182909im_/http://youtube.com/img/pic_home_mobile_30x37.gif" border="0" width="30" height="37"/></a></div>
					<div class="hpWNdesc">
						<b><a href="/web/20070831182909/http://youtube.com/mobile" style="color:#CC6600">YouTube Mobile</a></b><br>
						Watch and upload YouTube videos on your mobile device.
					</div>
				</div>
				<div class="bottomBorderDotted"></div>	
			<div class="hpWNentry">
				<div>
					<b><a href="/web/20070831182909/http://youtube.com/my_profile_theme" style="color:#CC6600">Show Your Ratings</a></b><br>
					Display the latest videos you've rated on your profile and show off your good taste
				</div>
			</div>
			<div class="hpWNentry">
				<div>
					<b><a href="/web/20070831182909/http://youtube.com/custom_player" style="color:#CC6600">Create Custom Players</a></b><br>
					Now you can choose the design and color of your player, and fill it with any of your playlists!
				</div>
			</div>
					<div class="bottomBorderDotted"></div>
					<b><a href="/web/20070831182909/http://youtube.com/blog" style="color:#CC6600">Important Info for YouTube Developers</a></b><br>
					Hi everyone,
<br><br>
We've been working on a new API based on the Google data protocol over the last few months, and our first version has now been released into the wild. If you want to build a cool Yo...<a href="http://web.archive.org/web/20070831182909/http://www.youtube.com/dev"></a><a href="http://web.archive.org/web/20070831182909/http://code.google.com/apis/youtube/migration.html"></a><a href="http://web.archive.org/web/20070831182909/http://groups.google.com/group/youtube-api"></a><a href="http://web.archive.org/web/20070831182909/http://apiblog.youtube.com/"></a><a href="http://web.archive.org/web/20070831182909/http://groups.google.com/group/youtube-api"></a><a href="http://web.archive.org/web/20070831182909/mailto: editor@youtube.com"></a>
				<div class="alignR padT5">
					<a href="/web/20070831182909/http://youtube.com/blog" style="color:#CC6600">Read more in our Blog</a>
				</div>
			<div style="font-size: 1px; height: 1px;"><br/></div>
		</div><img style="display: block;" src="/web/20070831182909im_/http://youtube.com/img/pic_home_yellowbottom_300x13.gif"/>
	</div> 

	<div class="hpSideBlock">
			
	

<!-- begin ad tag -->
	<script type="text/javascript">
		ord=Math.random()*10000000000000000 + 6;
		document.write('<script language="JavaScript" src="http://web.archive.org/web/20070831182909/http://ad.doubleclick.net/adj/com.ythome/promo2;sz=300x50;kvideoid=DejRrm-LhnY;tile=3;ord=' + ord + '?" type="text/javascript"><\/script>');
	</script>
	<noscript><a href="http://web.archive.org/web/20070831182909/http://ad.doubleclick.net/jump/promo2;sz=300x50;ord=123456789" target="_blank"><img src="http://web.archive.org/web/20070831182909im_/http://ad.doubleclick.net/ad/promo2;sz=300x50;ord=123456789" width="300" height="50" border="0" alt=""></a>
	</noscript>
	<!-- End ad tag -->

	</div>






		<div class="hpSideBlock">	
			<div class="hpPurpleBlock">
				<div class="hpBlockHeading" style="width: 280px;">Popular Videos for Mobile Devices</div>
					<div class="hpChannelEntry v80hEntry">
						<div class="vstill"><a href="/web/20070831182909/http://youtube.com/watch?v=m2WtK_8J3ZM"><img src="http://web.archive.org/web/20070831182909im_/http://img.youtube.com/vi/m2WtK_8J3ZM/default.jpg" class="vimg" style="background: #333;"></a></div>
						<div class="vinfo" style="width: 180px;">
								<b><a href="/web/20070831182909/http://youtube.com/watch?v=m2WtK_8J3ZM">WHATTHEBUCK Interview!</a></b>
								<div class="vfacets">
										<span class="grayText">From:</span> <a href="/web/20070831182909/http://youtube.com/user/davedays">davedays</a><br/>
										<span class="grayText">Views:</span> 3514<br/>
								</div>
						</div>
						<div class="clear"></div>
					</div><!-- end hpChannelEntry -->
					<div class="hpChannelEntry v80hEntry">
						<div class="vstill"><a href="/web/20070831182909/http://youtube.com/watch?v=54-8yenYazw"><img src="http://web.archive.org/web/20070831182909im_/http://img.youtube.com/vi/54-8yenYazw/default.jpg" class="vimg" style="background: #333;"></a></div>
						<div class="vinfo" style="width: 180px;">
								<b><a href="/web/20070831182909/http://youtube.com/watch?v=54-8yenYazw">Alexandre song</a></b>
								<div class="vfacets">
										<span class="grayText">From:</span> <a href="/web/20070831182909/http://youtube.com/user/tophe95">tophe95</a><br/>
										<span class="grayText">Views:</span> 9202<br/>
								</div>
						</div>
						<div class="clear"></div>
					</div><!-- end hpChannelEntry -->
			<div style="font-size: 1px; height: 1px;"><br/></div>
			</div><img style="display: block;" src="/web/20070831182909im_/http://youtube.com/img/pic_home_bluebot_300x13.gif"/>
		</div> <!-- end hpContentBlock -->

</div> <!-- end hpSideCol -->

<div class="clear"></div>




		<div class="spacer">&nbsp;</div>
	<div id="footerDiv">
		<div id="footContent">
		<div id="footTopDiv">
			<table cellpadding="0" cellspacing="0" width="100%"><tr>
			<td width="66%" align="right">
			<form name="searchFormFooter" id="searchFormFooter" method="get" action="/web/20070831182909/http://youtube.com/results">
	    <input type="text" name="search_query" maxlength="128" class="searchField" value="">
			&nbsp;
			<input type="submit" name="search" value="Search">
			</form>
			</td>
			<td width="33%" align="right">
			<div id="footPromoDiv">
				<a href="/web/20070831182909/http://youtube.com/youchoose" onclick="_hbLink('FooterPromo','Footer');"><img src="/web/20070831182909im_/http://youtube.com/img/pic_debates_footer_32x32.png" width="32" height="32" align="middle" border="0" alt="footer-promo"/></a>
				<a href="/web/20070831182909/http://youtube.com/youchoose" onclick="_hbLink('FooterPromo','Footer');">Face The Candidates</a>
			</div>
			</td>
			</tr></table>
		</div> 

		<div id="footBotDiv">
			<table border="0" cellpadding="0" cellspacing="0" width="100%" align="center"><tr valign="top">
			<td>
			<div class="footColumnLeft">
				<div class="footLabel">Your Account</div>
				<div class="footValues">
					<div class="column">
						<a href="/web/20070831182909/http://youtube.com/my_videos">Videos</a><br/>
						<a href="/web/20070831182909/http://youtube.com/my_favorites">Favorites</a><br/>
					</div>
					<div class="column">
						<a href="/web/20070831182909/http://youtube.com/my_playlists">Playlists</a><br/>
						<a href="/web/20070831182909/http://youtube.com/my_messages">Inbox</a><br/>
					</div>
					<div class="column">
						<a href="/web/20070831182909/http://youtube.com/subscription_center">Subscriptions</a><br/>
						<a href="/web/20070831182909/http://youtube.com/my_account">more...</a><br/>
					</div>
				</div>
			</div>
			</td>
			
			<td>
			<div class="footColumnMid">
				<div class="footLabel">Help &amp; Info</div>
				<div class="footValues">
					<div class="column">
						<a href="http://web.archive.org/web/20070831182909/http://www.google.com/support/youtube/?hl=en_US">Help Center</a><br/>
						<a href="/web/20070831182909/http://youtube.com/video_toolbox">Video Toolbox</a><br/>
					</div>
					<div class="column">
						<a href="/web/20070831182909/http://youtube.com/dev">Developer APIs</a><br/>
						<a href="/web/20070831182909/http://youtube.com/t/safety">Safety Tips</a><br/>
					</div>
					<div class="column">
						<a href="/web/20070831182909/http://youtube.com/t/dmca_policy">Copyright Notices</a><br/>
						<a href="/web/20070831182909/http://youtube.com/t/community_guidelines">Code of Conduct</a><br/>
					</div>
				</div>
			</div>
			</td>

			<td>
			<div class="footColumnRight">
				<div class="footLabel">YouTube</div>
				<div class="footValues">
					<div class="column">
						<a href="/web/20070831182909/http://youtube.com/t/about">Company Info</a><br/>
						<a href="/web/20070831182909/http://youtube.com/testtube">TestTube</a><br/>
					</div>
					<div class="column">
						<a href="/web/20070831182909/http://youtube.com/t/terms">Terms of Use</a><br/>
						<a href="/web/20070831182909/http://youtube.com/t/privacy">Privacy Policy</a><br/>
					</div>
					<div class="column">
						<a href="/web/20070831182909/http://youtube.com/press_room">Press</a><br/>
						<a href="/web/20070831182909/http://youtube.com/t/contact_us">Contact</a><br/>
					</div>
					<div class="column">
						<a href="/web/20070831182909/http://youtube.com/blog">Blog</a><br/>
						<a href="http://web.archive.org/web/20070831182909/http://www.google.com/jobs/youtube">Jobs</a><br/>
					</div>
				</div>
			</div>
			</td>
			
			</tr></table>
		</div> 
		</div> 

		<div id="footCopyrightDiv">
			<div id="footCopyright">
				&copy; 2022 hyperion
				&nbsp;-&nbsp;
				<a href="#" onclick="window.open('//discord.gg/bzBxXtsTW6','Discord','width=640,height=500,resizable=yes,scrollbars=yes,status=0'); return false;">Discord</a>
			</div>
		</div> 
		
	</div> 

</div> <!-- end baseDiv -->
</body>

</html>