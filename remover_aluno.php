<?php

require_once 'vendor/autoload.php';

// padrão de conexão ao PDO
$databasePath = __DIR__.'/banco.sqlite';
$pdo = new PDO('sqlite:'.$databasePath);

$preparedStatement = $pdo->prepare('DELETE FROM students WHERE id = ?;');
$preparedStatement->bindValue(1,4, PDO::PARAM_INT);

var_dump($preparedStatement->execute());