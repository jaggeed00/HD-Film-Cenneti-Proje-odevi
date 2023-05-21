<?php 


try{

	$db=new PDO("mysql:host=localhost;dbname=emreywbh_emreyolcu","emreywbh","hK#fsu+n*J27");
	$db->exec("SET NAMES utf8");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//echo "veritabanı bağlantısı başarılı";
}

catch (PDOExpception $e) {

	echo $e->getMessage();
}





?>