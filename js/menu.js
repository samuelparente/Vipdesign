window.onload = () => {

  // Seleciona o botão de sanduíche, o menu e o overlay
  var menuToggle = document.getElementById('menu-toggle');
  var overlay = document.getElementById('overlay');
  var menuItems = document.querySelectorAll('.menu a');

  // Função para fechar o menu e o overlay
  function closeMenu() {
    document.body.style.overflow = ''; // Permite que a página role novamente
    overlay.style.display = 'none';
    menuToggle.checked = false; // Desmarca o botão de sanduíche
  }

  // Adiciona um ouvinte de evento de mudança ao botão de sanduíche
  menuToggle.addEventListener('change', function () {
    if (menuToggle.checked) {
      // Abre o menu e mostra o overlay
      document.body.style.overflow = 'hidden'; // Impede que a página role quando o menu estiver aberto
      overlay.style.display = 'block';
    } else {
      // Fecha o menu e esconde o overlay
      closeMenu();
    }
  });

  // Adiciona um ouvinte de evento de clique ao overlay para fechar o menu
  overlay.addEventListener('click', function () {
    closeMenu();
  });

  // Adiciona um ouvinte de evento de clique aos itens do menu
  menuItems.forEach(function (menuItem) {
    menuItem.addEventListener('click', function () {
      closeMenu(); // Fecha o menu ao clicar em um item do menu
    });
  });

}