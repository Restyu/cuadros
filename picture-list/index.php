<?php 

require_once(dirname(dirname(__FILE__)).'/app/info.php');
require_once(__ROOT__.'/app/info.php');
require_once(__ROOT__.'/db/connectdb.php');

if (isset($_GET['deletepicture'])) {
	
	$idpicture = $_POST['idpicture'];

	try {

		$sql = 'UPDATE pintores set picturedeletedat = NOW() where id = :idpicture';
		$ps = $pdo->prepare($sql);
		$ps->bindValue(':idpicture', $idpicture);
		$ps->execute();
		
	} catch (Exception $e) {

		echo "No se ha podido borrar el cuadro";
		exit();
		
	}

	header('Location: .');
	exit();

}

if ( isset($_GET['pictureasc']) ) {
	$sql = 'SELECT * FROM pintores where picturedeletedat is null ORDER BY pintor ASC';
}elseif ( isset($_GET['picturedesc']) ) {
	$sql = 'SELECT * FROM pintores where picturedeletedat is null ORDER BY pintor DESC';
}elseif ( isset($_GET['puntuacionasc']) ) {
	$sql = 'SELECT * FROM pintores where picturedeletedat is null ORDER BY puntuacion ASC';
}elseif ( isset($_GET['puntuaciondesc']) ) {
	$sql = 'SELECT * FROM pintores where picturedeletedat is null ORDER BY puntuacion DESC';
}else{
	$sql = 'SELECT * FROM pintores WHERE picturedeletedat is null ORDER BY pintor DESC, puntuacion ASC';
}

try{
	$ps = $pdo->prepare($sql);
	$ps->execute();
}catch(PDOException $e) {
	die("No se ha podido extraer información de la base de datos:". $e->getMessage());
}

while ($row = $ps->fetch(PDO::FETCH_ASSOC) ) {
	$listacuadros[] = $row;
}



require_once 'viewpicture.html.php';


