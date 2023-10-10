<?php
include "SavingsAccount.php";
$acc = new SavingsAccount(1001, "name", 10);

echo $acc . "<br>";
$acc->setBalance(30);
echo $acc . "<br>";
$acc->setAccountName("alma");
echo $acc . "<br>";
$acc->setAccountNumber(2002);
echo $acc . "<br>";
