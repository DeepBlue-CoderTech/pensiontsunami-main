<?php
    include("includes/link_functions.php");
    connect();
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Spotlight Archives &raquo; Pension Tsunami</title>
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
  <?php include("includes/header_none.php"); ?>
	</div>
	<div id="main">
<?php include("includes/side.php"); ?>
			
			
			<div id="right">
			<h2>Spotlight Archives <span class="up"> &nbsp;&nbsp;&nbsp;&nbsp;last updated <?php lastUpdate() ?> PST</span></h2>
                 <span>The complete text of these articles was e-mailed to <a href="sub.php">subscribers</a>.</span>  
<?php
if(isset($_GET['offset'])) $offset = intval($_GET['offset']);
else $offset = 0;
gen_arch_links('spot', $offset);
?>
			
			</div><!-- END RIGHT-->
		
	</div><!-- END MAIN -->
		<div id="footer">
 <?php getFooter() ?>
	</div>
</div><!-- END CONTAINER -->
<?php getBottom(); ?>
	</body>
</html>
