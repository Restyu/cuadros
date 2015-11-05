<?php

require_once(dirname(dirname(__FILE__)).'/app/info.php');
require_once(__ROOT__.'/db/connectdb.php'); 

try{

	$sql = "CREATE TABLE pintores (
		id 					INT AUTO_INCREMENT PRIMARY KEY,
		year				INT NOT NULL,
		tema				VARCHAR(255) NOT NULL,
		pintor				VARCHAR(255) NOT NULL,
		cuadro				VARCHAR(255) NOT NULL,
		tecnica				VARCHAR(255) NOT NULL,
		soporte				VARCHAR(255) NOT NULL,
		dimension			VARCHAR(255) NOT NULL,
		nacionalidad		VARCHAR(255) NOT NULL,
		puntuacion   		ENUM('1','2','3','4','5') NOT NULL DEFAULT '1',
		picturecreate		TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
		picturedoneat 		TIMESTAMP NULL DEFAULT NULL,
		picturedeletedat 	TIMESTAMP NULL DEFAULT NULL

	) DEFAULT CHARACTER SET UTF8 ENGINE=InnoDB";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla pintores:". $e->getMessage());
}