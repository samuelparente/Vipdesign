window.onload = () => {

	//adiciona evento clique botão enviar mensagem
	var botaoMensagem = document.getElementById("enviarMensagem");
	botaoMensagem.addEventListener("click",enviaMensagem);
	
	function enviaMensagem(){
		
		var checkboxform = document.getElementById('flexCheckDefault');
			if(checkboxform.checked){
			//debug
			//console.log("Botão clicado");
			var emailCliente = document.getElementById("emailCliente").value;
			var mensagemCliente = document.getElementById("mensagemCliente").value;
			
			var pedidoMensagem={"emailCliente":emailCliente,"mensagemCliente":mensagemCliente};
			
			fetch ('php/enviaMail.php', {
				method: 'POST',
				headers:{
					'Content-Type': 'application/json',
				},
				body:JSON.stringify(pedidoMensagem),
			})
			.then(resultadoEnvio => resultadoEnvio.json())
			.then(resultadoEnvio => {	
				
						customOverlay.style.top = '-50%';
						// Exibe o overlay "A enviar mensagem..." por 3 segundos
					  showOverlayWithDelay('A enviar mensagem...', 'rgba(192,192,192,0.9)', 2000);

					  // Simula uma requisição fetch bem-sucedida após 6 segundos
					  setTimeout(function() {
						if (resultadoEnvio.erroCliente === 0) {
						  // Exibe o overlay verde após 2 segundos da resposta
						  setTimeout(function() {
							showOverlayWithDelay('A sua mensagem foi enviada com sucesso!', 'rgba(181,230,29,0.9', 2000);
						  }, 1000);
						  
						  
						} else {
						  // Exibe o overlay vermelho após 2 segundos da resposta
						  setTimeout(function() {
							showOverlayWithDelay('Ocorreu um erro a enviar a mensagem.<br>Contacte-nos através dos meios alternativos.', '#EB3324', 2000);
						  }, 1000);
						}
					  }, 4000); // Simula a resposta do fetch após 6 segundos
					  
			})
			.catch(resultadoEnvio => {			
				//debug
				console.log("ERRO!");
				
				// Exibe o overlay "A enviar mensagem..." por 3 segundos
				  showOverlayWithDelay('A enviar mensagem...', '#B5E61D', 2000);

				  // Simula uma falha na requisição fetch após 6 segundos
				  setTimeout(function() {
					// Exibe o overlay vermelho após 2 segundos da resposta
					setTimeout(function() {
					  showOverlayWithDelay('Ocorreu um erro a enviar a mensagem.<br>Contacte-nos através dos meios alternativos.', 'rgba(237,28,36,0.9)', 2000);
					}, 2000);
				  }, 4000); // Simula a resposta do fetch após 6 segundos
				
			})
			
		}
		else{
				customOverlay.style.top = '-50%';
				// Exibe o overlay "A enviar mensagem..." por 3 segundos
				

					  // Simula uma requisição fetch bem-sucedida após 6 segundos
					  setTimeout(function() {
					showOverlayWithDelay('Tem de aceitar a política de privacidade para poder enviar a mensagem.', 'rgba(237,28,36,0.9)', 5000);
					  }, 500); // Simula a resposta do fetch após 6 segundos
		}
	}
	
// Função para exibir o overlay com mensagem personalizada e cor de fundo
function showOverlayWithDelay(message, backgroundColor, delay) {
  var customOverlay = document.getElementById('customOverlay');
  var overlayContent = customOverlay.querySelector('.overlay-content');
  overlayContent.textContent = message;
  customOverlay.style.backgroundColor = backgroundColor;
  customOverlay.style.display = 'flex';
  overlayContent.style.fontSize = '2rem';
  overlayContent.style.color = 'black';

	// Defina o top para 0% (aparecerá na tela) com uma pequena demora para criar o efeito de deslize para baixo
  setTimeout(function() {
    customOverlay.style.top = '0%';
  }, 100);

  // Espera 'delay' milissegundos antes de fechar o overlay com efeito de subida
  setTimeout(function() {
    customOverlay.style.top = '-50%';
  }, 2000);

  // Espera 'delay' + 0.5 segundos (tempo da transição) para esconder o overlay com deslize para cima
  setTimeout(function() {
    customOverlay.style.top = '-50%';
  }, delay + 1000);

}



	
}