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
<table class="table">
<thead>
      <tr>
        <th>#</th>
        <th>Isim</th>
		<th>Kullanici Adi</th>
		<th>E-Mail Adresi</th>
		<th>Duzenle</th>
		<th>Sil</th>
      </tr>
    </thead>
	<tbody>
	<?php
	$sorgu="SELECT id,isim,email,kullaniciadi FROM kullanicilar";
	$calistir=mysql_query($sorgu);
	while($row=mysql_fetch_array($calistir))
	{
	$id=$row['id'];
	$isim=$row['isim'];
	$email=$row['email'];
	$kullaniciadi=$row['kullaniciadi'];
	?><tr><?php
	echo "<td>".$id."</td><td>".$isim."</td><td>".$kullaniciadi."</td><td>".$email."</td><td><a href='islemler.php?id=".$row['id']."&islem=duzelt'><img class='img-thumbnail' width='30' height='30' alt='Kaydi Duzenle'  src='img/duzelt.png'/></a></td><td><a href='#' onclick='myFunction()'><img width='30' height='30' class='img-thumbnail' alt='Kaydi Duzenle' src='img/sil.png'/></a></td>";
	?></tr>
	<?php
	} ?>
</tbody>
</table>
<script>
function myFunction() {
	var cont = confirm("Kaydi Silmek Istediginize Emin Misiniz?");
	if (cont==true){
   alert ("<a href='islemler.php?id=".$row['id']."&islem=sil'>Hadi sil!</a>")
}
    return cont;
	
}
</script>
</body>
</html>