<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type=".././text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-offset-1 col-lg-10">
				<div>
					<div class="col-lg-offset-0 col-lg-10">
						<h1><a href="<?=$base_url?>/index.php">Cuadros</a></h1>
						<h2>Lista de cuadros</h2>
					</div>
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
									<tr>

									<?php endforeach; ?>


								</tbody>
						</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>