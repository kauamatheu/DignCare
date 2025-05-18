function mudarConteudo() {
  const valorSelecionado = document.getElementById("seletor").value;
  const divs = document.querySelectorAll(".conteudo");

  divs.forEach(div => div.classList.remove("ativo"));
  document.getElementById(valorSelecionado).classList.add("ativo");
}