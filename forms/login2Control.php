<?php

if (isset($_POST['fnamek'])) {
	echo "POST var";
}else{
	echo "POST yok";
}
echo "<br>";

if (empty($_POST["fname"]) or empty($_POST['lname'])) {
	echo" adınız veya soyadınız boş";
}else{
	echo"adınız: ".$_POST['fname'];
	echo "<br> ";
	echo "soyadınız :".$_POST['lname'];
}





?>