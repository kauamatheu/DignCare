<?php
  include('../php/protecao_sessao.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="icon" type="imagem/png" href="/img/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="/CSS/perfil_configuracoes.css">
    <script src="/JS/transicao.js" defer></script>
    <script src="/JS/perfil.js" defer></script>
</head>
<body class="fundo">
    <!-- Logo clicável centralizada -->
    <header class="borda">
        <nav class="container centralizar py-2">
            <a class="centro" href="home.php">
                <img class="mexe" src="../img/logo_horizontal.png" alt="logo" width="255">
            </a>
        </nav>
    </header>

    <section class="container grid">
        
        <div class="centralizar">
            <img class="redondo" src="/img/avatar.webp" alt="" width="250">
        </div>
        <div>
            <div class="form-group">
                <label for="nome">Nome de perfil:</label>
                <?php
                    echo '<h3 class="offcanvas-title textcolor" id="offcanvasRightLabel">' . $_SESSION["usr_nome"] . '</h3>';
                ?>
            </div>
            <br>
            <h3>Avaliações</h3>
            <h3>⭐⭐⭐⭐⭐</h3>
        </div>
        <div class="full-row">
            <h2>Galeria</h2>
            <div class="gallery">
              <!-- Fotos da galeria -->
              <div class="gallery-item"><img src="/img/cuidadora.png" alt="Foto 1"></div>
              <div class="gallery-item"><img src="/img/babá.png" alt="Foto 2"></div>
              <div class="gallery-item"><img src="/img/Limpeza.png" alt="Foto 3"></div>
              <div class="gallery-item"><img src="/img/manutencao.png" alt="Foto 3"></div>
            </div>
        </div>
        <div class="full-row">
            <form action="/php/desc_perfil.php" method="post">
                <label for="mensagem">Editar Mensagem:</label>
                <textarea name="descricao" class="form-control" rows="5"><?= htmlspecialchars($_SESSION["usr_descricao"] ?? '') ?></textarea>
                <br>
                <div class="full-row centralizar">
                    <button type="submit" class="sair">Salvar</button>
                    <a  href="/html/perfil.php"><button class="voltar"> Voltar </button></a>
                </div>
            </form>
        </div>

    </section>

    <footer class="py-4 mt-auto texto">
        <div class="fs-6">
            <p class="mexe">&copy; Direitos Autorais Reservados Por DignCare.</p>
            <p ><a class="mexe" href="https://maps.app.goo.gl/9GVxGAeCZJMZK6yYA" target="_blank">📍 Nossa sede</a></p>
            <p ><a class="mexe" href="/html/sobre.php">Sobre nós</a></p>
            <p ><a class="mexe" href="mailto:digncare@gmail.com">✉ Entre em contato conosco!</a></p>
        </div>
    </footer>
    
</body>
</html>