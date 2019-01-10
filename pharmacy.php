<?php 
$events = $_POST['check_list'];
if ($_POST["email"]<>'') { 
$ToEmail = 'aagama2k16pharmacy@cvsr.ac.in'; 
$EmailSubject = 'Technical Event Registartion '; 
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

if($checked_count==4 ){

$MESSAGE_BODY .= "Events Registered 1: " . $events[0] ."<br>"; 
$MESSAGE_BODY .= "Events Registered 2: " . $events[1]  ."<br>"; 
$MESSAGE_BODY .= "Events Registered 3: " . $events[2] . "<br>"; 
$MESSAGE_BODY .= "Events Registered 4: " . $events[3] . "<br>";
}
elseif ($checked_count ==3){
	$MESSAGE_BODY .= "Events Registered 1:". $events[0] ."<br>"; 
$MESSAGE_BODY .= "Events Registered 2: ". $events[1]."<br>"; 
$MESSAGE_BODY .= "Events Registered 3: " . $events[2] . "<br>";
}

elseif ($checked_count ==2){

	$MESSAGE_BODY .= "Events Registered 1: ". $events[0] ."<br>"; 
	$MESSAGE_BODY .= "Events Registered 2: " . $events[1] . "<br>";

}
elseif ($checked_count ==1){

	$MESSAGE_BODY .= "Events Registered 1: ". $events[0] ."<br>"; 
}
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader); 

header('Location: thank-you.html');
?>


<?php 
}; 
?>