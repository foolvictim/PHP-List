<style>
.form-horizontal{
    display:block;
    width:25%;
    margin:0 auto;
}
</style>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<?php include 'baglanti.php'; ?>
<html>
<head><title>Islemler.PHP</title></head>
<body>
<?php
if($_GET['islem']){
	$id=$_GET['id'];
	if($_GET['islem']=="sil"){
		$sql_sil="DELETE FROM kullanicilar WHERE id=".$id."";
		 if(mysql_query($sql_sil)){
				echo "<center><br><img src='img/deleted.jpg'/><br><h2>".$id." Numarali Kullanici Basariyla Silindi. <a href='duzenle.php'>Listeye Don</a></h2></center>";
		echo"<br><br><h3><center>Kod bu noktadan sonra kirilacaktir. Error mesajlarina itibar etmeyiniz.</center></h3>";
		break;
		} else{
				echo "<br>".$id." Numarali Kullanici Silinemedi";
		}
	}
	$sql_getir="SELECT isim,email,kullaniciadi,sifre FROM kullanicilar WHERE id=".$id."";
	$calistir=mysql_query($sql_getir);
	while($row = mysql_fetch_array($calistir)) {
	$isim=$row['isim'];
	$email=$row['email'];
	$kullaniciadi=$row['kullaniciadi'];
	$sifre=$row['sifre'];
	}
	echo "<h3><center> ID:<b>".$id."</b> Duzenleme Ekrani</center></h3>";
	if($_GET['islem']=="duzelt"){
		?>
		
		<form  class="form-horizontal" action="post.php" method="post">
  <div>
    <label for="inputIsim">ID</label>
    <input type="text" class="form-control" value="<?php echo $id; ?>" name="id" aria-describedby="isimGir"  readonly>
  </div>
  <div>
    <label for="inputIsim">Isim</label>
    <input type="text" class="form-control" value="<?php echo $isim; ?>" name="isim" aria-describedby="isimGir" placeholder="Isminizi Girin">
  </div>
  <div>
    <label for="inputGorev">E-Mail</label>
    <input type="email" class="form-control" value="<?php echo $email; ?>" name="email" aria-describedby="gorevGir" placeholder="E-Mail Adresinizi Girin">
  </div>
 <div>
  <label for="inputTarih">Kullanici Adi</label>
    <input class="form-control" type="text" value="<?php echo $kullaniciadi; ?>" name="kullaniciadi" placeholder="Kullanici Adinizi Girin">
  </div>
  <div>
  <label for="example-number-input">Sifre</label>
    <input class="form-control" type="text" value="<?php echo $sifre; ?>" name="sifre" placeholder="Sifrenizi Girin">
  </div>
   <br><button type="submit" class="btn btn-primary">Gonder</button>
  </form>
		
		
		
		
		<?php
		
		

	}
	
	
	
 
}


?>
</body>
</html>