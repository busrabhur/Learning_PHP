
<?php

 $name=$_POST['name1'];
 $password=$_POST['pass1'];

 setcookie("isim",$name,time()+60);//saniye değeri,oluşturulduğu andan kaç saniye sonra öleceğini bu method içinde belirleriz.
 setcookie("sifre",$password,time()+60);//şimdiki zamandan 60 saniye sonrasına kadar ömrü olur.(sayfa tarayıcıda ilk açıldığı andan sonra)
  
 echo"KAYITLI ÇEREZLERİ GOSTER:<br><br>";
 echo "isim çerezindeki veri:".$_COOKIE['isim'];
 echo "<br> şifre çerezindeki veri:".$_COOKIE['sifre'];
 echo "<br><br><a href='cookieSil.php'>Cookileri Sil</a>";

?>