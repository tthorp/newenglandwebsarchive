<?php 
//curl -u 4HanCm16dkAPBBQ9joQ:X -H "Content-Type: application/json" -d '{ "helpdesk_ticket": { "description_html": "name: Tim Thorp<br />program: pre-college<br />state: California", "subject": "Call Me: 401-555-1212", "email": "tthorp@brown.edu", "priority": 1, "status": 2 }}' -X POST https://spshelp.freshdesk.com/helpdesk/tickets.json

$email = 'tthorp@brown.edu';
$phone = '401-555-1212';
$fname = 'Tim';
$lname = 'Thorp';
$programs = 'pre-college';
$state = 'California';

//FYI: false == 0
$fd_domain = "https://spshelp.freshdesk.com";
$token = "4HanCm16dkAPBBQ9joQ";
$password = "X"; //not applicable
$data = array(
	"helpdesk_ticket" => array(
		"description_html" => "name: $fname $lname<br />program: $programs<br />state: $state",
		"subject" => "Call Me Test 3: $phone",
		"email" => $email,
		"priority" => 1,
		"status" => 2
	),
	"cc_emails" => "$email"
);
$json_body = json_encode($data);
$header[] = "Content-type: application/json";
$connection = curl_init("$fd_domain/helpdesk/tickets.json");
curl_setopt($connection, CURLOPT_RETURNTRANSFER, true);
curl_setopt($connection, CURLOPT_HTTPHEADER, $header);
curl_setopt($connection, CURLOPT_HEADER, false);
curl_setopt($connection, CURLINFO_HEADER_OUT, true);
curl_setopt($connection, CURLOPT_USERPWD, "$token:$password");
curl_setopt($connection, CURLOPT_POST, true);
curl_setopt($connection, CURLOPT_POSTFIELDS, $json_body);
curl_setopt($connection, CURLOPT_VERBOSE, 1);
$response = curl_exec($connection);
$error = curl_error($connection);
print $error;
echo $response;
curl_close ($connection); 

?>

