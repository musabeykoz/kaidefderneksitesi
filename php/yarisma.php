

<?php 
include("baglanti.php");

// butona basıldıysa kaydet
if(isset($_POST["kaydet"])) {
    // formdaki belirlenmiş nameleri başka değişkene atar
    $form_ad = $_POST["ad"];
    $form_soyad = $_POST["soyad"];
	$form_adres = $_POST["adres"];
	$form_eposta = $_POST["eposta"];
	$form_facebook = $_POST["facebook"];
	$form_twitter = $_POST["twitter"];
	$form_instagram = $_POST["instagram"];
	$form_telefon = $_POST["telefon"];
	$form_telefon1 = $_POST["telefon1"];
	$form_dogumtarih = $_POST["dogumtarih"];
	$formatted_dogumtarih = date("Y-m-d", strtotime($form_dogumtarih));
	$form_cinsiyet = $_POST["cinsiyet"];
	$form_egitim = $_POST["egitim"];
	$form_ogrenci_universite = $_POST["ogrenci_universite"];
		$form_sahne_deneyim = $_POST["sahne_deneyim"];
    // veritabanına gönderim
    $yarisma_kayit = "INSERT INTO kullanicilar (ad,soyad,adres,eposta,facebook,twitter,instagram,telefon,telefon1,dogumtarih,cinsiyet,egitim,ogrenci_universite,sahne_deneyim) VALUES ('$form_ad','$form_soyad','$form_adres','$form_eposta','$form_facebook','$form_twitter','$form_instagram','$form_telefon','$form_telefon1','$formatted_dogumtarih','$form_cinsiyet','$form_egitim','$form_ogrenci_universite','$form_sahne_deneyim')";
    
    $calistir = mysqli_query($baglanti, $yarisma_kayit);
    
  
?>


<!DOCTYPE html>
<html lang="tr">

<head>
    <!-- Meta etiketleri, karakter seti ve cihazın ekran özelliklerini belirleme -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Sayfa başlığı -->
    <title>Projem</title>

    <!-- Bootstrap stil dosyası -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Sayfa özel CSS stilleri -->
    <style>
        /* Buraya sayfanıza özel CSS stillerini ekleyebilirsiniz */
    </style>
</head>

<body>
    <!-- Sayfa içeriği buraya gelecek -->
	
	<?php
  if($calistir) {
   
	 header("Location:../index1.html");
exit();
    } else {
	  
	  //. mysqli_error($baglanti).
        echo '<div class="alert alert-danger" role="alert">
            Kayıt sırasında bir hata oluştu: 
			<a href="../index.html" class="btn btn-danger " role="button" >KAYIT SAYFASINA DÖN</a>
        </div>
        </div>';
    }
}
	?>
	
    <!-- Bootstrap JavaScript kütüphaneleri -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
