<?php 

//bu dosyada,başka dosyada oluşturulmuş bir session'u yok edeceğiz.
session_start(); //session u yok edeceğimiz sayfada da önce onu başlatmamız lazım
session_destroy();
echo "sessionlar yok edildi. <br>";
echo "<a href='sessionControl.php' target='_blank'>Session yok edildi mi kontrol et</a>";  






?>