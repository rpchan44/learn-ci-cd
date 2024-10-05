<?php
require 'src/loan.class.php';
$loan = new loan;
$total = $loan->computeloan(500);
print "You loan 500 pesos and you are about to pay $total with interest";
?>