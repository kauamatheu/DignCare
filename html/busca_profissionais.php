<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca Profissionais - DignCare</title>
    <link rel="icon" type="imagem/png" href="/img/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/CSS/busca_profissionais.css">
    <script src="/JS/altera_conteudo.js" defer></script>
    <script src="/JS/transicao.js" defer></script>
</head>

<body class="fundo">
    <!-- Início do cabeçado da página -->
    <header class=" borda">
        <nav class="navbar ">

            <!--Logo do site com link, para clicar e ir para a tela Inicial-->
            <div class=" justify-content-start">
                <a href="/html/home.php"><img class="mexe" src="/img/logo_horizontal.png" alt="logo" width="225"></a>
            </div>

            <!-- Menu suspenso no canto direito com opções do usuário -->
            <div class="menu-icon" type="sidbar" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="bi bi-list fs-3 iconscss"></i></div>

            <div class="offcanvas offcanvas-end fundo" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title textcolor" id="offcanvasRightLabel">Daniel Rodrigues</h5>
              <div type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x-lg textcolor"></i></div>
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

    <!-- Fim do cabeçado da página -->
    
    <!-- Início da seção principal -->

    <section class="container mx-5 px-5">
        
        <!-- Titulo da página -->
        <h2 class="mx-1">Escolha o prestador mais adequado para você!</h2>

        <!-- Menu suspenso para escolher o tipo de prestador de serviço -->
        <select id="seletor" class="form-select form-select-lg mb-3" aria-label="Large select example" onchange="mudarConteudo()">

            <!-- Opção padrão (sem valor útil) -->
            <option value="0">Abra este menu para escolher um prestador</option>

            <!-- Cada opção representa uma categoria de prestador -->
            <option value="1">Jardinagem</option>
            <option value="2">Babá</option>
            <option value="3">Diáristas</option>
            <option value="4">Cozinheiros</option>
            <option value="5">Cuidadora de idosos</option>
            <option value="6">Serviços Gerais</option>
            <option value="7">Cuidador de Pets</option>
            <option value="8">Tutores Educacional</option>
        </select>
        
        <!--Tela limpa-->
        <div id="0" class="conteudo ativo">
            <p class="texto mx-5 my-5">Escolha um filtro para exibir os profissionais</p>
        </div>

        <!--Jardinagem-->
        <div id="1" class="conteudo">
            <a href="/html/chat.php">

                <div class="card mb-3 mexecard" style="height: 268px; width: 1200px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/Jardinagem.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Jardineiro</h3>
                                <h4 class="card-text">R$380,00</h4>
                                <h5 class="card-text">Roberto Carlos</h5>
                                <p class="card-text">⭐⭐⭐⭐⭐</p>
                                <p class="card-text">Excelente profissional! Pontual, educado e fez um ótimo trabalho. Recomendo demais!
                                    
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/html/chat.php">

                <div class="card mb-3 mexecard" style="height: 268px; width: 1200px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/Jardinagem.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Jardineiro</h3>
                                <h4 class="card-text">R$320,00</h4>
                                <h5 class="card-text">Romario</h5>
                                <p class="card-text">⭐⭐⭐</p>
                                <p class="card-text">Fez o serviço, mas teve alguns atrasos. No geral, foi uma experiência razoável.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            
            <a href="/html/chat.php">

                <div class="card mb-3 mexecard" style="height: 268px; width: 1200px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/Jardinagem.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Jardineiro</h3>
                                <h4 class="card-text">R$320,00</h4>
                                <h5 class="card-text">Ribamar</h5>
                                <p class="card-text">⭐</p>
                                <p class="card-text">Infelizmente o serviço não foi concluído como combinado. Deixou a desejar.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
    
        </div>

        <!--Babá-->
        <div id="2" class="conteudo">

            <a href="/html/chat.php">

                <div class="card mb-3 mexecard" style="height: 268px; width: 1200px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/babá.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Babá</h3>
                                <h4 class="card-text">R$280,00</h4>
                                <h5 class="card-text">Arboleda</h5>
                                <p class="card-text">⭐⭐⭐⭐⭐</p>
                                <p class="card-text">Excelente profissional! Pontual, educado e fez um ótimo trabalho. Recomendo demais!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/html/chat.php">

                
                <div class="card mb-3 mexecard" style="height: 268px; width: 1200px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <img src="/img/babá.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Babá</h3>
                                <h4 class="card-text">R$220,00</h4>
                                <h5 class="card-text">Memphis Depay</h5>
                                <p class="card-text">⭐⭐⭐</p>
                                <p class="card-text">Fez o serviço, mas teve alguns atrasos. No geral, foi uma experiência razoável.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/html/chat.php">

                <div class="card mb-3 mexecard" style="height: 268px; width: 1200px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/babá.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Babá</h3>
                                <h4 class="card-text">R$200,00</h4>
                                <h5 class="card-text">Daniel Alves</h5>
                                <p class="card-text">⭐⭐</p>
                                <p class="card-text">Infelizmente o serviço não foi concluído como combinado. Deixou a desejar.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

        </div>
        

        <!--Diaristas-->
        <div id="3" class="conteudo">
            <a href="/html/chat.php">

                <div class="card mb-3 mexecard" style="height: 268px; width: 1200px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/Limpeza.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Diarista</h3>
                                <h4 class="card-text">R$150,00</h4>
                                <h5 class="card-text">Neymar Junior</h5>
                                <p class="card-text">⭐⭐⭐⭐</p>
                                <p class="card-text">Excelente profissional! Pontual, educado e fez um ótimo trabalho. Recomendo demais!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/html/chat.php">

                <div class="card mb-3 mexecard" style="height: 268px; width: 1200px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/Limpeza.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Diarista</h3>
                                <h4 class="card-text">R$120,00</h4>
                                <h5 class="card-text">Messi</h5>
                                <p class="card-text">⭐⭐</p>
                                <p class="card-text">Fez o serviço, mas teve alguns atrasos. No geral, foi uma experiência razoável.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/html/chat.php">

                <div class="card mb-3 mexecard" style="height: 268px; width: 1200px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/Limpeza.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title fw-bold"></h3>
                                <h4 class="card-text">R$100,00</h4>
                                <h5 class="card-text">Cristiano Ronaldo</h5>
                                <p class="card-text">⭐</p>
                                <p class="card-text">Infelizmente o serviço não foi concluído como combinado. Deixou a desejar.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>



        </div>

        <!--Cozinheiros-->
        <div id="4" class="conteudo">
            <a href="/html/chat.php">

                <div class="card mb-3 mexecard" style="height: 268px; width: 1200px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/cozinheiro.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Cozinheiro</h3>
                                <h4 class="card-text">R$400,00</h4>
                                <h5 class="card-text">Goleiro Bruno</h5>
                                <p class="card-text">⭐⭐⭐⭐⭐</p>
                                <p class="card-text">Excelente profissional! Pontual, educado e fez um ótimo trabalho. Recomendo demais!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/html/chat.php">

                <div class="card mb-3 mexecard" style="height: 268px; width: 1200px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/cozinheiro.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Cozinheiro</h3>
                                <h4 class="card-text">R$350,00</h4>
                                <h5 class="card-text">Rogerio Ceni</h5>
                                <p class="card-text">⭐⭐⭐</p>
                                <p class="card-text">Fez o serviço, mas teve alguns atrasos. No geral, foi uma experiência razoável.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/html/chat.php">

                <div class="card mb-3 mexecard" style="height: 268px; width: 1200px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/cozinheiro.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Cozinheiro</h3>
                                <h4 class="card-text">R$420,00</h4>
                                <h5 class="card-text">Cássio</h5>
                                <p class="card-text">⭐</p>
                                <p class="card-text">Infelizmente o serviço não foi concluído como combinado. Deixou a desejar.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!--Cuidadora de idosos-->

        <div id="5" class="conteudo">
            <a href="/html/chat.php">
                <div class="card mb-3 mexecard" style="height: 268px; width: 1200px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/cuidadora.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title fw-bold">Cuidador de Idosos</h3>
                            <h4 class="card-text">R$400,00</h4>
                            <h5 class="card-text">Dede do Vasco</h5>
                            <p class="card-text">⭐⭐⭐⭐⭐</p>
                            <p class="card-text">Excelente profissional! Pontual, educado e fez um ótimo trabalho. Recomendo demais!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/html/chat.php">
                <div class="card mb-3 mexecard" style="height: 268px; width: 1200px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/cuidadora.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Cuidador de Idosos</h3>
                                <h4 class="card-text">R$360,00</h4>
                                <h5 class="card-text">Pelé</h5>
                                <p class="card-text">⭐⭐⭐</p>
                                <p class="card-text">Fez o serviço, mas teve alguns atrasos. No geral, foi uma experiência razoável.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/html/chat.php">
                <div class="card mb-3 mexecard" style="height: 268px; width: 1200px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/cuidadora.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Cuidador de Idosos</h3>
                                <h4 class="card-text">R$280,00</h4>
                                <h5 class="card-text">Schrödinger</h5>
                                <p class="card-text">⭐</p>
                                <p class="card-text">Infelizmente o serviço não foi concluído como combinado. Deixou a desejar.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!--Serviços Gerais-->
        <div id="6" class="conteudo">
            <a href="/html/chat.php">

                <div class="card mb-3 mexecard" style="height: 268px; width: 1200px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/manutencao.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title fw-bold"></h3>
                                <h4 class="card-text">R$200,00</h4>
                                <h5 class="card-text">Endrick</h5>
                                <p class="card-text">⭐⭐⭐⭐⭐</p>
                                <p class="card-text">Excelente profissional! Pontual, educado e fez um ótimo trabalho. Recomendo demais!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/html/chat.php">

                <div class="card mb-3 mexecard" style="height: 268px; width: 1200px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/manutencao.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title fw-bold"></h3>
                                <h4 class="card-text">R$200,00</h4>
                                <h5 class="card-text">Oscar</h5>
                                <p class="card-text">⭐⭐⭐</p>
                                <p class="card-text">Fez o serviço, mas teve alguns atrasos. No geral, foi uma experiência razoável.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/html/chat.php">

                <div class="card mb-3 mexecard" style="height: 268px; width: 1200px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/manutencao.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title fw-bold"></h3>
                                <h4 class="card-text">R$220,00</h4>
                                <h5 class="card-text">Anthony</h5>
                                <p class="card-text">⭐</p>
                                <p class="card-text">Infelizmente o serviço não foi concluído como combinado. Deixou a desejar.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

        </div>

        <!--Cuidador de Pets-->
        <div id="7" class="conteudo">

            <a href="/html/chat.php">
                <div class="card mb-3 mexecard" style="height: 268px; width: 1200px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/pets.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title fw-bold"></h3>
                                <h4 class="card-text">R$150,00</h4>
                                <h5 class="card-text">Goleiro Bruno</h5>
                                <p class="card-text">⭐⭐⭐⭐⭐</p>
                                <p class="card-text">Excelente profissional! Pontual, educado e fez um ótimo trabalho. Recomendo demais!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/html/chat.php">
                <div class="card mb-3 mexecard" style="height: 268px; width: 1200px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/pets.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title fw-bold"></h3>
                                <h4 class="card-text">R$130,00</h4>
                                <h5 class="card-text">Leonardo Davinci</h5>
                                <p class="card-text">⭐⭐⭐</p>
                                <p class="card-text">Fez o serviço, mas teve alguns atrasos. No geral, foi uma experiência razoável.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/html/chat.php">

                <div class="card mb-3 mexecard" style="height: 268px; width: 1200px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/pets.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title fw-bold"></h3>
                                <h4 class="card-text">R$120,00</h4>
                                <h5 class="card-text">Ricardão Lanches</h5>
                                <p class="card-text">⭐</p>
                                <p class="card-text">Infelizmente o serviço não foi concluído como combinado. Deixou a desejar.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!--Tutores Educacional-->
        <div id="8" class="conteudo">
            <a href="/html/chat.php">
                <div class="card mb-3 mexecard" style="height: 268px; width: 1200px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/tutora.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title fw-bold"></h3>
                                <h4 class="card-text">R$220,00</h4>
                                <h5 class="card-text">Luiz Inacio</h5>
                                <p class="card-text">⭐⭐⭐⭐⭐</p>
                                <p class="card-text">Excelente profissional! Pontual, educado e fez um ótimo trabalho. Recomendo demais!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/html/chat.php">
                <div class="card mb-3 mexecard" style="height: 268px; width: 1200px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/tutora.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title fw-bold"></h3>
                                <h4 class="card-text">R$150,00</h4>
                                <h5 class="card-text">Neymar Jr</h5>
                                <p class="card-text">⭐⭐⭐</p>
                                <p class="card-text">Fez o serviço, mas teve alguns atrasos. No geral, foi uma experiência razoável.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/html/chat.php">
                <div class="card mb-3 mexecard" style="height: 268px; width: 1200px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/tutora.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title fw-bold"></h3>
                                <h4 class="card-text">R$100,00</h4>
                                <h5 class="card-text">Albert Einstein</h5>
                                <p class="card-text">⭐</p>
                                <p class="card-text">Infelizmente o serviço não foi concluído como combinado. Deixou a desejar.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </section>

    <!-- Fim da seção principal -->

    <!-- Início do footer -->

    <footer class="py-4 mt-auto texto">
        <div class="fs-6">
            <p class="mexe">&copy; Direitos Autorais Reservados Por DignCare.</p>
            <p ><a class="mexe" href="https://maps.app.goo.gl/9GVxGAeCZJMZK6yYA" target="_blank">📍 Nossa sede</a></p>
            <p ><a class="mexe" href="/html/sobre.php">Sobre nós</a></p>
            <p ><a class="mexe" href="mailto:digncare@gmail.com">✉ Entre em contato conosco!</a></p>
        </div>
    </footer>

    <!-- Fim do footer -->

</body>
</html>