document.getElementById('nascimento').addEventListener('input', function (e) {
    let value = e.target.value.replace(/\D/g, ''); // Remove tudo que não é número
    if (value.length > 8) value = value.slice(0, 8); // Máximo de 8 números

    let formatted = '';
    if (value.length > 4) {
        formatted = value.replace(/(\d{2})(\d{2})(\d{1,4})/, '$1/$2/$3');
    } else if (value.length > 2) {
        formatted = value.replace(/(\d{2})(\d{1,2})/, '$1/$2');
    } else {
        formatted = value;
    }

    e.target.value = formatted;

    
});