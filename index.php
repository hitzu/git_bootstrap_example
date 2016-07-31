<!DOCTYPE html>
<html lang="es">
<head>
	<?php include 'inc/head_common.php'; ?>
	<link href='css/workshops.css' rel='stylesheet' type='text/css'>
	<title>Workshops con Bootstrap</title>
</head>
<body>

	<?php include 'inc/header.php'; ?>
	
	<div id="workshop-list">
		<article id="w1" class="workshop workshop-left">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 main-info">
						<h2>
							Desarrolla front-end like a boss
						</h2>
						<p>
							Disfruta un fin de semana diferente con hitzu torres
						</p>
						<a href="detail.php" class="btn btn-custom">ME APUNTO!</a>
						<a href="detail.php" class="more-info-link">Quiero más información</a>
					
					</div>
					<div class="col-xs-3 col-xs-offset-1 date-info">
						<h3 class="highlighted"><strong>W21</strong></h3>
						<h3 class="highlighted">20 plazas</h3>
						<h3 class="highlighted">99 E</h3>
					</div>
				</div>
			</div>
		</article>
		<article id="w2" class="workshop workshop-right">
			<div class="container">
				<div class="row">
						<div class="col-xs-3 date-info">
							<h3 class="highlighted"><strong>W38</strong></h3>
							<h3 class="highlighted">15 plazas</h3>
							<h3 class="highlighted">120 E</h3>
						</div>
						<div class="col-xs-8 col-xs-offset-1 main-info">
							<h2>
								Desarrolla Aplicaciones multiplataforma con AIR
							</h2>
							<p>
								Sorprendete de lo facil que puede ser crear apps para iOS y android
							</p>
							<a href="detail.php" class="btn btn-custom">ME APUNTO!</a>
							<a href="detail.php" class="more-info-link">Quiero más información</a>
						
						</div>
				</div>
			</div>
		</article>
	</div>

	<?php include 'inc/footer.php'; ?>
	<?php include 'inc/footer_common.php'; ?>
</body>
</html>

