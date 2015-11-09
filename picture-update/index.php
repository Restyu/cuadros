<?php  

require_once(dirname(dirname(__FILE__)).'/app/info.php');
require_once(__ROOT__.'/app/info.php');
require_once(__ROOT__.'/db/connectdb.php');


$id = $_POST['idpicture'];

try {

	$sql = 'SELECT * FROM pintores where id = :id';
	$ps = $pdo->prepare($sql);
	$ps->bindValue(':id', $id);
	$ps->execute();
	
} catch (Exception $e) {

	die("No se ha podido extraer información de la base de datos:". $e->getMessage());
}


$actualizar = $row = $ps->fetch(PDO::FETCH_ASSOC);


if (isset($_GET['actualizar'])) {

	$idactualizar  	  = htmlspecialchars ($_POST['idactualizar'] , ENT_QUOTES, 'UTF-8');
	$pintoractualizar = htmlspecialchars ($_POST['pintoractualizar'] , ENT_QUOTES, 'UTF-8');
	$cuadroactualizar = htmlspecialchars ($_POST['cuadroactualizar'] , ENT_QUOTES, 'UTF-8');

	
	
	$sql = 'UPDATE pintores set picturedoneat = NOW() , pintor = :pintoractualizar , cuadro = :cuadroactualizar where id = :idactualizar';
	$ps = $pdo->prepare($sql);
	$ps->bindValue(':idactualizar', $idactualizar);
	$ps->bindValue(':pintoractualizar', $pintoractualizar);
	$ps->bindValue(':cuadroactualizar', $cuadroactualizar);
	$ps->execute();

	header('Location: .././picture-list');
	exit();

}


require_once 'updatepicture.html.php';


