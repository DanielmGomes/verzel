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
<html lang="zxx">
   <head>
     <title>RF Empreendimentos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Consult Pro a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
    <?php
        echo $this->html->css('bootstrap.css');
        echo $this->html->css('style.css');
        echo $this->html->css('fontawesome-all.css');    
    ?>
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   </head>
   <body>
      <!--navbar-->
 <!--Header-->

	<header>
	 <div class="agile-banner_nav">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
   <a class="navbar-brand" href="#" style="font-family: impact;"><img src="<?= $this->Html->image('logo02.png') ?>" style="height: 100px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">A Empresa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Serviços</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="#">Contato</a>
      </li>
    </ul>
  </div>
</nav>
 
</div>
</header>
      <!--//navbar-->

      <!-- banner -->
      <div class="inner_page_about">
      </div>
      <!DOCTYPE html>
<html>

<head>
	<title>RF Empreendimentos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Consult Pro a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
    <?= $this->html->css('bootstrap.css')?><!-- Bootstrap-Core-CSS -->
    <?= $this->html->css('style.css')?>
	<!-- FlexSlider css -->
    <?= $this->html->css('flexslider.css')?>
	<!-- //FlexSlider css -->

	<link href="<?= base_url(); ?>assets/css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>

<body>
	<!--Header-->

	<header>
	 <div class="agile-banner_nav">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
   <a class="navbar-brand" href="#" style="font-family: impact;"><img <?= $this->html->image('logo02.png')?> style="height: 100px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Empresa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Serviços</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="#">Contato</a>
      </li>
    </ul>
  </div>
</nav>
 
</div>
</header>
	<!--/banner-->
	<section class="banner-top">
	<div class="banner">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<div class="carousel-caption">
							<h1>RF Empreendimentos </h1>
						<p>Um novo conceito habitacional.</p>
								
					</div>
				</div>
				<div class="carousel-item item2">
					<div class="carousel-caption">
						<h3>Um Novo Modo de Construir</h3>
						<p>Conheça um pouco mais do nosso trabalho e investimentos no setor habitacional.</p>
							
					</div>
				</div>
				<div class="carousel-item item3">
					<div class="carousel-caption">
							<h3>Compromisso Com Nossos Clientes</h3>
					<p>Nossa principal meta é atender nossos clientes .</p>
					
					</div>
				</div>
				<div class="carousel-item item4">
					<div class="carousel-caption">
							<h3>Investimento Imobiliarios</h3>
						<p>Trabalhamos com loteamentos, casas, condominios particulares e construção civil.</p>
					
					</div>
				</div>
				<div class="carousel-item item5">
					<div class="carousel-caption">
							<h3>We help business grow and innovate future profits</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non dignissim lacus, vel elementum quam. Donec facilisis aliquet sapien.</p>
					
				</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	</section>
	<!--//banner-->
	<!--/about-->
	<section class="about py-5">
		<div class="container py-3 py-md-3">
		<div class="w3-head-all text-center mb-3">
			<h3 style="color: grey;">Casas Modulares</h3>
		</div>
			<div class="about-grid ">
				<h2 class="p-2 text-center">Um Pouco Mais do Conceito Modular</h2>
				<p>O modelo habitacional RF Construções é planejado para um maior conforto interno dos habitantes, design externo moderno e amplo, montagem rápida priorizando a estabilidade e confiança em sua residência.
				</p>
			</div>
			<div class="about-grid1 text-center">
				<img <?= $this->html->image('servico01.jpg')?> alt="about" class="img-fluid">
			</div>
			<!--/banner-bottom-->
	<div class="banner-bottom">
		<div class="container">
			<h2 class="p-2 text-center">Casas Modulares - Algumas Caracteristicas</h2>
			<br>
			<br>
			<!-- Three columns of text below the carousel -->
			<div class="row bt-grids-main">

				<div class="col-lg-4 col-md-4 bottom-sub-grid text-center">
					<div class="bt-icon">
						<img <?= $this->html->image('icon10.png')?> style="height: 100px;">
					</div>
					<h4 class="sub-tittle">Redução de Custos</h4>
					<p>Bem administrada, a construção pode ser até 30% mais barato do que construções tradicionais.	</p>

				</div>
				<!-- /.col-lg-4 -->
				<div class="col-lg-4 col-md-4 bottom-sub-grid text-center">
					<div class="bt-icon">
						<img <?= $this->html->image('icon11.png')?> style="height: 100px;">
					</div>

					<h4 class="sub-tittle">Flexibilidade</h4>
					<p>Além da construção poder ser desmontada e montada em outro tereno, suas características modular e geometrica permitem diversas configurações e facilita a construção e montagem.
					</p>

				</div>
				<!-- /.col-lg-4 -->
				<div class="col-lg-4 col-md-4 bottom-sub-grid text-center">
					<div class="bt-icon">
						<img <? $this->html->css('icon12.png')?> style="height: 100px;">
					</div>
					<h4 class="sub-tittle">Rapida Execução</h4>
					<p>Leva geralmente entre 60 a 90 dias para ficar pronta.</p>

				</div>
				<!-- /.col-lg-4 -->

			</div>
			<!-- /.row -->
		</div>
	</div>
		</div>
	</section>
		<!--//about-->
		 <!-- /Services -->
			<div class="agile-services-w3 py-5">
				<div class="container py-3 py-md-3">
				   <div class="w3-head-all text-center mb-3">
					<h3 style="color: white;">Outros Serviços</h3>
					</div>
					<div class="wthree-agile-sevre-grids row my-12">
						<div class="col-lg-12 wthree-agile-grid services-align">
						       <div class="service-icons">
								</div>
								<h4 style="color: white;">
									Para o melhor atendimento dos mais variados tipos de cliente, trabalhamos além de imovéis planejados, terrenos, loteamentos e condominios fechados.
								</h4>
						</div>
					</div>
			    </div>
		   </div>
		<!-- //Services -->

		<!-- Team -->
<div class="team py-5" id="team">
	<div class="w3-head-all text-center mb-3">
			<h3 style="color: grey;">Trabalhos Recentes</h3>
		</div>
	<div class="container py-3 py-md-3">
		<div class="flexslider-info">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="w3l-info1 row">
								<div class="col-lg-6 col-md-6 row">
									<div class="col-lg-5 col-md-5  team-grid-1">
										<img <?= $this->html-image('servico14.jpg')?> alt="" class="img-fluid" />
									</div>
									<div class="col-lg-7 col-md-7  team-grid-2">
										<h4 style="color: grey;">Laura Elisa</h4>
										<h5> Founder & CEO</h5>
										<p>Lorem ipsum dolor sit amet augueit, consectetur adipiscing elit. Quisque utrisus eget libero finibus.</p>
									</div>
								</div>
								<div class="col-lg-6 col-md-6  row">
									<div class="col-lg-5  col-md-5 team-grid-1">
										<img <?= $this->html->image('servico15.jpg')?> alt="" class="img-fluid" />
									</div>
									<div class="col-lg-7 col-md-7  team-grid-2">
										<h4 style="color: grey;">Johnson</h4>
										<h5>Co-founder</h5>
										<p>Lorem ipsum dolor sit amet augueit, consectetur adipiscing elit. Quisque utrisus eget libero finibus.</p>
									</div>
									
								</div>
									
							</div>
						</li>
						<li>
							<div class="w3l-info1 row">
								<div class="col-lg-6 col-md-6  row">
									<div class="col-lg-5 col-md-5  team-grid-1">
										<img <?= $this->html->css('servico16.jpg')?> alt="" class="img-fluid" />
									</div>
									<div class="col-lg-7 col-md-7 team-grid-2">
										<h4 style="color: grey;">Isabella</h4>
										<h5>Manager</h5>
										<p>Lorem ipsum dolor sit amet augueit, consectetur adipiscing elit. Quisque utrisus eget libero finibus.</p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="col-lg-6 col-md-6  row">
									<div class="col-lg-5 col-md-5  team-grid-1">
										<img src="<?= base_url(); ?>assets/images/servicos/servico17.jpg" alt="" class="img-fluid" />
									</div>
									<div class="col-lg-7 col-md-7  team-grid-2">
										<h4 style="color: grey;">Richard</h4>
										<h5>Supervisor</h5>
										<p>Lorem ipsum dolor sit amet augueit, consectetur adipiscing elit. Quisque utrisus eget libero finibus.</p>
									</div>
									
								</div>
									
							</div>
						</li>
						<li>
							<div class="w3l-info1 row">
								<div class="col-lg-6 col-md-6  row">
									<div class="col-lg-5 col-md-5  team-grid-1">
										<img src="<?= base_url(); ?>assets/images/servicos/servico18.jpg" alt="" class="img-fluid"  />
									</div>
									<div class="col-lg-7 col-md-7  team-grid-2">
										<h4 style="color: grey;">Carnivel</h4>
										<h5>Manager</h5>
										<p>Lorem ipsum dolor sit amet augueit, consectetur adipiscing elit. Quisque utrisus eget libero finibus.</p>
									</div>
									
								</div>
								<div class="col-lg-6 col-md-6 row">
									<div class="col-lg-5 col-md-5 team-grid-1">
										<img src="<?= base_url(); ?>assets/images/servicos/servico19.jpg" alt="" class="img-fluid"  />
									</div>
									<div class="col-lg-7 col-md-7  team-grid-2">
										<h4 style="color: grey;">Carnivel</h4>
										<h5>Administrator</h5>
										<p>Lorem ipsum dolor sit amet augueit, consectetur adipiscing elit. Quisque utrisus eget libero finibus.</p>
									</div>
									
								</div>
								
							</div>
						</li>
					</ul>
				</div>
			</section>
		</div>
	</div>
</div>
<!-- //Team -->
<!---728x90--->
	<!--/footer-->
		<section class="footer py-3">
	<div class="container">
		<div class="row py-6 foot-resp">
	<div class="col-lg-8 bottom-nav-main">
				<ul>
					<li>
						<a href="<?= base_url(); ?>">Inicio</a>
					</li>
					<li>
						<a href="<?= base_url(); ?>empresa">A Empresa</a>
					</li>
					<li>
						<a href="<?= base_url(); ?>servicos">Serviços</a>
					</li>
					<li>
						<a href="<?= base_url(); ?>contato">Contato</a>
					</li>
				</ul>
			</div>
			<div class="col-lg-4  footer_social-icons">

			</div>
			</div>

	 <div class="row py-3">
		<div class="col-lg-4  footer_grid foot-resp ">
			<h3>Sobre Nós</h3>
			<p>RF Empreendimentos, ajudando você a conquistar o sonho de sua casa própria.</p>
		</div>
		<div class="col-lg-4  footer_grid foot-resp">

		</div>
		<div class="col-lg-4  footer_grid foot-resp">
			<h3>Contato</h3>
			<ul class="address">
				<li><img src="<?= base_url(); ?>assets/images/icons/icon09.png" style="height: 30px;"> ROD. BR 354 Km 94, Caxambu-MG.</li>
				<li><img src="<?= base_url(); ?>assets/images/icons/icon07.png" style="height: 30px;"><a href="mailto:contatoo@rfempreendimentos.com.br"> contato@rfempreendimentos.com.br</a></li>
				<li><img src="<?= base_url(); ?>assets/images/icons/icon08.png" style="height: 30px;"> +55 (35) 3341-4962</li>
			</ul>
		</div>
	   </div>
			</div>
		</section>
			<!--//footer-->
			<section class="copy-rights">
			<p class="copyright">© 2018 RF Empreendimentos. | Design by <a href="https://www.linkedin.com/in/daniel-gomes-62958a143" target="_blank">Daniel Gomes</a></p>
			</section>
			<!-- bootstrap-modal-pop-up -->
<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				Consult Pro
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
			</div>
			<div class="modal-body">
				<img src="images/m1.jpg" alt=" " class="img-responsive img-fluid" />
				<p>Ut enim ad minima veniam, quis nostrum 
					exercitationem ullam corporis suscipit laboriosam, 
					nisi ut aliquid ex ea commodi consequatur? Quis autem 
					vel eum iure reprehenderit qui in ea voluptate velit 
					esse quam nihil molestiae consequatur, vel illum qui 
					dolorem eum fugiat quo voluptas nulla pariatur.
					<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
						esse quam nihil molestiae consequatur.</i></p>
			</div>
		</div>
	</div>
</div>
<!-- //bootstrap-modal-pop-up --> 

<!-- js -->
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->
<!-- Flex slider-script -->
	<script defer src="<?= base_url(); ?>assets/js/jquery.flexslider.js"></script>
		<script type="text/javascript">
		
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>
	<!-- //Flex slider-script -->
			<!-- Calendar -->
						<link rel="stylesheet" href="<?= base_url(); ?>assets/css/jquery-ui.css" />
						<script src="<?= base_url(); ?>assets/js/jquery-ui.js"></script>
						<script>
								$(function() {
									$( "#datepicker" ).datepicker();
								});
						</script>
						<!-- //Calendar -->  

<!-- start-smooth-scrolling -->
	<script src="<?= base_url(); ?>assets/js/move-top.js"></script>
	<script src="<?= base_url(); ?>assets/js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	
	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
	
	
	<!-- smooth scrolling js -->
	<script src="<?= base_url(); ?>assets/js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling js -->
 </body>
</html>
	  <!--/footer-->
      <section class="footer py-3">
	<div class="container">
		<div class="row py-4 foot-resp">
	<div class="col-lg-8 bottom-nav-main">
				<ul>
					<li>
						<a href="<?= base_url(); ?>">Inicio</a>
					</li>
					<li>
						<a href="<?= base_url(); ?>empresa">A Empresa</a>
					</li>
					<li>
						<a href="<?= base_url(); ?>servicos">Serviços</a>
					</li>
					<li>
						<a href="<?= base_url(); ?>contato">Contato</a>
					</li>
				</ul>
			</div>

			</div>

	 <div class="row py-3">
		<div class="col-lg-4  footer_grid foot-resp ">
			<h3>Sobre Nós</h3>
			<p>Sagittis quis turpis vel, facilisis posuere erat. Nulla facilisi. Proin vel commodo leo. Ut mauris tortor, cursus ut massa vitae, iaculis vehicula turpis. Nam libero tempore cum vulputate id posuere erat.</p>
		</div>
		<div class="col-lg-4  footer_grid foot-resp">

		</div>
		<div class="col-lg-4  footer_grid foot-resp">
			<h3>Contato</h3>
			<ul class="address">
				<li><img src="<?= base_url(); ?>assets/images/icons/icon09.png" style="height: 30px;"> ROD. BR 354, Km 94, Caxambu-MG.</li>
				<li><img src="<?= base_url(); ?>assets/images/icons/icon07.png" style="height: 30px;"> <a href="mailto:contato@rfempreendimentos.com.br">contato@rfempreendimentos.com.br</a></li>
				<li><img src="<?= base_url(); ?>assets/images/icons/icon08.png" style="height: 30px;"> +55 (35) 3341-4962</li>
			</ul>
		</div>
	   </div>
			</div>
		</section>
			<!--//footer-->
			<section class="copy-rights">
			<p class="copyright">© 2018 RF Empreendimentos | Design by <a href="https://www.linkedin.com/in/daniel-gomes-62958a143" target="_blank">Daniel Gomes</a></p>
			</section>
			<!-- bootstrap-modal-pop-up -->
<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				Consult Pro
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
			</div>
			<div class="modal-body">
				<img src="<?= base_url(); ?>assets/images/m1.jpg" alt=" " class="img-responsive img-fluid" />
				<p>Ut enim ad minima veniam, quis nostrum 
					exercitationem ullam corporis suscipit laboriosam, 
					nisi ut aliquid ex ea commodi consequatur? Quis autem 
					vel eum iure reprehenderit qui in ea voluptate velit 
					esse quam nihil molestiae consequatur, vel illum qui 
					dolorem eum fugiat quo voluptas nulla pariatur.
					<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
						esse quam nihil molestiae consequatur.</i></p>
			</div>
		</div>
	</div>
</div>
<!-- //bootstrap-modal-pop-up --> 

     <!-- js -->
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap.js"></script>
	<!-- //js -->
	<!-- clients js file-->
<script src="<?= base_url(); ?>assets/js/jquery.wmuSlider.js"></script> 
	<script>
		$('.example1').wmuSlider();         
	</script> 
<!-- //clients js file -->

	<script type="text/javascript" src="<?= base_url(); ?>assets/js/numscroller-1.0.js"></script>
<!-- start-smooth-scrolling -->
	<script src="<?= base_url(); ?>assets/js/move-top.js"></script>
	<script src="<?= base_url(); ?>assets/js/easing.js"></script>
	   <!-- gallery -->
    <script src="<?= base_url(); ?>assets/js/smoothbox.jquery2.js"></script>
    <!-- //gallery -->
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	
	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
	
	<!-- smooth scrolling js -->
	<script src="<?= base_url(); ?>assets/js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling js -->

	<!--mascara-->
	<script src="<?= base_url(); ?>assets/js/mask.js"></script>

   </body>
</html>