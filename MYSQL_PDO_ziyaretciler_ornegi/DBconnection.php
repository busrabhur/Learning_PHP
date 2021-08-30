<?php 

//php "PDO" classı ile  bağlantımızı gerçekleşitireceğiz.(yöntem)

//veritabanı bağlantısını mutlaka "TRY" CATCH" bloğu içerisinde yapmalıyız.

try {
	//bu bağlantı için değişken ismi olarak genelde db tercih edilir ama istediğini yazabilirsin.

	$db=new PDO("mysql:host=localhost;dbname=ziyaretci;charset=utf8" , "root",""); //3 paramtetre alır.

	echo "ziyaretçi veritabanı'na bağlantı sağlandı";

} catch (PDOException $e) {
	echo "BAŞARSIZ!".$e->getmessage();
}









?>
