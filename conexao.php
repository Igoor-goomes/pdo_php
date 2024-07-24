<?php

// padrão de conexão ao PDO
$databasePath = __DIR__.'/banco.sqlite';
$pdo = new PDO('sqlite:'.$databasePath);

echo 'Sucesso na conexão...';

// executando uma query
$pdo->exec('CREATE TABLE students (id INTEGER PRIMARY KEY, name TEXT, birth_date TEXT );');