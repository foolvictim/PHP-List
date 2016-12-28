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
<head><title>Form.PHP</title></head>
<body>
<form  class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <div>
    <label for="inputIsim">Isim</label>
    <input type="text" class="form-control" name="isim" aria-describedby="isimGir" placeholder="Isminizi Girin">
  </div>
  <div>
    <label for="inputGorev">E-Mail</label>
    <input type="email" class="form-control" name="email" aria-describedby="gorevGir" placeholder="E-Mail Adresinizi Girin">
  </div>
 <div>
  <label for="inputTarih">Kullanici Adi</label>
    <input class="form-control" type="text"  name="kullaniciadi" placeholder="Kullanici Adinizi Girin">
  </div>
  <div>
  <label for="example-number-input">Sifre</label>
    <input class="form-control" type="password"  name="sifre" placeholder="Sifrenizi Girin">
  </div>
   <br><button type="submit" class="btn btn-primary">Gonder</button>
  </form>
  <?php 
  if($_POST){
		  $isim = $_POST['isim'];
		  $email = $_POST['email'];
		  $kullaniciadi = $_POST['kullaniciadi'];
		  $sifre =  $_POST['sifre'];
		  $sql = "INSERT INTO kullanicilar (isim,email,kullaniciadi,sifre) VALUES ('".$isim."', '".$email."','".$kullaniciadi."','".$sifre."')";
		 if(mysql_query($sql)){
				$soneklenenid=mysql_insert_id();
				echo "<center><h2>Basariyla eklendi. <b>Kayit No: ".$soneklenenid."</b></h2></center>";
		} else{
				echo "<h2>SQL Sorgusu Calismadi.</h2> ";
		}
}

  
  
  ?>



</body>
</html>