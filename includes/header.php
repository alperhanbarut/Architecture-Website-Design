<?php include "../includes/head.php"; ?>

<a href="https://wa.me/905xxxxxxxxx" target="_blank" class="whatsapp-button" aria-label="WhatsApp">
    <i class="fa-brands fa-whatsapp"></i>
</a>

<button id="scrollTopBtn" aria-label="Sayfa yukarı scroll">
    &#8679;
</button>

<header class="site-navigation d-none d-xl-block">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="website-logo">
                    <a href="../pages/index.php"><img src="../assets/images/logo.png" class="image-fluid"></a>
                </div>

            </div>
            <div class="col-lg-6">
                <ul class="site-navigation-menu" id="main">
                    <li><a href="../pages/index.php">Ana sayfa</a></li>
                    <li><a href="../pages/hakkimizda.php">Hakkımızda</a></li>
                    <li><a href="#">Projeler</a>
                        <ul class="sub-menu">
                            <li><a href="../pages/devam_proje.php">Devam Eden Projeler</a></li>
                            <li><a href="../pages/tamam_proje.php">Tamamlanan Projeler</a></li>
                        </ul>
                    </li>
                    <li><a href="../pages/faaliyet.php">Faaliyet Alanları</a></li>
                    <li><a href="../pages/iletisim.php">İletişim</a></li>
                </ul>
            </div>

            <div class="col-lg-3">
                <ul class="site-navigation-lang-menu">
                    <li><a href="#"><img src="../assets/images/turkey.png" alt=""></a></li>
                    <li><a href="#"><img src="../assets/images/united-kingdom.png" alt=""></a></li>
                </ul>

            </div>
        </div>
    </div>
</header>
<?php
include "../includes/mobil-menu.php";
?>