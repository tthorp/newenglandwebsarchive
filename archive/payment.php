<?php 
//load the configuration file and the templated elements of the page
require('/var/www/providencepixelworks.com/inc/config.php');
require_once('/var/www/providencepixelworks.com/inc/stripe/Stripe.php');
define('TITLE', 'Secure Payment Form');//what is the name of the page?
define('BODY','payment');
head();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$errors = array();
	if (isset($_POST['stripeToken'])) {
		$token = $_POST['stripeToken'];
		try {
			Stripe::setApiKey(PPW_STRIPE_PRIVATE_KEY_TEST);
			$charge = Stripe_Charge::create(array(
				'amount' => 1000, // Amount in cents!
				'currency' => 'usd',
				'card' => $token,
				'description' => $email
			));
		} catch (Stripe_CardError $e) {
		}
	} else {
		$errors['token'] = 'The order cannot be processed. You have not been charged. Please confirm that you have JavaScript enabled and try again.';
	}
} else {

?>
<h1><?=TITLE?></h1>
<p>Thank you for visiting my secure payment page. </p>
<form id="payment-form" action="payment.php" method="POST">
	<div id="payment-errors"></div>
	<ul>
		<li>
			<label>amount</label>
			<input class="text" id="amount" spellcheck="false" />
		</li>
		<li>
			<label>first name on card</label>
			<input class="text" id="first-name" spellcheck="false" />
		</li>
		<li>
			<label>last name on card</label>
			<input class="text" id="last-name" spellcheck="false" />
		</li>
		<li>
			<label>billing address</label>
		</li>
		<li>
			<label>Card Number</label>
			<input type="text" size="20" autocomplete="off" class="card-number input-medium">
			<span class="help-block">Enter the number without spaces or hyphens.</span>
		</li>
		<li>
			<label>CVC</label>
			<input type="text" size="4" autocomplete="off" class="card-cvc input-mini">
		</li>
		<li>
			<label>Expiration (MM/YYYY)</label>
			<input type="text" size="2" class="card-expiry-month input-mini">
			<span> / </span>
			<input type="text" size="4" class="card-expiry-year input-mini">
		</li>
		<li>
			<button type="submit" class="btn" id="submitBtn">Submit Payment</button>
		</li>
	</ul>
</form>
<?php } ?>
<?=foot()?>

