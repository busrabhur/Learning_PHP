<?php 
//veritabanıyla ilgili işlem yapacağımız tüm sayfalarda veritabanı bağlantısı yaptığımız dosyayı include etmemimiz lazım
include "DBconnection.php";
 $sorgu=$db-> prepare("SELECT * from ziyaretciler where id=:id "); //güncelleyeceğimiz kişinin güncelleme öncesi bilgilerini bu sayfada gstr
 $sorgu->execute(array(
 	"id"=> $_GET['id']
 ));
 $satir=$sorgu->fetch(PDO::FETCH_ASSOC);

  /* tek bir satırın bilgisini alacağımız için döngü kullanmadık (bu satırın tüm bilgileri satır değişkenine atılır ve dizi şeklinde satırın istediğimiz sütununa ulaşırız) */

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ziyaretçi Güncelle</title>
</head>
<body>
<h2> Ziyareçi Güncelle </h2>
<form action="#" method="POST">  <!-- ilk önce formdaki placeholderlarda güncellenecek satırın eski bilgileri görünür-->
  <label for="fname">Name:</label><br>
  <input type="text" id="fname" name="fname" value="<?php echo $satir['ad']; ?>"><br>
  <label for="lname">Surname:</label><br>
  <input type="text" id="lname" name="lname" value="<?php echo $satir['soyad']; ?>"><br>
  <label for="lname">Age:</label><br>
  <input type="text" id="lname" name="age" value="<?php echo $satir['yas']; ?>"><br>
  <input type="submit" value="Güncelle" name="guncelle">
</form>
 <!--güncelle butonuna basıldıktan sonra olacak şeyler-->
 <?php 
if (isset($_POST['guncelle'])) { //güncelleme butonuna basıldımı ?
	$guncelle=$db->prepare("UPDATE ziyaretciler set 
		ad=:ad,
		soyad=:soyad,
		yas=:yas where id=:id
		"); //sonuncu bileşeninden sonra virgul konmaz. //where id kımsını eklemezsek tüm satırları günceller.

	$kontrol=$guncelle->execute(array( //takma adların içerğini yani sutuna yazılacak verileri burada belirliyoruz.
		"ad" => $_POST['fname'],
		"soyad" => $_POST['lname'],
		"yas" => $_POST['age'],
		"id" => $_GET['id']
	));

	if ($kontrol) { //güncelleme başarılıysa kontrole true atanır
		header("Location:index.php"); //tekrar index.php ye yönlediriyoruz orada güncellenmiş listeyi görecek.
		exit;
	}else{
		echo "HATA" ;
		
	}
}

 ?>

</body>
</html>