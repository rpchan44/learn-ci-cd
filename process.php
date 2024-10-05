<?php
require 'src/loan.class.php';
$loan = new loan;

if ( isset($_POST['amount']) && (int)isset($_POST['amount']) > 0 ) {

	
	$amount = (float)filter_var($_POST['amount'], FILTER_SANITIZE_STRING);
	$firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
	$lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
	$total = round($loan->computeloan($amount));
	$monthly = $total / 12;
	print "<center><h1>Mr/Ms $firstname $lastname</h1><center></br>";
	print "<center>Principal amount is $amount to be amortize + 20% interest is $total</center></br>";
	print "<center>Your monthly dues per month is $monthly within a year!</center>";
} else {
        header("location: /");
}

?>
