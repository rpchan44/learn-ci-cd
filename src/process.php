<?php
require 'loan.class.php';
$loan = new loan;

if ( isset($_POST['amount']) && (int)isset($_POST['amount']) > 0 ) {
	$amount = filter_var($_POST['amount'], FILTER_SANITIZE_NUMBER_INT);
	$firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
	$lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
	$mail = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
	$computation = $loan->computeloan($amount);
	$amount = number_format($amount, 2, '.', '');
	$total = number_format($computation, 2, '.', '');
	$monthly = number_format($total / 12, 2, '.', '');
	print "<p><center><h1>Thank you! $firstname $lastname</h1><center></br>";
	print "Principal amount is $amount to be amortize + 20% interest is $total</br>";
	print "Your monthly dues per month is $monthly within a year!</br>";
	print "</br>Loan proposal will be sent to your e-mail $mail</center></p>";
} else {
        header("location: /");
}

?>
