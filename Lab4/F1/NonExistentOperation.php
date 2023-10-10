<?php

namespace F1;

class NonExistentOperation extends \Exception
{
    public function myErrorMessage(): string
    {
        return "Non existent operation!";
    }
}