<?php 

require_once(dirname(dirname(__FILE__)).'/app/info.php');
require_once(__ROOT__.'/app/info.php');
require_once(__ROOT__.'/db/connectdb.php');


try {

	$sql = 'SELECT * FROM pintores where picturedeletedat is not null';
	$ps = $pdo->prepare($sql);
	$ps->execute();

	
} catch (Exception $e) {

	die("No se ha podido extraer los cuadros eliminados". $e->getMessage());
	
}

while ($row = $ps->fetch(PDO::FETCH_ASSOC) ) {
	$cuadroseliminados[] = $row;
}


if (isset($_GET['delete'])) {

	$idpicture = $_POST['idpicture'];

	try {
	
		$sql = 'DELETE FROM pintores where id = :idpicture';
		$ps = $pdo->prepare($sql);
		$ps->bindValue(':idpicture', $idpicture);
		$ps->execute();

	} catch (Exception $e) {

		echo "no se ha podido borrar el cuadro";
	}

	header('Location: .');
	exit();
}

if (isset($_GET['restaurar'])) {

	$idpicture = $_POST['idpicture'];

	try {
	
		$sql = 'UPDATE pintores set picturedeletedat = null where id = :idpicture';
		$ps = $pdo->prepare($sql);
		$ps->bindValue(':idpicture', $idpicture);
		$ps->execute();

	} catch (Exception $e) {

		echo "no se ha podido borrar el cuadro";
	}

	header('Location: .');
	exit();
}

require_once 'deletepicture.html.php';




