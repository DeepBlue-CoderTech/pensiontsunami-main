<?php

function connect() {
    $hd = mysql_connect('internal-db.s123893.gridserver.com', 'db123893_host','vE4habacAfrA')
             or die('Could not connect');
    mysql_select_db('db123893_pensiontsunami', $hd)
            or die('Could not select database');
}


function getName($id, $table)
{
      $hd = mysql_connect('internal-db.s123893.gridserver.com', 'db123893_host', 'vE4habacAfrA') or die('Could not connect');
      //echo "Working on". $table;
      switch($table)
      {
          case "state":
            $sql = "SELECT state FROM state WHERE state_id = {$id}";
            break;
          case "counties":
            $sql = "SELECT county FROM counties WHERE county_id = {$id}";
            break;
          case "cities":
            $sql = "SELECT city FROM cities WHERE city_id = {$id}";
            break;
          case "category":
            $sql = "SELECT name FROM category WHERE cat_id = {$id}";
            break;
          case "linkcats":
            $sql ="SELECT name FROM link_categories WHERE link_cat_id = {$id}";
            break;
      }
      //echo $sql;
      $res_name = mysql_query($sql, $hd);
      $name = mysql_result($res_name, 0, 0);
      return $name;
}
   function gen_links()
{
      $num = numDays(); // How many days does the user want displayed?
      $sql = "SELECT * FROM links WHERE status = 1 AND DATE_SUB(CURDATE(),INTERVAL {$num} DAY) <= date ORDER BY date DESC, posttime DESC";
      $res  = mysql_query($sql);
      $count = 0;
      while ($links = mysql_fetch_array($res, MYSQL_ASSOC))
      {
            if($count == 0)
            {
                  $date_b4 = date('F j, Y', strtotime($links['date']));
                  echo "<h3>" . $date_b4 . "</h3>\n";
                  echo "<ul id=\"navlist2\">\n";
                  echo "<li><a href=\"" . $links['link'] ."\">" .stripslashes($links['title']) . "</a></li>\n";
                  $count++;
                  continue;
            }
            $date =  date('F j, Y', strtotime($links['date']));
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

}

 function genNews($offset = 0)
{
	  $begin = $offset;
	  $end = $offset + 50;
      $sql = "SELECT * FROM links WHERE status = 1 ORDER BY date DESC, posttime DESC LIMIT $begin, $end";
      $res  = mysql_query($sql);
      $count = 0;
      while ($links = mysql_fetch_array($res, MYSQL_ASSOC))
      {
            if($count == 0)
            {
                  $date_b4 = date('F j, Y', strtotime($links['date']));
                  echo "<h3>" . $date_b4 . "</h3>\n";
                  echo "<ul id=\"navlist2\">\n";
                  echo "<li><a href=\"" . $links['link'] ."\">" .stripslashes($links['title']) . "</a></li>\n";
                  $count++;
                  continue;
            }
            $date =  date('F j, Y', strtotime($links['date']));
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
	echo "<p align=\"center\"><strong><a href=\"news.php?offset=" . $end . "\">Previous News</a></strong></p>";
}


function lastUpdate()
{

      $sql = "SELECT max(posttime) FROM links AS posttime";
      $res = mysql_query($sql);
      echo date('F j g:ia',strtotime(mysql_result($res, 0)));
}

function gen_side_links()
{
      // How many link categories are there?
      $sql = "SELECT count(*) FROM link_categories";
      $res_count = mysql_query($sql);
      $count = mysql_result($res_count, 0);
      $num = numLinks();
      for($i=1; $i <= $count; $i++)
      {
          $sql = "SELECT * FROM side_links WHERE link_cat = $i ORDER BY name LIMIT {$num}";
          $res = mysql_query($sql);
          $count1 = 0;
          while ($links = mysql_fetch_array($res, MYSQL_ASSOC))
          {
                  if($count1 == 0)
                  {
                        echo "<h2>". getName($i, 'linkcats'). "</h2>\n";
                        echo " <ul id=\"navlist\">";
                        echo "<li><a href=\"". $links['link'] ."\">".$links['name'] ."</a></li>\n";
                        $count1++;
                        continue;
                  }
                  else
                  {
                         echo "<li><a href=\"". $links['link'] ."\">".$links['name'] ."</a></li>\n";
                  }
          }
          echo "</ul>\n";

      }


}

function getFooter()
{
      $sql = "SELECT value FROM options WHERE name = 'footer'";
      $res = mysql_query($sql);
      echo mysql_result($res, 0);

	  }
function get_welcome($type)
{
      $sql = "SELECT value FROM options WHERE name = '{$type}'";
      $res = mysql_query($sql);
      echo autop(stripslashes(mysql_result($res, 0)));
}
function numDays()
{
      $sql = "SELECT value FROM options WHERE name = 'numdays'";
       $res = mysql_query($sql);
      return intval(mysql_result($res, 0));
}

function numLinks()
{
     $sql = "SELECT value FROM options WHERE name = 'numlinks'";
       $res = mysql_query($sql);
      return intval(mysql_result($res, 0));
}
function get_spotlite()
{
      $sql = "SELECT * FROM spotlites WHERE which = 1";
      $res = mysql_query($sql);
      while($links = mysql_fetch_array($res, MYSQL_ASSOC))
      {
            echo "<li><a href=\"{$links['link']}\">". stripslashes($links['title']) ."</a></li>";
            if($links['byline'] == 'by') {$inc_b = 'by';}
            if($links['byline'] == 'italicized') {$inc_b = '<i>'; $inc_a = '</i>';}
            if($links['author'] != '') echo "<h5>" . $inc_b." ". stripslashes($links['author']) . $inc_a . "</h5>";
            if($links['author'] == '')  echo  "<h5>" . $inc_b. stripslashes($links['source']) . $inc_a . "</h5>";
	  }
}

 function gen_arch_links($type, $offset = 0)
{
      if($type != 'spot')
	  {
	  switch($type)
      {
            case "public":
                  $cat = 1;
                  $type = 'Public Pensions';
                  break;
            case "soc":
                  $cat = 3;
                  $type = 'Social Security';
                  break;
            case "corp":
                  $cat = 2;
                  $type = 'Corporate Pensions';
                  break;
            case "intl":
                  $cat = 4;
                  $type = 'International';
                  break;
      }
	  $sql = "SELECT * FROM links WHERE status = 1 AND category =  {$cat} ORDER BY date DESC, posttime DESC, title DESC LIMIT 50";
      }
	  else 
	  {
	  $sql = "SELECT * FROM spotlites ORDER BY date DESC, posttime DESC, title DESC LIMIT 50";
	  $type = 'Spotlights';
	  }
	  $res  = mysql_query($sql);
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
	if($type != 'Spotlights') $sql = "SELECT count(*) FROM links WHERE status = 1 AND category =  {$cat}";
    else $sql = "SELECT count(*) FROM spotlites";
	$res_cnt = mysql_query($sql);
    $cnt = mysql_result($res_cnt, 0);
    if($cnt > 50)
    {
        $new_off = $offset + 50;
        echo "<center><strong><a href=\"public.php?offset=" . $new_off . "\">More " . $type . " News</a></strong></center>";
    }
}

function getBottom()
{
	echo '<span class="bot"><a href="/index.php">Home</a> | <a href="/blog">PensionWatch Blog</a> | <a href="/public.php">Public Employee Pensions</a> | <a href="/corp.php">Corporate</a> | <a href="/social.php">Social Security</a> | <a href="/intl.php">International</a> | <a href="/press.php">Press Room</a> | <a href="/support.php">Advertise With Us</a> | <a href="/about.php">About Us</a> | <a href="/sub.php">Subscribe</a> | <a href="/about.php">Contact Us</a></span>';
}

function genAds()
{
	$sql_ads = "SELECT * FROM ads WHERE expiry > CURRENT_DATE()";
	$res_ads = mysql_query($sql_ads);
	while ($links = mysql_fetch_array($res_ads, MYSQL_ASSOC)) {
		echo "<a href=\"{$links['link']}\" title=\"{$links['description']}\"><img src=\"/support/{$links['image']}\" border=\"0\" /></a><br />";
	}
}

function autop($pee, $br=0) {
$pee = preg_replace("/(\r\n|\n|\r)/", "\n", $pee); // cross-platform newlines
$pee = preg_replace("/\n\n+/", "\n\n", $pee); // take care of duplicates
$pee = preg_replace('/\n?(.+?)(\n\n|\z)/s', "<p>$1</p>\n", $pee); // make paragraphs, including one at the end
if ($br) $pee = preg_replace('|(?<!</p>)\s*\n|', "<br />\n", $pee); // optionally make line breaks
return $pee;
}

/////////
function latest_date()
{
	$sql_1 = "SELECT max(date) FROM links AS maxdate";
	$sql_2 = "SELECT min(date) FROM links AS mindate";
	$res_1 = mysql_query($sql_1);
	$res_2 = mysql_query($sql_2);
	$latest = mysql_result($res_1, 0);
	$oldest = mysql_result($res_2, 0);
	$latest_year = date('Y', strtotime($latest));
	$oldest_year = date('Y', strtotime($oldest));
	//make boxes
	echo month_box('month', 'month');
	echo year_box('year', 'year', $latest_year, $oldest_year);
}

function month_box($name, $id)
{
	$monthtext[1]="January";$monthtext[2]="February";
	$monthtext[3]="March";$monthtext[4]="April";
	$monthtext[5]="May";$monthtext[6]="June"; $monthtext[7]="July";$monthtext[8]="August";
    $monthtext[9]="September";$monthtext[10]="October";
	$monthtext[11]="November";$monthtext[12]="December";
	$content='Select Month: <select name="'.$name.'" id="'.$id.'">'."\r";
    $content.="<option value=\"\">Select Month</option>";
    for($i=1; $i<=12; $i++)
    {
       $iki = $i; if($iki<10){$iki='0'.$iki;}
       $content.="\t<option value=\"$iki\">";
       $content.="$iki - $monthtext[$i]</option>\r";
    }
       $content.="</select><br />";

return $content;   
}

////////////////////////////////////////
function year_box($name, $id, $max, $min)
{    
  $content='Select Year: <select name="'.$name.'" id="'.$id.'">'."\r";
  $content .= "<option value=\"\">Select Year</option>";
   for($i=$max; $i<=$min; $i++)
   {
       $iki = $i;
       $content.="\t<option value=\"$iki\">";
       $content.="$iki</option>\r";
   }
       $content.="</select><br />";

return $content;   
}
?>
