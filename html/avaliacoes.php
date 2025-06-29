<?php
session_start();
require_once '../php/conecta_bd.php';

$usr_id = $_SESSION['usr_id'] ?? null;
$usr_tipo = $_SESSION['usr_tipo'] ?? null;

if (!$usr_id || !$usr_tipo) {
    echo "Usuário não autenticado.";
    exit;
}

if ($usr_tipo === 'Contratante') {
    // Contratante avaliando o prestador
    $stmt = $pdo->prepare("
        SELECT s.servico_id, u.usr_nome, u.usr_id AS id_prestador
        FROM servico s
        JOIN usuario u ON u.usr_id = s.user_id_contratado
        WHERE s.user_id_contratante = :id
        ORDER BY s.servico_id DESC
        LIMIT 1
    ");
} else {
    // Prestador avaliando o contratante
    $stmt = $pdo->prepare("
        SELECT s.servico_id, u.usr_nome, u.usr_id AS id_contratante
        FROM servico s
        JOIN usuario u ON u.usr_id = s.user_id_contratante
        WHERE s.user_id_contratado = :id
        ORDER BY s.servico_id DESC
        LIMIT 1
    ");
}

$stmt->execute(['id' => $usr_id]);
$dados = $stmt->fetch();

if (!$dados) {
    echo "Nenhum serviço encontrado.";
    exit;
}

// Definir dinamicamente o nome e ID da pessoa que será avaliada
$nomeAvaliado = $dados['usr_nome'];
$idAvaliado = $usr_tipo === 'Contratante' ? $dados['id_prestador'] : $dados['id_contratante'];
$servico_id = $dados['servico_id'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>avaliações - DignCare</title>
    <link rel="stylesheet" href="/CSS/avaliaçoes.css">
    <link rel="icon" type="imagem/png" href="/img/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/starability/starability-minified/starability-all.min.css">
    <script src="/JS/transicao.js" defer></script>
</head>

<body class="fundo">
    <!-- Início do cabeçalho da página com barra de navegação -->
    <header class="borda">
        <nav class="navbar">

            <!-- Logo do site com link para a página inicial -->
            <div class="justify-content-start">
                <a href="/html/home.php">
                    <img class="mexe" src="/img/logo_horizontal.png" alt="logo" width="225">
                </a>
            </div>
            <div class="menu-icon" type="sidbar" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="bi bi-list fs-3 iconscss"></i></div>

            <div class="offcanvas offcanvas-end fundo" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title textcolor" id="offcanvasRightLabel">Daniel Rodrigues</h5>
              <div type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></div>
            </div>
            <div class="offcanvas-body">
              <a class="azul" href="/html/perfil.php">Perfil</a><br>
              <a class="azul" href="/html/avaliacoes.php">Avaliações</a>
              <p>______________________________________________________</p>
              <a class="azul" href="/html/depoimentos.php">Depoimentos</a><br>
              <a class="azul" href="/html/sobre.php">Sobre Nós</a>
              <p>______________________________________________________</p>
              <a class="azul" href="/index.php">Sair da Conta</a>
            </div>
            </div>
        </nav>
    </header>
    <!-- Fim do cabeçalho -->

    <!-- Início da seção principal de avaliação -->
    <section class="fundodiv margem">

        <!-- Título da seção -->
        <div class="titulo">
            <h1>Avalie:</h1>
        </div>

        <!-- Avatar do prestador de serviço -->
        <div class="centro">
            <img src="/img/avatar.webp" alt="avatar">
        </div>

        <!-- Nome do prestador -->
        <div class="centro" style="margin-bottom: 20px;">
            <h1><?= htmlspecialchars($nomeAvaliado) ?></h1>
        </div>

        <!-- Formulário com estrelas para avaliação -->
        <div class="centroitem">
            <form action="/php/cadastra_avaliações.php" method="post">
                 <input type="hidden" name="avaliado_id" value="<?= $idAvaliado ?>">
                <fieldset class="starability-basic">

                    <input type="radio" id="rate1" name="rating" value="1" />
                    <label for="rate1" title="1 estrela">1 estrela</label>

                    <input type="radio" id="rate2" name="rating" value="2" />
                    <label for="rate2" title="2 estrelas">2 estrelas</label>

                    <input type="radio" id="rate3" name="rating" value="3" />
                    <label for="rate3" title="3 estrelas">3 estrelas</label>

                    <input type="radio" id="rate4" name="rating" value="4" />
                    <label for="rate4" title="4 estrelas">4 estrelas</label>

                    <input type="radio" id="rate5" name="rating" value="5" />
                    <label for="rate5" title="5 estrelas">5 estrelas</label>

                </fieldset>
                <div class="centro">
                    <button id="btn" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>

        <!-- Botão de envio da avaliação -->


    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>

    <footer class="texto">
            <p class="mexe">&copy; Direitos Autorais Reservados Por DignCare.</p>
            <p ><a class="mexe" href="https://maps.app.goo.gl/9GVxGAeCZJMZK6yYA" target="_blank">📍 Nossa sede</a></p>
            <p ><a class="mexe" href="/html/sobre.php">Sobre nós</a></p>
            <p ><a class="mexe" href="mailto:digncare@gmail.com">✉ Entre em contato conosco!</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous">
    </script>

</body>

</html>