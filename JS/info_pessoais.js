const clienteRadio = document.getElementById('cliente-radio');
// Aqui a gente pega o input de rádio com id 'cliente-radio' e guarda na variável clienteRadio

const prestadorRadio = document.getElementById('prestador-radio');
// Pega o outro input de rádio, com id 'prestador-radio', e guarda na variável prestadorRadio

const profissaoGroup = document.getElementById('profissao-group');
// Pega o grupo (provavelmente uma div ou campo) com id 'profissao-group' — que vai aparecer ou sumir dependendo da escolha

clienteRadio.addEventListener('change', () => {
  profissaoGroup.style.display = 'none';
});
// Quando o clienteRadio mudar (ou seja, o usuário selecionar "cliente"), essa função roda e esconde o grupo 'profissao-group' (display none)

prestadorRadio.addEventListener('change', () => {
  profissaoGroup.style.display = 'block';
});
// Quando o prestadorRadio mudar (ou seja, o usuário escolher "prestador"), mostra o grupo 'profissao-group' (display block)
