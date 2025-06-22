document.getElementById("formulario").addEventListener("submit", function (e) {
    let temErro = false;

    // Função para limpar erros antigos
    function limparErros() {
        document.querySelectorAll(".erro").forEach(e => e.textContent = "");
        document.querySelectorAll("input").forEach(i => i.classList.remove("input-erro"));
    }

    limparErros(); // limpa antes de validar

    const nome = document.getElementById("nome");
    const cpf = document.getElementById("cpf");
    const email = document.getElementById("email");
    const nascimento = document.getElementById("nascimento");
    const senha = document.getElementById("senha");
    const confirmaSenha = document.getElementById("confirma_senha");
    const cpfValido = /^\d{3}\.\d{3}\.\d{3}\-\d{2}$|^\d{11}$/;


    if (nome.value.trim() === "") {
        document.getElementById("erro-nome").textContent = "O nome é obrigatório.";
        nome.classList.add("input-erro");
        temErro = true;
    }

    if (!cpfValido.test(cpf.value.trim())) {
        document.getElementById("erro-cpf").textContent = "CPF inválido. Use o formato 000.000.000-00.";
        cpf.classList.add("input-erro");
        temErro = true;
    }

    if (!email.value.includes("@") || !email.value.includes(".")) {
        document.getElementById("erro-email").textContent = "Email inválido.";
        email.classList.add("input-erro");
        temErro = true;
    }
    
    if (nascimento.value <= 17) {
        document.getElementById("erro-nascimento").textContent = "Você deve ter ao menos 18 anos para se cadastrar.";
        nascimento.classList.add("input-erro");
        temErro = true;
    }

    if (nascimento.value >= 99) {
        document.getElementById("erro-nascimento").textContent = "Você está velho demais para trabalhar aqui.";
        nascimento.classList.add("input-erro");
        temErro = true;
    }

    if (senha.value.length < 6) {
        document.getElementById("erro-senha").textContent = "A senha deve ter pelo menos 6 caracteres.";
        senha.classList.add("input-erro");
        temErro = true;
    }

    if (senha.value !== confirmaSenha.value) {
        document.getElementById("erro-confirma-senha").textContent = "As senhas não coincidem.";
        confirmaSenha.classList.add("input-erro");
        temErro = true;
    }

    if (temErro) e.preventDefault(); // impede envio do form se houver erro
});