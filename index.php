<?php





    include("includes/link_functions.php");
    connect();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Pension Tsunami</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<link rel='stylesheet' type='text/css' media='all' href='css/basics.css' />
	<link rel='stylesheet' type='text/css' media='all' href='css/tabs_pentsunami.css' />

<!-- DO NOT REMOVE!!! -->
<script language="JavaScript">

//from here

<!--

// open new window

function openWindow(url, name, rs, w, h) {

  var resize = "";

  if (rs) {

    resize = "resizable,";

  }

  popupWin = window.open(url, name, 'scrollbars,' + resize + 'width=' + w + ',height=' + h);

  window.name = 'opener';

}



function emailCheck (emailStr) {



/* The following variable tells the rest of the function whether or not

to verify that the address ends in a two-letter country or well-known

TLD.  1 means check it, 0 means don't. */



var checkTLD=1;



/* The following is the list of known TLDs that an e-mail address must end with. */



var knownDomsPat=/^(com|net|org|edu|int|mil|gov|arpa|biz|aero|name|coop|info|pro|museum)$/;



/* The following pattern is used to check if the entered e-mail address

fits the user@domain format.  It also is used to separate the username

from the domain. */



var emailPat=/^(.+)@(.+)$/;



/* The following string represents the pattern for matching all special

characters.  We don't want to allow special characters in the address. 

These characters include ( ) < > @ , ; : \ " . [ ] */



var specialChars="\\(\\)><@,;:\\\\\\\"\\.\\[\\]";



/* The following string represents the range of characters allowed in a 

username or domainname.  It really states which chars aren't allowed.*/



var validChars="\[^\\s" + specialChars + "\]";



/* The following pattern applies if the "user" is a quoted string (in

which case, there are no rules about which characters are allowed

and which aren't; anything goes).  E.g. "jiminy cricket"@disney.com

is a legal e-mail address. */



var quotedUser="(\"[^\"]*\")";



/* The following pattern applies for domains that are IP addresses,

rather than symbolic names.  E.g. joe@[123.124.233.4] is a legal

e-mail address. NOTE: The square brackets are required. */



var ipDomainPat=/^\[(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})\]$/;



/* The following string represents an atom (basically a series of non-special characters.) */



var atom=validChars + '+';



/* The following string represents one word in the typical username.

For example, in john.doe@somewhere.com, john and doe are words.

Basically, a word is either an atom or quoted string. */



var word="(" + atom + "|" + quotedUser + ")";



// The following pattern describes the structure of the user



var userPat=new RegExp("^" + word + "(\\." + word + ")*$");



/* The following pattern describes the structure of a normal symbolic

domain, as opposed to ipDomainPat, shown above. */



var domainPat=new RegExp("^" + atom + "(\\." + atom +")*$");



/* Finally, let's start trying to figure out if the supplied address is valid. */



/* Begin with the coarse pattern to simply break up user@domain into

different pieces that are easy to analyze. */



var matchArray=emailStr.match(emailPat);



if (matchArray==null) {



/* Too many/few @'s or something; basically, this address doesn't

even fit the general mould of a valid e-mail address. */



alert("Email address seems incorrect (check @ and .'s)");

return false;

}

var user=matchArray[1];

var domain=matchArray[2];



// Start by checking that only basic ASCII characters are in the strings (0-127).



for (i=0; i<user.length; i++) {

if (user.charCodeAt(i)>127) {

alert("Ths username contains invalid characters.");

return false;

   }

}

for (i=0; i<domain.length; i++) {

if (domain.charCodeAt(i)>127) {

alert("Ths domain name contains invalid characters.");

return false;

   }

}



// See if "user" is valid 



if (user.match(userPat)==null) {



// user is not valid



alert("The username doesn't seem to be valid.");

return false;

}



/* if the e-mail address is at an IP address (as opposed to a symbolic

host name) make sure the IP address is valid. */



var IPArray=domain.match(ipDomainPat);

if (IPArray!=null) {



// this is an IP address



for (var i=1;i<=4;i++) {

if (IPArray[i]>255) {

alert("Destination IP address is invalid!");

return false;

   }

}

return true;

}



// Domain is symbolic name.  Check if it's valid.

 

var atomPat=new RegExp("^" + atom + "$");

var domArr=domain.split(".");

var len=domArr.length;

for (i=0;i<len;i++) {

if (domArr[i].search(atomPat)==-1) {

alert("The domain name does not seem to be valid.");

return false;

   }

}



/* domain name seems valid, but now make sure that it ends in a

known top-level domain (like com, edu, gov) or a two-letter word,

representing country (uk, nl), and that there's a hostname preceding 

the domain or country. */



if (checkTLD && domArr[domArr.length-1].length!=2 && 

domArr[domArr.length-1].search(knownDomsPat)==-1) {

alert("The address must end in a well-known domain or two letter " + "country.");

return false;

}



// Make sure there's a host name preceding the domain.



if (len<2) {

alert("This address is missing a hostname!");

return false;

}



// If we've gotten this far, everything's valid!

return true;

}



//  End -->

//too here

</script>
<!-- END -->

</head>

<body>
<div id="container">
<div id="backpict" style="background-image: url(images/back.gif)"><br><br>
	<div id="mainheader">
	<div id="subscribe">
		<script Language="Javascript" type="text/javascript">
		<!--
		function $Npro(field){var element =  document.getElementById(field);return element;return false;}
		function emailvalidation(field, errorMessage) {
		var goodEmail = field.value.match(/\b(^(\S+@).+((\.com)|(\.net)|(\.edu)|(\.mil)|(\.gov)|(\.org)|(\.info)|(\.sex)|(\.biz)|(\.aero)|(\.coop)|(\.museum)|(\.name)|(\.pro)|(\..{2,2}))$)\b/gi);
		apos=field.value.indexOf("@");
		dotpos=field.value.lastIndexOf(".");
		lastpos=field.value.length-1;
		var badEmail = (apos<1 || dotpos-apos<2 || lastpos-dotpos<2)
		if (goodEmail && !badEmail) {return true;}
		else {
		//alert(errorMessage);
		$Npro("Error").innerHTML=errorMessage;
		$Npro("Error").style.display="inline";
		field.focus();
		field.select();
		return false;}}
		function emptyvalidation(entered, errorMessage)
		{
			$Npro("Error").innerHTML="";
			with (entered){
			if (value==null || value==""){
				//alert(errorMessage);
				$Npro("Error").innerHTML=errorMessage;
				$Npro("Error").style.display="inline";
				return false;}
			else{return true;}}}
		function formvalidation(thisform)
		{
		with (thisform)
		{
		
		if (emailvalidation(email,"Please enter your valid email address")==false) {email.focus(); return false;};
		
		}
		
		}
		//-->
		</script>

		<form onsubmit="return formvalidation(this)" method="post" name="subscriberform" action="http://listsrv.netcommanders.net/pensiontsunami/?p=subscribe&id=1" target="blank">
			<table border="0" cellpadding="5" cellspacing="0">
				
				<tr>
					<td>Email:</td>
					<td><input type="text" name="email" value=""></td>
				</tr>
				
				<input type="hidden" name="list[3]" value="signup">
		<tr>
			<td> </td>
			<td><span id="Error" style="color:red;display:none;"><span></td>
		</tr>
		<tr>
			<td> </td>
			<td align=right><input type="submit" value="Sign up"></td>
		</tr>
			</table>
		</form>
	
	</div>
	
	</div>
	<div id="header">
  <?php include("includes/header_home.php"); ?>
	</div>
</div>
	<div id="main">
<?php include("includes/side_home.php"); ?>
			
			<div id="right">
			<h2>Latest Newsclips <span class="up"> &nbsp;&nbsp;&nbsp;&nbsp;last updated <?php lastUpdate() ?> PST</span></h2>
                 <span>Each day's headline summary is e-mailed to <a href="sub.php">subscribers</a>.</span>  
<?php gen_links(); ?>
		<p align="center"><strong><a href="archives.php">Categorized News</a></strong> | <strong><a href="news.php">Full News Archives</a></strong></p>	
			</div><!-- END RIGHT-->
		<center><script type="text/javascript"><!--
google_ad_client = "pub-1143701649694701";
google_ad_width = 728;
google_ad_height = 15;
google_ad_format = "728x15_0ads_al_s";
google_ad_channel ="";
google_color_border = "FF4500";
google_color_bg = "FFEBCD";
google_color_link = "DE7008";
google_color_url = "E0AD12";
google_color_text = "8B4513";
//--></script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></center>
	</div><!-- END MAIN -->
		<div id="footer">
 <?php getFooter() ?>
	</div>

</div><!-- END CONTAINER -->
	<?php getBottom(); ?>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-2075760-1";
urchinTracker();
</script>
	</body>
</html>
