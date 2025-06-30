<?php

// Verifica o metodo de requisição, aceita apenas se for tipo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Integração com o Banco de Dados
    require_once 'conecta_bd.php';

    // Declaração de variaveis
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $idade = $_POST['nascimento'];
    $tipo = ($_POST['tipo'] == "0") ? "Prestador" : "Contratante";
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    try {
        // Verifica se CPF já existe
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM usuario WHERE usr_cpf = :cpf");
        $stmt->execute(['cpf' => $cpf]);
        $cpfExiste = $stmt->fetchColumn();

        // Se o CPF existir ele retorna para o cadastro com um erro na URL
        if ($cpfExiste) {
            header("Location: /html/cadastro.php?erro=cpf");
            exit;
        }

        // Verifica se EMAIL já existe
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM usuario WHERE usr_email = :email");
        $stmt->execute(['email' => $email]);
        $emailExiste = $stmt->fetchColumn();
            
        // Se o email existir ele retorna para o cadastro com um erro na URL
        if ($emailExiste) {
            header("Location: /html/cadastro.php?erro=email");
            exit;
        }

        // Prepara para inserir os dados dentro do banco de dados tomando cuidado com SQL Injection
        $sql = "INSERT INTO usuario (usr_nome, usr_cpf, usr_idade, usr_tipo, usr_email, usr_senha) VALUES (:nome, :cpf, :idade, :tipo, :email, :senha)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['nome' => $nome, 'cpf' => $cpf, 'idade' => $idade, 'tipo' => $tipo, 'email' => $email, 'senha' => $senha]);

        // Faz a pesquisa do usuario pelo email que acabou de ser cadastrado para criar a session
        $stmt = $pdo->prepare("SELECT * FROM usuario WHERE usr_email = :email");
        $stmt->execute(['email' => $email]);
        $usuario = $stmt->fetch();

        // Se a session não estiver setada ele start a session
        if (!isset($_SESSION)) {
            session_start();
        }

        // Criação da session
        $_SESSION['usr_id'] = $usuario['usr_id'];
        $_SESSION['usr_nome'] = $usuario['usr_nome'];
        $_SESSION['usr_cpf'] = $usuario['usr_cpf'];
        $_SESSION['usr_idade'] = $usuario['usr_idade'];
        $_SESSION['usr_tipo'] = $usuario['usr_tipo'];
        $_SESSION['usr_email'] = $usuario['usr_email'];

        //Separação de qual home o usuario vai acessar com base no seu tipo
        header("Location: /html/cadastra_endereco.php");

        exit;

    } catch (PDOException $e) {

        // Mostra erro diretamente na tela (modo desenvolvimento)
        echo "<h3>Erro ao cadastrar usuário:</h3>";
        echo "<pre>" . $e->getMessage() . "</pre>";
        error_log("Erro ao cadastrar: " . $e->getMessage());
        
        // Mostra dados postados (opcional)
        echo "<h4>Dados recebidos:</h4>";
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    }

} else {
    echo "Acesso inválido.";
}
?>
