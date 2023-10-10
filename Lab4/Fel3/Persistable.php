<?php

//namespace Lab4\Fel3;

namespace Fel3;
interface Persistable
{
    public function save();

    public function load();

    public function delete();
}
