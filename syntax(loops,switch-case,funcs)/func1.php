
<?php
function dogumHesabı(){
	$currentYear=date("Y");

	if (isset($_POST['buton'])) {
		$yas=$_POST['yas'];
		$dogum=$currentYear-$yas;
	}
	echo "Doğum tarihiniz:".$dogum;
}
function selamla(){
	echo "<h1>merhabalar</h1>";
}

function biriniSelamla($isim){
	echo "Merhaba ".$isim;
}
function topla($sayi1,$sayi2){
    $toplam=$sayi1+$sayi2;
    return $toplam;
}


dogumHesabı();
echo "<br>";
selamla();
echo "<br>";
biriniSelamla("Büşra");
echo "<br>";
echo "3+4=".topla(3,4);
echo "<br>";
echo "3+4+7=".topla(3,4)+7;


?>
