<?php 
//sessionları oluşturuldukları sayfanın dışındaki sayfalarda kullanırken de yine o sayfanın başında sessionları start etmemiz lazım.
session_start();

echo $_SESSION['adsoyad'];
echo $_SESSION['parola'];
//bu sayfada yok edilmiş mi kontrol edeceğiz
echo "<br> session yok etme işlemi başarılıdır.!(bir hata mesajı içerebilir.Var olmayan session yazdırılmaya çalışıldığı için.)";



?>
