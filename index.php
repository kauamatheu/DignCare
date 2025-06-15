<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DignCare</title>
    <link rel="icon" type="imagem/png" href="/img/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/index.css">
    <script src="/JS/transicao.js" defer></script>
</head>

<body class="fundo">
   
    <!-- Início do cabeçado da página -->

    <header>
        <!-- Barra de navegação -->

        <nav class="navbar borda px-1"> 
            
            <!-- Logo do site -->

            <div class="nav">
                <a href="/index.php"><img class="mexe" src="/img/logo_horizontal.png" alt="logo" width="225"></a>
            </div>

            <!-- Links de navegação -->

            <div class="nav justify-content-center texto">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link mexe" href="html/como_trabalhamos.php">Como trabalhamos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mexe" href="html/depoimentos.php">Depoimentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mexe" href="html/exemplos.php">Exemplos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mexe" href="html/sobre.php">Sobre nós</a>
                    </li>
                </ul>
            </div>

            <!-- Botões de login e cadastro -->

            <div class="nav justify-content-end mx-4">
                <a href="html/login.php"><button type="button" class="btn btn-dark mx-1">Entrar</button></a>
                <a href="html/cadastro.php"><button type="button" class="btn btn-primary mx-1">Criar Conta</button></a>
            </div>
        </nav>
    </header>

    <!-- Fim do cabeçado da página -->



    <!-- Início da seção principal de avaliação -->
    <section class="texto grid">

        <!-- Imagem -->
        <div>
            <img class="sombra" src="img/jardinagem_tela_prin.jpg" alt="imagem Jardinagem" width="450">
            <p class="py-3">★★★★★ Mais de 2.000 avaliações 5 estrelas</p>
        </div>

        <!-- Textos principal de destaque -->
        <div>
            <h1 class="textsize">Ache a pessoa certa </h1>
            <h1 class="textsize">para o seu serviço</h1>
            <h1 class="textsize">Consiga o serviço certo</h1>
            <h1 class="textsize">para você</h1>
        </div>

        <!-- Botão de cadastro -->
        <div class="full-row">
            <a href="html/cadastro.php"><button type="button" class="btn btn-primary">Comece agora</button></a>
        </div>

    </section>
    <!-- Fim da seção principal -->


    <!-- Início do rodapé da página -->

    <footer class="texto">
            <p class="mexe">&copy; Direitos Autorais Reservados Por DignCare.</p>
            <p ><a class="mexe" href="https://maps.app.goo.gl/9GVxGAeCZJMZK6yYA" target="_blank">📍 Nossa sede</a></p>
            <p ><a class="mexe" href="/html/sobre.php">Sobre nós</a></p>
            <p ><a class="mexe" href="mailto:digncare@gmail.com">✉ Entre em contato conosco!</a></p>
    </footer>

    <!-- Fim do rodapé da página -->
</body>

</html>