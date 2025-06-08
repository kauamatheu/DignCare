<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DignCare</title>
    <link rel="icon" type="imagem/png" href="img/icon.png">
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

    </section><!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>avaliações - DignCare</title>
    <link rel="stylesheet" href="/CSS/avaliaçoes.css">
    <link rel="icon" type="imagem/png" href="img/icon.png">
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

            <!-- Botão centralizado para voltar à página inicial -->
            <div class="justify-content-center">
                <a href="/html/home.php">
                    <button type="button" class="btn btn-primary mx-1">Voltar para o Início</button>
                </a>
            </div>

            <!-- Menu dropdown no canto direito com opções de navegação -->
            <div class="dropdown justify-content-end">
                <button class="btn btn-black dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-list fs-3 iconscss">
                        <i class="bi bi-person-circle i fs-3"></i>
                    </i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end fundo textcolor">
                    <li><a class="dropdown-item textcolor" href="#">Perfil</a></li>
                    <li><a class="dropdown-item textcolor" href="/html/avaliacoes.php">Avaliações</a></li>
                    <li><a class="dropdown-item textcolor" href="#">Configurações</a></li>
                    <li><a class="dropdown-item textcolor" href="#">FAQ/Dúvidas Frequentes</a></li>
                    <li><a class="dropdown-item textcolor" href="#">Suporte</a></li>
                    <li><a class="dropdown-item textcolor" href="/html/depoimentos.php">Depoimentos</a></li>
                    <li><a class="dropdown-item textcolor" href="/html/sobre.php">Sobre Nós</a></li>
                    <li><a class="dropdown-item textcolor" href="/index.php">Sair da Conta</a></li>
                </ul>
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
            <h1>Daniel Rodrigues</h1>
        </div>

        <!-- Formulário com estrelas para avaliação -->
        <div class="centroitem">
            <form>
                <fieldset class="starability-basic">

                    <input type="radio" id="rate5" name="rating" value="1" />
                    <label for="rate5" title="5 estrelas">5 estrelas</label>

                    <input type="radio" id="rate4" name="rating" value="2" />
                    <label for="rate4" title="4 estrelas">4 estrelas</label>

                    <input type="radio" id="rate3" name="rating" value="3" />
                    <label for="rate3" title="3 estrelas">3 estrelas</label>

                    <input type="radio" id="rate2" name="rating" value="4" />
                    <label for="rate2" title="2 estrelas">2 estrelas</label>

                    <input type="radio" id="rate1" name="rating" value="5" />
                    <label for="rate1" title="1 estrela">1 estrela</label>

                </fieldset>
            </form>
        </div>

        <!-- Botão de envio da avaliação -->
        <div class="centro">
            <button id="btn" class="btn btn-primary">Enviar</button>
        </div>

    </section>
    <!-- Fim da seção principal -->

    <footer class="py-4 mt-auto texto">
        <div class="fs-6">
            <p class="mexe">&copy; Direitos Autorais Reservados Por DignCare.</p>
            <p ><a class="mexe" href="https://maps.app.goo.gl/9GVxGAeCZJMZK6yYA" target="_blank">📍 Nossa sede</a></p>
            <p ><a class="mexe" href="/html/sobre.php">Sobre nós</a></p>
            <p ><a class="mexe" href="mailto:digncare@gmail.com">✉ Entre em contato conosco!</a></p>
        </div>
    </footer>

    <!-- Importação do Bootstrap -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>

</html>
    <!-- Fim da seção principal -->


    <!-- Início do rodapé da página -->

    <footer class="texto">
            <p class="mexe">&copy; Direitos Autorais Reservados Por DignCare.</p>
            <p ><a class="mexe" href="https://maps.app.goo.gl/9GVxGAeCZJMZK6yYA" target="_blank">📍 Nossa sede</a></p>
            <p ><a class="mexe" href="/html/sobre.php">Sobre nós</a></p>
            <p ><a class="mexe" href="mailto:digncare@gmail.com">✉ Entre em contato conosco!</a></p>
    </footer>

    <!-- Fim do rodapé da página -->


    <!-- Importação do Bootstrap -->
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous">
    </script>

</body>

</html>