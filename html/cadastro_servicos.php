<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Serviço - DignCare</title>
    <link rel="icon" type="image/png" href="/img/icon.png" />
    <link rel="stylesheet" href="/CSS/cadastro_servicos.css"/>
    <script src="/JS/transicao.js" defer></script>
</head>
<body class="fundo">

    <header class="borda">
        <nav class="centralizar py-2">
            <a class="centro" href="/index.php">
                <img class="mexe" src="/img/logo_horizontal.png" alt="logo" width="255">
            </a>
        </nav>
    </header>

    <section class="main-content">
        <form action="cadastra_service" method="post" class="form-box">
            <h2>Abre sua solicitação de serviço aqui!</h2>
        
            <span class="erro" id="erro-servico"></span>
            <input type="text" name="servico" id="servico" placeholder="Digite o título do Serviço">
            
            <span class="erro" id="erro-categoria"></span>
            <select name="categoria" id="categoria" class="custom-select">
                <option value="">Selecione a categoria do seu serviço</option>
                <option value="1">Jardinagem</option>
                <option value="2">Babá</option>
                <option value="3">Diáristas</option>
                <option value="4">Cozinheiros</option>
                <option value="5">Cuidadora de idosos</option>
                <option value="6">Serviços Gerais</option>
                <option value="7">Cuidador de Pets</option>
                <option value="8">Tutores Educacional</option>
            </select>

            <span class="erro" id="erro-valor"></span>
            <input type="text" name="valor" id="valor" placeholder="Digite o valor do serviço">

            <textarea name="descricao" id="descricao" placeholder="Faça uma breve descrição do serviço desejado."></textarea>

            <button type="submit">Criar Solicitação </button>
            <a href="home.php" class="link">Voltar</a>
        </form>        
    </section>

    <footer class="texto">
        <p class="mexe">&copy; Direitos Autorais Reservados Por DignCare.</p>
        <p><a class="mexe" href="https://maps.app.goo.gl/9GVxGAeCZJMZK6yYA" target="_blank">📍 Nossa sede</a></p>
        <p><a class="mexe" href="/html/sobre.php">Sobre nós</a></p>
        <p><a class="mexe" href="mailto:digncare@gmail.com">✉ Entre em contato conosco!</a></p>
    </footer>
</body>
</html>