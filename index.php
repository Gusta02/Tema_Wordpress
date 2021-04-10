<!DOCTYPE html>
<html>
<head>
	<title>Tema Teste</title>
	<meta charset="utf-8">
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
    <section class="diferenciais">

    	<div class="center">
    		<h2>Contribuímos de ponta a ponta</h2>

    		<div class="icons-diferenciais">
    			
    			<div class="box-single-diferenciais">
    				<img src="img/pngs/icon1.png" />
    				<h3>Ambiente Mobile</h3>
    				<p>Garanta que toda sua cominicação esteja alinhada com seu propósito, cada palavra conta.</p>
    			</div>

    			<div class="box-single-diferenciais">
    				<img src="img/pngs/icon2.png"/>
    				<h3>Sites e Intranets</h3>
    				<p>Um diálogo so acontece quando ambas as partes falam e escutam, garanta que seu público te entende.</p>
    			</div>

    			<div class="box-single-diferenciais">
    				<img src="img/pngs/icon3.png"/>
    				<h3>Comunicação One-To-One</h3>
    				<p>O digital veio pra ficar, sem duvidas, mas uma comunicação integrada de verdade exige clareza nas decisões.</p>
    				
    			</div>

    		</div><!--icons-diferenciais-->
    	</div>

    </section><!--diferenciais-->

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