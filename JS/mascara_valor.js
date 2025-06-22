document.getElementById("valor").addEventListener("input", function (e) {
    let valor = e.target.value;

    // Remove tudo que não for número
    valor = valor.replace(/\D/g, "");

    // Transforma para número e divide por 100 para colocar centavos
    valor = (parseInt(valor, 10) / 100).toFixed(2);

    // Formata no padrão brasileiro
    valor = "R$ " + valor.toString().replace(".", ",");

    // Atualiza o valor formatado no input
    e.target.value = valor;
});