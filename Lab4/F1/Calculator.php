<?php

namespace F1;
class Calculator
{
    private float $val1;
    private float $val2;

    /**
     * @param float $val1
     * @param float $val2
     */
    public function __construct(float $val1, float $val2)
    {
        $this->val1 = $val1;
        $this->val2 = $val2;
    }

    public function getVal1(): float
    {
        return $this->val1;
    }

    public function setVal1(float $val1): void
    {
        $this->val1 = $val1;
    }

    public function getVal2(): float
    {
        return $this->val2;
    }

    public function setVal2(float $val2): void
    {
        $this->val2 = $val2;
    }


    public function add(): float
    {
        return $this->getVal1() + $this->getVal2();
    }

    public function subtract(): float
    {
        return $this->getVal1() - $this->getVal2();
    }

    public function multiply(): float
    {
        return $this->getVal1() * $this->getVal2();
    }

    public function divide(): float|string
    {
        if ($this->getVal2() == 0) {
            return "Division Error!";
        }
        return $this->getVal1() / $this->getVal2();
    }

    public function __toString(): string
    {
        return $this->getVal1() . " " . $this->getVal2();
    }

    public function __get(string $property)
    {
        return $this->$property;
    }

    public function __set(string $property, $value): void
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }

}

/*
$calc1 = new Calculator(5, 6);
echo $calc1->val1 . "<br>";
$calc1->val1 = 65;
echo $calc1->val1 . "<br>";

var_dump($calc1);
*/
