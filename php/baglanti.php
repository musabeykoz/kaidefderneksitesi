<?php 
$host="localhost:3306";
$kullanici_adi="kaidef";
$sifre="kaidef123";
$veri_tab="kaidef";

$baglanti= mysqli_connect($host,$kullanici_adi,$sifre,$veri_tab);
mysqli_set_charset($baglanti,"UTF8");

?>