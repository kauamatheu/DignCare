<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Como trabalhamos - DignCare</title>
    <link rel="icon" type="imagem/png" href="/img/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="/CSS/como_trabalhamos.css">
    <script src="/JS/altera_conteudo.js" defer></script>
    <script src="/JS/transicao.js" defer></script>
</head>
<body class="fundo">

    
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

    <h1>Como trabalhamos</h1>

    
    <section class="container text-break px-5 texto">
        <div class="container mx-5 px-5">

            <label class="px-5 py-2" for="seletor">Escolha uma opção:</label>
            <select class="form-select" id="seletor" onchange="mudarConteudo()">
                <option value="cliente" >Cliente</option>
                <option value="prestador">Prestador</option>
            </select>
        </div>

        <div id="cliente" class="conteudo ativo">

            <h2 class="mx-5">Cliente</h2>
            <p>Somos uma plataforma especializada na contratação de prestadores de serviços domésticos, oferecendo uma solução prática, rápida e segura para o seu dia a dia.<br><br>Aqui, você encontra:<br><br>✅ Diaristas e cozinheiros(as) experientes <br>✅ Cuidadores de crianças, idosos e animais de estimação<br>✅ Profissionais de manutenção geral, jardinagem e limpeza de piscinas<br><br>Tudo isso com filtros inteligentes, avaliações reais de outros usuários e uma busca personalizada para você encontrar o melhor profissional para o que precisa, o mais próximo de você.<br><br>📍 Nada de complicações ou incertezas — aqui, você contrata com confiança e praticidade.</p>
            <p>💬 Como funciona?</p>
            <ul>
                <li>Escolha o serviço que precisa</li>
                <li>Veja os profissionais disponíveis na sua região</li>
                <li>Compare avaliações e escolha quem mais combina com você</li>
                <li>Contrate de forma rápida e segura</li>
            </ul>
            <p class="mesmalinha">Nosso objetivo é </p><p class="fw-bold mesmalinha">conectar pessoas que precisam de ajuda com quem está pronto para ajudar,</p><p class="mesmalinha"> promovendo inclusão, oportunidade e dignidade para quem trabalha com dedicação todos os dias.</p>
        </div>
        
        <div id="prestador" class="conteudo">

            <h2 class="mx-5">Prestrador</h2>
            <p class="mesmalinha">Se você é</p><p class="fw-bold mesmalinha"> diarista, cozinheiro(a), cuidador(a), jardineiro(a), faz manutenção ou serviços gerais, </p> <p class="mesmalinha">essa plataforma é para você! 🙌</p>
            <p class="mesmalinha">Nosso objetivo é te ajudar a </p><p class="fw-bold mesmalinha">encontrar novas oportunidades de trabalho, mais perto da sua casa, </p><p class="mesmalinha">com </p><p class="fw-bold mesmalinha">valorização justa e respeito ao seu esforço.</p>
            <br><br><p>Você se cadastra, mostra suas habilidades, e nós conectamos você com pessoas que precisam da sua ajuda — simples assim!</p>
            <p>✅ Crie seu perfil com facilidade <br>✅ Mostre suas experiências <br>✅ Receba avaliações reais dos seus serviços <br>✅ Encontre novos clientes todos os dias!</p> <br>
            <p class="mesmalinha">Acreditamos que </p><p class="fw-bold mesmalinha">trabalhar com dignidade é um direito de todos. </p><p class="mesmalinha">Nosso site não é só uma ponte entre quem precisa de um serviço e quem oferece — é uma oportunidade de mudança de vida, de fazer o que ama, de crescer, de ser reconhecido e indicado.</p><br><p>Você cuida do trabalho. A gente cuida de te ajudar a encontrar quem precisa de você.</p>
            <p class="mesmalinha">Sabemos como é difícil achar oportunidades quando se depende de indicações ou da sorte. Por isso criamos essa ferramenta — </p><p class="fw-bold mesmalinha">pra facilitar a comunicação, valorizar quem trabalha com seriedade e abrir portas que antes pareciam fechadas.</p>
        </div>
    </section>

    <footer class="texto">
            <p class="mexe">&copy; Direitos Autorais Reservados Por DignCare.</p>
            <p ><a class="mexe" href="https://maps.app.goo.gl/9GVxGAeCZJMZK6yYA" target="_blank">📍 Nossa sede</a></p>
            <p ><a class="mexe" href="/html/sobre.php">Sobre nós</a></p>
            <p ><a class="mexe" href="mailto:digncare@gmail.com">✉ Entre em contato conosco!</a></p>
    </footer>

</body>
</html>