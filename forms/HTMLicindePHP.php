<?php
$baslik="merhaba ben php başlık değişkeniyim";
$paragraf="merhaba ben php değişkeniyim";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style >
		h2{
			color: blue;
		}
	</style>
</head>
<body>
    <h1>merhaba ben bir html başlığıyım</h1>
	<?php
	echo "merhaba ben PHP koduyum.";
	?>
	<p style="color: red;">
		<?php
		echo "Ben bir php paragrafıyım.";
		?>
	</p>

	<?php
	echo "<h2>ben bir php başlığıyım </h2>";
	?>

	<h2 style="background: gray;"><?php echo "php başlık değişkeni:$baslik <br>"; ?></h2>
	<p> <?php  echo "php paragrafı:$paragraf"; ?></p>
	<?="bu php tagi kullanmadan direkt olarak html içinde kullanılabilen bir php yazdırma komutudur."?>


</body>
</html>