
<?php

 if (isset($_POST['Mail']))
 {
	
$email_to ="dawoodahmed696@gmail.com" ;
$email_subject="Feedback";

 }



    function died ($error)
	{
		//your error code go here
		 echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
		
	}
  
	
	
	
	
if (!isset($_POST['name']) ||
    !isset($_POST['lastname']) ||
	!isset($_POST['gender'])  ||
	!isset($_POST['Mail'])||
	!isset($_POST['comment']))
	
	{
		died('Sorry Their was an Error in Your input');
		
		
	}

$first= $_POST['name'];
$last=$_POST['lastname'];
$gender=$_POST['gender'];
$Prov=$_POST['op'];
$Mail_from=$_POST['Mail'];
$Com=$_POST['comment'];

 $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 if (!preg_match($email_exp,$Mail_from)))
 {
	    $error_message .= 'The 	Mail you entered does not appear to be valid.<br />';
 
 }




    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  if(!preg_match($string_exp,$last)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first)."\n";
 
    $email_message .= "Last Name: ".clean_string($last)."\n";
 
    $email_message .= "Email: ".clean_string($Mail_from)."\n";
 
    $email_message .= "Gender: ".clean_string($gender)."\n";
 
    $email_message .= "Comments: ".clean_string($Com)."\n";
 
    $email_message .= "Province".clean_string($Prov)."\n";
     
 
     
 
// create email headers
 
$headers = 'From: '.$$Mail_from."\r\n".
 
'Reply-To: '.$Mail_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
 
 
Thank you for contacting us. We will be in touch with you very soon.
 
 
















?>