<!doctype html>
<html lang="pt">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Agência de marketing digital e desenvolvimento de software em Portugal. Estamos focados em fazer os seus negócios crescer.">
		<meta name="robots" content="index,follow">
		<meta name="author" content="Samuel Parente">
		<title>VIPDESIGN - Marketing digital e desenvolvimento de software</title>
		<link rel="canonical" href="https://www.vipdesign.pt">
		<link rel="icon" href="imgs/vipdesign.ico" type="image/x-icon">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
		<link rel="stylesheet" href="main.css">
		<link rel="stylesheet" href="menu.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
		<script src="js/menu.js"></script>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-BR53PDGW4D"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'G-BR53PDGW4D');
		  gtag('config', 'AW-11142442191');
		</script>
		<!-- Event snippet for Chamada telefónica a partir do website conversion page
		In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
		<script>
		function gtag_report_conversion(url) {
		  var callback = function () {
			if (typeof(url) != 'undefined') {
			  window.location = url;
			}
		  };
		  gtag('event', 'conversion', {
			  'send_to': 'AW-11142442191/UvHYCIOU8OcYEM_ZkMEp',
			  'event_callback': callback
		  });
		  return false;
		}
		</script>
		<!-- Meta Pixel Code -->
		<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window, document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '334479702408994');
		fbq('track', 'PageView');
		</script>
		<noscript><img height="1" width="1" style="display:none"
		src="https://www.facebook.com/tr?id=334479702408994&ev=PageView&noscript=1"
		/></noscript>
		<!-- End Meta Pixel Code -->
	</head>
	<body>
		<div class="d-flex flex-wrap align-self-start conteudo">
			<div class="overlay" id="overlay"></div>
			<?php include("menu.php");?>
			<div class="d-flex flex-wrap bannerCta-div padding20px">
				<div class="headText2  col-sm-12 space-top-bottom">
					<div class="space-top-bottom headText2 ">
						<h1>AGÊNCIA DE MARKETING DIGITAL</h1>
					</div>
					<h5>Especialistas em marketing digital, criação de websites e desenvolvimento de software.</h5>
					<h5>Ajudamos a sua empresa a atrair novos clientes, a fechar mais negócios e aumentar as vendas.</h5>
				</div>
				<div class="headText2 space-top-bottom">
					<a href="contactos.php" class="btn btn-primary btn-cta-green" title="Clique aqui para agendar uma reunião">Vamos conversar?</a>
				</div>
				<!--<div class="col-sm-6">
					<img class="bannerImg" src="imgs/tlm1.png"></img>
				</div>-->
			</div>
			<div class="d-flex flex-wrap servicos-div padding20px" id="servicosNav" >
				<div class="cor-texto padding120px center-text col-sm-12">
					<h1>SERVIÇOS</h1>
				</div>
				<div class="d-flex flex-wrap servicos-sub-div">
					<!--desenvolvimento web-->
					<div class="card cartoes-servicos text-center col-sm-3">
						<img src="imgs/icones/icon-criacao-websites.jpg" class="mx-auto card-img-top icones-servicos" alt="criação de páginas web" title="criação de websites">
							<div class="card-body d-flex flex-column justify-content-between">
								<h5 class="card-title">Desenvolvimento web</h5>
								<p class="card-text">Desenvolvimento de websites, landing pages e lojas online com design único, performance incrível e otimizado para SEO, com implementação e integrações com outros softwares e plataformas. Faça o seu negócio crescer online com sucesso e leve as suas vendas online a outro patamar.
								</p>
								<a href="devweb.php" class="btn btn-cta-green" title="Saber mais sobre desenvolvimento web">Saber mais</a>
							</div>
					</div>
					<!--redes sociais-->
					<div class="card cartoes-servicos text-center col-sm-3">
						<img src="imgs/icones/icon-redes-sociais.jpg" class="mx-auto card-img-top icones-servicos" alt="gestao de redes sociais" title="gestao de redes sociais">
							<div class="card-body d-flex flex-column justify-content-between">
								<h5 class="card-title">Gestão de redes sociais</h5>
								<p class="card-text">Construímos pontes digitais que transformam negócios. Através da gestão de redes sociais, transformamos seguidores em fãs, cliques em clientes e vendas.</p>
								<a href="redes.php" class="btn btn-cta-green" title="Saber mais sobre redes sociais">Saber mais</a>
							</div>
					</div>
					<!--seo-->
					<div class="card cartoes-servicos text-center col-sm-3">
						<img src="imgs/icones/icon-agencia-seo.jpg" class="mx-auto card-img-top icones-servicos" alt="agencia seo" title="agência SEO">
							<div class="card-body d-flex flex-column justify-content-between">
								<h5 class="card-title">SEO</h5>
								<p class="card-text">Otimizamos os seus conteúdos com SEO para melhorarmos o posicionamento das suas páginas no Google.</p>
								<a href="seo.php" class="btn btn-cta-green" title="Saber mais sobre SEO">Saber mais</a>
							</div>
					</div>
					<!--email marketing-->
					<div class="card cartoes-servicos text-center col-sm-3">
						<img src="imgs/icones/icon-email-marketing.jpg" class="mx-auto card-img-top icones-servicos" alt="Email marketing" title="email marketing">
							<div class="card-body d-flex flex-column justify-content-between">
								<h5 class="card-title">Email marketing</h5>
								<p class="card-text">O envio de Email Marketing permite-lhe comunicar com potenciais clientes e desenvolver relacionamentos de forma personalizada.</p>
								<a href="pub.php#mailads" class="btn btn-cta-green" title="Saber mais sobre email marketing">Saber mais</a>
							</div>
					</div>
					<!--software-->
					<div class="card cartoes-servicos text-center col-sm-3">
						<img src="imgs/icones/icon-software.jpg" class="mx-auto card-img-top icones-servicos" alt="Desenvolvimento de software" title="Desenvolvimento de software">
							<div class="card-body d-flex flex-column justify-content-between">
								<h5 class="card-title">Desenvolvimento de software</h5>
								<p class="card-text">Desenvolvemos software personalizado, feito à medida das suas necessidades, para que o seu negócio alcance o seu potencial máximo.</p>
								<a href="devsoft.php" class="btn btn-cta-green" title="Saber mais sobre desenvolvimento de software">Saber mais</a>
							</div>
					</div>
					<!--conteudos digitais-->
					<div class="card cartoes-servicos text-center col-sm-3">
						<img src="imgs/icones/icon-marketing-conteudo.jpg" class="mx-auto card-img-top icones-servicos" alt="Conteúdos digitais" title="Conteúdos digitais">
							<div class="card-body d-flex flex-column justify-content-between">
								<h5 class="card-title">Conteúdos digitais</h5>
								<p class="card-text">Produzimos e publicamos conteúdos para fornecer aos clientes, soluções para os seus problemas, dificuldades, desejos e necessidades do seu negócio.</p>
								<a href="pub.php#conteudoads" class="btn btn-cta-green" title="Saber mais sobre conteúdos digitais">Saber mais</a>
							</div>
					</div>
					<!--publicidade online-->
					<div class="card cartoes-servicos text-center col-sm-3">
						<img src="imgs/icones/icon-publicidade-online.jpg" class="mx-auto card-img-top icones-servicos" alt="Publicidade online" title="Publicidade online">
							<div class="card-body d-flex flex-column justify-content-between">
								<h5 class="card-title">Publicidade online</h5>
								<p class="card-text">Rentabilidade e eficácia na gestão dos seus anúncios. Obtenha mais contactos, aumente as suas vendas e divulgue o seu negócio.</p>
								<a href="pub.php" class="btn btn-cta-green" title="Saber mais sobre publicidade online">Saber mais</a>
							</div>
					</div>
					<!--estrategia digital-->
					<div class="card cartoes-servicos text-center col-sm-3">
						<img src="imgs/icones/icon-estrategia-digital.jpg" class="mx-auto card-img-top icones-servicos" alt="Estratégia digital" title="Estratégia digital">
							<div class="card-body d-flex flex-column justify-content-between">
								<h5 class="card-title">Estratégia de marketing digital</h5>
								<p class="card-text">Elaboramos estratégias de marketing digital para construir a reputação da sua marca junto do seu público-alvo.</p>
								<a href="contactos.php" class="btn btn-cta-green" title="Saber mais sobre estratégia de marketing digital">Vamos conversar?</a>
							</div>
					</div>
				</div>
			</div>
			<div class="d-flex flex-wrap sobre-div padding20px">
				<div class="col-sm-6 headText2">
					<img class="sobreImg" src="imgs/icones/whyus.png" alt="porqûe nós?" title="Porqûe nós?">
				</div>
				<div class="col-sm-6">
					<div class="space-top-bottom">
						<h1>PORQUÊ ESCOLHER A VIPDESIGN?</h1>
					</div>
					<p><i class="bi bi-check-circle-fill check-color"></i>Experiência em aumentar a visibilidade da sua marca</p>
					<p><i class="bi bi-check-circle-fill check-color"></i>Compromisso firme com a realização dos seus objetivos de marketing e vendas</p>
					<p><i class="bi bi-check-circle-fill check-color"></i>Abordagem estratégica que coloca o seu negócio à frente da concorrência</p>
					<p><i class="bi bi-check-circle-fill check-color"></i>Capacidade de transformar visitantes do seu site em clientes dedicados</p>
					<p><i class="bi bi-check-circle-fill check-color"></i>Foco em assegurar que o seu investimento em marketing digital traga resultados sólidos</p>
					<p><i class="bi bi-check-circle-fill check-color"></i>Adaptação contínua das estratégias para maximizar o desempenho</p>
					<p><i class="bi bi-check-circle-fill check-color"></i>Construção consistente da sua audiência através de canais próprios, como redes sociais</p>
					<div class="space-top-bottom">
						<a href="contactos.php" class="btn btn-cta-green" title="Clique aqui para conversarmos">VAMOS CONVERSAR?</a>
					</div>
				</div>
			</div>
			<div class="d-flex flex-wrap cta-div padding20px">
				<div class="cor-texto2 space-top-bottom">
					<h5>TRANSFORMAMOS AS SUAS IDEIAS EM VENDAS DE SUCESSO</h5>
				</div>
				<div class="cor-texto2 space-top-bottom">
					<h1>Vamos impulsionar o seu negócio?</h1>
				</div>
				<div class="space-top-bottom">
					<a href="contactos.php" class="btn btn-cta-green" title="Clique aqui para agendar uma reunião">QUERO AUMENTAR AS MINHAS VENDAS<i class="bi bi-arrow-right"></i></a>
				</div>
			</div>
		</div>
		<?php include("rodape.php");?>
	</body>
</html>