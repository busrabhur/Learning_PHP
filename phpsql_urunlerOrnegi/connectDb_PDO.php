<?php 

try {
	//$baglanti=new PDO("mysql:host:localhost;dbname:bağlanmakIstediğinDBismi",'mysql kullanıcı adı','mysql şifre')
	/*Xampp ve diğer eşdeğer programların hepsinde admin ismi root dur.Xampp de şifre yoktur.Başka programlarda var onları kullanınca şifre de yazarız.Şimdilik boş bıraktık.*/

	$db=new PDO("mysql:host=localhost; dbname=deneme",'root','');
	
	echo"Veritabanı bağlantısı başarılı.";
	
} catch (PDOException $e) {
	//bağlantı sağlanamadıysa catch e girer.Sebebini getmesagge söyler
	echo $e->getmessage();
}




















?>