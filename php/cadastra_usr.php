<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require_once 'conecta_bd.php';

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

        if ($cpfExiste) {
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

        // Inserção
        $sql = "INSERT INTO usuario (usr_nome, usr_cpf, usr_idade, usr_tipo, usr_email, usr_senha) 
                VALUES (:nome, :cpf, :idade, :tipo, :email, :senha)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'nome' => $nome,
            'cpf' => $cpf,
            'idade' => $idade,
            'tipo' => $tipo,
            'email' => $email,
            'senha' => $senha
        ]);

        $stmt = $pdo->prepare("SELECT * FROM usuario WHERE usr_email = :email");
        $stmt->execute(['email' => $email]);
        $usuario = $stmt->fetch();

        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['usr_id'] = $usuario['usr_id'];
        $_SESSION['usr_nome'] = $usuario['usr_nome'];
        $_SESSION['usr_tipo'] = $usuario['usr_tipo'];

        if ($_SESSION['usr_tipo'] == "Contratante") {
            header("Location: /html/home.php");
        } else {
            header("Location: /html/home_prestador.php");
        }
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
