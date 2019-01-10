<?php 
$events = $_POST['check_list'];
if ($_POST["email"]<>'') { 

$EmailSubject = 'Common  Event Registartion '; 
$mailheader .= "From: ".$_POST["email"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$MESSAGE_BODY .= "Name: ".$_POST["name"]."<br>"; 
$MESSAGE_BODY .= "College Name: ".$_POST["clg_name"]."<br>";
$MESSAGE_BODY .= "Branch: ".$_POST["branch"]."<br>";
$MESSAGE_BODY .= "Year: ".$_POST["year"]."<br>";
$MESSAGE_BODY .= "Email: ".$_POST["email"]."<br>";  
$MESSAGE_BODY .= "Mobile: ".$_POST["mobile"]."<br><br>"; 


if(!empty($_POST['check_list'])) {
$checked_count = count($_POST['check_list']);
}

if(in_array("it", $events))
{
	$ToEmail= 'aagama2k16it@cvsr.ac.in' . ', ';
}
if(in_array("cse", $events))
{
	$ToEmail .= 'aagama2k16cse@cvsr.ac.in'. ', ';
}
if(in_array("ecee", $events))
{
	$ToEmail .= 'aagama2k16ece@cvsr.ac.in' . ', ';
}
if(in_array("eee", $events))
{
	$ToEmail .= 'aagama2k16eee@cvsr.ac.in' . ', ';
}
if(in_array("mech", $events))
{
	$ToEmail .= 'aagama2k16mech@cvsr.ac.in' . ', ';
}
if(in_array("pharmacy", $events))
{
	$ToEmail .= 'aagama2k16pharmacy@cvsr.ac.in' . ', ';
}
if(in_array("mba", $events))
{
	$ToEmail .= 'aagama2k16mba@cvsr.ac.in' . ', ';
}
if(in_array("civil", $events))
{
	$ToEmail .= 'aagama2k16civil@cvsr.ac.in'. ', ';
}


mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader); 

header('Location: m.thank-you.html');
?>


<?php 
}; 
?>