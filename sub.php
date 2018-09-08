<?php
    include("includes/link_functions.php");
    connect();
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Subscribe to Pension Tsunami</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel='stylesheet' type='text/css' media='all' href='/css/basics.css' />
	<link rel='stylesheet' type='text/css' media='all' href='/css/tabs.css' />
</head>

<body>
<div id="container">
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

		<form onsubmit="return formvalidation(this)" method="post" name="subform" action="http://listsrv.netcommanders.net/pensiontsunami/?p=subscribe&id=1" target="blank">
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
  <?php include("includes/header_press.php"); ?>
	</div>
	<div id="main">
<?php include("includes/side.php"); ?>
			
			
			<div id="right">
			<h2>Subscribe to PensionTsunami News</h2>
<p>Enter your e-mail address below to subscribe to our Newsclip Service.  Complete text of current articles will be articles will be sent to you periodically. Volume normally ranges up to 15 per day.  You may unsubscribe at any time. All addresses will be kept confidential and the list is never sold or rented to third parties.</p>
<p>		<script Language="Javascript" type="text/javascript">
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

		<form onsubmit="return formvalidation(this)" method="post" name="subform" action="http://listsrv.netcommanders.net/pensiontsunami/?p=subscribe&id=1" target="blank">
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
	</p>         

			
			</div><!-- END RIGHT-->
		
	</div><!-- END MAIN -->
		<div id="footer">
 <?php getFooter() ?>
	</div>
</div><!-- END CONTAINER -->
<?php getBottom(); ?>
	</body>
</html>
