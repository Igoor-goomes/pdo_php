<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    'Igor Gomes',
    new \DateTimeImmutable('1996-11-03')
);

echo $student->age();
