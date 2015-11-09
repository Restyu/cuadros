<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Lista de cuadros</title>
	<link rel="stylesheet" type="text/css" href=".././css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css">
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

	<style>

		h1 , h2 , h3 , a {

			font-family: "Pacifico";
		
		}

		h1 a:hover {

			color: #edff8e;
		}

		h2 {

			margin-right: 570px;
			padding-bottom: 10px;

		}

	
	</style>

</head>
	<body class="listpicture">
		<div class="container">
			<div class="row">
				<div class="col-lg-offset-1 col-lg-10">
					<div class="row">
						<div class="col-lg-offset-0 col-lg-12">	
							<div class="z">
								<h1><a href="<?=$base_url?>/index.php">Cuadros</a></h1>
								<h2>Lista de cuadros</h2>
							</div>

							<div class="z">
								<div class="ordenar">
									<form action="?pictureasc" method="post" class="orderbutton">
										<button type="submit" class="btn btn-default" title="Orden ascendente">
											<span class="glyphicon glyphicon-sort-by-alphabet"></span>
										</button>
									</form>
								</div>
								<div class="ordenar">
									<form action="?picturedesc" method="post" class="orderbutton">
										<button type="submit" class="btn btn-default" title="Orden ascendente">
											<span class="glyphicon glyphicon-sort-by-alphabet-alt"></span>
										</button>
									</form>
								</div>
								<div class="ordenar">
									<form action="?puntuacionasc" method="post" class="orderbutton">
										<button type="submit" class="btn btn-default" title="Orden ascendente">
											<span class="glyphicon glyphicon-sort-by-order"></span>
										</button>
									</form>
								</div>
								<div class="ordenar">
									<form action="?puntuaciondesc" method="post" class="orderbutton">
										<button type="submit" class="btn btn-default" title="Orden ascendente">
											<span class="glyphicon glyphicon-sort-by-order-alt"></span>
										</button>
									</form>
								</div>
							</div>
						</div>
					</div>

							<?php if (!empty($listacuadros)): ?>

							<table class="table table-striped">	
									
									<thead>
										
										<th>pintor</th>
										<th>cuadro</th>
										<th>año</th>
										<th>&#9733</th>
										<th>tamaño</th>
										<th>soporte</th>
										<th>tecnica</th>
										<th>tema</th>
										<th>pais</th>
										<th>Opciones</th>

									</thead>

									<tbody>

									<?php foreach($listacuadros as $liscad): ?>

										<th><?=$liscad['pintor']?></th>
										<th><?=$liscad['cuadro']?></th>
										<th><?=$liscad['year']?></th>
										<th><?=$liscad['puntuacion']?></th>
										<th><?=$liscad['dimension']?></th>
										<th><?=$liscad['soporte']?></th>
										<th><?=$liscad['tecnica']?></th>
										<th><?=$liscad['tema']?></th>
										<th><?=$liscad['nacionalidad']?></th>
										
										<th class="listicon">
											<div class="opciones">
												<form action="?deletepicture" method="post">
													<input type="hidden" name="idpicture" value="<?=$liscad['id']?>">
													<button type="submit" class="btn btn-link btn-sm listiconbutton"><i class="glyphicon glyphicon-trash"></i></button>
												</form>
											</div>
											<div class="opciones">
												<form action="../picture-update/" method="post">
													<input type="hidden" name="idpicture" value="<?=$liscad['id']?>">
													<button type="submit" class="btn btn-link btn-sm listiconbutton"><i class="glyphicon glyphicon-pencil"></i></button>
												</form>
											</div>
										</th>


										<tr>

									<?php endforeach; ?>
										
								<?php else: ?>
										
									<h3>no hay cuadros registrados</h3>
										
								<?php endif ?>

									</tbody>
							</table>

						<div class="buttonlistpicture">	
							<div class="newpicture">
								<a class="btn btn-success" href="<?=$base_url?>/picture-add" role="button">Añadir cuadro</a>
							</div>
							<dic class="deletespicture">
								<a class="btn btn-danger" href="<?=$base_url?>/picture-delete" role="button">Cuadros eliminados</a>
							</dic>
						</div>
								
				</div>	
			</div>
		</div>
	</body>
</html>