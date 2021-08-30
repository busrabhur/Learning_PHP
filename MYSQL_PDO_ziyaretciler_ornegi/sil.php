<?php 
include "DBconnection.php";
//neyin silineceğini belirtmeyi unutursan tüm tablo silnir,id=id de eşitliğin sağı yine sutuna verdiğimiz takma ad oluyor.

$sil=$db -> prepare("DELETE from ziyaretciler where id=:id");
$kontrol=$sil->execute(array(
	"id" => $_GET['id'] //index.php sayfasında sile basınca o satırın id sini alacak şekilde yazmıştık
));

if ($kontrol) {
	header("Location:index.php"); //eğer true ise buraya gitsin -header ile YÖNLENDİRME yapılır.headerdan sonra exit kullanmak verimlidir
	exit;
}else{
	echo"HATA";
}




?>