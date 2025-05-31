const input = document.getElementById("nome");
const contador = document.getElementById("contador");
const limite = input.maxLength;

input.addEventListener("input", function () {
  const restante = limite - this.value.length;
  contador.textContent = `${restante} caracteres restantes`;
});
