<?php

require_once 'vendor/autoload.php';

// padrão de conexão ao PDO
$databasePath = __DIR__.'/banco.sqlite';
$pdo = new PDO('sqlite:'.$databasePath);

$statement = $pdo->query('SELECT * FROM students;');
$studantList = $statement->fetchAll(PDO::FETCH_ASSOC);

//echo $studantList[0]['name'];
var_dump($studantList);
