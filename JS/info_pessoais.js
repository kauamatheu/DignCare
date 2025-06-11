const clienteRadio = document.getElementById('cliente-radio');
const prestadorRadio = document.getElementById('prestador-radio');
const profissaoGroup = document.getElementById('profissao-group');

clienteRadio.addEventListener('change', () => {
  profissaoGroup.style.display = 'none';
});

prestadorRadio.addEventListener('change', () => {
  profissaoGroup.style.display = 'block';
});
