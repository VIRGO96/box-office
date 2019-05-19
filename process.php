<html>
<body>

<?php

$q1_why=$_POST['q1_why'];
$q2_service=$_POST['q1_service'];
$q3_state=$_POST['q3_state'];
$q4_comments=$_POST['q4_comments'];

$error=FALSE;
if($q3_state == "none")
{
	$error=TRUE;
}

if(isset($q4_comments))
{
	$q4_comments=trim($q4_comments);
	$q4_comments=strip_tags($q4_comments);
	
}

if(isset($q1_why) && isset($q2_service)  
	&& isset($q3_state)  && $error==FALSE && isset($q4_comments) )
	{
		$process=TRUE;
	}
	else
	{
		$process=FALSE;
	}
	
	
	
	
	
	
	
?>
</body>
</html>