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
                  echo strtoupper('PENSION CRISIS NEWS HEADLINES POSTED ' . $date_b4 . '<br><br>');
                  echo "* " .stripslashes($links['title']) . "<br>\n";
                  $count++;
                  continue;
            }
            $date =  date('F j, Y', strtotime($links['date']));
            if($date == $date_b4)
            {
                  echo "* \n" .stripslashes($links['title']) . "<br>\n";
                  continue;
            }
            else
            {
                  echo strtoupper('PENSION CRISIS NEWS HEADLINES POSTED ' . $date . '<br><br>');
                  echo "* " .stripslashes($links['title']) . "<br>\n";
            }
            $date_b4 = $date;
      }

}
?>
<?php connect1(); ?>
<?php gen1_links(); ?>

