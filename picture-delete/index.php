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

require_once 'deletepicture.html.php';