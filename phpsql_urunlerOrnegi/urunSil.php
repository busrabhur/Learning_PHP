<?php 
include 'connectDB_PDO.php'; 

if (isset($_GET['urunsil'])) { //urunsili ,tablo sayfasındaki sil butonunun hfrefine soru işaretinden sonra yazmıştık.
	//echo "geldi";
	$sil=$db->prepare("DELETE from urun where id=:id");
	$kontrol=$sil->execute(array(
		'id'=> $_GET['id']

	)); //id ,tablo sayfasında sil butonun hrefi içinde soru işaretinden sonraki kısımda alındı burada da get içinde o id ye ulaşmış olduk.
}
if ($kontrol) {
	header("Location:tabloHtml.php?durum=basarili"); //silince tablo sayfasına yönlendirir.
	exit;


}else{
	header("Location:tabloHtml.php?durum=basarisiz"); //? sonrası kontrol amaçlı
	exit;

}

?>