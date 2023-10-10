<?php
include "BankAccount.php";

class SavingsAccount extends BankAccount
{
    private int $interestRate;

    /**
     * @param int $interestRate
     */
    public function __construct(int $accountNumber, string $accountName, int $interestRate)
    {
        parent::__construct($accountNumber, $accountName, $interestRate);
        $this->interestRate = $interestRate;
    }

    public function getInterestRate(): int
    {
        return $this->interestRate;
    }

    public function setInterestRate(int $interestRate): void
    {
        $this->interestRate = $interestRate;
    }

    public function calculateInterest(): float
    {
        return $this->getBalance() + $this->getBalance() * $this->getInterestRate();
    }

    public function __toString(): string
    {
        return "name:" . $this->getAccountName() . "<br>number:" . $this->getAccountNumber() . "<br>balance:"
            . $this->getBalance() . " " . $this->getInterestRate() . " " . $this->calculateInterest();
    }

}