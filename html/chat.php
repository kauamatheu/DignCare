<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat - DignCare</title>
    <link rel="icon" type="imagem/png" href="/img/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../CSS/chat.css">
    <script src="/socket.io/socket.io.js"></script>

</head>
</head>

<body class="fundo">
    <!-- Cabeçalho da página -->
    <header class="borda">
        <nav class="navbar">

            <!--Logo do site com link, para clicar e ir para a tela Inicial-->
            <div class="justify-content-start">
                <a href="/html/home.php">
                    <img class="mexe" src="/img/logo_horizontal.png" alt="logo" width="225">
                </a>
            </div>

            <!-- Botão central para fechar contrato -->
            <div class="justify-content-center">
                <a href="/html/contratos.php">
                    <button type="button" class="btn btn-primary mx-1">Fechar Contrato</button>

                </a>
            </div>

            <!-- Menu suspenso no canto direito com opções do usuário -->
            <div class="menu-icon" type="sidbar" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                aria-controls="offcanvasRight"><i class="bi bi-list fs-3 iconscss"></i></div>

            <div class="offcanvas offcanvas-end fundo" tabindex="-1" id="offcanvasRight"
                aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title textcolor" id="offcanvasRightLabel">Daniel Rodrigues</h5>
                    <div type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i
                            class="bi bi-x-lg textcolor"></i></div>
                </div>
                <div class="offcanvas-body">
                    <a class="azul" href="/html/perfil.html">Perfil</a><br>
                    <a class="azul" href="/html/avaliacoes.html">Avaliações</a>
                    <p>______________________________________________________</p>
                    <a class="azul" href="/html/depoimentos.html">Depoimentos</a><br>
                    <a class="azul" href="/html/sobre.html">Sobre Nós</a>
                    <p>______________________________________________________</p>
                    <a class="azul" href="/index.html">Sair da Conta</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- Fim do cabeçalho da página -->

    <!-- Seção principal da página -->
    <section>
        <div class="fundodiv margem">
            <div class="mb-3">
                <h3 class="titulo">Chat</h3>
            </div>
            
            <ul id="messages" class="list-group" style="height: 500px; overflow-y: scroll;"></ul>
            <form id="form" action="">

                <!-- Área de envio de mensagens -->
                <div class="send">

                    <!-- Botão de emoji -->
                    <button id="btn" class="btn btn-primary">
                        <i class="bi bi-emoji-laughing-fill"></i>
                    </button>

                    <!-- Campo de digitação da mensagem -->

                    <textarea class="form-control" id="input" rows="2" style="width: 665px;"></textarea>


                    <!-- Botão de envio -->
                    <button type="submit" id="input" class="btn btn-primary">
                        <i class="bi bi-send"></i>
                    </button>
                </div>
            </form>
        </div>

    </section>
    <!-- Fim da seção principal -->
    <script>
      let counter = 0;
  
      const socket = io({
        ackTimeout: 10000,
        retries: 3,
        auth: {
          serverOffset: 0
        }
      });
  
      const form = document.getElementById('form');
      const input = document.getElementById('input');
      const messages = document.getElementById('messages');
  
      form.addEventListener('submit', (e) => {
        e.preventDefault();
        if (input.value) {
          const clientOffset = `${socket.id}-${counter++}`;
          socket.emit('chat message', input.value, clientOffset);
          input.value = '';
        }
      });
  
      socket.on('chat message', (msg, serverOffset) => {
        const item = document.createElement('li');
        item.textContent = msg;
        messages.appendChild(item);
        window.scrollTo(0, document.body.scrollHeight);
        socket.auth.serverOffset = serverOffset;
        messages.scrollTop = messages.scrollHeight;
      });
    </script>
    <footer class="py-4 mt-auto texto">
        <div class="fs-6">
            <p class="mexe">&copy; Direitos Autorais Reservados Por DignCare.</p>
            <p ><a class="mexe" href="https://maps.app.goo.gl/9GVxGAeCZJMZK6yYA" target="_blank">📍 Nossa sede</a></p>
            <p ><a class="mexe" href="/html/sobre.php">Sobre nós</a></p>
            <p ><a class="mexe" href="mailto:digncare@gmail.com">✉ Entre em contato conosco!</a></p>
        </div>
    </footer>

    <!-- Importa os scripts do Bootstrap (necessários para funcionalidades como dropdown) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>

</html>