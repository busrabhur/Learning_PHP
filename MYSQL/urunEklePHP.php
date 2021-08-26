<?php 

if (isset($_POST['urunKaydet'])) { //issetin içine ürün ekle butonunun name ini verdik.Buton post edilmiş mi gönderilmiş mi ..kontrol
	echo"ürün adı:". $_POST['ad']."<br>";
	echo "ürün açıklaması:".$_POST['aciklama']."<br>";
	echo "ürün sırası:".$_POST['sira']."<br>";
	echo "ürün fiyatı:".$_POST['ad']."<br>";

}else{
	echo "Ürün bilgisi kaydedilmedi.";
}
















?>