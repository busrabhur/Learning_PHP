<?php 
include "connectDB_PDO.php";

if (isset($_POST['urunguncelle'])) {
	$duzenle=$db->prepare("UPDATE urun set 
		baslik=:baslik,
		aciklama=:aciklama, 
		sira=:sira,
		fiyat=:fiyat
		WHERE id={$_POST['id']}  
		");
	//echo $_POST['id'];// where id de kullandığımız id değerini gizli bir input ile form içinden bu sayfaya gönderdik.(urunGuncelleHtml.ph)

	$kontrolEt=$duzenle->execute(array(
		"baslik"=>$_POST['ad'],
 		"aciklama" =>$_POST['aciklama'],
 		"sira" =>$_POST['sira'],
 		"fiyat" =>$_POST['fiyat']
	));

	if ($kontrolEt) { //veritabanında güncelleme yapıldıktan sonra bizi tekrar tablo sayfasına yönlendirsin ki değişikliği görebilelim.
		//kullanıcı  bu sayfayı görsel olarak göremeyecek sadece işlemler burada anlık yapılacak ve tekrar tablo sayfasına yönlendirecek.
		header("Location:tabloHtml.php?durum=basarili");  //? sonrası kontrol amaçlı,tabloHtml sayfasından $_GET ile kontrol edip alert vrcz
		exit;
	}else
	 header("Location:tabloHtml.php?durum=basarisiz");
	 exit;
 
}







?>