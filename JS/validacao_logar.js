document.getElementById("formulario").addEventListener("submit", function (e) {
    let temErro = false;

    // Função para limpar erros antigos
    function limparErros() {
        document.querySelectorAll(".erro").forEach(e => e.textContent = "");
        document.querySelectorAll("input").forEach(i => i.classList.remove("input-erro"));
    }

    limparErros(); // limpa antes de validar
    
    const email = document.getElementById("email"); 
    const senha = document.getElementById("senha");

    if (!email.value.includes("@") || !email.value.includes(".")) {
        document.getElementById("erro-email").textContent = "Email inválido.";
        email.classList.add("input-erro");
        temErro = true;
    }
    
    if (senha.value.length < 6) {
        document.getElementById("erro-senha").textContent = "A senha deve ter pelo menos 6 caracteres.";
        senha.classList.add("input-erro");
        temErro = true;
    }

    if (temErro) e.preventDefault(); // impede envio do form se houver erro
});