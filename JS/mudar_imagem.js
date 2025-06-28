  function mudarImagem() {
    const img = document.getElementById('imagemCategoria');
    const valor = select.value;

    switch(valor) {
      case '1':
        img.src = '/img/jarinagem.png';
        img.alt = 'Imagem de Jardinagem';
        break;
      case '2':
        img.src = 'baba.jpg';
        img.alt = 'Imagem de Babá';
        break;
      case '3':
        img.src = 'limpeza.jpg';
        img.alt = 'Imagem de Profissional de Limpeza';
        break;
      case '4':
        img.src = 'cozinha.jpg';
        img.alt = 'Imagem de Profissional de Cozinha';
        break;
      case '5':
        img.src = 'cuidadora_idoso.jpg';
        img.alt = 'Imagem de Cuidadora de Pessoa Idosa';
        break;
      case '6':
        img.src = 'servico_geral.jpg';
        img.alt = 'Imagem de Serviço Geral';
        break;
      case '7':
        img.src = 'cuidador_pet.jpg';
        img.alt = 'Imagem de Cuidador de Pet';
        break;
      case '8':
        img.src = 'tutor_educacional.jpg';
        img.alt = 'Imagem de Tutor Educacional';
        break;
      default:
        img.src = 'default.jpg';
        img.alt = 'Imagem padrão';
    }
  }