<?php 

require_once(dirname(dirname(__FILE__)).'/app/info.php');
require_once(__ROOT__.'/app/info.php');
require_once(__ROOT__.'/db/connectdb.php');

try{
	$sql = 'SELECT * FROM pintores';
	$ps = $pdo->prepare($sql);
	$ps->execute();

}catch(PDOException $e) {

	die("No se ha podido extraer información de la base de datos:". $e->getMessage());
}

while ($row = $ps->fetch(PDO::FETCH_ASSOC) ) {
	$listacuadros[] = $row;
}


require_once 'viewpicture.html.php';