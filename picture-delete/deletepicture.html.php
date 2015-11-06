<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Cuadros eliminados</title>
	<link rel="stylesheet" type="text/css" href=".././css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css">
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

	<style>

		h1 , h2 , a{

		font-family: "Pacifico";

		}

		h1 a:hover{
			color: #edff8e;
		}
	
	</style>

</head>
<body class="deletepicture">
	<div class="container">
		<div class="row">
			<div class="col-lg-offset-1 col-lg-10">
					<div class="col-lg-offset-0 col-lg-10">
						<h1><a href="<?=$base_url?>/index.php">Cuadros</a></h1>
						<h2>Lista de cuadros eliminados</h2>
					</div>
						<table class="table table-striped">	
								
								<thead>
									
									<th>pintor</th>
									<th>cuadro</th>
									<th>año</th>
									<th>&#9733</th>
									<th>tamaño</th>
									<th>pais</th>
									<th>F.creado</th>
									<th>F.borrado</th>
									

								</thead>

								<tbody>
							
									<?php foreach($cuadroseliminados as $cuadlimit): ?>

									<th><?=$cuadlimit['pintor']?></th>
									<th><?=$cuadlimit['cuadro']?></th>
									<th><?=$cuadlimit['year']?></th>
									<th><?=$cuadlimit['puntuacion']?></th>
									<th><?=$cuadlimit['dimension']?></th>
									<th><?=$cuadlimit['nacionalidad']?></th>
									<th><?=$cuadlimit['picturecreate']?></th>
									<th><?=$cuadlimit['picturedeletedat']?></th>
									
									<tr>

									<?php endforeach; ?>


								</tbody>
						</table>
					<div class="buttonlistpicture">	
						<div class="newpicture">
							<a class="btn btn-success" href="<?=$base_url?>/picture-add" role="button">Añadir cuadro</a>
						</div>
						<dic class="deletespicture">
							<a class="btn btn-danger" href="<?=$base_url?>/picture-list" role="button">Lista de cuadros</a>
						</dic>
					</div>		
			</div>	
		</div>
	</div>
</body>
</html>