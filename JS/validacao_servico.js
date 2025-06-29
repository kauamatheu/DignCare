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
    const data = document.getElementById("data")

    // Validação da data
    if (data.value.trim() === "") {
        document.getElementById("erro-data").textContent = "Insira uma data válida.";
        data.classList.add("input-erro");
        temErro = true;
    } else {
        const dataSelecionada = new Date(data.value);
        const hoje = new Date();
        // zerar hora/minuto/segundo para comparar só a data
        hoje.setHours(0, 0, 0, 0); 

        if (dataSelecionada < hoje) {
            document.getElementById("erro-data").textContent = "A data não pode ser anterior ao dia de hoje.";
            data.classList.add("input-erro");
            temErro = true;
        }
    }

    //Validação do titulo 
    if (titulo.value.trim() === "") {
        document.getElementById("erro-titulo").textContent = "O titulo do serviço é obrigatório.";
        titulo.classList.add("input-erro");
        temErro = true;
    }

    //Validação do valor
    if (valor.value.trim() === "" || valor.value.trim() === "R$ NaN") {
        document.getElementById("erro-valor").textContent = "Digite um valor.";
        valor.classList.add("input-erro");
        temErro = true;
    }
    
    //Validação da categoria
    if (categoria.value === "0") {
        document.getElementById("erro-categoria").textContent = "Selecione a categoria do seu serviço.";
        categoria.classList.add("input-erro");
        temErro = true;
    }

    // impede envio do form se houver erro
    if (temErro) e.preventDefault(); 
});