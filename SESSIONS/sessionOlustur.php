<?php 
session_start();//sessionlar başlatılmazsa hata alırız.Bu sayfada session oluşturacağız.

$_SESSION['adsoyad']="Büşra Buhur";
$_SESSION['parola']="12345";
//session adı ->value;

echo $_SESSION['adsoyad']."<br>";
echo $_SESSION['parola'];

echo "<br> SESSIONLAR OLUŞTURULDU <br>";

echo "<a href='sessionbitir.php' target='_blank'>Oluşturalan Sessionu YOK ET</a>";  


    
   







?>