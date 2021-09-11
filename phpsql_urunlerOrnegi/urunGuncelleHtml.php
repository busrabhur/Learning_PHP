<?php 
include 'connectDB_PDO.php';
//bu sayfada güncellenecek ürünün eski bilgilerini de göstermemiz lazım ilk adımımız bu.
$listeleSorgu=$db->prepare(" SELECT * from urun where id=:id ");     //eşitliğin sağındaki, id sutunun takma adını belirlediğimiz yer


$listeleSorgu->execute(array(
"id"=> $_GET['id']      
       //tabloHtml.php sayfasında güncelle butonunn hrefinde ?  sonrasında gönderilen id burada yakalandı
));

$satirVeri=$listeleSorgu->fetch(PDO::FETCH_ASSOC); //sadece tıklanan ürünün bilgilerini satırVeriye atadık bunun için döngüye gerek yok


?>
<!DOCTYPE html>
<html>
<head>
	<!--Bootstrap cdn-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<meta charset="utf-8">
	<title>Ürun Güncelle</title>
</head>
<body>

	<h2 class="text-center text-info m-4">Güncellenecek Ürün Bilgileri</h2>

<div class="container" style="margin:20px auto; width: 500px;">

<!--inputların NAME attribute u çok önemli ,php tarafında inputu bu name ile çekiyoruz-->

 <form action="guncellePHP.php" method="POST"> <!--actionda başka sayfaya yönlendirmedik çünkü php işlemlerini de bu sayfada yapacağız.-->
  <div class="form-group">
    <label for="exampleInputEmail1">Ürün Başlığı</label>
    <input name="ad" type="text" class="form-control" id="exampleInputEmail1"  value="<?php echo $satirVeri['baslik'] ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail2">Ürün Açıklaması</label>
    <input name="aciklama" type="text" class="form-control" id="exampleInputEmail2" value="<?php echo $satirVeri['aciklama'] ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail3">Ürün Sırası</label>
    <input name="sira" type="text" class="form-control" id="exampleInputEmail3" value="<?php echo $satirVeri['sira'] ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ürün Fiyatı</label>
    <input name="fiyat" type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $satirVeri['fiyat'] ?>">
  </div>
  <input name="id" type="hidden" class="form-control"  value="<?php echo $satirVeri['id'] ?>">  <!--id göndermek için gizli bir input-->

  <button  name="urunguncelle" type="submit" class="btn btn-info">Değişiklikleri Kaydet</button> 
</form>

</div>

<!--//2.adım : güncelle butonuna basıldıktan sonra değişikliklerin veritabanına yansıtılması
//2.adımdaki veritabanı  işlemleri "guncelle.php "sayfasında yapıldı. -->


	










<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>