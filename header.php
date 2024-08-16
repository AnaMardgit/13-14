<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playwrite+HR:wght@100..400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <title>Wisata alam Ciamis</title>
</head>
<body>

    <?php
    function renderAktifMenu ($val1, $val2){
        $result = "";
        if ($val1== $val2){
            $result ="active-menu";
        }
        return $result;
    }
    ?>

    <div class="main-container">
        <div class="img-gambar">
            
            <div class="brand-container">
                <h1>Objek Wisata Alam </h1>
                <h2>di Ciamis Jawa Barat dan sekitarnya</h2>
                <img src="images/visit-ciamis-logo.png" alt="">

            </div><!--end of brand-container-->
            <img src="images/curug tujuh.webp" alt="curug tujuh">
            <img src="images/camping di ciamis.jpg" alt="camping">
            <img src="images/masjid agung.webp" alt="masjid agung">
            <img src="images/alun-alun.webp" alt="alun alun">
            <img src="images/puncak rancah.webp" alt="puncak rancah">
            <img src="images/kampung kuta.webp" alt="kampung kuta">
            <img src="images/jembatan cirahong.webp" alt="jembatan cirahong">
            <img src="images/ciung wanara.webp" alt="ciung wanara">
            <img src="images/cadas ngampar.webp" alt="">
            <img src="images/situ lengkong panjalu2.jpg" alt="">
        </div><!--end of img-gambar-->

        <div class="menu-header">
            <a class="<?php echo renderAktifMenu ($aktif_menu, "beranda")?>" href="index.php">Beranda</a>

            <a class="<?php echo renderAktifMenu ($aktif_menu, "form_pendaftaran")?>" href="form_pendaftaran.php">Daftar Paket Wisata</a>

            <a class="<?php echo renderAktifMenu ($aktif_menu, "list_pendaftaran")?>" href="list_pemesanan.php">Modifikasi Pesanan</a>
        </div> <!--end menu-header-->