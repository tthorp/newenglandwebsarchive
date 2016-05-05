<?php 
//load the configuration file and the templated elements of the page
require('/var/www/providencepixelworks.com/inc/config.php');
define('TITLE',"Contact ");//what is the name of the page?
define('BODY','contact');
head();
?>
<h1>Contact Me</h1>
<p>Providence Pixelworks<br />
7 Central Ave.<br />
North Providence, RI 02911<br />
(401) 300-1072<br />
tim@providencepixelworks.com</p>
<?php

if(isset($_POST['submit'])){
	//send through sendgrid's Web API
	require_once('web-passwords.php');
	$sg_api_url = "https://api.sendgrid.com/api/mail.send.json";

	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = "Message from providencepixelworks.com: " . $_POST['subject'];
	$message = $_POST['message'];
	$toaddress = "tim@newenglandwebs.com";
	$toname = "Tim Thorp";
	$emailbody = "Message from web visitor:\r$message";
	
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL, $sg_api_url);
	curl_setopt($ch,CURLOPT_POST, TRUE);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($ch,CURLOPT_POSTFIELDS, "to=$toaddress&toname=$toname&subject=$subject&text=$emailbody&from=$email&api_user=NEWsender&api_key=".SENDGRID);
	$response = json_decode(curl_exec($ch), TRUE);
	curl_close($ch);

	if($response['message'] == "success"){
		echo "<p>Thank you for your inquiry.</p>";
	}else{
		echo "<p>An error occurred while sending your inquiry. Below is a copy of what you submitted. Please contact us directly.</p>";
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
	}
}else{?>
<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
<ul class="formlist">
	<li>
		<label for="name">Name <span class="required">(required)</span></label>
		<input type="text" name="name" size="50" />
	</li>
	<li>
		<label for="email">Email</label>
		<input type="text" name="email" size="50" />
	</li>
	<li>
		<label for="subject">Subject <span class="required">(required)</span></label>
		<input type="text" name="subject" />
	</li>
	<li>
		<label for="message">Comment <span class="required">(required)</span></label>
		<textarea name="message" cols="50" rows="5"></textarea>
	</li>
	<li>
		<input type="submit" name="submit" value="Send Message" />
	</li>
</form>
<?php } ?>

<?=foot()?>

