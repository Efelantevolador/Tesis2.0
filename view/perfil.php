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
						<h2>Perfil Empresa</h2>
					</header>

					<!-- Form -->
					<section>
						<h4>Informacion Reprecentante Empresa</h4>
						<form method="post" action="#">
							<div class="row uniform 50%">
                                <div class="4u 12u$(xsmall)">
                                    <h5>Rut</h5>
                                </div>
                                <div class="4u 12u$(xsmall)">
                                    <h5>Telefono</h5>
                                </div>
                                <div class="4u 12u$(xsmall)">
                                    <h5>Email</h5>
                                </div>
								<div class="4u 12u$(xsmall)">
									<input type="text" name="rut" id="rut" value="" placeholder="" disabled required/>
                                </div>
                                <div class="4u 12u$(xsmall)">
									<input type="text" name="telefono" id="fono" value="" placeholder="" required/>
								</div>
								<div class="4u 12u$(xsmall)">
									<input type="email" name="email" id="email" value="" placeholder="" required/>
                                </div>
                                
                                <div class="12u 12u$(xsmall)"></div>

                            
                                <div class="4u 12u$(xsmall)">
                                    <h5>Nombre</h5>
                                </div>
                                <div class="4u 12u$(xsmall)">
                                    <h5>Apellido Paterno</h5>
                                </div>
                                <div class="4u 12u$(xsmall)">
                                    <h5>Apellido Materno</h5>
                                </div>
								<div class="4u 12u$(xsmall)">
									<input type="text" name="nombre" id="nombre" value="" placeholder="" required/>
								</div>
								<div class="4u 12u$(xsmall)">
									<input type="text" name="apellidoP" id="apellidoP" value="" placeholder="" required/>
								</div>
								<div class="4u 12u$(xsmall)">
									<input type="text" name="apellidoM" id="apellidoM" value="" placeholder="" required/>
								</div>
								<div class="12u 12u$(xsmall)">
								    <h4>Cargo</h4>
								</div>
								<div class="4u 12u$(xsmall)">
                                <input type="text" name="cargo" id="cargo" value="" placeholder="" required/>
								</div>
								<div class="12u$" style="margin-top:20px;">
									<ul class="actions">
										<li><input type="submit" value="Guardar Información" class="special" /></li>
									</ul>
								</div>
							</div>
						</form>
					</section>
				</div>
            </section>
            
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->

			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>Perfil Postulante</h2>
					</header>

					<!-- FORMULARIO POSTULANTE -->
					<section>
						<h3>Formulario de Registro</h3>
						<form method="post" action="../controlador/create_postulante.php">
							<div class="row uniform 50%">
                                <div class="4u 12u$(xsmall)">
                                    <h5>Rut</h5>
                                </div>
                                <div class="4u 12u$(xsmall)">
                                    <h5>Email</h5>
                                </div>
                                <div class="4u 12u$(xsmall)">
                                    <h5>Telefono</h5>
                                </div>
								<div class="4u 12u$(xsmall)">
									<input type="text" name="name" id="rut" value="" placeholder="" disabled required/>
								</div>
								<div class="4u 12u$(xsmall)">
									<input type="text" name="email" id="email" value="" placeholder="" required/>
                                </div>
                                <div class="4u 12u$(xsmall)">
									<input type="text" name="telefono" id="telefono" value="" placeholder="" required/>
                                </div>
                                
                                <div class="12u 12u$(xsmall)"></div>

                                <div class="4u 12u$(xsmall)">
                                    <h5>Nombre</h5>
                                </div>
                                <div class="4u 12u$(xsmall)">
                                    <h5>Apellido Paterno</h5>
                                </div>
                                <div class="4u 12u$(xsmall)">
                                    <h5>Apellido Materno</h5>
                                </div>
								<div class="4u 12u$(xsmall)">
									<input type="text" name="name" id="name" value="" placeholder="" required/>
								</div>
								<div class="4u 12u$(xsmall)">
									<input type="text" name="apellidoP" id="apellidoP" value="" placeholder="" required/>
								</div>
								<div class="4u 12u$(xsmall)">
									<input type="text" name="apellidoM" id="apellidoM" value="" placeholder="" required/>
                                </div>
                                <div class="12u 12u$(xsmall)">
									<h5>Fecha de nacimiento</h5>
								</div>
                                <div class="2u 12u$(xsmall)">
                                    <div class="select-wrapper">
                                        <select name="day" id="category">
                                            <option value="" selected disabled>- Dia -</option>
                                            <?php
                                                for ($i = 1; $i <=31; $i++){
                                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="2u 12u$(xsmall)">
                                    <div class="select-wrapper">
                                        <select name="month" id="category">
                                            <option value="" selected disabled>- Mes -</option>
                                            <option value="01">Enero</option>
                                            <option value="02">Febrero</option>
                                            <option value="03">Marzo</option>
                                            <option value="04">Abril</option>
                                            <option value="05">Mayo</option>
                                            <option value="06">Junio</option>
                                            <option value="07">Julio</option>
                                            <option value="08">Agosto</option>
                                            <option value="09">Septiembre</option>
                                            <option value="10">Octubre</option>
                                            <option value="11">Noviembre</option>
                                            <option value="12">Diciembre</option>
                                        </select>
                                    </div>
                                </div>  
                                <div class="2u 12u$(xsmall)">
                                    <div class="select-wrapper">
                                        <select name="year" id="category">
                                            <option value="" selected disabled>- Año -</option>
                                            <?php
                                                $a=2019;
                                                for ($i = 1; $i <=70; $i++){
                                                    echo '<option value="'.$a.'">'.$a.'</option>';
                                                    $a=$a-1;
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
								<div class="12u 12u$(xsmall)">
								    <h5>Domicilio</h5>
								</div>
								<div class="4u 12u$(xsmall)">
									<div class="select-wrapper">
										<select name="region" id="category" >
											<option value="" select disabled>- Región -</option>
											<option value="15">Región de Arica y Parinacota</option>
											<option value="1">Región de Tarapacá</option>
											<option value="2">Región de Antofagasta</option>
											<option value="3">Región de Atacama</option>
											<option value="4">Región de Coquimbo</option>
											<option value="5">Región de Valparaíso</option>
											<option value="13">Región de Metropolitana de Santiago</option>
											<option value="6">Región de Libertador General Bernardo O'Higgins</option>
											<option value="7">Región de Maule</option>
											<option value="16">Región de Ñuble</option>
											<option value="8">Región de Biobío</option>
											<option value="9">Región de La Araucanía</option>
											<option value="14">Región de Los Ríos</option>
											<option value="10">Región de Los Lagos</option>
											<option value="11">Región de Aysén del General Carlos Ibáñez del Campo</option>
											<option value="12">Región de Magallanes y de la Antártica Chilena</option>
										</select>
									</div>
                                </div>
                                
                                <div class="12u 12u$(xsmall)"></div>
                                
                                <div class="3u 12u$(xsmall)">
                                    <h5>Ciudad</h5>
                                </div>
                                <div class="3u 12u$(xsmall)">
                                    <h5>Comuna</h5>
                                </div>
                                <div class="3u 12u$(xsmall)">
                                    <h5>Calle</h5>
                                </div>
                                <div class="3u 12u$(xsmall)">
                                    <h5>Numero de Calle</h5>
                                </div>
								<div class="3u 12u$(xsmall)">
									<input type="text" name="ciudad" id="ciudad" value="" placeholder="" required/>
								</div>			
								<div class="3u 12u$(xsmall)">
									<input type="text" name="comuna" id="comuna" value="" placeholder="" required/>
								</div>	
								<div class="3u 12u$(xsmall)">
									<input type="text" name="calle" id="calle" value="" placeholder="" required/>
                                </div>
                                <div class="3u 12u$(xsmall)">
                                    <input type="text" name="ncalle" id="ncalle" value="" placeholder="" required/>
                                </div>

								<div class="12u$" style="margin-top:20px;">
									<ul class="actions">
										<li><input type="submit" value="Guardar informacion" class="special"/></li>
									</ul>
								</div>
							</div>
						</form>
					</section>
				</div>
            </section>
            
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->

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