<?php
require 'src/loan.class.php';
$loan = new loan;

if (isset($_POST['amount'] && isset($_POST['amount'] > 0 )) {

	$amount = $_POST['amount'];
	$total = $loan->computeloan($amount);
	print "<center><h1>You loan $total pesos and you are about to pay $total with 20% interest</h1></center>";
} else {
        header("location: /");
}

?>
