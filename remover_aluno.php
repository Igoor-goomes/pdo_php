<?php

use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

// padrão de conexão ao PDO
$pdo = ConnectionCreator::createConnectio();

$preparedStatement = $pdo->prepare('DELETE FROM students WHERE id = ?;');
$preparedStatement->bindValue(1,4, PDO::PARAM_INT);

var_dump($preparedStatement->execute());