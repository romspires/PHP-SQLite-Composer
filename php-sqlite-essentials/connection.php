<?php
$pdo = new PDO('mysql:host=localhost;dbname=phpdb','root','131755mysql');

echo "Connected" . PHP_EOL;

$createTableSql = 'CREATE TABLE IF NOT EXISTS teachers(
    id INTEGER PRIMARY KEY,
    name VARCHAR(50),
    birth_date DATE
)';
$pdo->exec($createTableSql);
echo "Tabela criada." . PHP_EOL;

$insertTeacherSql = 'INSERT INTO teachers (id, name, birth_date) VALUES (:id,:name,:bdate)';
$stmt = $pdo->prepare($insertTeacherSql);
$stmt->bindValue(':id',1);
$stmt->bindValue(':name','Roms Pires');
$stmt->bindValue(':bdate','1984-04-28');

if($stmt->execute()){
    echo "Professor criado." . PHP_EOL;
}