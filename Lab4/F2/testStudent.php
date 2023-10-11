<?php

namespace F2;

include "Student.php";
$student1 = new Student(1, "Elso", "Elso");
$student2 = new Student(2, "Masodik", "Masodik");

$clone1 = clone $student1;
$clone2 = clone $student2;
