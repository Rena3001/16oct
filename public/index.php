<?php

require_once '../app/Payment/pasha/Transaction.php';

$transaction=new Transaction();

$transaction->balance=15;
$transaction->description='hello';
var_dump($transaction->addBalance(5));

?>