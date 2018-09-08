<?php
    include("includes/link_functions.php");
    connect();
	if(isset($_GET['type']))
	{
		$type = mysql_real_escape_string($_GET['type']);
		$id = intval($_GET['id']);
		$orderby = "ORDER BY date DESC, posttime DESC";
		switch($type)
		{
			case "state":
				$sql = "SELECT * FROM links WHERE state = $id AND status = 1 {$orderby}";
				$thing = 'state';
				break;
			case "counties":
				$sql = "SELECT * FROM links WHERE county = $id AND status = 1 {$orderby}";
				$thing = 'county';
				$post = " County";
				break;
			case "cities":
				$sql = "SELECT * FROM links WHERE city = $id AND status = 1 {$orderby}";
				$thing = 'city';
				break;		
		}
	}
	else header("Location: archives.php");
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title><?php echo "News for " . getName($id, $type) . $post; ?> &raquo; Pension Tsunami</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel='stylesheet' type='text/css' media='all' href='/css/basics.css' />
	<link rel='stylesheet' type='text/css' media='all' href='/css/tabs.css' />
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
			<h2><?php echo "News for " . getName($id, $type) . $post; ?></h2>
<?php $res  = mysql_query($sql);
      $count = 0;
      while ($links = mysql_fetch_array($res, MYSQL_ASSOC))
      {
            if($count == 0)
            {
                  $date_b4 = date('F jS, Y', strtotime($links['date']));
                  echo "<h3>" . $date_b4 . "</h3>\n";
                  echo "<ul id=\"navlist2\">\n";
                  echo "<li><a href=\"" . $links['link'] ."\">" .stripslashes($links['title']) . "</a></li>\n";
                  $count++;
                  continue;
            }
            $date =  date('F jS, Y', strtotime($links['date']));
            if($date == $date_b4)
            {
                  echo "<li><a href=\"" . $links['link'] ."\">" .stripslashes($links['title']) . "</a></li>\n";
                  continue;
            }
            else
            {
                  echo "</ul>\n";
                  echo "<h3>" . $date . "</h3>\n";
                  echo "<ul id=\"navlist2\">\n";
                  echo "<li><a href=\"" . $links['link'] ."\">" .stripslashes($links['title']) . "</a></li>\n";
            }
            $date_b4 = $date;
      }
         echo "</ul>\n";
	$sql2 = "SELECT count(*) FROM links WHERE status = 1 AND " . $thing ." =  {$id}";
	$res_cnt = mysql_query($sql2);
    $cnt = mysql_result($res_cnt, 0);
    if($cnt > 50)
    {
        $new_off = $offset + 50;
        echo "<center><strong><a href=\"regions.php?id={$_GET['id']}&type={$_GET['type']}&offset=" . $new_off . "\">More " . $type . " News</a></strong></center>";
    } ?>


			
			</div><!-- END RIGHT-->
		
	</div><!-- END MAIN -->
		<div id="footer">
 <?php getFooter() ?>
	</div>
</div><!-- END CONTAINER -->
<?php getBottom(); ?>
	</body>
</html>
