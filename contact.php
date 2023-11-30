<?php 
if(isset($_POST['send']))
{ 
$to = "info@sitmea.com" ; 

$from = $_REQUEST['email'] ; 
$name = $_REQUEST['name'] ;
$headers = "From: $from"; 

$fields = array(); 
$fields{"cname"} = "Company Name";
$fields{"name"} = "Name"; 
$fields{"telephone"} = "Telephone"; 
$fields{"mobile"} = "Mobile"; 
$fields{"email"} = "Email"; 
$fields{"subject"} = "Subject"; 
$fields{"message"} = "Message"; 

$body = "We have received the following information:\n\n";
foreach($fields as $a => $b){ $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

$send = mail($to, $name, $body, $headers); 

if($send ) 
{ echo "<script>
			alert('Thanks for contacting to SIT- SMART INTEGRAL TECHNOLOGY. We will reach you soon.');
			window.location.href='index.html';
		</script>";} 
}
?>
