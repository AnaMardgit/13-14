<?php
include_once("connection.php");

$aktif_menu = "beranda";

include_once("header.php");

?>



        <div class="konten-pariwisata">
            <div class="info-container">

                <?php
                    $sql = "SELECT * FROM paket_wisata";

                    $results = mysqli_query($conn, $sql);

                    while ($data_paket = mysqli_fetch_array($results))
                    {

                        $path_gambar ="images/" . $data_paket['img_paket'];
                ?>
                <div class="paket-container">

                    <img src="<?php echo $path_gambar;?>" alt="Makanan Ciamis">
                    <h3><?php echo $data_paket ['nama_paket']?></h3>
                    <p><?php echo $data_paket ['deskripsi_paket']?></p>
                    <a href="form_pendaftaran.php? id_paket_wisata=<?php echo $data_paket['id_paket_wisata']?>">Daftar</a>
                </div><!--end paket-container -->
    

                <?php
                    }
                ?>
            </div> <!--end info-container -->
    
            <div class="promosi-container">
                <div class="video-container">
                    <h3>Paket Wisata 1</h3>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/3WHgOak_MYQ?si=H2LYkg5QgKl2E6mu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div><!--end video-container -->
                <div class="video-container">
                    <h3>Paket Wisata 2</h3>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/9A_icqus6cM?si=VUzTCpGMnX-oy5Gc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                     
                </div><!--end video-container -->
            <div class="video-container">
                <h3>Paket Wisata 3</h3>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/rkrqk8BVqSQ?si=hW-AORj1uhX441tD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div><!--end video-container -->
            <div class="video-container">
                <h3>Paket Wisata 4</h3>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/WLpLJxznPwM?si=h7VPshuUxhtVm6fH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                     
            </div><!--end video-container -->
            </div><!-- end promosi-container-->
        </div><!--end of konten-pariwisata-->



<?php
include_once("footer.php");
?>
    