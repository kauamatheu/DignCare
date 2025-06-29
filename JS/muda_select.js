
  // Função para pegar o valor de um parâmetro da URL
  function getParametroURL(opcao) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(opcao);
  }

  // Pega o parâmetro "opcao"
  const opcaoSelecionada = getParametroURL("opcao");

  if (opcaoSelecionada) {
    const select = document.getElementById("categoria");
    select.value = opcaoSelecionada;
  }
