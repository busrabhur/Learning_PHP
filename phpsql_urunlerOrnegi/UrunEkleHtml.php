<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tabloya Ürün Ekle</title>

	<!--Bootstrap cdn-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<h2 class="text-center text-info">Ürün Bilgileri</h2>

<div class="container" style="margin:20px auto; width: 500px;">

<!--inputların NAME attribute u çok önemli ,php tarafında inputu bu name ile çekiyoruz-->

 <form action="urunEklePHP.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Ürün Başlığı</label>
    <input name="ad" type="text" class="form-control" id="exampleInputEmail1"  placeholder="Ürün adı">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Ürün Açıklaması</label>
    <input name="aciklama" type="text" class="form-control" id="exampleInputEmail1" placeholder="Açıklama">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Ürün Sırası</label>
    <input name="sira" type="text" class="form-control" id="exampleInputEmail1" placeholder="Ürün sıra">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ürün Fiyatı</label>
    <input name="fiyat" type="text" class="form-control" id="exampleInputPassword1" placeholder="Fiyat">
  </div>
  
  <button  name="urunKaydet" type="submit" class="btn btn-info">Ürünü Ekle</button> 
</form>

</div>











<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>