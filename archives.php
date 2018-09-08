<?php
    include("includes/link_functions.php");
    connect();
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Archives &raquo; Pension Tsunami</title>
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
			<h2>Archives</h2>
					<p>Select a category or region below.</p>
			
			
			<h2>By Date</h2>
			<p><form method="get" enctype="multipart/form-data" action="regions.php">
			<?php latest_date(); ?>
			<input name="submit" type="submit" value="Search">
			</form></p>
<h2>Categories</h2>
			<p><form method="get" enctype="multipart/form-data" action="">
<select name="category" id="category" class="selectOne" onchange="MM_jumpMenu('parent',this,0)">
<option value="">Select a Category</option>
            <option value="/public.php">Public Pensions</option>
<option value="/corp.php">Corporate Pensions</option>

<option value="/social.php">Social Security</option>
<option value="/intl.php">International</option>
</select>
	</form></p>         
<h2>News by State</h2>
<p>Select a state to be taken to it's news page.</p>
	<p><form method="get" enctype="multipart/form-data" action="">
<select name="state" id="state" class="selectOne" onchange="MM_jumpMenu('parent',this,0)"><option value="0">Select a State/Province</option>
<?php
			$sql = "SELECT * FROM state ORDER BY abbrev";
			$res = mysql_query($sql);
            while ($states = mysql_fetch_array($res, MYSQL_ASSOC))
			{
				echo "<option value=\"regions.php?type=state&id={$states['state_id']}\">{$states['abbrev']}: {$states['state']}</option>\n";
			}
		    ?>
			</select>

	</form></p> 
	
<h2>News by County</h2>
<p>Select a county to be taken to it's news page.</p>
	<p><form method="get" enctype="multipart/form-data" action="">
<select name="county" id="county" class="selectOne" onchange="MM_jumpMenu('parent',this,0)"><option value="0">Select a County</option>
<?php
			$sql = "SELECT * FROM counties ORDER BY county";
			$res = mysql_query($sql);
            while ($cnts = mysql_fetch_array($res, MYSQL_ASSOC))
			{
				echo "<option value=\"regions.php?type=counties&id={$cnts['county_id']}\">{$cnts['county']}</option>\n";
			}
		    ?>
</select>
	</form></p> 	
<h2>News by City</h2>
<p>Select a city to be taken to it's news page.</p>
	<p><form method="get" enctype="multipart/form-data" action="">
<select name="city" id="city" class="selectOne" onchange="MM_jumpMenu('parent',this,0)"><option value="0">Select a City</option>
<?php
			$sql = "SELECT * FROM cities ORDER BY city";
			$res = mysql_query($sql);
            while ($cities = mysql_fetch_array($res, MYSQL_ASSOC))
			{
				echo "<option value=\"regions.php?type=cities&id={$cities['city_id']}\">{$cities['city']}</option>\n";
			}
		    ?>
</select>
	</form></p> 	
			</div><!-- END RIGHT-->
		
	</div><!-- END MAIN -->
		<div id="footer">
 <?php getFooter() ?>
	</div>
</div><!-- END CONTAINER -->
<?php getBottom(); ?>
	</body>
</html>
