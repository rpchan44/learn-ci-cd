<?php
require 'loan.class.php';
$loan = new loan;

if ( isset($_POST['amount']) && (int)isset($_POST['amount']) > 0 ) {
	$amount = (float)filter_var($_POST['amount'], FILTER_SANITIZE_STRING);
	$firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
	$lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
	$computation = $loan->computeloan($amount);
	$amount = number_format($amount, 2, '.', '');
	$total = number_format($computation, 2, '.', '');
	$monthly = number_format($total / 12, 2, '.', '');
	print "<center><h1>Mr/Ms $firstname $lastname</h1><center></br>";
	print "<center>Principal amount is $amount to be amortize + 20% interest is $total</center></br>";
	print "<center>Your monthly dues per month is $monthly within a year!</center>";
} else {
        header("location: /");
}

?>
