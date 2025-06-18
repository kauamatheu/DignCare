<?php
    $host = "localhost";
    $dbname = "db_digncare";
    $usuario = "root";
    $senha = "123456";

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $usuario, $senha);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Erro na conexão: " . $e->getMessage());
    }
?>