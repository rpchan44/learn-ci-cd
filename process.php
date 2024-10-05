<?php
require 'src/loan.class.php';
$loan = new loan;

if ( isset($_POST['amount']) && (int)isset($_POST['amount']) > 0 ) {

	$amount = strip_tags($_POST['amount']);
	$firstname = strip_tags($_POST['firstname']);
	$lastname = strip_tags($_POST['lastname']);
	$total = $loan->computeloan($amount);
	$monthly = $total / 12;
	print "<center><h1>Mr/Ms $firstname $lastname</h1><center></br>";
	print "<center><h1>Your total loan + 20% interest is $total your monthly dues in a year is $monthly/</h1></center>";
} else {
        header("location: /");
}

?>
