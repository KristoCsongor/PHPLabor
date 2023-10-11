<?php

//namespace Lab4\Fel4;


//ToDo

$customer = new Customer('Bob');
echo $customer->getName();

$product = new Product();

$loggers = [
    new Logger(),
    new DatabaseLogger()
];

$publish_at = new \DateTime();

echo $publish_at->format('Y-m-d H:i:s');
