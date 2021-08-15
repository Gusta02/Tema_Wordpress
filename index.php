<!DOCTYPE html>
<html>
<head>
	<title>Tema Teste</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

	<script src="https://kit.fontawesome.com/a19bcedee8.js" crossorigin="anonymous"></script>

	<link href="style.css" rel="stylesheet">
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

			<div class="menu-mobile">
				<i class="fas fa-align-right"></i>
				<ul class="menu-mobile">
					
					<li><a href="">Home</a></li>
					<li><a href="">Sobre</a></li>
					<li><a href="">Contato</a></li>
				</ul>
			</div><!--Menu mobile-->

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

	<!--Sobre time-->

	<section class="sobre_time">
		<div class="center">
			<div class="w50 time-descricao-2">
				<h2>Um time experiente, <br/> comunicador e coeso.</h2>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
					<br />
				It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			</div><!--w50-->
			<div class="w50 img-time">
				<img src="img/pngs/ilustracao-04.png">
			</div><!--w50-->

			<div class="clear"></div>

		</div>
	
	</section><!--Sobre Time-->

	<!--depoimentos-->

	<section class="depoimentos">
		<div class="center">
			<h2>Depoimentos</h2>
			<div class="depoimentos-box">
				<div class="depoimentos-single">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic</p>
					<p>Gustavo Oliveira</p>
					<img src="img/pngs/autor.png"/>
				</div><!--depoimentos-single-->

				<div class="depoimentos-single">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic</p>
					<p>Gustavo Oliveira</p>
					<img src="img/pngs/autor.png"/>
				</div><!--depoimentos-single-->

				<div class="depoimentos-single">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic</p>
					<p>Gustavo Oliveira</p>
					<img src="img/pngs/autor.png"/>
				</div><!--depoimentos-single-->

			</div><!--depoimentos-box-->
		</div><!--Center-->
	</section><!--Depoimentos-->
	<section class="Metodologia">
	    <div class="center">
            <h2>Conheça nossa Metodologia</h2>
            <p>O que acha de fazermos o que mais gostamos de fazer? Conversar!<br /> Entre em contato por e-mail ou telefone.</p>
            <a href="/contato">Entrar em Contato</a>
        </div><!--Center-->
	</section><!--Metodologia-->


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

	$('section.depoimentos .depoimentos-box').slick({
			dots: true,
			arrows: false,
			infinite: true,
			speed: 1000,
			slidesToShow: 1,
			centerMode: false,
		});
	</script>

	<!--Menu Responsivel-->
	<script>
		$('.menu-mobile i').click(function(){
			$('.menu-mobile').find('ul').slideToggle();
		})
	</script><!--Menu Responsivel-->

</body>
</html>