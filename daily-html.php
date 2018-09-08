<?php
function connect1()
   {$hd = mysqli_connect('75.79.4.222  3306', 'pbgc', 'aristocracy')
   or die('Could not connect');
mysql_select_db('pensiontsunami', $hd) or die('Could not select database');
}
   function gen1_links()
{
      $num = 0; // How many days does the user want displayed?
      $sql = "SELECT * FROM links WHERE status = 1 AND DATE_SUB(CURDATE(),INTERVAL {$num} DAY) <= date ORDER BY date ASC";
      $res  = mysql_query($sql);
      $count = 0;
      while ($links = mysql_fetch_array($res, MYSQL_ASSOC))
      {
            if($count == 0)
            {
                  $date_b4 = date('F j, Y', strtotime($links['date']));
                  echo "<h3>" . $date_b4 . "</h3>\n";
                  echo "<ul id=\"navlist2\">\n";
                  echo "<li>" .stripslashes($links['title']) . "</li>\n";
                  $count++;
                  continue;
            }
            $date =  date('F j, Y', strtotime($links['date']));
            if($date == $date_b4)
            {
                  echo "<li>" .stripslashes($links['title']) . "</li>\n";
                  continue;
            }
            else
            {
                  echo "</ul>\n";
                  echo "<h3>" . $date . "</h3>\n";
                  echo "<ul id=\"navlist2\">\n";
                  echo "<li>" .stripslashes($links['title']) . "</li>\n";
            }
            $date_b4 = $date;
      }
         echo "</ul>\n";

}
?>
<html>
<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Pension Headlines</title>
</head>
<body topmargin="20" leftmargin="20">
<div align="left">
<table border="1" cellpadding="10" cellspacing="5" style="border-collapse: collapse" bordercolor="#111111" width="200" id="AutoNumber1">
<tr>
<td width="100%">
<table border="0" cellpadding="5" cellspacing="0" style="border-collapse: collapse" bordercolor="#FF0000" width="100%" id="AutoNumber2" bgcolor="#FF0000">
<tr>
<td width="100%">
<p align="center"><b><font face="Arial Narrow" color="#FFFFFF">PENSION CRISIS NEWS</font></b></p>
</td>
</tr>
</table>
<p><font face="Arial Narrow"><b>Link to these articles via <a href="http://www.PensionTsunami.com"><font size="4">PensionTsunami.com</font></a></b><font size="4">:</font></font></p>
<font size="2"><?php connect1(); ?>
<?php gen1_links(); ?></font>
</td>
</tr>
</table>
</div>
</body>
</html>
