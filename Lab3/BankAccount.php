<?php

class BankAccount
{
    protected int $accountNumber;
    protected string $accountName;
    protected float $balance = 0;

    /**
     * @param int $accountNumber
     * @param string $accountName
     */
    public function __construct(int $accountNumber, string $accountName)
    {
        $this->accountNumber = $accountNumber;
        $this->accountName = $accountName;
    }

    public function getAccountNumber(): int
    {
        return $this->accountNumber;
    }

    public function setAccountNumber(int $accountNumber): void
    {
        $this->accountNumber = $accountNumber;
    }

    public function getAccountName(): string
    {
        return $this->accountName;
    }

    public function setAccountName(string $accountName): void
    {
        $this->accountName = $accountName;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function setBalance(float $balance): void
    {
        $this->balance = $balance;
    }


    public function withdraw($value): void
    {
        if ($value > $this->getBalance()) {
            echo "Not enough money!";
        } else {
            $this->setBalance($this->getBalance() - $value);
        }
    }

    public function deposit($value): void
    {
        $this->setBalance($this->getBalance() + $value);
    }

    public function __toString(): string
    {
        return $this->getAccountName() . " " . $this->getAccountNumber() . " " . $this->getBalance();
    }
}