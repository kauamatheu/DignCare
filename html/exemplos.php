<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos - DignCare</title>
    <link rel="icon" type="imagem/png" href="/img/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="/CSS/exemplos.css">
    <script src="/JS/altera_conteudo.js" defer></script>
    <script src="/JS/transicao.js" defer></script>
</head>
<body class="fundo">
    <!-- Início do cabeçado da página -->
    <header>
        <!--Barra de navegação do site-->
        <nav class="navbar borda px-1"> 
            
            <!--Logo do site com link, para clicar e ir para a tela Inicial-->
            <div class="nav ">
                <a href="/index.php"><img class="mexe" src="/img/logo_horizontal.png" alt="logo" width="225"></a>
            </div>

            <!--Div para separar os links da página e centralizar-->
            <div class="nav justify-content-center">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link texto mexe" href="como_trabalhamos.php">Como trabalhamos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link texto mexe" href="depoimentos.php">Depoimentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link texto mexe" href="exemplos.php">Exemplos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link texto mexe" href="sobre.php">Sobre nós</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Fim do cabeçado da página -->

    <!-- Título da página-->
    <h1>Exemplos</h1>
    
    <!-- Início da seção principal de avaliação -->
    <section class="container px-5">
        
        <!-- Menu de seleção para escolher entre cliente e prestador-->
        <div class="container mx-5 px-5">
            <label class="px-5 py-2" for="seletor">Escolha uma opção:</label>
            <select class="form-select" id="seletor" onchange="mudarConteudo()">
                <option value="cliente">Cliente</option>
                <option value="prestador">Prestador</option>
            </select>
        </div>

        <!-- Div cliente -->
        <div id="cliente" class="conteudo ativo my-5 py-5 texto">
            <ol type= 1>
                <li>Você escolhe o serviço:</li>
                <p>Acesse a plataforma e selecione o tipo de serviço que você precisa, como limpeza, manutenção, tutoria, entre outros.</p><br>
                
                <li>Encontre profissionais disponíveis para você:</li>
                <p> Veja os prestadores mais próximos, com perfis completos, fotos, avaliações de outros clientes e opções de contato.</p><br>
                
                <li>Entre em contato e alinhe os detalhes.</li>
                <p>Converse diretamente com o profissional, combine horário, valor e tudo o que for necessário. Simples e sem burocracia.</p><br>
                
                <li>Serviço realizado com confiança:</li>
                <p> O prestador realiza o serviço e, ao final, você avalia a experiência com notas e comentários.</p><br>
                
                <li>Avaliações que beneficiam a todos:</li>
                <p>As avaliações são públicas e ajudam outros usuários a escolher os melhores profissionais. Quanto melhor o serviço, maior será a visibilidade do prestador na plataforma.</p><br>
            </ol>
        </div>

        <!-- Div prestador -->
        <div id="prestador" class="conteudo my-5 py-5 texto">
            <ol type= 1>
                <li>Você cadastra um anúncio  do seu serviço:</li>
                <p>Acesse a plataforma e escolha a categoria de serviço que você oferece, como limpeza, manutenção, estética, entre outros.</p><br>
                
                <li>Seu anúncio vai aparecer para todos os usuários cadastrados no site:</li>
                <p> Veja os clientes mais próximos, com perfis completos, avaliações de outros prestadores e formas de contato.</p><br>
                
                <li>Entre em contato e alinhe os detalhes.:</li>
                <p>Converse diretamente com o cliente, combine horário, valor e tudo o que for necessário. Simples e sem burocracia.</p><br>
                
                <li>Realize seu serviço com confiança:</li>
                <p> Você realiza o serviço e, ao final, avalia sua experiência com o cliente por meio de notas e comentários.</p><br>
                
                <li>Avaliações que beneficiam a todos:</li>
                <p>As avaliações são públicas e ajudam outros prestadores a escolher os melhores clientes.</p><br>
                
            </ol>
        </div>
    </section>
    <!-- Fim da seção principal -->
        
    <footer class="texto">
            <p class="mexe">&copy; Direitos Autorais Reservados Por DignCare.</p>
            <p ><a class="mexe" href="https://maps.app.goo.gl/9GVxGAeCZJMZK6yYA" target="_blank">📍 Nossa sede</a></p>
            <p ><a class="mexe" href="/html/sobre.php">Sobre nós</a></p>
            <p ><a class="mexe" href="mailto:digncare@gmail.com">✉ Entre em contato conosco!</a></p>
    </footer>

</body>
</html>