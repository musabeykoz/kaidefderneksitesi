<?php
// MySQL bağlantısı
$servername = "localhost:3306";
$username = "kaidef";
$password = "kaidef123";
$dbname = "kaidef";

$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantı kontrolü
if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

// Verileri çek
$sql = "SELECT * FROM yarisma";
$result = $conn->query($sql);

// Sayfa başlangıcı
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <!-- Meta etiketleri, karakter seti ve cihazın ekran özelliklerini belirleme -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-....." crossorigin="anonymous" />
    <!-- Sayfa başlığı -->
    <title>KAİDEF</title>
    
    <!-- Bootstrap stil dosyası -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <!-- Sayfa özel CSS stilleri -->
    <style>
        /* Genel stil kuralları */
        .card {
            margin-bottom: 20px;
        }

        .carousel-inner img {
            border-radius: 20px 20px 20px 20px;
            width: 100%;
            height: 400px; /* Resim boyutunu ayarla */
            object-fit: cover;
            border-radius: 20px;
        }

        .featured-section {
            position: relative;
            margin-bottom: 20px;
        }

        .featured-image {
            height: 400px; /* Arka plan resmi boyutunu ayarla */
            width: 100%; /* Yeni ekledim */
            border-radius: 20px;
        }

        .featured-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 20px;
        }

        .featured-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
        }


        /* Navbar ve menü stilleri */
        .menu {
            list-style: none;
            padding: 0;
        }

        .navbar-header {
            display: flex;
            align-items: center;
        }

        .navbar-brand,
        .navbar-text {
            font-weight: bold;
            margin-bottom: 0;
        }

        .nav-item {
            position: relative;
            margin-right: 20px; /* Ayıraç eklemek için sağa boşluk bırakalım */
        }

        .nav-link {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            padding: 10px;
            display: inline-block;
        }


.submenu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 4px;
    padding: 10px;
    z-index: 1;
    min-width: 130px;
    width: 330px; /* Genişlik değerini istediğiniz gibi ayarlayabilirsiniz */
}

.nav-item:hover .submenu {
    display: flex;
}

.submenu a {
    color: #555;
    text-decoration: none;
    display: block;
    padding: 8px;
    transition: background-color 0.3s, color 0.3s;
}

.submenu a:hover {
    background-color: #e44d26;
    color: #fff;
}

.submenu li {
    display: inline-block;
    margin-right: 10px;
}

        #sponsorSlider {
            max-width: 1100px; /* Slider'ın maksimum genişliği */
            max-height: 200px;
            margin: 0 auto; /* Ortalama konumlandırma */
        }

    </style>

</head>

<body>
    <!-- Navbar bölümü -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <!-- Ana sayfa linki ve başlık -->
            <a class="navbar-brand" href="#">KAİDEF</a>
            <p class="navbar-text">Kocaeli Anadolu İlleri Dernekler Federasyonu</p>

            <!-- Mobil cihazlarda görünen menü butonu -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menü öğeleri -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <!-- Anasayfa linki -->
                    <li class="nav-item">
                        <a class="nav-link" href="../index.html">Anasayfa</a>
                    </li>
                    <!-- Hakkında linki ve alt menü -->
                    <li class="nav-item">
                        <a class="nav-link">Hakkında</a>
                        <ul class="submenu">
                            <li><a href="federasyon.php">Federasyon Hakkında</a></li>
                            <li><a href="yarısma.php">Yarışma Hakkında</a></li>
                            <li><a href="burs.php">Burs Hakkında</a></li>
                        </ul>
                    </li>

                    <!-- İletişim linki -->
                    <li class="nav-item">
                        <a class="nav-link" href="../iletisim/iletisim.html">İletişim</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!-- entegre edilecek yer -->
<!-- İçerikleri gösterme bölümü -->
<div class="container mt-3">
    <div class="row">
		<div class="col-md-12">
        <?php
        // Verileri ekrana yazdır
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='card col-md-6 col-lg-4 mb-4' style='max-width: 1100px;'>";
                echo "<div class='row g-0'>";
                echo "<div class='col-md-6'>";
                echo "<img src='{$row['resim_linki']}' alt='İçerik Resmi' class='img-fluid' style='width: 100%; max-width: 100%; height: auto;'>";
                echo "</div>";
                echo "<div class='col-md-6'>";
                echo "<div class='card-body'>";
                echo "<p class='card-text'>{$row['metin']}</p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "<p>Hiç içerik bulunamadı.</p>";
        }
        ?>
		</div>
    </div>
</div>

<!-- Sponsor slider bölümü -->
<div id="sponsorSlider" class="carousel slide" data-ride="carousel" data-interval="2000">
    <div class="carousel-inner">
        <!-- Birinci sponsor -->
        <div class="carousel-item active" style="background-image: url('your_image.jpg'); background-size: contain; background-repeat: no-repeat; background-position: center;">
            <!-- İçeriğiniz buraya gelebilir -->
            <img src="https://www.acibadem.com.tr/hayat/Images/YayinMakaleler/bu-10-test-sagliginiz-icin-onemli_6381_1.jpg" class="d-block w-100" alt="Your Image" style="height: 200px;">
        </div>

        <!-- İkinci sponsor -->
        <div class="carousel-item" style="background-image: url('your_image.jpg'); background-size: contain; background-repeat: no-repeat; background-position: center;">
            <!-- İçeriğiniz buraya gelebilir -->
            <img src="https://truvamagazine.com/wp-content/uploads/2020/03/test-1.jpg" class="d-block w-100" alt="Your Image" style="height: 200px;">
        </div>
        <!-- Diğer sponsorlar buraya eklenebilir -->
    </div>

    <!-- Sponsor slider navigation -->
    <a class="carousel-control-prev" href="#sponsorSlider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#sponsorSlider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

    <br>



    <!-- Sayfa alt kısmı (footer) -->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2024 KAİDEF - Kocaeli Anadolu İlleri Dernekler Federasyonu</p>
    </footer>

    <!-- Bootstrap JavaScript kütüphaneleri -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>
