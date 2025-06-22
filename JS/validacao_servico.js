document.getElementById("formulario").addEventListener("submit", function (e) {
    let temErro = false;

    // Função para limpar erros antigos
    function limparErros() {
        document.querySelectorAll(".erro").forEach(e => e.textContent = "");
        document.querySelectorAll("input").forEach(i => i.classList.remove("input-erro"));
    }

    limparErros(); // limpa antes de validar

    // Declaração das variaveis
    const titulo = document.getElementById("titulo");
    const categoria = document.getElementById("categoria");
    const valor = document.getElementById("valor");

    if (titulo.value.trim() === "") {
        document.getElementById("erro-titulo").textContent = "O titulo do serviço é obrigatório.";
        titulo.classList.add("input-erro");
        temErro = true;
    }

    if (valor.value.trim() === "" || valor.value.trim() === "R$ NaN") {
        document.getElementById("erro-valor").textContent = "Digite um valor.";
        valor.classList.add("input-erro");
        temErro = true;
    }
    
    if (categoria.value === "0") {
        document.getElementById("erro-categoria").textContent = "Selecione a categoria do seu serviço.";
        categoria.classList.add("input-erro");
        temErro = true;
    }

    if (temErro) e.preventDefault(); // impede envio do form se houver erro
});