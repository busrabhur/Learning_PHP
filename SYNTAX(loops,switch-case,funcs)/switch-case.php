<?php 



$value=3;

switch ($value) {
	case 1:
		echo "value is 1";
		break;
	case 2:
		echo "value is 2";
		break;
	case 3:
		echo "value is 3";
		break;

	default://hiç bir case e girmezse çalışacak olan durum
		echo "value is unknown.";
		break;
}
echo "<br> kontrol sonlandı <br>";



?>