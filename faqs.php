<!doctype html>
<html lang="pt">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Agência de marketing digital e desenvolvimento de software em Portugal. Estamos focados em fazer os seus negócios crescer.">
		<meta name="robots" content="index,follow">
		<meta name="author" content="Samuel Parente">
		<title>VIPDESIGN - Marketing digital e desenvolvimento de software</title>
		<link rel="canonical" href="https://www.vipdesign.pt/faqs.php">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
		<link rel="stylesheet" href="main.css">
		<link rel="stylesheet" href="menu.css">
		<link rel="stylesheet" href="other-pages.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
		<link rel="icon" href="imgs/vipdesign.ico" type="image/x-icon">
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
		<div class="d-flex flex-wrap align-self-start .conteudo-other-pages">
			<div class="overlay" id="overlay"></div>
			<?php include("menu.php");?>
			<div class="d-flex flex-wrap justify-content-center banner-other-pages line-geral align-self-center">
				<div class="topodiv d-flex flex-wrap justify-content-evenly col-sm-6">
					<img src="imgs/DIGITAL-MARKETING.png" class="mx-auto icone-geral" alt="marketing digital faqs" title="marketing digital faqs">
				</div>
				<div class="topodiv d-flex flex-wrap justify-content-evenly col-sm-6">
					<h1>AGÊNCIA DE MARKETING DIGITAL E DESENVOLVIMENTO DE SOFTWARE</h1>
					<h3><b>Esta página encontra-se em construção.</b></h3>
					<p>Estamos a reunir um conjunto de perguntas e respostas para esclarecer todas as suas dúvidas.</p>
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