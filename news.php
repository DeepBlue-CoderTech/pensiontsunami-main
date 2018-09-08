<?php
    include("includes/link_functions.php");
    connect();
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Full News Archives &raquo; Pension Tsunami</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel='stylesheet' type='text/css' media='all' href='/css/basics.css' />
	<link rel='stylesheet' type='text/css' media='all' href='/css/tabs_pentsunami.css' />
<script language="JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
if (restore) selObj.selectedIndex=0;
}
//-->
</script> 
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
  <?php include("includes/header_none.php"); ?>
	</div>
	<div id="main">
<?php include("includes/side.php"); ?>
			
			
			<div id="right">
			<h2>News Archives</h2>
					<p>All the news that has appeared on PensionTsunami.com.</p>

<?php  genNews(intval(mysql_real_escape_string($_GET['offset']))); ?>

					
			</div><!-- END RIGHT-->
		
	</div><!-- END MAIN -->
		<div id="footer">
 <?php getFooter() ?>
	</div>
</div><!-- END CONTAINER -->
<?php getBottom(); ?>
	</body>
</html>
