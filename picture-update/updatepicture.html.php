<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Actualizar cuadro</title>
	<link rel="stylesheet" type="text/css" href=".././css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css">
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	
	<style>

	h1 , h2 , button {

		font-family: 'pacifico';
	}

	</style>

</head>
<body class="updatepicture">
	<div class="container">
		<div class="row">
			<div class="col-lg-offset-1 col-lg-10">
				
				<h1><a href="<?=$base_url?>/index.php">Cuadros</a></h1>
				<h2>Actualizar cuadros</h2>
				
				<div class="formactualizar">	
					<form action="?actualizar" method="POST">
						<div class="actualizar">
							<input type="hidden" name="idactualizar" value="<?=$actualizar['id'] ?>">
						</div>
						<div class="actualizar">
							<input type="text" class="form-control" name="pintoractualizar" value="<?=$actualizar['pintor'] ?>">
						</div>
						<div class="actualizar">
							<input type="text" class="form-control" name="cuadroactualizar" value="<?=$actualizar['cuadro'] ?>">
						</div>
						<div class="actualizarbutton">
							<button class="btn btn-primary" type="submit">Actualizar</button>
						</div>
					</form>
				</div>
					
			</div>
		</div>
	</div>
</body>
</html>