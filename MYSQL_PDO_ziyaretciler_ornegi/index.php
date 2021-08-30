<?php 

include "DBconnection.php"; //bu veritabanı bağlantı dosyasını buraya include etmezsek hata alıyoruz.

//SELECT komutu : veritabanı tablolarındaki verileri ekranda göstermeye çalışalım

$sorgu=$db->prepare("SELECT * from ziyaretciler"); //ziyaretciler tablosuna ulaştı
$sorgu->execute();//üstteki sorguyu execute ettik

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ziyaretciler</title>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
tr:nth-child(even) {
  background-color:pink;
}
</style>




<h2>Ziyareçi Ekle</h2>
<form action="#" method="POST">
  <label for="fname">Name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Surname:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br>
  <label for="lname">Age:</label><br>
  <input type="text" id="lname" name="age" value="Doe"><br>
  <input type="submit" value="Ekle" name="ekle">
</form> 

<?php 
if (isset($_POST['ekle'])) { //formaki bileşenleri kontrol ederken önce isset içinde butona basılmış diye submit post edildimi diye bakarız
  $ekle=$db->prepare("INSERT into ziyaretciler set 
    ad=:ad, 
    soyad=:soyad,
    yas=:yas
  ")//sonuncu bileşenden sonra virgul konulmaz

  ;/*bunlar veritabanı tablosundaki sutun isimleri(sol taraf) sağdakilerse onlar için kullanacağımız takma ad,ama en iyi ikisini de aynı vermek yoksa karışıklık olabilir. ad:=c deseydik ad sütünuna c takma adını vermiş olurduk mesela.*/

 //EKLEME ASIL BURADA OLACAK.Sutunların takma adına atadığımız şeyler o sütuna eklenmiş olacak.

  $kontrol=$ekle->execute(array(
    "ad" => $_POST['fname'],
    "soyad" => $_POST['lname'],
    "yas"=> $_POST['age']
  )); 
  //ekleme işlemi başarılı olursa kontrol değişkenine TRUE değeri atanacak.

  if ($kontrol) {                 //ekleme başarılıysa sayfayı yenileyelim ki yeni eklenen anlık gösterilsin yenilemeden görünmez.
    header("Location:index.php");
    exit;                       //her header dan sonra exit kullanırsan daha verimli olur.
  }else{
    echo "HATA";
  }



}//end of if



?>

</head>
<body>
<h2>Ziyaretçiler Listesi</h2>
<table>
  <tr>
    <th>NAME</th>
    <th>SURNAME</th>
    <th>AGE</th>
  </tr>
  <?php
  //buradaki $satır değişkeni ziyaretçiler tablosundaki her bir satırı gezinecek.Ve dizi gibi o satırın sütün bilgilerini o sütün ismini vererek alacağız.

  while ($satir=$sorgu->fetch(PDO::FETCH_ASSOC)) {   //execute edilen tablodaki veriken buna burdan da satır değişkenine aktarılacak..
  	
  	echo"<tr>";
  	echo"<td>".$satir["ad"]."</td>";
  	echo"<td>".$satir["soyad"]."</td>";
  	echo"<td>".$satir["yas"]."</td>";
    echo"<td> <a href=sil.php?id=$satir[id]>Sil</a></td>"; //silme işlemi id ye göre
    echo"<td> <a href=guncelle.php?id=$satir[id]>Güncelle</a></td>"; //id ye göre bilgi gidecek.
  	echo"</tr>";

  }//veritabanı tablosunda ne kadar satır varsa o kadar yazdırılacak.

  ?>
</table>



</body>
</html>