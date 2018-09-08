<?php
    include("includes/link_functions.php");
    connect();
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Advertise on Pension Tsunami</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel='stylesheet' type='text/css' media='all' href='/css/basics.css' />
	<link rel='stylesheet' type='text/css' media='all' href='/css/tabs.css' />
</head>

<body>
<div id="container">
	<div id="mainheader">
<div id="subscribe">
	<form method="post" enctype="multipart/form-data" action="/subscribe.php">
	<?php if($_GET['message'] == 'subscribe') $value = 'Subscribed!';
		  else $value = 'your@email.com';
		  ?>
	<input name="email" type="text"value="<?php echo $value; ?>" maxlength="150" onFocus=this.value='' />
	<input name="submit" type="submit" value="subscribe" class="button">
	</form>
	</div>
	
	</div>
	<div id="header">
  <?php include("includes/header_press.php"); ?>
	</div>
	<div id="main">
<?php include("includes/side.php"); ?>
			
			
			<div id="right">
			<h2>Advertise on PensionTsunami.com</h2>
<?php 
if(isset($_GET['message']))
{
	if($_GET['message'] == 'advert') $message = '<strong>You have successfully contacted the site Editor.  We will get back to you ASAP!</strong>';
	 else $value = '<strong>There was an error in your message(probably your email).  Please try again.</strong>';
	echo "<p>" . $message . "</p>";
	 }
		  
		  ?>
			<p>Need some stuff about advertising.  Maybe we should put the description where the search box is?</p>
<h2>Inquire about Advertising</h2>
			<p><form method="post" enctype="multipart/form-data" action="/advert.php">
	
	Name: <input name="name" type="text" value="" size="60" maxlength="150" /><br />
	Email: <input name="email" type="text" value=""size="60" maxlength="150" /> <br />
	Organization: <input name="org" type="text" value="" size="60" maxLength="400" /><br />
	Comment: <textarea name="comment" rows="10" cols="42"></textarea><br />
	<input name="submit" type="submit" value="Submit" class="button">
	</form></p>         

			
			</div><!-- END RIGHT-->
		
	</div><!-- END MAIN -->
		<div id="footer">
 <?php getFooter() ?>
	</div>
</div><!-- END CONTAINER -->

	</body>
</html>
