<?php
include 'baglanti.php';


if($_POST){
	$id_new = $_POST['id'];
		  $isim_new = $_POST['isim'];
		  $email_new = $_POST['email'];
		  $kullaniciadi_new = $_POST['kullaniciadi'];
		  $sifre_new =  $_POST['sifre'];
		  $sql = "UPDATE kullanicilar SET isim='".$isim_new."',email='".$email_new."',kullaniciadi='".$kullaniciadi_new."',sifre='".$sifre_new."' WHERE id='".$id_new."'";
		 if(mysql_query($sql)){
				echo "<center><h2>Kullanici Basariyla Duzenlendi. <b>ID: ".$id_new."</b></h2></center>";
		} else{
				echo "<h2>SQL Sorgusu Calismadi.</h2> ";
		}
		
}
		
		
?>