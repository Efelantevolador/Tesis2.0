<!DOCTYPE html>
<!--
	Interphase by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Elements - Interphase by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="../js/jquery.min.js"></script>
		<script src="../js/skel.min.js"></script>
		<script src="../js/skel-layers.min.js"></script>
		<script src="../js/init.js"></script>
		<link rel="stylesheet" href="../css/skel.css" />
		<link rel="stylesheet" href="../css/style.css" />
		<link rel="stylesheet" href="../css/style-xlarge.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<script>
			function Habilitar(){
				var camp1= document.getElementById("otro");
				var cargo= document.getElementById("category");
				if(camp1.value != "a")
				{
					cargo.disabled =true;
				}
			}
		</script>
	
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><a href="index.php">Trabaja a tu medida</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php">Inicio</a></li>
						<li><a href="iniciarSesion.php">Iniciar sesion</a></li>
						<li><a href="registrarU.php">Registro usuario</a></li>
						
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>Registro Empresa</h2>
					</header>

					<!-- Form -->
					<section>
						<h4>Datos de Persona</h4>
						<form method="post" action="#">
							<div class="row uniform 50%">
								<div class="4u 12u$(xsmall)">
									<input type="text" name="name" id="name" value="" placeholder="Rut" />
								</div>
								<div class="4u 12u$(xsmall)">
									<input type="text" name="apellidoP" id="apellidoP" value="" placeholder="Password" />
								</div>
								<div class="12u 12u$(xsmall)"></div>
								<div class="4u 12u$(xsmall)">
									<input type="text" name="email" id=" value="email" placeholder="Nombre" />
								</div>
								<div class="4u 12u$(xsmall)">
									<input type="text" name="apellidoM" id="apellidoM" value="" placeholder="Apellido Paterno" />
								</div>
								<div class="4u 12u$(xsmall)">
									<input type="text" name="email" id=" value="email" placeholder="Apellido Materno" />
								</div>
								<!---->
								<div class="12u 12u$(xsmall)">
								    <h4>Información de contacto</h4>
								</div>
								<div class="4u 12u$(xsmall)">
									<input type="text" name="name" id="name" value="" placeholder="Telefono" />
								</div>
								<div class="4u 12u$(xsmall)">
									<input type="text" name="apellidoM" id="apellidoM" value="" placeholder="Email" />
								</div>
								<div class="12u 12u$(xsmall)">
								    <h4>Cargo</h4>
								</div>
								
								<div class="4u 12u$(xsmall)">
									<div class="select-wrapper">
										<select name="category" id="category">
											<option value="">- Cargo -</option>
											<option value="1">Gerente</option>
											<option value="1">Jefe recursos Humanos</option>
											<option value="1">Administrativo</option>
										</select>
									</div>
								</div>
								<div class="4u 12u$(xsmall)">
									<input type="text" name="email" id=" value="email" placeholder="Otro" />
								</div>
								<div class="12u$" style="margin-top:20px;">
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="special" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</div>
							</div>
						</form>
					</section>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<div class="row">
						<section class="4u 6u(medium) 12u$(small)">
							<h3>Lorem ipsum</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, cumque!</p>
							<ul class="alt">
								<li><a href="#">Lorem ipsum dolor sit amet.</a></li>
								<li><a href="#">Quod adipisci perferendis et itaque.</a></li>
								<li><a href="#">Itaque eveniet ullam, veritatis reiciendis?</a></li>
								<li><a href="#">Accusantium repellat accusamus a, soluta.</a></li>
							</ul>
						</section>
						<section class="4u 6u$(medium) 12u$(small)">
							<h3>Nostrum, repellat!</h3>
							<p>Tenetur voluptate exercitationem eius tempora! Obcaecati suscipit, soluta earum blanditiis.</p>
							<ul class="alt">
								<li><a href="#">Lorem ipsum dolor sit amet.</a></li>
								<li><a href="#">Id inventore, qui necessitatibus sunt.</a></li>
								<li><a href="#">Deleniti eum odit nostrum eveniet.</a></li>
								<li><a href="#">Illum consectetur quibusdam eos corporis.</a></li>
							</ul>
						</section>
						<section class="4u$ 12u$(medium) 12u$(small)">
							<h3>Contact Us</h3>
							<ul class="icons">
								<li><a href="#" class="icon rounded fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon rounded fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon rounded fa-pinterest"><span class="label">Pinterest</span></a></li>
								<li><a href="#" class="icon rounded fa-google-plus"><span class="label">Google+</span></a></li>
								<li><a href="#" class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a></li>
							</ul>
							<ul class="tabular">
								<li>
									<h3>Address</h3>
									1234 Somewhere Road<br>
									Nashville, TN 00000
								</li>
								<li>
									<h3>Mail</h3>
									<a href="#">someone@untitled.tld</a>
								</li>
								<li>
									<h3>Phone</h3>
									(000) 000-0000
								</li>
							</ul>
						</section>
					</div>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li>
						<li>Design: <a href="http://templated.co">TEMPLATED</a></li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a></li>
					</ul>
				</div>
			</footer>

	</body>
</html>