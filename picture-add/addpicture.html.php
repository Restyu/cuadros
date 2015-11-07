<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registros nuevos cuadros</title>
	<link rel="stylesheet" href=".././css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css">
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

	<style>

	h1 , h2 , h3 , button , a{

		font-family: "Pacifico";
	}
	
	.enlacelistpicture {
		
		margin-left: 20px;
	}

	</style>

</head>
	<body class="addpicture">
		<div class="container">
			<div class="row">
				<div class="col-lg-offset-1 col-lg-10">
					<div class="row">
						<div class="col-lg-offset-0 col-lg-12">	
							<h1><a href="<?=$base_url?>/index.php">Cuadros</a></h1>
							<h2>Registro de cuadros</h2>
						</div>
					</div>

						<?php if (!empty($cuadros)) : ?>
							
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
								<?php foreach($cuadros as $cad): ?>

								<th><?=$cad['pintor']?></th>
								<th><?=$cad['cuadro']?></th>
								<th><?=$cad['year']?></th>
								<th><?=$cad['puntuacion']?></th>
								<th><?=$cad['dimension']?></th>
								<th><?=$cad['soporte']?></th>
								<th><?=$cad['tecnica']?></th>
								<th><?=$cad['tema']?></th>
								<th><?=$cad['nacionalidad']?></th>
								<tr>
								<?php endforeach; ?>
							</tbody>

							<?php else: ?>
								<h3>No hay cuadros registrados.</h3>
							<?php endif; ?>

						</table>
				</div>
				
				<div class="col-lg-offset-1 col-lg-10 ">
					<form action="?addpicture" method="POST">

					<div class="registro input-group input-group-sm">
					  <span class="input-group-addon" id="sizing-addon2">pintor</span>
					  <input type="text" class="form-control" name="pintor" placeholder="Introduce el pintor:" aria-describedby="sizing-addon3" value="<?php if (isset($pintor)) echo $pintor; ?>">
					</div>

					<div class="registro input-group input-group-sm">
					  <span class="input-group-addon" id="sizing-addon2">cuadro</span>
					  <input type="text" class="form-control" name="cuadro" placeholder="Introduce el nombre del cuadro" aria-describedby="sizing-addon3" value="<?php if (isset($cuadro)) echo $cuadro; ?>">
					</div>

					<div class="registro input-group input-group-sm">
					  <span class="input-group-addon" id="sizing-addon1">año</span>
					  <input type="text" class="form-control" name="year" placeholder="Año en el que fue pintado" aria-describedby="sizing-addon3" value="<?php if (isset($year)) echo $year; ?>">
					</div>

					<div class="registro input-group input-group-sm">
					  <span class="input-group-addon" id="sizing-addon3">dimension</span>
					  <input type="text" class="form-control" name="dimension" placeholder="Dimensiones en cm" aria-describedby="sizing-addon3" value="<?php if (isset($dimension)) echo $dimension; ?>">
					</div>

					<div class="registro input-group input-group-sm">
					  <span class="input-group-addon" id="sizing-addon3">soporte</span>
					  <input type="text" class="form-control" name="soporte" placeholder="lienzo , papel" aria-describedby="sizing-addon3" value="<?php if (isset($soporte)) echo $soporte; ?>">
					</div>

					<div class="registro input-group input-group-sm">
					  <span class="input-group-addon" id="sizing-addon3">tecnica</span>
					  <input type="text" class="form-control" name="tecnica" placeholder="oleo , aquarela" aria-describedby="sizing-addon3" value="<?php if (isset($tecnica)) echo $tecnica; ?>">
					</div>

					<div class="registro input-group input-group-sm">
					  <span class="input-group-addon" id="sizing-addon3">tema</span>
					  <input type="text" class="form-control" name="tema" placeholder="Tematica" aria-describedby="sizing-addon3" value="<?php if (isset($tema)) echo $tema; ?>">
					</div>

					<div class="registro input-group input-group-sm">
					  <span class="input-group-addon" id="sizing-addon3">pais</span>
					  <input type="text" class="form-control" name="nacionalidad" placeholder="Pais pintor" aria-describedby="sizing-addon3" value="<?php if (isset($pais)) echo $pais; ?>">
					</div>
					
					<div class="botones-abajo">
						
						<div class="puntuacionyenviar">
							<a href="<?=$base_url?>/picture-list" role="button"> Ver cuadros</a>
						</div>

						<div class="puntuacionyenviar enlacelistpicture">
							<select class="form-control" name="puntuacion">
							    <option>Estrellas</option>
								<option value="1" <?php if ( isset($nivel) && $nivel == 1) echo 'selected'; ?>>&#9733</option>
								<option value="2" <?php if ( isset($nivel) && $nivel == 2) echo 'selected'; ?>>&#9733&#9733</option>
								<option value="3" <?php if ( isset($nivel) && $nivel == 3) echo 'selected'; ?>>&#9733&#9733&#9733</option>
								<option value="4" <?php if ( isset($nivel) && $nivel == 4) echo 'selected'; ?>>&#9733&#9733&#9733&#9733</option>
								<option value="5" <?php if ( isset($nivel) && $nivel == 5) echo 'selected'; ?>>&#9733&#9733&#9733&#9733&#9733</option>
							</select>
						</div>

						<div class="puntuacionyenviar">
							<button class="btn btn-primary" type="submit">Enviar</button>
						</div>

					</div>

					</form>
				</div>
			</div>
		</div>	
	</body>
</html>