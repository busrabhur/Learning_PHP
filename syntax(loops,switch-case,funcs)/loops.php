<?php

echo "1.örnek-> WHILE";

$i=0;
while ($i<=100) {
	echo "$i";
	echo "<br>";
	if ($i==50) {
		break;
	}
	$i+=10;
}

echo "2.örnek-> DO-WHILE <br>";
//do-while en az bir kere çalışır.Koşul sağlanmasa bile.

$x=1;
do{
	echo "the value is $x  ";
}while ($x>=5);

echo "<br> Örnek 3: FOR EACH <br>";

$arr=array("red","purple","blue","yellow");

foreach ($arr as $var) {
	echo "the current color is $var <br>";
}

foreach ($arr as $index => $value) {
	echo "$index indeksi renk $value  <br>";
}
?>