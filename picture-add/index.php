<?php 

require_once(dirname(dirname(__FILE__)).'/app/info.php');
require_once(__ROOT__.'/app/info.php');
require_once(__ROOT__.'/db/connectdb.php');

if ( isset($_GET['addpicture'])) {
	
	$pintor = htmlspecialchars($_POST['pintor'], ENT_QUOTES, 'UTF-8');
	$cuadro = htmlspecialchars($_POST['cuadro'], ENT_QUOTES, 'UTF-8');
	$year = htmlspecialchars($_POST['year'], ENT_QUOTES, 'UTF-8');
	$dimension = htmlspecialchars($_POST['dimension'], ENT_QUOTES, 'UTF-8');
	$soporte = htmlspecialchars($_POST['soporte'], ENT_QUOTES, 'UTF-8');
	$tecnica = htmlspecialchars($_POST['tecnica'], ENT_QUOTES, 'UTF-8');
	$tema = htmlspecialchars($_POST['tema'], ENT_QUOTES, 'UTF-8');
	$nacionalidad = htmlspecialchars($_POST['nacionalidad'], ENT_QUOTES, 'UTF-8');
	$puntuacion = htmlspecialchars($_POST['puntuacion'], ENT_QUOTES, 'UTF-8');

	if ( $pintor == "" ) {
		$errores['pintor'] = 'Debes introducir un pintor.';
	}

	if ( $cuadro == "" ) {
		$errores['cuadro'] = 'Debes el nombre del cuadro.';
	}

	if ( $year == "" ) {
		$errores['year'] = 'Debes introducir un año.';
	}

	if ( $dimension == "" ) {
		$errores['dimension'] = 'Debes las dimensiones del cuadro.';
	}

	if ( $soporte == "" ) {
		$errores['soporte'] = 'Debes introducir el soporte.';
	}

	if ( $tecnica == "" ) {
		$errores['tecnica'] = 'Debes introducir la tecnica del cuadro.';
	}

	if ( $tema == "" ) {
		$errores['tema'] = 'Debes introducir el tema del cuadro.';
	}

	if ( $nacionalidad == "" ) {
		$errores['pais'] = 'Debes el pais del pintor.';
	}

	if( $puntuacion < 1 || $puntuacion > 5) {
		$errores['puntuacion'] = 'Debes indicar una valoracion.';
	}

	if ( empty($errores) ) {
		
		try{

			$sql = "INSERT INTO pintores (pintor, cuadro, year, dimension, soporte, tecnica, tema, nacionalidad, puntuacion) VALUES (:pintor, :cuadro, :year, :dimension, :soporte, :tecnica, :tema, :nacionalidad, :puntuacion)";
			$ps = $pdo->prepare($sql);
			$ps->bindValue(':pintor', $pintor);
			$ps->bindValue(':cuadro', $cuadro);
			$ps->bindValue(':year', $year);
			$ps->bindValue(':dimension', $dimension);
			$ps->bindValue(':soporte', $soporte);
			$ps->bindValue(':tecnica', $tecnica);
			$ps->bindValue(':tema', $tema);
			$ps->bindValue(':nacionalidad', $nacionalidad);
			$ps->bindValue(':puntuacion', $puntuacion);
			$ps->execute();

		}catch (PDOException $e){

			die("No se ha podido guardar la informacion en la base de datos:". $e->getMessage());
		}

		header("Location: .");
		exit();
	}


}

// se extrae la informacion de la base de datos
try{
	$sql = 'SELECT * FROM pintores';
	$ps = $pdo->prepare($sql);
	$ps->execute();

}catch(PDOException $e) {

	die("No se ha podido extraer información de la base de datos:". $e->getMessage());
}

while ($row = $ps->fetch(PDO::FETCH_ASSOC) ) {
	$cuadros[] = $row;
}


require_once 'addpicture.html.php';

