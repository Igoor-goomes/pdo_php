<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

// padrão de conexão ao PDO
$databasePath = __DIR__.'/banco.sqlite';
$pdo = new PDO('sqlite:'.$databasePath);

$statement = $pdo->query('SELECT * FROM students;');
$studantDataList = $statement->fetchAll(PDO::FETCH_ASSOC);
$studentList = [];

var_dump($studantDataList); exit();

foreach ($studantDataList as $studentData) {
    $studentList[] = new Student(
        $studentData['id'], 
        $studentData['name'], 
        new DateTimeImmutable($studentData['birth_date'])
    );
}

//echo $studantList[0]['name'];
var_dump($studentList);
