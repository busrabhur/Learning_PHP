<?php

$var1="merhaba";
$var2="dünya";

//string ve string tipinde değişkenleir birleştirme
echo "1.değişken:".$var1."<br> "."2.değişken:".$var2;
echo "<br>";

//string ve sayı tipindeki değişkenleri de yine aynı şekilde birleştirebiliriz.

$sayi1=20;
$sayi2=80;
$toplam=$sayi1+$sayi2;

//gettype() metodu
echo "sayıların toplamı:".$toplam;
echo "<br>"."gettype kullanımı:".gettype($toplam);

?>