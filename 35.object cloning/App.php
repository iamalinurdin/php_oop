<?php

require_once __DIR__ . '/app/Student.php';

use App\Student;

$student1 = new Student;
$student1->id = '0001';
$student1->name = 'john';
$student1->value = 100;

var_dump($student1);

$student2 = clone $student1;

var_dump($student2);