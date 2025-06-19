<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require_once 'conecta_bd.php';

    $nome = $_POST['nome'];

    $cpf = $_POST['cpf'];

    $idade = $_POST['nascimento'];

    $tipo = ($_POST['tipo'] == "0") ? "Prestador" : "Contratante";

    $email = $_POST['email'];

    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);


    // Conexão com o banco de dados 
    try {
        // Verifica se CPF já existe
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM usuario WHERE usr_cpf = :cpf");
        $stmt->execute(['cpf' => $cpf]);
        $cpfExiste = $stmt->fetchColumn();

        if ($cpfExiste) {
            // Redireciona com mensagem de erro via query string
            header("Location: /html/cadastro.php?erro=cpf");
            exit;
        }

        // Verifica se EMAIL já existe
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM usuario WHERE usr_email = :email");
        $stmt->execute(['email' => $email]);
        $emailExiste = $stmt->fetchColumn();
            
        if ($emailExiste) {
            header("Location: /html/cadastro.php?erro=email");
            exit;
        }


        $sql = "INSERT INTO usuario (usr_nome, usr_cpf, usr_idade, usr_tipo, usr_email, usr_senha) VALUES (:nome, :cpf, :idade, :tipo, :email, :senha)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['nome' => $nome,'cpf' => $cpf,'idade' => $idade,'tipo' => $tipo,'email' => $email,'senha' => $senha]);

        //Redireciona para a tela inicial (home.php)
        if($_POST['tipo'] == 0){
            header("Location: /html/home_prestador.php");
            exit;
        }else{
            header("Location: /html/home.php");
            exit; 
        }

    } catch (PDOException $e) {
        error_log($e->getMessage()); // Log para você
        echo "Erro ao processar o cadastro. Tente novamente mais tarde.";
    }
} else {
    echo "Acesso inválido.";
}
?>