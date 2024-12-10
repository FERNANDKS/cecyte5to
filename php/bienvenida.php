<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
            alert("Debes de Iniciar Sesion");
            window.location = "index.php";
            </script>
        ';
        session_destroy();
        die();
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>CECYTEM</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../course/styles/bootstrap4/bootstrap.min.css">
<link href="../course/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../course/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../course/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../course/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="../course/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="../course/styles/responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img src="../course/images/logo.png" alt="">
					<span>CECYTEM</span>
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
                        <li class="main_nav_item"><a href=" cerrar_sesion.php">LogOut</li>
						<li class="main_nav_item"><a href="bienvenida.php">INICIO</a></li>
						<li class="main_nav_item"><a href="../course/courses.html">carreras</a></li>
						<li class="main_nav_item"><a href="../course/elements.html">registros</a></li>
						<li class="main_nav_item"><a href="../course/contact.html">contactos</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<img src="../course/images/phone-call.svg" alt="">
			<span>+56 000 000</span>
		</div>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>

	</header>
	
	<!-- Menu -->
	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
                    <li class="menu_item menu_mm"><a href=" cerrar_sesion.php">LogOut</li>
					<li class="menu_item menu_mm"><a href="bienvenida.php">INICIO</a></li>
					<li class="menu_item menu_mm"><a href="../course/courses.html">Materias</a></li>
					<li class="menu_item menu_mm"><a href="../course/elements.html">registros</a></li>
					<li class="menu_item menu_mm"><a href="../course/contact.html">Contactos</a></li>
				</ul>

				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>

				
			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home">

		<!-- Hero Slider -->
		<div class="hero_slider_container">
			<div class="hero_slider owl-carousel">
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(../course/images/slider_background.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">CE <span>CY</span>TEM </h1>
						</div>
					</div>
				</div>
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(../course/images/slider_background.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">QUIERES <span>UNIRTE</span> AL PLANTEL?</h1>
						</div>
					</div>
				</div>
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(../course/images/slider_background.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">AQUI <span>ENCONTRARAS</span> LO QUE DEBES SABER!</h1>
						</div>
					</div>
				</div>

			</div>

			<div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">ATRAS</span></div>
			<div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">SIG</span></div>
		</div>

	</div>

	<div class="hero_boxes">
		<div class="hero_boxes_inner">
			<div class="container">
				<div class="row">

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="../course/images/earth-globe.svg" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">CURSOS ONLINE</h2>
								<a href="../course/courses.html" class="hero_box_link">¡toca!</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="../course/images/books.svg" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">DISTINTAS CARRERAS</h2>
								<a href="../course/courses.html" class="hero_box_link">¡toca!</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="../course/images/professor.svg" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">NUEVOS MAESTROS CADA AÑO!!</h2>
								<a href="../course/teachers.html" class="hero_box_link">¡toca!</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Popular -->

	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Cursos Populares</h1>
					</div>
				</div>
			</div>

			<div class="row course_boxes">
				
				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="../course/images/course_1.jpg" alt="https://unsplash.com/@kellybrito">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">PROGRAMACION</a></div>
							<div class="card-text">XAMPP,HTML,JS,CSS,C++,NETBEANS etc...</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="../course/images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name">MAESTROS, <span>¡3!</span></div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>40</span></div>
						</div>
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="../course/images/course_2.jpg" alt="https://unsplash.com/@cikstefan">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">CONSTRUCCION</a></div>
							<div class="card-text">proyectos,maquetas, planos,analisis de estructuras etc...</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="../course/images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name">MAESTROS, <span>¡3!</span></div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>70</span></div>
						</div>
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/course_3.jpg" alt="https://unsplash.com/@dsmacinnes">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">DISEÑO DIGITAL</a></div>
							<div class="card-text">guias, photografia,maya,dibujo,3D animaciones etc...</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="../course/images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name">MAESTROS, <span>¡3!</span></div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>80</span></div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Register -->

	<div class="register">

		<div class="container-fluid">
			
			<div class="row row-eq-height">
				<div class="col-lg-6 nopadding">
					
					<!-- Register -->

					<div class="register_section d-flex flex-column align-items-center justify-content-center">
						<div class="register_content text-center">
							<h1 class="register_title">Registrate partir de <span>enero</span> hasta marzo</h1>
							<p class="register_text">los registros se hacen dentro del plantel si has sido seleccioonado (direccion en el boton)</p>
							<div class="button button_1 register_button mx-auto trans_200"><a href="#">!AQUI¡</a></div>
						</div>
					</div>

				</div>

				<div class="col-lg-6 nopadding">
					
					<!-- Search -->

					<div class="search_section d-flex flex-column align-items-center justify-content-center">
						<div class="search_background" style="background-image:url(images/search_background.jpg);"></div>
						<div class="search_content text-center">
							<h1 class="search_title">Registrate para notificar las convocatorias</h1>
							<form id="search_form" class="search_form" action="post">
								<input id="search_form_name" class="input_field search_form_name" type="text" placeholder="Name" required="required" data-error="Course name is required.">
								<input id="search_form_category" class="input_field search_form_category" type="text" placeholder="gmail">
								<input id="search_form_degree" class="input_field search_form_degree" type="text" placeholder="numero">
								<button id="search_submit_button" type="submit" class="search_submit_button trans_200" value="Submit">continuar</button>
							</form>
						</div> 
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Services -->

	<div class="services page_section">
		
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>otros servicios</h1>
					</div>
				</div>
			</div>

			<div class="row services_row">

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="../course/images/earth-globe.svg" alt="">
					</div>
					<h3>unete a una empresa y estudia</h3>
					<p>si tu proyecto convgence puedes ser seleccionado</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="../course/images/exam.svg" alt="">
					</div>
					<h3>salas especiales para cada carrera</h3>
					<p>estas pueden ser de la carrera seleccionada como programcion,construccion o diselo digital</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="../course/images/books.svg" alt="">
					</div>
					<h3>cafeteria</h3>
					<p>zona de cafeteria,canchas de basket,futboll y mesas en campo libre!!!</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="../course/images/professor.svg" alt="">
					</div>
					<h3>exelentes profesores</h3>
					<p>el plantel cuenta con aproximadamente 40 maestros contando direccion y los 2 turnos</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="../course/images/blackboard.svg" alt="">
					</div>
					<h3>sala de computo y sala de teatro</h3>
					<p>esto es general si quieres investigar o hacer exposiciones</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="../course/images/mortarboard.svg" alt="">
					</div>
					<h3>Graduate como tecnico en una especialidad</h3>
					<p>al final puedes titularte en tecnico y entrar directo a la universidad que desees</p>
				</div>

			</div>
		</div>
	</div>

	<!-- Testimonials -->

	<div class="testimonials page_section">
		<!-- <div class="testimonials_background" style="background-image:url(images/testimonials_background.jpg)"></div> -->
		<div class="testimonials_background_container prlx_parent">
			<div class="testimonials_background prlx" style="background-image:url(images/testimonials_background.jpg)"></div>
		</div>
		<div class="container">

			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>reseñas sobre estudiantes graduados</h1>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					
					<div class="testimonials_slider_container">

						<!-- Testimonials Slider -->
						<div class="owl-carousel owl-theme testimonials_slider">
							
							<!-- Testimonials Item -->
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<div class="quote">“</div>
									<p class="testimonials_text">"Elegí Diseño Digital porque siempre me ha gustado la creatividad y trabajar con herramientas como Photoshop e Illustrator, pero en el CECYTEM descubrí que hay mucho más. Aprendí sobre animación, diseño web y cómo crear proyectos que realmente impresionan. Además, la comunidad de estudiantes es súper unida, y eso me motivó a seguir adelante en los momentos difíciles."</p>
									<div class="testimonial_user">
										<div class="testimonial_image mx-auto">
											<img src="../course/images/testimonials_user.jpg" alt="">
										</div>
										<div class="testimonial_name">Mariana López</div>
										<div class="testimonial_title">Formación Técnica: Diseño Digital</div>
									</div>
								</div>
							</div>

							<!-- Testimonials Item -->
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<div class="quote">“</div>
									<p class="testimonials_text">"Estudiar en el CECYTEM ha sido una experiencia increíble. La carrera de Programación me ha abierto los ojos a todo lo que puedo lograr en el mundo de la tecnología. Los maestros siempre están ahí para aclarar dudas, y el acceso a laboratorios con buena tecnología hace que aprender sea más fácil. Estoy seguro de que esta formación me va a ayudar mucho cuando entre al mundo laboral."</p>
									<div class="testimonial_user">
										<div class="testimonial_image mx-auto">
											<img src="../course/images/testimonials_user.jpg" alt="">
										</div>
										<div class="testimonial_name"> Juan Pablo</div>
										<div class="testimonial_title">(Formación Técnica: Programación)</div>
									</div>
								</div>
							</div>

							<!-- Testimonials Item -->
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<div class="quote">“</div>
									<p class="testimonials_text">"El CECYTEM me ha ayudado a entender todo lo necesario para desarrollarme como profesional en la Construcción. Desde interpretar planos hasta aprender sobre los materiales que se usan en las obras, la formación es completa. Además, los proyectos prácticos, como diseñar maquetas y hacer visitas a obras reales, me hicieron darme cuenta de lo importante que es la práctica para esta carrera. ¡Me siento preparado para cualquier reto!"</p>
									<div class="testimonial_user">
										<div class="testimonial_image mx-auto">
											<img src="../course/images/testimonials_user.jpg" alt="">
										</div>
										<div class="testimonial_name"> Luis Alberto</div>
										<div class="testimonial_title">(Formación Técnica: Construcción)</div>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- Events -->

	<div class="events page_section">
		<div class="container">
			
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>eventos cada año</h1>
					</div>
				</div>
			</div>
			
			<div class="event_items">

				<!-- Event Item -->
				<div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							<div class="col-lg-2 order-lg-1 order-2">
								<div class=" flex-column align-items-center justify-content-center">
								
								
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="#">hacemos festejos Nacionales</a></div>
									<div class="event_location">en el gran parque escolar</div>
									<p>festejamos dias internacionales o hacemos suspencion de clases en la escuela</p>
								</div>
							</div>

							<div class="col-lg-4 order-lg-3 order-1">
								<div class="event_image">
									<img src="../course/images/event_1.jpg" alt="https://unsplash.com/@theunsteady5">
								</div>
							</div>

						</div>	
					</div>
				</div>
				

				<!-- Event Item -->
				<div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							<div class="col-lg-2 order-lg-1 order-2">
								<div class=" flex-column align-items-center justify-content-center">
								
									
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="#">evento de graduacion</a></div>
									<div class="event_location">en el gran parque escolar</div>
									<p>cada año se hace un festejo a los alumnos reconocidos por su gran esfuerzo escolar por acompañarnos durante 3 años consecutivos</p>
								</div>
							</div>

							<div class="col-lg-4 order-lg-3 order-1">
								<div class="event_image">
									<img src="../course/images/event_3.jpg" alt="https://unsplash.com/@juanmramosjr">
								</div>
							</div>

						</div>	
					</div>
				</div>

			</div>
				
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			
			<!-- Newsletter -->

			<div class="newsletter">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<h1>nuevas noticias</h1>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col text-center">
						<div class="newsletter_form_container mx-auto">
							<form action="post">
								<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
									<input id="newsletter_email" class="newsletter_email" type="email" placeholder="Email " required="required" data-error="Valid email is required.">
									<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">aceptar</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>

			<!-- Footer Content -->

			<div class="footer_content">
				<div class="row">

					<!-- Footer Column - About -->
					<div class="col-lg-3 footer_col">

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<img src="../course/images/logo.png" alt="">
								<span>CECYTEM</span>
							</div>
						</div>

						<p class="footer_about_text">Te esperamos pronto en el plantel de ciencias y estudios tecnologicos de ixtapaluca 2</p>

					</div>

					<!-- Footer Column - Usefull Links -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">terminos y condiciones</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_list_item"><a href="#">Testimoniales</a></li>
								<li class="footer_list_item"><a href="#">FAQ</a></li>
								<li class="footer_list_item"><a href="#">Communidad</a></li>
								<li class="footer_list_item"><a href="#">terminos y condiciones</a></li>
								<li class="footer_list_item"><a href="#">derechos de autor</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column - Contact -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Contactos</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="../course/images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									4 vientos ixtapaluca 2
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="../course/images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									56 000 000
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="../course/images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>cecytem@soycecytem.mx
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>

			<!-- Footer Copyright -->

			<div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
				<div class="footer_copyright">
					<span>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | fernando,ashley,victor<i aria-hidden="true"></i> grupo <a href="#" target="_blank">502</a></span>
				</div>
				<div class="footer_social ml-sm-auto">
					<ul class="menu_social">
						<li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>

		</div>
	</footer>

</div>

<script src="../course/js/jquery-3.2.1.min.js"></script>
<script src="../course/styles/bootstrap4/popper.js"></script>
<script src="../course/styles/bootstrap4/bootstrap.min.js"></script>
<script src="../course/plugins/greensock/TweenMax.min.js"></script>
<script src="../course/plugins/greensock/TimelineMax.min.js"></script>
<script src="../course/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="../course/plugins/greensock/animation.gsap.min.js"></script>
<script src="../course/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="../course/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="../course/plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="../course/plugins/easing/easing.js"></script>
<script src="../course/js/custom.js"></script>

</body>
</html>