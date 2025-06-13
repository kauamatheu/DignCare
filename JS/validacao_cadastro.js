document.getElementById("formulario").addEventListener("submit", function (e) {
    let temErro = false;

    // Função para limpar erros antigos
    function limparErros() {
        document.querySelectorAll(".erro").forEach(e => e.textContent = "");
        document.querySelectorAll("input").forEach(i => i.classList.remove("input-erro"));
    }

    //Função para validar datas
    function dataValida(dataStr) {
        const partes = dataStr.split('/');
        const dia = parseInt(partes[0], 10);
        const mes = parseInt(partes[1], 10) - 1; 
        const ano = parseInt(partes[2], 10);

        const data = new Date(ano, mes, dia);

        return (
            data.getFullYear() === ano &&
            data.getMonth() === mes &&
            data.getDate() === dia
        );
    }

    limparErros(); // limpa antes de validar

    const nome = document.getElementById("nome");
    const cpf = document.getElementById("cpf");
    const email = document.getElementById("email");
    const nascimento = document.getElementById("nascimento");
    const senha = document.getElementById("senha");
    const confirmaSenha = document.getElementById("confirma_senha");

    const cpfValido = /^\d{3}\.\d{3}\.\d{3}\-\d{2}$|^\d{11}$/;
    const regexData = /^\d{2}\/\d{2}\/\d{4}$/;
    if (!regexData.test(nascimento.value)) {
        nascimento.classList.add("input-erro");
        temErro = true;
        // Erro: formato inválido
    }

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
    
    if (!regexData.test(nascimento.value)) {
        document.getElementById("erro-nascimento").textContent = "Formato da data inválido.";
        nascimento.classList.add("input-erro");
        temErro = true;
    } else if (!dataValida(nascimento.value)) {
        document.getElementById("erro-nascimento").textContent = "Data inexistente.";
        nascimento.classList.add("input-erro");
        temErro = true;
    } else {
        // Tudo certo, pode prosseguir
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