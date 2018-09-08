<?php
function validate_email($email)
{

   // Create the syntactical validation regular expression
   $regexp = "^([_a-z0-9-]+)(\.[_a-z0-9-]+)*@([a-z0-9-]+)(\.[a-z0-9-]+)*(\.[a-z]{2,4})$";

   // Presume that the email is invalid
   $valid = 0;

   // Validate the syntax
   if (eregi($regexp, $email))
   {
      $valid = 1;
   } else {
      $valid = 0;
   }

   return $valid;

}

if(validate_email($_POST['email']))
{
	$body = $_POST['comment'];
	$from = $_POST['email'];
	$who = $_POST['name'];
	$org = $_POST['org'];
	mail('Jack@webcommanders.com', 'Advertising Inquiry!', "{$who} from {$org} [{$_POST['email']}] has inquired about advertising on Pension Tsunami.\n\n He/she writes: \n\n {$body}", "$from");
	$url = $_SERVER['HTTP_REFERER'];
	header("Location: {$url}?message=advert");
}
else
{
	echo "Invalid email.  <a href=\"http://pensiontsunami,com\">Please try again</a>";
}
?>