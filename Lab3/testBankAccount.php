<?php
include "BankAccount.php";
    $acc = new BankAccount(1001, "name");

    echo $acc . "<br>";
    $acc->setBalance(30);
    echo $acc . "<br>";
    $acc->setAccountName("alma");
    echo $acc . "<br>";
    $acc->setAccountNumber(2002);
    echo $acc . "<br>";


