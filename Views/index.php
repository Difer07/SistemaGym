<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Gym</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Health Care Medical Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Novena HTML Template v1.0">
  
  <!-- theme meta -->
  <meta name="theme-name" content="novena" />

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png" />

  <!-- 
  Essential stylesheets
  =====================================-->
  <link rel="stylesheet" href="<?php echo base_url; ?>Assets/home/plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url; ?>Assets/home/plugins/icofont/icofont.min.css">
  <link rel="stylesheet" href="<?php echo base_url; ?>Assets/home/plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="<?php echo base_url; ?>Assets/home/plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="<?php echo base_url; ?>Assets/home/css/style.css">

</head>

<body id="top">

<header>
	<div class="header-top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<ul class="top-bar-info list-inline-item pl-0 mb-0">
						<li class="list-inline-item"><a href="mailto:support@gmail.com"><i class="icofont-support-faq mr-2"></i>GymPulse@gmail.com</a></li>
						<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Ecuador, Ibarra</li>
					</ul>
				</div>
				<div class="col-lg-6">
					<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
						<a href="tel:+23-345-67890">
							<span>Llama ahora : </span>
							<span class="h4">2650222</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html">
				<img src="<?php echo base_url; ?>Assets/images/logo1.png" alt="" width="100" class="img-fluid">
			</a>

			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
				aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
				<span class="icofont-navigation-menu"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarmain">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a class="nav-link" href="#">Inicio</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Sombre nosotros</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Servicios</a></li>

					<li class="nav-item"><a class="nav-link" href="<?php echo base_url . 'home/login'; ?>">Iniciar sesión</a></li>
				</ul>
			</div>
		</div>
	</nav>
</header>


<!-- Slider Start -->
<section class="banner" style="background-image: url('<?php echo base_url . 'Assets/images/principal.jpg'; ?>');">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-xl-7">
				<div class="block">
					<div class="divider mb-3"></div>
					<span class="text-uppercase text-sm letter-spacing text-white">Ponte en forma</span>
					<h1 class="mb-3 mt-3 shadow-white">GYM PULSE</h1>
					
					<p class="mb-4 pr-5 text-white">Transforma tu cuerpo, fortalece tu mente y alcanza tus metas fitness con nuestro exclusivo enfoque de entrenamiento en Gym Pulse."</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="features">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="feature-block d-lg-flex">
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-surgeon-alt"></i>
						</div>
						<span>24 Horas de servicio</span>
						<h4 class="mb-3">Dirección</h4>
						<p class="mb-4">Ibarra, Calle Bolivar</p>
					</div>
				
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-ui-clock"></i>
						</div>
						<h4 class="mb-3">Horario</h4>
						<ul class="w-hours list-unstyled">
							<li class="d-flex justify-content-between">Lunes - Miercoles : <span>8:00 - 17:00</span></li>
							<li class="d-flex justify-content-between">Jueves - Viernes : <span>9:00 - 17:00</span></li>
							<li class="d-flex justify-content-between">Sabado - Domingo : <span>10:00 - 17:00</span></li>
						</ul>
					</div>
				
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-support"></i>
						</div>
						<span>Telefono</span>
						<h4 class="mb-3">2650222</h4>
						<p>Para reservas .</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="cta-section ">
	<div class="container">
		<div class="cta position-relative">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-doctor"></i>
						<span class="h3 counter" data-count="<?php echo $data['clientes']['total']; ?>">0</span>
						<p>Clientes</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-flag"></i>
						<span class="h3 counter" data-count="<?php echo $data['entrenador']['total']; ?>">0</span>
						<p>Entrenadores</p>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<section class="section testimonial-2 gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2>Nuestros planes</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Descubre nuestros planes de entrenamiento personalizados diseñados para desafiar tus límites, maximizar tus resultados y llevar tu condición física al siguiente nivel.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12 testimonial-wrap-2">
                <?php foreach ($data['planes'] as $plan) { ?>
				<div class="testimonial-block style-2  gray-bg">
					<i class="icofont-quote-right"></i>

					<div class="testimonial-thumb">
						<img src="<?php echo base_url .'Assets/images/planes/' . $plan['imagen']; ?>" alt="" class="img-fluid">
					</div>

					<div class="client-info ">
						<h4><?php echo $plan['plan']; ?></h4>
						<span><?php echo $plan['precio_plan'] . ' ' . $plan['condicion']; ?></span>
						<p>
                        <?php echo $plan['descripcion']; ?>
						</p>
					</div>
				</div>
                <?php } ?>
			</div>
		</div>
	</div>
</section>

<!-- footer Start -->
<footer class="footer section gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 mr-auto col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<div class="logo mb-4">
						<img src="<?php echo base_url; ?>Assets/images/logo1.png" alt="" class="img-fluid" width="100">
					</div>
					<p>En nuestro gimnasio, fusionamos la pasión por el fitness con la innovación tecnológica y la calidez de un ambiente comunitario. </p>

					<ul class="list-inline footer-socials mt-4">
						<li class="list-inline-item">
							<a href="https://www.facebook.com/themefisher"><i class="icofont-facebook"></i></a>
						</li>
						<li class="list-inline-item">
							<a href="https://twitter.com/themefisher"><i class="icofont-twitter"></i></a>
						</li>
						<li class="list-inline-item">
							<a href="https://www.pinterest.com/themefisher/"><i class="icofont-linkedin"></i></a>
						</li>
					</ul>
				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
    <div class="widget mb-5 mb-lg-0">
        <h4 class="text-capitalize mb-3">Gimnasio</h4>
        <div class="divider mb-4"></div>

        <ul class="list-unstyled footer-menu lh-35">
            <li><a href="#!">Entrenamiento Funcional</a></li>
            <li><a href="#!">Clases de Grupo</a></li>
            <li><a href="#!">Nutrición Deportiva</a></li>
            <li><a href="#!">Entrenamiento Personalizado</a></li>
            <li><a href="#!">Instalaciones de Última Tecnología</a></li>
        </ul>
    </div>
</div>

<div class="col-lg-2 col-md-6 col-sm-6">
    <div class="widget mb-5 mb-lg-0">
        <h4 class="text-capitalize mb-3">Soporte</h4>
        <div class="divider mb-4"></div>

        <ul class="list-unstyled footer-menu lh-35">
            <li><a href="#!">Términos y Condiciones</a></li>
            <li><a href="#!">Política de Privacidad</a></li>
            <li><a href="#!">Soporte de la Empresa</a></li>
            <li><a href="#!">Preguntas Frecuentes</a></li>
            <li><a href="#!">Licencia de la Empresa</a></li>
        </ul>
    </div>
</div>


<div class="col-lg-3 col-md-6 col-sm-6">
    <div class="widget widget-contact mb-5 mb-lg-0">
        <h4 class="text-capitalize mb-3">Contacto</h4>
        <div class="divider mb-4"></div>

        <div class="footer-contact-block mb-4">
            <div class="icon d-flex align-items-center">
                <i class="icofont-email mr-3"></i>
                <span class="h6 mb-0">Soporte Disponible 24/7</span>
            </div>
            <h4 class="mt-2"><a href="mailto:soporte@gimnasio.com">GymPulse@gmail.com</a></h4>
        </div>

        <div class="footer-contact-block">
            <div class="icon d-flex align-items-center">
                <i class="icofont-support mr-3"></i>
                <span class="h6 mb-0">Lun a Vie: 08:30 - 18:00</span>
            </div>
            <h4 class="mt-2"><a href="tel:+23-345-67890">+593 959276052</a></h4>
        </div>
    </div>
</div>

		</div>
	</div>
</footer>

   

    <!-- 
    Essential Scripts
    =====================================-->
    <script src="<?php echo base_url; ?>Assets/home/plugins/jquery/jquery.js"></script>
    <script src="<?php echo base_url; ?>Assets/home/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url; ?>Assets/home/plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="<?php echo base_url; ?>Assets/home/plugins/shuffle/shuffle.min.js"></script>
    
    <script src="<?php echo base_url; ?>Assets/home/js/script.js"></script>

  </body>
  </html>