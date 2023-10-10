<?php

    $greetText = "Hello there, ";

    $greeting = function(string $name) use ($greetText): void {
        global $greetText;
        echo "$greetText $name!";
    };

    $greeting("Firstname Lastname");
