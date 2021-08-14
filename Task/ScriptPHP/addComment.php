<?php

require("../confdb/db.php");

$Comment = htmlspecialchars($_POST["Comment"],ENT_QUOTES, "UTF-8");
$Name =  htmlspecialchars($_POST["Name"],ENT_QUOTES, "UTF-8");


$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);


$sql = 'INSERT INTO users  VALUES(:id,:Name,:Comment)';
$query = $pdo->prepare($sql);//Создание подготовленного запроса
$query->execute(['id'=> NULL,'Name'=>$Name,'Comment'=>$Comment ]);

header('Location: /');

?>