<?php 

try {

	$db=new PDO("mysql:host=localhost;dbname=dbname;charset=utf8",'root','password');
	//echo "veritabanı bağlantısı başarılı";
}

catch (PDOExpception $e) {

	echo $e->getMessage();
}

 ?>