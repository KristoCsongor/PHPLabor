<?php

namespace F1;

//use F1\Calculator;

class AdvCalculator extends Calculator
{

    private array $allowedFunctions = array("pow", "sqrt", "exp");
    public function getAllowedFunctions() {
        return $this->allowedFunctions;
    }

    public function __construct(float $val1, float $val2)
    {
        parent::__construct($val1, $val2);
    }

    public function __call(string $name, array $arguments)
    {
        if(!in_array($name, $this->getAllowedFunctions())){
            throw new NonExistentOperation();
        }



        $functionArguments = array($this->val1);
        if ($name === "pow") {
            $functionArguments = array($this->val1, $this->val2);
        }
        return call_user_func_array($name, $functionArguments);
    }

    /*
    public function pow()
    {

    }


    public function sqrt()
    {

    }

    public function exp()
    {

    }
    */

}