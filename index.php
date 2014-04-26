<?php
	
	// set the page title
$title = "I Can't Believe It's Another Hitachi Thread!";
	
	// Railpage Australia header
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head><title><?=$title?> - Railpage Australia&#8482; Forums (Melbourne suburban)</title>
<link rel="shortcut icon" href="http://www.railpage.com.au/favicon.ico" type="image/x-icon"><meta name="GENERATOR" content="PHP-Nuke 6.8 - Copyright 2003 by http://phpnuke.org">
<script language="Javascript" type="text/javascript" src="files/common.js"></script><script language="Javascript" type="text/javascript" src="files/livehelp.js"></script><link rel="StyleSheet" href="files/optimize.css" type="text/css"><link rel="StyleSheet" href="files/moz.css" type="text/css">
<link rel="StyleSheet" type="text/css" href="files/style.css" media="all">
<link rel="StyleSheet" type="text/css" href="files/printer.css" media="print"></head><body>
<div id="header"><table border="0" cellpadding="0" cellspacing="0" height="116" width="100%"><tbody><tr><td align="left"><a href="http://www.railpage.com.au/"><img src="files/rp.gif" alt="Railpage Australia&#8482;" border="0"></a></td><td align="right"><div id="addiv"><a href="http://www.railpage.com.au/" target="_blank"><img src="files/spoof.gif" alt="This is not Railpage Australia but a FAKE!" title="This is not Railpage Australia but a FAKE!" border="0"></a>&nbsp;&nbsp;</div><div id="slogan"><font class="slogan">The premier Australian rail server - wasting time and bandwidth since 1992!</font></div></td></tr></tbody></table></div>
"http://www.railpage.com.au/"
<div id="contentfull">
<a name="top"></a><table class="block noround" id="f_tools" border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td class="b_hs" align="center" width="20%"><a href="http://www.railpage.com.au/f-faq.htm" class="b_l_h">faq</a></td><td class="b_hs" align="center" width="20%"><a href="http://www.railpage.com.au/f-s.htm" class="b_l_h">search</a></td><td class="b_hs" align="center" width="20%"><a href="http://www.railpage.com.au/modules.php?name=Forums&amp;file=groupcp" class="b_l_h">usergroups</a></td>
<td class="b_hs" align="center" width="20%"><a href="http://www.railpage.com.au/f-pr-editprofile.htm" class="b_l_h">profile</a></td><td class="b_hs" align="center" width="20%"><a href="http://www.railpage.com.au/modules.php?name=Your_Account&amp;redirect=index" class="b_l_h" style="text-transform: lowercase;">Log in</a></td></tr></tbody></table><br><table class="opentable" border="0" cellpadding="8" cellspacing="0" width="100%"><tbody><tr><td><table border="0" cellpadding="2" cellspacing="2" width="100%"><tbody><tr>
<td colspan="2" align="left" valign="bottom"><a class="maintitle" href="http://www.railpage.com.au/f-t11311504-s3495-0-asc.htm"><?=$title?></a></td></tr></tbody></table><br>
<table class="forumline" id="f_vt1" align="center" background="files/mgh_footer_bg.gif" border="0" cellpadding="4" cellspacing="0" width="100%"><tbody><tr> 
<td align="center" height="35" nowrap="nowrap" valign="middle" width="5%"><a href="http://www.railpage.com.au/" class="nav"><img src="files/post.gif" alt="Post new thread" align="middle" border="0"></a></td>
<td align="center" nowrap="nowrap" valign="middle" width="5%"><a href="http://www.railpage.com.au/" class="nav"><img src="files/reply.gif" alt="Reply to thread" align="middle" border="0"></a></td>
<td colspan="2" align="left" valign="middle"><span class="nav"><a href="http://www.railpage.com.au/f.htm" class="nav">Railpage Australia&#8482; Forum Index</a> -&gt; <a href="http://www.railpage.com.au/f-f22.htm" class="nav">Melbourne suburban</a></span></td>
</tr><tr> 
<td colspan="4" align="left" background="files/mgh_footer2.gif" height="31" nowrap="nowrap" valign="middle"><table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr><td><span class="nav">Page <b>234</b> of <b>235</b>&nbsp;&nbsp;&nbsp;[ <a href="http://www.railpage.com.au/f-t11311504-previous.htm" class="nav">Previous thread</a> ] :: [ <a href="http://www.railpage.com.au/f-t11311504-next.htm" class="nav">Next thread</a> ]</span></td><td align="right"><span class="nav">Goto page  <a href="http://www.railpage.com.au/f-t11311504-0-asc-s3480.htm">Previous</a>&nbsp;&nbsp;<a href="http://www.railpage.com.au/f-t11311504-0-asc-s0.htm">1</a>, <a href="http://www.railpage.com.au/f-t11311504-0-asc-s15.htm">2</a>, <a href="http://www.railpage.com.au/f-t11311504-0-asc-s30.htm">3</a> ... , <a href="http://www.railpage.com.au/f-t11311504-0-asc-s3480.htm">233</a>, <b>234</b>, <a href="http://www.railpage.com.au/f-t11311504-0-asc-s3510.htm">235</a>&nbsp;&nbsp;<a href="http://www.railpage.com.au/f-t11311504-0-asc-s3510.htm">Next</a></span></td></tr></tbody></table></td></tr>
</tbody></table><br>
<table class="forumline" border="0" cellpadding="3" cellspacing="0" width="100%"> 
<tbody><tr><th class="thCornerL" height="26" nowrap="nowrap" width="150">Author</th><th class="thCornerR" nowrap="nowrap">Message</th></tr>
<?php 

// logging
$fp = fopen("results.txt", 'ab');
$towrite = getenv("REMOTE_ADDR").' - '.gethostbyaddr( $_SERVER['REMOTE_ADDR'] ).' - '.$_SERVER['HTTP_USER_AGENT'];
fputs($fp, "\n".date('d M Y g:i A')." - $towrite\n");

$towrite = file_get_contents("hits.txt");
$fp = fopen("hits.txt", 'wb');
fputs($fp, $towrite+1);

$postnumber = 0;
$maxpost = 15;
$startdate = mktime() - 300000;

// continue spitting out posts
while ($postnumber < $maxpost)
{
	// major random number
	$random = rand(1,12);
	
	// get username
	$user = file_get_contents("users.inc");
	$user = split("\^", $user);
	$user = $user[rand(0, sizeof($user)-1)];
	
	// user details
	$post = rand(1, 1500);
	$joind = rand(1, 28);
	$joinm = rand(1, 12);
	$joiny = rand(2003, 2006);
	$joindate = mktime(1,1,1,$joinm,$joind,$joiny);
	$joindate = date("M j, Y", $joindate);
	
	// get an avatar
	$avatar = rand(1, 50);
	
	if ($avatar < 10)
	{
		$avatar = '0'.$avatar.'.jpg';
	}
	else
	{
		$avatar.='.jpg';
	}
	
	if (!file_exists('avatar/'.$avatar))
	{
		$avatar = '';
	}
	
	// get location
	$location = file_get_contents("locations.inc");
	$location = split("\^", $location);
	$location_alt = $location[rand(0, sizeof($location)-1)];
	$location = $location[rand(0, sizeof($location)-1)];
	
	// get hitachi
	$hitachi = file_get_contents("hitachis.inc");
	$hitachi = split("\^", $hitachi);
	$hitachi = $hitachi[rand(0, sizeof($hitachi)-1)];
	
	switch ($random)
	{
		case 1:
		case 2:
			break;
		case 3:
		case 4:
		case 8:
			$hitachi = split('-', $hitachi);
			$hitachi = $hitachi[0].' and co';
			break;
		case 5:
		case 6:
			$hitachi = split('-', $hitachi);
			$hitachi = $hitachi[4].' and co';
			break;
		case 7:
			$hitachi = split('-', $hitachi);
			$hitachi = $hitachi[4].' ... '.$hitachi[0].' and co';
			break;
		case 9:
			$hitachi = split('-', $hitachi);
			$hitachi = $hitachi[2].' and co';
			break;
		case 10:
			$hitachi = split('-', $hitachi);
			$hitachi = $hitachi[0].' ... '.$hitachi[4].' and co';
			break;
		case 11:
			$hitachi = split('-', $hitachi);
			$hitachi = $hitachi[0].' and '.$hitachi[4].' and co';
			break;
		case 12:
			$hitachi = 'unknown Hitachi';
		default:
			break;
	}
	
	// sighting time
	$sighth = rand(6,23);
	$sightm = rand(1,59);
	
	// fix leading zeros
	if ($sightm < 10)
	{
		$sightm = '0'.$sightm;
	}
	
	// fix AM / PM
	if ($sighth < 12)
	{
		$sightap = ' am';
		$period = 'this morning';
	}
	else
	{
		$sightap = ' pm';
		$period = 'this afternoon';
	}
	
	if ($sighth > 6)
	{
		$period = 'tonight';
	}
	
	// deconvert from 24 or 12 hour time
	if ($random%2 == 1 AND $sighth > 12)
	{
		$sighth = $sighth-12;
	}
	elseif($sighth > 12)
	{
		$sightap = '';
	}
	
	// twiddle AM / PM again
	if ($random%3 == 1)
	{
		$sightap = '';
	}
	
	// string the time together
	if ($random > 10)
	{
		$sighting = 'about '.$sighth.$sightap;
	}
	else
	{
		$sighting = $sighth.':'.$sightm.$sightap;
	}
					
	// direction?
	// group?
	// lead / trail?
	if ($random < 3)
	{
		$direction = 'UP';
		$leading = 'trailing';
		$group = 'Northern';
	}
	elseif ($random > 7)
	{
		$direction = 'UP';
		$leading = 'leading';
		$group = 'Burnley';
	}
	elseif ($random > 5)
	{
		$direction = 'DOWN';
		$leading = 'leading';
		$group = 'Caufield';
	}
	else
	{
		$direction = 'DOWN';
		$leading = 'trailing';
		$group = 'Clifton Hill';
	}
	
	// create date of post
	$startdate = $startdate + rand(15000, 300000/15);
	$postdate = date("D M j, Y g:i a", $startdate);	
	
	// quote previous?
	if ($random > 10 AND $postnumber > 1)
	{
		// response to post type
		$response = file_get_contents("responses.inc");
		$response = split("\^", $response);
		$response = $response[rand(0, sizeof($response)-1)];
	
		$quote = '<table class="bodyline" align="center" border="0" cellpadding="3" cellspacing="1" width="90%"><tbody><tr><td class="helpline"><span class="genmed"><b>Quote:</b><span id="SXBB3092x"></span></span></td></tr><tr><td class="quote"><script type="text/javascript">SXBB[id].writeDiv();</script><div id="SXBB3092" style="overflow: visible;">';
		$message = $quote.$pastmessage.'</div></td></tr></tbody></table>'.$response;	
	}
	else
	{
		// new message type
		$message = file_get_contents("messages.inc");
		$message = split("\^", $message);
		$message = $message[rand(0, sizeof($message)-1)];
	}
		
	// replace variables
	$message = str_replace('[HITACHI]', $hitachi, $message);
	$message = str_replace('[LOCATION]', $location, $message);
	$message = str_replace('[LOCATION_ALT]', $location_alt, $message);
	$message = str_replace('[TIME]', $sighting, $message);
	$message = str_replace('[DIRECTION]', $direction, $message);
	$message = str_replace('[PERIOD]', $period, $message);
	$message = str_replace('[USER]', $user, $message);
	$message = str_replace('[LEAD]', $leading, $message);
	$message = str_replace('[GROUP]', $group, $message);
	$message = str_replace('[]', '<br/><br/>', $message);
	$message = str_replace('[/]', '<br/>', $message);
	
	// spit out a post
?>

<tr><td class="row1" align="left" height="100%" valign="top"><table border="0" cellpadding="0" cellspacing="0" height="100%" width="150"><tbody><tr><td align="center" valign="top"><span class="name"><a name="<?=$postnumber?>"></a><b><?=$user?></b></span><br><span class="postdetails">Train Controller<br><? if ($avatar != '') { ?><img src="avatar/<?=$avatar?>" alt="" border="0"><? } ?><br><br>Joined: <?=$joindate?><br>Posts: <?=$post?><br></span><br><br><div class="f_po" height="25" onclick="f_pr1(<?=$postnumber?>);">contact</div><div id="pr1_<?=$postnumber?>" style="display: none;"><table border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td align="left"><ul class="pd"><li class="pr"><a href="http://www.railpage.com.au/">Profile</a></li> <li class="pm"><a href="http://www.railpage.com.au/">PM</a></li>      </ul></td></tr></tbody></table></div></td></tr><tr><td align="center" valign="bottom"><br>
<div id="pr2_<?=$postnumber?>" style="display: none;"><table border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td align="left"><ul class="pd"><li class="q"><a href="http://www.railpage.com.au/">Quote</a></li>   </ul></td></tr></tbody></table></div><div class="f_po" height="25" onclick="f_pr2(<?=$postnumber?>);">post</div></td></tr></tbody></table></td>
<td class="row1" height="20" valign="top" width="100%"><table border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td height="20" valign="top"><a href="http://www.railpage.com.au/"><img src="files/icon_minipost.gif" class="m_f_mp" border="0"></a> <span class="postdetails">Posted: <?=$postdate ?></span></td></tr><tr>
<td valign="top"><span class="postbody"><?=$message?></span></td></tr></tbody></table></td></tr>
<tr><td class="spaceRow" colspan="2"><img src="files/spacer.gif" alt="s" class="s"></td></tr>


<?php
	
	$postnumber++;
	
	// randomly remember previous posts
	if ($random > 7)
	{
		$pastmessage = $message;
	}
}	//end while

	// Railpage Australia footer
?>
<tr><td class="spaceRow" colspan="2"><img src="files/spacer.gif" alt="s" class="s"></td></tr>
<tr align="center"><td class="catBottom" colspan="2" height="28"><table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr><form method="post" action="f-t11311504-s3495.htm"></form><td id="f_vt2" align="center"><span class="gensmall">Display from: <select name="postdays"><option value="0" selected="selected">All Posts</option><option value="1">1 Day</option><option value="7">7 Days</option><option value="14">2 Weeks</option><option value="30">1 Month</option><option value="90">3 Months</option><option value="180">6 Months</option><option value="364">1 Year</option></select>&nbsp;<select name="postorder"><option value="asc" selected="selected">Oldest First</option><option value="desc">Newest First</option></select>&nbsp;<input value="Go" class="liteoption" name="submit" type="submit"></span></td>
</tr></tbody></table></td></tr></tbody></table>
<div id="f_vt3"><br><table class="forumline" align="center" background="files/mgh_footer_bg.gif" border="0" cellpadding="4" cellspacing="0" width="100%"><tbody><tr> 
<td align="center" height="35" nowrap="nowrap" valign="middle" width="5%"><a href="http://www.railpage.com.au/" class="nav"><img src="files/post.gif" alt="Post new thread" align="middle" border="0"></a></td>
<td align="center" nowrap="nowrap" valign="middle" width="5%"><a href="http://www.railpage.com.au/" class="nav"><img src="files/reply.gif" alt="Reply to thread" align="middle" border="0"></a></td>
<td colspan="2" align="left" valign="middle"><span class="nav"><a href="http://www.railpage.com.au/" class="nav">Railpage Australia&#8482; Forum Index</a> -&gt; <a href="http://www.railpage.com.au/" class="nav">Melbourne suburban</a></span></td></tr><tr><td colspan="4" align="left" background="files/mgh_footer2.gif" height="31" nowrap="nowrap" valign="middle"><table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr><td><span class="nav">Page <b>234</b> of <b>235</b>&nbsp;&nbsp;&nbsp;[ <a href="http://www.railpage.com.au/f-t11311504-previous.htm" class="nav">Previous thread</a> ] :: [ <a href="http://www.railpage.com.au/f-t11311504-next.htm" class="nav">Next thread</a> ]</span></td><td align="right"><span class="nav">Goto page  <a href="http://www.railpage.com.au/f-t11311504-0-asc-s3480.htm">Previous</a>&nbsp;&nbsp;<a href="http://www.railpage.com.au/f-t11311504-0-asc-s0.htm">1</a>, <a href="http://www.railpage.com.au/f-t11311504-0-asc-s15.htm">2</a>, <a href="http://www.railpage.com.au/f-t11311504-0-asc-s30.htm">3</a> ... , <a href="http://www.railpage.com.au/f-t11311504-0-asc-s3480.htm">233</a>, <b>234</b>, <a href="http://www.railpage.com.au/f-t11311504-0-asc-s3510.htm">235</a>&nbsp;&nbsp;<a href="http://www.railpage.com.au/f-t11311504-0-asc-s3510.htm">Next</a></span></td></tr></tbody></table></td></tr></tbody></table><span class="gensmall"><br>All times are GMT + 10 Hours</span><br><br> 
<table align="center" border="0" cellspacing="2" width="100%"><tbody><tr> 
<td align="left" nowrap="nowrap" valign="top" width="40%"><span class="gensmall"></span><br><br></td>
<td align="right" nowrap="nowrap" valign="top"><form method="post" name="jumpbox" action="modules.php?name=Forums&amp;file=jumpbox" onsubmit="if(document.jumpbox.f.value == -1){return false;}"><table border="0" cellpadding="0" cellspacing="0">
	<tbody><tr> 
		<td nowrap="nowrap"><span class="gensmall">Jump to:&nbsp;<select name="f" onchange="if(this.options[this.selectedIndex].value != -1){ forms['jumpbox'].submit() }"><option value="-1">Select a forum</option><option value="-1">&nbsp;</option><option value="-1">Australian Railway News</option><option value="-1">----------------</option><option value="2">New South Wales</option><option value="3">Victoria</option><option value="22" selected="selected">Melbourne suburban</option><option value="4">Queensland</option><option value="5">South Australia</option><option value="6">Tasmania</option><option value="7">Western Australia</option><option value="8">NT</option><option value="9">ACT</option><option value="13">Operators</option><option value="12">Locomotives and Rolling Stock</option><option value="11">Signalling and Infrastructure</option><option value="14">Sightings</option><option value="18">General</option><option value="19">Trams and Light Rail</option><option value="56">RP3: metaSHAFT</option><option value="16">Railpage Australia&#8482;</option><option value="-1">&nbsp;</option><option value="-1">Simulator Forums</option><option value="-1">----------------</option><option value="17">MSTS General Discussions</option><option value="27">MSTS Routes</option><option value="28">MSTS 3D</option><option value="32">Trainz General Discussions</option><option value="38">Transport Tycoon</option><option value="-1">&nbsp;</option><option value="-1">Special Interest Groups</option><option value="-1">----------------</option><option value="20">Model Railways</option><option value="25">Australian Miniature Railways</option><option value="21">Gheringhap Loop</option><option value="29">Railway Archaeology</option><option value="30">Railway Photography</option><option value="34">Radio and Scanning Discussions</option><option value="39">Down the line (The TV Series)</option><option value="40">Mornington Crescent</option><option value="41">The Intercity Platform</option><option value="42">Other Transport</option><option value="43">The Bogies</option><option value="-1">&nbsp;</option><option value="-1">Railway Preservation and Tourism</option><option value="-1">----------------</option><option value="23">Preservation and Tourist Railways</option><option value="-1">&nbsp;</option><option value="-1">International Railway News</option><option value="-1">----------------</option><option value="52">International News</option><option value="45">NZ and Oceania</option><option value="46">East and South East Asia</option><option value="47">South Asia and Middle East</option><option value="48">UK and Europe</option><option value="49">North America</option><option value="50">Central and South America</option><option value="51">Africa</option><option value="-1">&nbsp;</option><option value="-1">General Forums</option><option value="-1">----------------</option><option value="36">The Lounge</option><option value="1">Test Forum</option><option value="53">Armchair Operators</option></select>&nbsp;<input value="Go" class="liteoption" type="submit"></span></td>
	</tr>
</tbody></table></form>
<span class="gensmall">You <b>cannot</b> post new threads in this forum<br>You <b>cannot</b> reply to threads in this forum<br>You <b>cannot</b> edit your posts in this forum<br>You <b>cannot</b> delete your posts in this forum<br>You <b>cannot</b> vote in polls in this forum<br></span></td>
</tr></tbody></table></div>
<div align="center"><span class="copyright"><br><br>
Powered by <a href="http://www.phpbb.com/" target="_phpbb" class="copyright">phpBB</a> 2.0.6 © 2001 phpBB Group<br><br>
Theme images and concept © 2004 by Michael Greenhill and Railpage, All Rights Reserved.<br>
Version 2.0.6 of PHP-Nuke Port by Tom Nitzschner © 2002 <a href="http://www.toms-home.com/" target="_blank" class="copyright">www.toms-home.com</a></span></div>
</td></tr></tbody></table>
<div align="right"><a href="javascript:cw('Forums')">Forums ©</a></div><br><br>
<div id="footermgh"><br><div align="center"><table border="0" width="85%"><tbody><tr><td align="center" width="25%"><font class="footmsg"><a href="http://phpnuke.org/" target="blank"><img src="files/nuke.gif" alt="Web site powered by PHP-Nuke" border="0" hspace="10"></a></font></td><td align="center"><font class="footmsg">All logos and trademarks in this site are property of their respective owner<br>
The comments are property of their posters, all the rest is © 2003-2007 <a href="http://www.omni.com.au/" target="_blank"><font class="footmsg_l">Interactive Omnimedia</font></a></font><br>
<font class="footmsg">You can syndicate our news using the <a href="http://www.railpage.com.au/ticker/"><font class="footmsg_l">news ticker</font></a> or one of the <a href="http://www.railpage.com.au/ticker/#rss"><font class="footmsg_l">RSS feeds</font></a></font></td></tr></tbody></table></div>
<font class="footmsg">Web site engine's code is Copyright © 2003 by <a href="http://phpnuke.org/"><font class="footmsg_l">PHP-Nuke</font></a>. All Rights Reserved.<br>
PHP-Nuke is Free Software released under the <a href="http://www.gnu.org/"><font class="footmsg_l">GNU/GPL license</font></a>.<br>Page Generation: 0.458 Seconds -- Current Server Load: 0.16%<br>
<br>
</font>
</div></div>

<div id="blocks_left"><table class="block" align="center" border="0" cellpadding="0" cellspacing="0" width="150"><tbody><tr><td class="b_h"><table border="0" cellpadding="0" cellspacing="0" width="100%" style="BACKGROUND: url(files/h.gif) repeat-x;"><tbody><tr><td class="b_h" onclick="location='/'" align="center" ><a class="b_l_h" href="http://www.railpage.com.au/"> home </a></td></tr>
<tr><td class="b_s_d"></td></tr>
<tr><td class="b_s_sh">news</td></tr>
<tr><td><ul class="b_s_m"><li><a href="http://www.railpage.com.au/modules.php?name=Topics">Topics</a></li><li class="r"><a href="http://www.railpage.com.au/modules.php?name=Submit_News">Submit News</a></li><li><a href="http://www.railpage.com.au/modules.php?name=Stories_Archive">Stories Archive</a></li><li><a href="http://www.railpage.com.au/modules.php?name=Surveys">Surveys</a></li></ul></td></tr>
<tr><td class="b_s_sh">discussions</td></tr>
<tr><td><ul class="b_s_m"><li><a href="http://www.railpage.com.au/f.htm">Forums</a></li><li class="r"><a href="http://www.railpage.com.au/modules.php?name=SPChatMGH">Chat</a></li></ul></td></tr>
<tr><td class="b_s_sh">content</td></tr>
<tr><td><ul class="b_s_m"><li class="r"><a href="http://www.railpage.com.au/modules.php?name=Downloads">Downloads</a></li><li><a href="http://www.railpage.com.au/g.htm">Image Gallery</a></li><li><a href="http://www.railpage.com.au/modules.php?name=Web_Links&amp;l_op=viewlink&amp;cid=1">Timetables</a></li><li><a href="http://www.railpage.com.au/modules.php?name=Web_Links">Web Links</a></li><li><a href="http://www.railpage.com.au/modules.php?name=NuCalendar">Rail Events</a></li><li><a href="http://www.railpage.com.au/static-passes.htm">Rail Passes</a></li><li><a href="http://www.railpage.com.au/modules.php?name=Web_Links&amp;l_op=viewlink&amp;cid=21">Railpage Websites</a></li><li><a href="http://www.railpage.com.au/g-photocomp-feb06.htm">Photo of the Month</a></li><li class="r"><a href="http://www.railpage.com.au/modules.php?name=Forums&amp;file=arcade&amp;cid=1">Games</a></li></ul></td></tr>
<tr><td class="b_s_sh">site</td></tr>
<tr><td><ul class="b_s_m"><li><a href="http://www.railpage.com.au/modules.php?name=Your_Account">Your Account</a></li><li class="r"><a href="http://www.railpage.com.au/modules.php?name=Members_List">Members List</a></li><li class="r"><a href="http://www.railpage.com.au/modules.php?name=Journal">Journals</a></li><li><a href="http://www.railpage.com.au/modules.php?name=Statistics">Statistics</a></li><li><a href="http://www.railpage.com.au/f-s.htm">Search</a></li><li><a href="http://www.railpage.com.au/modules.php?name=Feedback">Feedback</a></li><li><a href="http://www.railpage.com.au/static-copyright.htm">Copyright</a></li><li><a href="http://www.railpage.com.au/static-tos.htm">Terms of Use</a></li><li><a href="http://www.railpage.com.au/static-privacy.htm">Privacy Statement</a></li><li><a href="http://www.railpage.com.au/f-t11307417.htm">Rules for Posting</a></li><li><a href="http://www.railpage.com.au/faq.htm">FAQ</a></li><li><a href="http://www.railpage.com.au/static-donate.htm">Donate</a></li></ul></td></tr></tbody></table></td></tr></tbody></table><br>
<? /*<table style="BACKGROUND: url(files/h.gif) repeat-x;" class="block" align="center" border="0" cellpadding="0" cellspacing="0" width="150"><tbody><tr><td class="b_h" onclick="location='/'" align="center" ><a class="b_l_h" href="http://www.railpage.com.au/"> home </a></td></tr><tr><td align="left"><center><br/>Need Help? <a href="http://www.railpage.com.au/modules.php?name=Feedback"><b>Lodge a support ticket!</b></a><br>*/?>


<table class="block" align="center" border="0" cellpadding="0" cellspacing="0" width="150"><tbody><tr><td class="b_h"><table border="0" cellpadding="0" cellspacing="0" width="100%" style="BACKGROUND: url(files/h.gif) repeat-x;"><tbody><tr><td class="b_h" align="center" ><a class="b_l_h"> technical support </a></td></tr><tr><td align="left"><br/><center>Need Help? <a href="http://www.railpage.com.au/modules.php?name=Feedback"><b>Lodge a support ticket!</b></a><br>
<br>
Note: This is for technical support only. General questions about railways should be posted to the <a href="http://www.railpage.com.au/f.htm">Forums</a>.</center><div class="b_sh">donation</div><center><a href="http://www.railpage.com.au/paypal.htm" target="_blank"><img src="files/paypal.gif" alt="Donate using PayPal" border="0"></a><br>Please Donate!</center><div class="b_sh">photo comp</div><center>Have YOU voted yet on Photo of the Month?<br><br><a href="http://www.railpage.com.au/g-photocomp-feb06.htm">Click Here!</a><br><br>Voting Closes 31/7</center><div class="b_sh">search</div><center><form action="modules.php?name=Search" method="post"><input name="searchstring" size="15" type="text"><input name="SearchIn" value="all" type="hidden"><input name="action" value="go" type="hidden"><br><input value="Search Site" type="submit"></form></center></td></tr></tbody></table><br></div></body></html>