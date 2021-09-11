<?php 
include 'connectDb_PDO.php'; //veritabanına bağlandığımız dosyayı veritabanını kullancağımız her dosyaya dahil etmemiz gerek

/*if (isset($_POST['urunKaydet'])) { //issetin içine ürün ekle butonunun name ini verdik.Buton post edilmiş mi gönderilmiş mi ..kontrol
	echo"ürün adı:". $_POST['ad']."<br>";
	echo "ürün açıklaması:".$_POST['aciklama']."<br>";
	echo "ürün sırası:".$_POST['sira']."<br>";
	echo "ürün fiyatı:".$_POST['fiyat']."<br>";

}else{
	echo "Ürün bilgisi kaydedilmedi.";
}*/


$ekle=$db->prepare("INSERT into urun set 
	baslik=:baslik,
	aciklama=:aciklama, 
	sira=:sira,
	fiyat=:fiyat
	"); //sonuncu bileşene virgul konmuyor.

 $kontrol=$ekle->execute(array(
 	"baslik"=>$_POST['ad'],
 	"aciklama" =>$_POST['aciklama'],
 	"sira" =>$_POST['sira'],
 	"fiyat" =>$_POST['fiyat']
 ));

 if ($kontrol) { //yükleme başarılıysa true
 	echo "ürün ekleme işlemi başarılı";
 	header("Location:tabloHtml.php"); //ürün ekleme butonuna basıldığında tablo sayfasına yönlendirsin ki eklendimi  görelim
 	exit; //header sonrası exit kullanılması doğrudur.


 }else{
 	echo "başarısız";
 }













?>