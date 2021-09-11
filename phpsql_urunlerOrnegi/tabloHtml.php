<?php 
include 'connectDB_PDO.php';
/*$sorgu= $db->prepare("SELECT * from urun"); //ürün tablosuna ulaştı //listeleme
$sorgu->execute();//üst satırdaki sorguyu execute ettik.*/


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP MYSQL DERSLERİ</title>

	<!--Bootstrap cdn-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body> 

<!--GÜNCELLEME ALERTLERİ ,BAŞARILI :BAŞARISIZ -->

<div class="container">
<?php 
if (isset($_GET['durum'])) {
  // code...

   if ($_GET['durum']=="basarili") {  ?>
   <div class="alert alert-success" role="alert">
      <b class="text-center">İşlem Başarılı</b>
  </div>

  <?php }else if ($_GET['durum']=="basarisiz") { ?>
   <div class="alert alert-danger" role="alert">
     <b>İşlem Başarısız</b>
  </div>
<?php } } ?>

</div>
<div class="container"> <!--Tablo sayfada ortalanır-->	
<h1 class="text-center text-info">Veritabanındaki Ürünler</h1>
 <table class="table table-striped">
  
  <a  href="UrunEkleHtml.php" class="btn btn-info btn-lg active float-right m-3" role="button" aria-pressed="true">Ürün Ekle</a>
  </a>
  <thead>
    <tr> <!--sütun isimleri (başlıklar)-->
      <th scope="col">Ürün başlık</th>
      <th scope="col">Açıklama</th>
      <th scope="col">Ürün sıra</th>
      <th scope="col">Ürün fiyat</th>

    </tr>
  </thead>
  <tbody>
  <?php 

  $sorgu= $db->prepare("SELECT * from urun"); //ürün tablosuna ulaştı //listeleme
  $sorgu->execute();//üst satırdaki sorguyu execute ettik.
  
  while ($satir=$sorgu->fetch(PDO::FETCH_ASSOC)) {//execute edilen tablonun verileri satır satır alınıp her seferinde $satir değşkenine atnr
  
   ?>
    <tr>
      <td> <?php echo $satir['baslik'] ?> </td> 
      <td> <?php echo $satir['aciklama'] ?></td>
      <td> <?php echo $satir['sira'] ?></td>    
      <td> <?php echo $satir['fiyat'] ?> <p style="font-weight: bolder; display: inline;">₺</p></td>

      <!--düzenlenecek verinin yönlendirilen sayfaya id siyle birlikte gönderilmesi lazım bunu nasıl yapıyoruz altta-
        bu soru işaretiyle ilave ettiğimiz kısımları ilgili sayfada $_GET ile alabiliyoruz.-->

      <td><a href="urunGuncelleHtml.php?id=<?php echo $satir['id'] ?>"><button type="button" class="btn btn-secondary">Düzenle</button></a></td>
      <td><a href="urunSil.php?urunsil&id=<?php echo $satir['id']?>"><button type="button" class="btn btn-danger">Sil</button></a></td>

   </tr>

  <?php  }   ?> 


  </tbody>
 </table>
</div> <!--container divinin kapanışı-->

















<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>