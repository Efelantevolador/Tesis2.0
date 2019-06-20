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
		<script type="text/javascript">
		function habi(){
			if(document.getElementById("category").value=="2"){
				document.getElementById("subcategoria").disabled=false;
				document.getElementeById("subcategoria").value="";
		}
		else{
			document.getElementById("subcategoria").disabled=true;
			document.getElementeById("subcategoria").value="";
		}
		}</script>
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
									<input type="text" name="rut" id="rut" value="" placeholder="Rut" required/>
								</div>
								<div class="4u 12u$(xsmall)">
									<input type="password" name="password" id="password" value="" placeholder="Password" required/>
								</div>
								<div class="12u 12u$(xsmall)"></div>
								<div class="4u 12u$(xsmall)">
									<input type="text" name="nombre" id=" value="nombre" placeholder="Nombre" required/>
								</div>
								<div class="4u 12u$(xsmall)">
									<input type="text" name="apellidoP" id="apellidoM" value="" placeholder="Apellido Paterno" required/>
								</div>
								<div class="4u 12u$(xsmall)">
									<input type="text" name="apellidoM" id=" value="apellidoM" placeholder="Apellido Materno" required/>
								</div>
								<!---->
								<div class="12u 12u$(xsmall)">
								    <h4>Información de contacto</h4>
								</div>
								<div class="4u 12u$(xsmall)">
									<input type="text" name="telefono" id="fono" value="" placeholder="Telefono" required/>
								</div>
								<div class="4u 12u$(xsmall)">
									<input type="email" name="email" id="email" value="" placeholder="Email" required/>
								</div>
								<div class="12u 12u$(xsmall)">
								    <h4>Cargo</h4>
								</div>
								
								<div class="4u 12u$(xsmall)">
									<div class="select-wrapper">
										<select name="category" id="category" onchange="habi()" >
											<option value="" selected disabled >- Cargo -</option>
											<option value="1">Gerente</option>
											<option value="1">Jefe recursos Humanos</option>
											<option value="1">Administrativo</option>
											<option value="2">No aparece</option>
										</select>
									</div>
								</div>
								<div class="4u 12u$(xsmall)">
									<input type="text" name="otro" id="subcategoria" value=" " placeholder="Otro" required/>
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