<?php
require 'src/loan.class.php';
$loan = new loan;
$total = $loan->computeloan(500);
print "<center><h1>You loan 500 pesos and you are about to pay $total with 20% interest</h1></center>";
?>