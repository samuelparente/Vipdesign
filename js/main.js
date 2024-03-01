window.onload = () => {


///////////////////////////////////////////////////////////////////////////////////////////
	
	document.getElementById('vamosLa').addEventListener('click', function(event) {
		event.preventDefault();
		const targetSection = document.querySelector(this.getAttribute('href'));
		window.scrollTo({
			top: targetSection.offsetTop,
			behavior: 'smooth'
		});
	});

	//adiciona evento clique botão enviar mensagem
	var botaoMensagem = document.getElementById("enviarMensagem");
	botaoMensagem.addEventListener("click",enviaMensagem);
	
	function enviaMensagem(){
		
		//debug
		//console.log("Botão clicado");
		var emailCliente = document.getElementById("emailCliente").value;
		var mensagemCliente = document.getElementById("mensagemCliente").value;
		
		//debug
		//console.log(emailCliente);
		//console.log(mensagemCliente);
		
		
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
			
			//debug
			//console.log(resultadoEnvio.erroCliente);
			//console.log(resultadoEnvio.emailCliente);
			//console.log(resultadoEnvio.mensagemCliente);
			
			var mensagemProgresso;
			var modalMensagens;
			//mostra mensagem ok
			if(resultadoEnvio.erroCliente==0){
				//$("#modalMensagensMain").modal('hide');
				mensagemProgresso = document.getElementById("mensagemProgresso");
				modalMensagens = document.getElementById("modalMensagensIcone");
				mensagemProgresso.innerHTML = "Mensagem enviada com sucesso!";
				modalMensagens.innerHTML = "<i id=\"iconeOk\" class=\"bi bi-check-circle-fill\"></i>";
				$("#modalMensagensMain").modal('show');
				
				gtag_report_conversion(url);
			}
			else{
				mensagemProgresso = document.getElementById("mensagemProgresso");
				modalMensagens = document.getElementById("modalMensagensIcone");
				mensagemProgresso.innerHTML = "Não foi possível enviar a mensagem.<br>Envie email para <b>geral@vipdesign.pt</b>";
				modalMensagens.innerHTML = "<i id=\"iconeErro\" class=\"bi bi-x-circle-fill\"></i>";
				$("#modalMensagensMain").modal('show');
			}
		})
		.catch(resultadoEnvio => {			
			//debug
			//console.log("ERRO!");
			//modal para mostrar mensagem
			var mensagemProgresso = document.getElementById("mensagemProgresso");
			var modalMensagens = document.getElementById("modalMensagensIcone");
			mensagemProgresso.innerHTML = "Ocorreu um erro inesperado.<br>Envie email para <b>geral@vipdesign.pt</b>";
			modalMensagens.innerHTML = "<i id=\"iconeErro\" class=\"bi bi-x-circle-fill\"></i>";
			$("#modalMensagensMain").modal('show');
		})
	}
	
	
	function gtag_report_conversion(url) {
	  var callback = function () {
		if (typeof(url) != 'undefined') {
		  window.location = url;
		}
	  };
	  gtag('event', 'conversion', {
		  'send_to': 'AW-11142442191/SWpxCOiK6NgYEM_ZkMEp',
		  'event_callback': callback
	  });
	  return false;
	}

}