<!DOCTYPE html>
<html lang="es">
<head>
	<?php include 'inc/head_common.php'; ?>
	<link href='css/detail.css' rel='stylesheet' type='text/css'>
	<title>Workshops con Bootstrap</title>
</head>
<body>

	<?php include 'inc/header.php'; ?>
	
	<article id="w1-detail" class="detail">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h2>Desarrollando con bootstrap como un dios!</h2>
					</div>
				</div>
			</div>
		</header>

		<div class="container">
			<div class="row">
				<div class="col-xs-7">
					<section id="intro">
						<h3>En este workshop aprenderemos</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis necessitatibus tenetur fugiat, beatae dolor qui enim commodi consectetur veniam? Eligendi harum soluta ullam ipsum a, rem suscipit natus odit pariatur!
						</p>
					</section>
					<section id="trainer-list">
						<h3>Los formadores</h3>
						<div class="trainer row">
							<div class="col-xs-4">
								<img src="img/marcos_profile.png" alt="formador_marcos">
							</div>
							<div class="col-xs-8">
								<h4>Marcos Gonzales</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque voluptates, facere nostrum. Culpa, repellat <br> fugiat quod aperiam exercitationem consequuntur doloremque.
								</p>
								<a href="http://fb.com" class="trainer-link">Facebook</a>
								<a href="http://twitter.com" class="trainer-link">Twitter</a>
							</div>
						</div>

						<div class="trainer row">
							<div class="col-xs-4">
								<img src="img/armando_profile.png" alt="formador_marcos">
							</div>
							<div class="col-xs-8">
								<h4>Armando Gonzales</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque voluptates, facere nostrum. Culpa, repellat <br> fugiat quod aperiam exercitationem consequuntur doloremque.
								</p>
								<a href="http://fb.com" class="trainer-link">Facebook</a>
								<a href="http://twitter.com" class="trainer-link">Twitter</a>
							</div>
						</div>
					</section>
				</div>
				<div class="col-xs-5">
					<section id="registration">
						<h3>
							Registro
						</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium fuga nulla deserunt necessitatibus sint cum maiores ut temporibus in corrupti.</p>
						<div id="registration-badge">
							<h3 class="price">990 Pesos</h3>
							<p class="included">
								workshop + <br>
								desayuno + <br>
								almuerzo
							</p>
							<div class="clearfix"></div>
							<a href="" class="do-register">ME APUNTO!</a>
						</div>
					</section>
					<section id="agenda">
						<h3>Agenda del dia</h3>
						<h4><span>W21</span> Sabado 15 de septiembre</h4>
						<!-- lista de definicion -->
						<dl class="dl-horizontal">
							<dt>10,00H</dt>
							<dd>Workshop parte 1/4</dd>
							<dt>11,45H</dt>
							<dd>Descanso</dd>
							<dt>12,00H</dt>
							<dd>Workshop parte 2/4</dd>
							<dt>14,00H</dt>
							<dd>comida</dd>
							<dt>16,00H</dt>
							<dd>Workshop parte 3/4</dd>
							<dt>17,45H</dt>
							<dd>Descanso</dd>
							<dt>18,00H</dt>
							<dd>Workshop parte 4/4</dd>
							<dt>19,30H</dt>
							<dd>Fin Workshop</dd>
						</dl>
					</section>
				</div>
			</div>
		</div>

		<section id="table-of-contents">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h3>Indice de contenidos</h3>
					</div>
					<div class="col-xs-4">
						<h4>1. Frameworks Front-end</h4>
						<ul>
							<li>Item indice primero</li>
							<li>Item indice segundo</li>
							<li>Item indice tercero</li>
						</ul>
						<h4>1. Segundo punto</h4>
						<ul>
							<li>Item indice primero</li>
							<li>Item indice segundo</li>
							<li>Item indice tercero</li>
						</ul>
					</div>
					<div class="col-xs-4">
						<h4>3. Tercer punto</h4>
						<ul>
							<li>Item indice primero</li>
							<li>Item indice segundo</li>
							<li>Item indice tercero</li>
						</ul>
						<h4>4. Cuarto punto</h4>
						<ul>
							<li>Item indice primero</li>
							<li>Item indice segundo</li>
							<li>Item indice tercero</li>
						</ul>
					</div>
					<div class="col-xs-4">
						<h4>5. Quinto punto</h4>
						<ul>
							<li>Item indice primero</li>
							<li>Item indice segundo</li>
							<li>Item indice tercero</li>
							<li>Item indice cuarto</li>
							<li>Item indice quinto</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<section id="location-info">
			<!-- mapa google -->
			<div class="container">
				<div class="row">
					<div class="col-xs-5">
						<h3>¿Necesitas alojamiento?</h3>
						<div class="hotel">
							<h4>Hotel navbar 4*</h4>
							<p>
								Situado en el centro de la ciudad muy cercano a 40 E la noche
							</p>
							<a href="">Consultar disponibilidad</a>
						</div>
						<div class="hotel">
							<h4>Hotel breadcrumb 3*</h4>
							<p>
								mas cercarno al lugar donde son los cursos
							</p>
							<a href="">Consultar disponibilidad</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="faq">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h3>Preguntas frecuentes</h3>
					</div>
					<div class="col-xs-4">
						<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, nam.</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam ducimus nisi odit quam libero saepe, quia officiis est cumque voluptas.</p>
					</div>
					<div class="col-xs-4">
						<h4>Minus corrupti blanditiis nisi accusantium modi in alias sint vitae!</h4>
						<p>Sit dignissimos atque iste sapiente doloribus doloremque, tempore officia saepe laborum error ducimus, delectus eius blanditiis ipsum quas aliquam itaque.</p>
					</div>
					<div class="col-xs-4">
						<h4>Eius similique ipsum hic reiciendis quod quos culpa minima, tempore.</h4>
						<p>Quasi officia nisi sapiente quos, ullam, fugiat iste laborum reprehenderit quas reiciendis animi consectetur! Reiciendis excepturi voluptatem labore, nisi iste!</p>
					</div>
					<div class="col-xs-4">
						<h4>Explicabo, aliquid, deleniti. Blanditiis maiores, delectus debitis quos, ducimus adipisci.</h4>
						<p>Aliquam iusto eligendi, eaque porro quos voluptatem quam ipsam laboriosam recusandae nesciunt nemo, est expedita obcaecati odio autem praesentium accusamus.</p>
					</div>
					<div class="col-xs-4">
						<h4>Esse voluptatem accusamus ratione ipsam provident exercitationem voluptatibus quo doloribus.</h4>
						<p>Commodi soluta laudantium blanditiis, asperiores deleniti eligendi explicabo illum, accusantium necessitatibus distinctio. Deserunt itaque dolor nemo soluta. Accusamus, ipsum illo.</p>
					</div>
					<div class="col-xs-4">
						<h4>Rem iusto cumque laudantium dolorem delectus veniam quia quibusdam. Tempora?</h4>
						<p>Velit rerum optio quis laborum placeat, quibusdam nesciunt expedita corporis ad at! Fugit veniam adipisci eligendi blanditiis optio odit, vel.</p>
					</div>
				</div>
			</div>
		</section>
	</article>

	<?php include 'inc/footer.php'; ?>
	<?php include 'inc/footer_common.php'; ?>
</body>
</html>