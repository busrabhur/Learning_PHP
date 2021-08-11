<?php

$dizi1=range(0,10);

foreach ($dizi1 as $value) {
	echo "$value <br>";
}
 echo "<br>******* <br>";

$dizi2=range("a","z");

foreach ($dizi2 as $value2) {
	echo "$value2 <br>";
}
echo"<br> ******** <br>";
$dizi3=range(10,100,10);
foreach ($dizi3 as $value3) {
	echo "$value3 <br>";
}
?>