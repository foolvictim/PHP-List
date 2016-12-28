<?php
$baglanti = mysql_connect('localhost', 'root', '','deneme');
$veritabani = mysql_select_db('deneme');
 echo "<center><h1><b>Web Tasarim Odevi</b></h1></center>";
if($baglanti && $veritabani) {
     echo '<center>Veri Tabani Baglantisi Kuruldu. Istersen <a href="form.php">Yeni Kayit Ekle</a> ya da <a href="duzenle.php">Listeye Bak</a></center>';
} else {
   echo '<center>Veri Tabani Baglantisi Kurulamadi. Bir Yanlislik Olmali Bende Calisiyordu.</center>';
}

//mysql_close($baglanti); // MYSQL sunucusu ile bağlantımızı koparttık
?>
