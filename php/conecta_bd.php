<?php
    $dsn = 'mysql:host=localhost;dbname=db_digncare;charset=utf8';
    $usuario = 'host';
    $senha = 'Dign123!';

    try {
        $pdo = new PDO($dsn, $usuario, $senha);
        // Ativa erros como exceções
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Erro na conexão: " . $e->getMessage();
    }
?>