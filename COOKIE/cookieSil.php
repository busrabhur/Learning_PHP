<?php
//cookieOluşturKontrolEt sayfasında oluşturduğumuz cookileri silelim

setcookie("isim","",time()-20);//silmek için şimdi zamandan geçmiş zamana gitmen yeterli herhangi bir değer verebilirsin.
setcookie("sifre","",time()-10);

//silinip silinmediğinin kontrolü:
echo"1.cookie değeri:".$_COOKIE['isim'];
echo "<br>2.cookie değeri:".$_COOKIE['sifre'];
echo "<br> eğer hata mesajı alıyorsanız ve cookie değerlerini göremiyorsanız cookie ler silindi !";


?>