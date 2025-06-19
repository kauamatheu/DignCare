<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require_once 'conecta_bd.php';

    $email = $_POST['email'];
    $senha = $_POST['senha']; 

    try {
        // Busca o usuário pelo email
        $sql = "SELECT * FROM usuario WHERE usr_email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['email' => $email]);
        $usuario = $stmt->fetch();

        // Se encontrou e a senha bate
        if ($usuario && password_verify($senha, $usuario['usr_senha'])) {
            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['usr_id'] = $usuario['usr_id'];
            $_SESSION['usr_nome'] = $usuario['usr_nome'];
            $_SESSION['usr_tipo'] = $usuario['usr_tipo'];
            
            if($_SESSION['usr_tipo'] == "Contratante") {
                header("Location: /html/home.php");
                exit;
            } else {
                header("Location: /html/home_prestador.php");
                exit;
            }

        } else {
            header("Location: /html/login.php?erro=email");
            exit;
        }   

    } catch (PDOException $e) {
        error_log($e->getMessage());
        echo "Erro ao processar o login. Tente novamente mais tarde.";
    }
} else {
    echo "Acesso inválido.";
}
?>