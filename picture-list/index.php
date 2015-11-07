<?php 

require_once(dirname(dirname(__FILE__)).'/app/info.php');
require_once(__ROOT__.'/app/info.php');
require_once(__ROOT__.'/db/connectdb.php');

try{
	$sql = 'SELECT * FROM pintores where picturedeletedat is null';
	$ps = $pdo->prepare($sql);
	$ps->execute();

}catch(PDOException $e) {

	die("No se ha podido extraer información de la base de datos:". $e->getMessage());
}

while ($row = $ps->fetch(PDO::FETCH_ASSOC) ) {
	$listacuadros[] = $row;
}


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




require_once 'viewpicture.html.php';