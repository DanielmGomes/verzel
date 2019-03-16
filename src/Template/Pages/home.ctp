<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>TARI Metais</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Grade Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
    
	<!-- css files -->
	<?= $this->Html->css('bootstrap.css')?> <!-- Bootstrap-Core-CSS -->
	<?= $this->Html->css('style.css')?> <!-- Style-CSS --> 
	<?= $this->Html->css('fontawesome-all.css')?> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" /><!-- for testimonials -->

	<!--web font-->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!--//web font-->

</head>

<body>

<!-- header -->
<header>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand" href="index.php">
			<div style="height: 100-x; width: 100px;">
				<?= $this->Html->image('logo.png')?>
			</div>	
			</a>
			<button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto text-center">
					<li class="nav-item active  mr-lg-3">
						<a class="nav-link" href="#">Inicio
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item  mr-lg-3">
						<a class="nav-link" href="#">A Empresa</a>
					</li>
					<li class="nav-item dropdown mr-lg-3">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">
							Produtos
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Estruturas Metálicas</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Soluções Personalizadas</a>
							<div class="dropdown-divider"></div>	
							<a class="dropdown-item" href="#">Edificios Multiplos Andares</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Projetos Personalizados</a>
						</div>
					</li>
					<li class="nav-item  mr-lg-3">
						<a class="nav-link" <?php echo $this->Html->link(('contato'),['controller' => 'users', 'action' => 'add']); ?>></a>
					</li>
				</ul>
				
			</div>
		</nav>
	</div>
</header>
<!-- //header -->
<!-- banner -->
<section class="banner" id="home">
	<div class="callbacks_container">
		<ul class="rslides" id="slider3">
			<li>
				<div class="slider-info bg1 w3-agile-grid">
					<div class="bs-slider-overlay">
					<div class="banner-text container agile-info">
						<h1 class="movetxt text-center agile-title text-uppercase">Estruturas Metálicas</h1>
						<h5 class="tag text-center mb-3 text-uppercase">Estruturas Metálicas de Grande Porte, Galpões Industriais</h5>
					</div>
					</div>
				</div>
			</li>
			<li>
				<div class="slider-info bg2 w3-agile-grid">
					<div class="bs-slider-overlay">
					<div class="banner-text container agile-info">
						<h4 class="movetxt text-center agile-title text-uppercase">Soluções Personalizadas</h4>
						<h5 class="tag text-center mb-3 text-uppercase">Equipamentos de Ponta, Profissionais Capacitados</h5>
					</div>
					</div>
				</div>
			</li>
			<li>
				<div class="slider-info bg3 w3-agile-grid">
					<div class="bs-slider-overlay">
					<div class="banner-text container agile-info">
						<h4 class="movetxt text-center agile-title text-uppercase">Edifícios em Multiplos Andares</h4>
						<h5 class="tag text-center mb-3 text-uppercase">Estruturas Metálicas de Grande Porte, Prédios Metálicos</h5>
					</div>
					</div>
				</div>
			</li>
			<li>
				<div class="slider-info bg4 w3-agile-grid">
					<div class="bs-slider-overlay">
					<div class="banner-text container agile-info">
						<h4 class="movetxt text-center agile-title text-uppercase">Projetos Personalizados</h4>
						<h5 class="tag text-center mb-3 text-uppercase">Projetos Desenvolvidos segundo a Nescessidade dos Clientes</h5>
					</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</section>
<!-- //banner -->

<!-- about -->
<section class="about py-5">
	<div class="container py-md-3">
		<h3 class="heading mb-md-5 mb-4">Quem Somos</h3>
		<div class="row about-grids agile-info">
			<div class="col-lg-6 mb-lg-0 w3-agile-grid mb-5">
				<p>A TARI Metais é sediada no sul de Minas, na rota da estrada real.
					Atendemos em todo o circuito das águas e cidades circunvizinhas, temos soluções completas em construções metálicas, atuamos com projetos, fabricação e montagem de edifícios em andares multiplos e galpões comerciais.
				</p>
				<p class="mt-2 mb-3">Dominamos a tecnologia para soldar com qualidade e segurança utilizando os métodos de eletrodo revestido, MIG/MAG, TIG oxiacetilêno nos 	diversos materiais com aço, aluminio e inox.</p>
				<a href="#">Conheça Mais</a>
			</div>
			<div class="col-lg-3 col-md-4 w3-agile-grid pr-md-0">
				<h3 class="margin">+10 anos de experiência</h3>
				<h3 class="black">Serviços de Qualidade</h3>
			</div>
			<div class="col-lg-3 col-md-4 w3-agile-grid mt-md-0 mt-4">
				<h3 class="margin green">Profissionais Experientes</h3>
				<h3 class="grey">Soluções Para Seu Negócio</h3>
			</div>
		</div>
	</div>
</section>
<!-- //about -->

<!-- how we work -->
<section class="work">
	<div class="work-layer py-5">
	<div class="container py-md-3">
		<h3 class="heading mb-lg-5 mb-4">Nosso Modelo de Negócio</h3>
		<div class="row join agile-info">
			<div class="col-md-3 col-sm-6 steps-reach w3-agile-grid">
				<div style="height: 50px; width: 50px;">
					<?= $this->Html->image('icon10.png')?>
				</div>
				<h3>Redução de Custos</h3>
				<p>Bem administrada, as construções metálicas podem sair até 30% mais baratas do que a construção civil tradicional.</p>
				<div class="style-border">
				</div>
			</div>
			<div class="col-md-3 col-sm-6 mt-sm-0 mt-5 steps-reach w3-agile-grid">
				<div style="height: 50px; width: 50px;">
					<?= $this->Html->image('icon12.png')?>
				</div>
				<h3>Rápida Execução</h3>
				<p>Com nossa equipe experiente e nossa competencia em campo, conseguimos reduzir o tempo de obra em até 40%.</p>
				<div class="style-border second-border">
				</div>
			</div>
			<div class="col-md-3 col-sm-6 mt-md-0 mt-5 pt-md-0 pt-sm-5 steps-reach w3-agile-grid">
				<div style="height: 50px; width: 50px;">
					<?= $this->Html->image('icon03.png') ?>
				</div>
				<h3>Organização no Canteiro de Obras</h3>
				<p>Com o nosso inovador modelo construtivo, é possivel haver maior controle e organização no canteiro de obras.</p>
				<div class="style-border">
				</div>
			</div>
			<div class="col-md-3 col-sm-6 mt-md-0 mt-5 pt-md-0 pt-sm-5 steps-reach w3-agile-grid">
				<div style="height: 50px; width: 50px;">
					<?= $this->Html->image('icon06.png')?>
				</div>
				<h3>Profissionais Capacitados</h3>
				<p>Contamos com um quadro de profissionais altamente qualificados com total disposição para realizarmos o melhor atendimento.</p>
			</div>
		</div>
	</div>
	</div>
</section>
<!-- //how we work -->

<!-- management services -->
<section class="services py-5">
	<div class="container agile-info py-md-3">
		<h3 class="heading mb-lg-5 mb-4">Nossos Serviços</h3>
		<div class="row service_grids">
			<div class="col-lg-4 w3-agile-grid">
				<div class="grid">
					<h5 class="mb-3">Edificios em Andares multiplos</h5>
					<p>A construção civil está em constante processo de mudança. Novos materiais e novas tecnologias surgem a cada dia propondo-se a resolver melhor e mais rápido as questões que se apresentam nos canteiros de obras. </p>
					<a href="edificios.php">Continuar Lendo <span class="fas ml-1 fa-angle-double-right"></span> </a>
				</div>
				<div class="grid mt-4">
					<h5 class="mb-3">Soluções Personalizadas</h5>
					<p>As primeiras máquinas NC foram construídas na década de 50 e rodavam através de cartões perfurados. Enquanto o conceito dessa forma de controlar máquinas ferramentas provou que reduziria os custos das indústrias, as fabricantes demoraram para dar atenção à esta invenção.</p>
					<a href="solucoes.php">Continuar Lendo <span class="fas ml-1 fa-angle-double-right"></span> </a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 my-lg-0 my-5 img-fluid">
				<?= $this->Html->image('service.jpg')?> 
			</div>
			<div class="col-lg-4 w3-agile-grid">
				<div class="grid">
					<h5 class="mb-3">Estruturas Metálicas</h5>
					<p>Seguindo a tendência mundial, onde há décadas faz-se o uso de estruturas metálicas em edificações de múltiplos andares, o Brasil, embora atrasado, finalmente despertou para o grande mercado da construção civil industrializada. </p>
					<a href="#">Continuar Lendo <span class="fas ml-1 fa-angle-double-right"></span> </a>
				</div>
				<div class="grid mt-4">
					<h4 class="mb-3">Projetos Personalizados</h4>
					<p>Nossa empresa conta com um quadro de profissionais altamente preparados para a execução de serviços dos mais variados tipos.
					   Nossos engenheiros estão estão preparados para desenvolver seu projeto de forma que venha ser a melhor resposta para suas nescessidades.</p>
					<a href="#">Continuar Lendo <span class="fas ml-1 fa-angle-double-right"></span> </a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //management services -->

<!-- servicesbottom -->

<!-- footer -->	
<footer>
	<div class="container-fluid p-5">
		<div class="row footer-gap">
			<div class="col-lg-8 mb-lg-0 mb-4">
				<h5 class="text-capitalize mb-3" style="color: white;">Nossa Empresa</h5>
				<p>TARI Metais, o melhor envestimento estrutural para o seu negoócio. </p>
				<div class="row mt-4">
					<div class="col-md-6">
						<h5 class="text-capitalize mb-3" style="color: white;">Entre em Contato</h5>
						<a href="https://www.facebook.com/tarimetais/" class="facebook mr-2"><span class="fab mr-1 fa-facebook-f"></span> Facebook</a>
					</div>
					<div class="col-md-6 mt-md-0 mt-5">
						<h5 class="text-capitalize mb-3" style="color: white; ">Nosso Endereço</h5>
						<address class="mb-0">
							<p class="mb-2"><i class="fas fa-map-marker"></i> Rod. BR 354, Km 94 <br>Campo do Meio, Caxambu-MG.</p>
							<p><i class="fas mr-1 fa-phone"></i> +55 (35) 3341 4962</p>
							<p><i class="fas mr-1 fa-envelope-open"></i> <a href="mailto:info@example.com">vendas@tarimetais.com.br</a></p>
						</address>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-lg-0 mt-sm-0 p-md-0">
				<h5 class="text-capitalize mb-3" style="color: white;">Serviços</h5>
				<ul>
					<a href="#"><li><i class="fas mr-1 fa-chevron-circle-right"></i>Estruturas Metálicas</li></a>
					<a href="#"><li><i class="fas mr-1 fa-chevron-circle-right"></i>Edificios Andares Multiplos</li></a>
					<a href="#"><li><i class="fas mr-1 fa-chevron-circle-right"></i>Soluções Personalizadas</li></a>
					<a href="#"><li><i class="fas mr-1 fa-chevron-circle-right"></i>Projetos Personalizados</li></a>
				</ul>
				<h5 class="text-capitalize mt-4 mb-3" style="color: white;">Envie seu E-mail para Contato</h5>
				<p class="mb-3">Informe seu e-mail para receber um catalogo de nossa empresa</p>
				<form action="#" method="post">
					<input type="email" name="Email" placeholder="Informe seu E-mail..." required="">
					<button class="btn1"><i class="far fa-paper-plane"></i></button>
					<div class="clearfix"> </div>
				</form>
			</div>
		</div>
	</div>
	<div class="copyright pb-sm-5 pb-4 text-center">
		<p>© 2018 TARI Metais | Design by <a href="https://www.linkedin.com/in/daniel-gomes-62958a143" target="_blank">Daniel Moreira Gomes</a></p>
	</div>
</footer>
<!-- footer -->

	<!-- Vertically centered Modal -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title text-uppercase text-center" id="exampleModalLongTitle"><span class="fab fa-asymmetrik"></span> Grade</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body img-fluid mb-3">
			<?= $this->Html->image('banner1.jpg')?>
			Vivamus eget est in odio tempor interdum. Mauris maximus fermentum arcu, ac finibus ante. Sed mattis risus at ipsum elementum, ut auctor turpis cursus. Sed sed odio pharetra, aliquet velit cursus, vehicula enim. Mauris porta aliquet magna, eget laoreet ligula.
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button>
		  </div>
		</div>
	  </div>
	</div>
	<!-- //Vertically centered Modal -->

	<!-- js -->
	<?= $this->Html->script('jquery-2.1.4.min.js')?>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->	
	
	<!-- Stats-Number-Scroller-Animation-JavaScript -->
		<?= $this->Html->script('waypoints.min.js')?>
		<?= $this->Html->script('counterup.min.js')?> 
		<script>
			jQuery(document).ready(function( $ ) {
				$('.counter').counterUp({
					delay: 100,
					time: 1000
				});
			});
		</script>
	<!-- //Stats-Number-Scroller-Animation-JavaScript -->
	
	<!-- Banner Responsiveslides -->
	<?= $this->Html->script('responsiveslides.min.js')?>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider3").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!-- // Banner Responsiveslides -->

	<!-- start-smoth-scrolling -->
    <?= $this->Html->script('jquery.mask.min.js')?>        
	<?= $this->Html->script('SmoothScroll.min.js')?>
	<?= $this->Html->script('mascara.js')?>
	<?= $this->Html->script('move-top.js')?>
	<?= $this->Html->script('easing.js')?>
	<script type="text/javascript">

		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->

	<!-- FlexSlider-JavaScript -->
	<?= $this->Html->script('jquery.flexslider.js')?>
	<script type="text/javascript">
		$(function(){
			SyntaxHighlighter.all();
				});
				$(window).load(function(){
				$('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
						$('body').removeClass('loading');
					}
			});
		});
	</script>
	<!-- //FlexSlider-JavaScript -->

</body>
</html>


