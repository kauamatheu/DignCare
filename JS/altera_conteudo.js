//Função para alterar a classe de uma div de acordo com o seletor recebido de um form 

function mudarConteudo() {

  //Variaveis
  const valorSelecionado = document.getElementById("seletor").value;
  const divs = document.querySelectorAll(".conteudo");

  //Remove a classe ativo da div que estava com essa classe e adiciona para a div com o seletor correspondente
  divs.forEach(div => div.classList.remove("ativo"));
  document.getElementById(valorSelecionado).classList.add("ativo");
}