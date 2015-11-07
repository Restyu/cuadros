<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Cuadros eliminados</title>
	<link rel="stylesheet" type="text/css" href=".././css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css">
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

	<style>

		h1 , h2 , h3 , a{

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
					<div class="row">
						<div class="col-lg-offset-0 col-lg-10">
							<h1><a href="<?=$base_url?>/index.php">Cuadros</a></h1>
							<h2>Lista de cuadros eliminados</h2>
						</div>
					</div>

					<?php if (!empty($cuadroseliminados)): ?>
						
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
								<th>Eliminar</th>

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

								<th class="listicon">
									<form action="?delete" method="post">
										<input type="hidden" name="idpicture" value="<?=$cuadlimit['id']?>">
										<button type="submit" class="btn btn-link btn-sm listiconbutton"><i class="glyphicon glyphicon-trash"></i></button>
									</form>
								</th>
									
								<tr>

								<?php endforeach; ?>
							
							<?php else: ?>
									
									<h3>No hay cuadros eliminados</h3>
									
							<?php endif ?>


							</tbody>
						</table>

					<div class="buttonlistpicture">	
						<div class="newpicture">
							<a class="btn btn-success" href="<?=$base_url?>/picture-add" role="button">Añadir cuadro</a>
						</div>
						<dic class="deletespicture">
							<a class="btn btn-info" href="<?=$base_url?>/picture-list" role="button">Lista de cuadros</a>
						</dic>
					</div>		
			</div>	
		</div>
	</div>
</body>
</html>