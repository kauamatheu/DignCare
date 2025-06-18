<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require_once 'conecta_bd.php';

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $idade = $_POST['nascimento'];
    $tipo = $_POST['tipo'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);


    // Conexão com o banco de dados 
    try {
        $sql = "INSERT INTO usuario (usr_nome, usr_cpf, usr_idade, usr_tipo, usr_email, usr_senha) VALUES (:nome, :cpf, :idade, :tipo, :email, :senha)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['nome' => $nome,'cpf' => $cpf,'idade' => $idade,'tipo' => $tipo,'email' => $email,'senha' => $senha]);

        // Redireciona para a tela inicial (home.php)
        header("Location: /html/home.php");

        exit; 
    } catch (PDOException $e) {
        echo "Erro ao cadastrar: " . $e->getMessage();
    }
} else {
    echo "Acesso inválido.";
}
?>