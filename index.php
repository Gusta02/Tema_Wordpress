<!DOCTYPE html>
<html>
<head>
	<title>Tema Teste</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

	<script src="https://kit.fontawesome.com/a19bcedee8.js" crossorigin="anonymous"></script>

	<link href="Style.css" rel="stylesheet">
</head>
<body>
	<section class="topo">
		<div class="center">
			<header>
				<div class="logo"><img src="img/pngs/logo.png" /></div><!--logo-->
			</header>
			<ul class="menu-desktop">
				<li><a href="">Home</a></li>
				<li><a href="">Sobre</a></li>
				<li><a href="">Contato</a></li>
				</ul>
				<div class="clear"></div>
				<br />
				<br />
				<br/>
				<div class="w50 time-descricao">
					<h2>Melhore a comunicação com seu cliente e time.</h2>
					<p>Consultoria especializada em startups, empresas, principalmente, pessoas.</p>
					<a target="_blank" href="">Ver demonstração</a>
				</div><!--w50-->
				<div class="w50 time-imagem">
					<img src="img/pngs/ilustracao.png" />
				</div><!--w50-->
				<div class="clear"></div>
		</div><!--center-->
	</section><!--topo-->
	<div class="circle"><i class="fas fa-angle-down"></i></div>

	<section class="clientes-slider">

		<div class="center">
			<div style="max-width: 800px; margin: 0 auto;overflow: hidden;" class="slider-container">

				<li><img src="img/pngs/amazon.png"/></li> 
				<li><img src="img/pngs/costco.png"/></li>
				<li><img src="img/pngs/dominos.png"/></li>
				<li><img src="img/pngs/uber.png"/></li>
				<li><img src="img/pngs/walmart.png"/></li>

			</div>
		</div><!--center/slick-->

	</section><!--clientes-slider-->


	<script src="js/jquery.js"></script>
	<script src="js/slick.min.js"></script>
	<script type="text/javascript">

		$('section.clientes-slider .slider-container').slick({
			dots: true,
			arrows: false,
			infinite: false,
			speed: 1000,
			slidesToShow: 4,
			autoplay: true,
			centerMode: false,
			autoplaySpeed: 3000,
			pauseOnHouver: false,
			responsive:
			[
			{
				breakpoint: 760,
				settings: {
					slidesToShow: 3
				}
			}
			]

		});
	</script>
</body>
</html>