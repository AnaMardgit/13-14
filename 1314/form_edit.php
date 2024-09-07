<?php
include_once("connection.php");

$aktif_menu = "form_pendaftaran";

include_once("header.php");


    function selectedPaketWisata ($val1, $val2){
        $result = "";
        if ($val1== $val2){
            $result ="selected";
        }
        return $result;
    }


    function renderlayanan ($val){
        $result = "";
        if ($val== "Y"){
            $result ="checked";
        }
        return $result;
    }

    if($_GET)
    {
        $id_daftar_pesanan = $_GET['id_daftar_pesanan'] ;
    }else 
    {
        $id_daftar_pesanan = 1;
    }

        //$sql_selected_pesanan= "SELECT*FROM paket_wisata WHERE id_paket_wisata =   $id_paket_wisata ";

        //$selected_paket = mysqli_query($conn,  $sql_selected_paket);

        $sql_selected_pesanan= "SELECT*FROM daftar_pesanan WHERE id_daftar_pesanan =   $id_daftar_pesanan";

        $selected_pesanan = mysqli_query($conn,  $sql_selected_pesanan);

        while ($row = mysqli_fetch_array($selected_pesanan))
        {
            $id_paket_wisata = $row ['id_paket_wisata'];
            $nama_pemesan = $row ['nama_pemesan'];
            $no_tlp = $row ['no_tlp'];
            $tanggal_pemesanan = $row ['tanggal_pemesanan'];
            $jumlah_peserta = $row ['jumlah_peserta'];
            $jumlah_hari = $row ['jumlah_hari'];
            $akomodasi = $row ['akomodasi'];
            $transportasi = $row ['transportasi'];
            $makanan = $row ['makanan'];
            $harga_paket = $row ['harga_paket'];
            $total_tagihan = $row ['total_tagihan'];

        }

        $sql_selected_paket= "SELECT*FROM paket_wisata WHERE id_paket_wisata =   $id_paket_wisata ";
        
        $selected_paket = mysqli_query($conn,  $sql_selected_paket);
        while ($item = mysqli_fetch_array($selected_paket))
        {
        $nama_paket = $item ['nama_paket'];
        $harga_penginapan = $item ['harga_penginapan'];
        $harga_transportasi = $item ['harga_transportasi'];
        $harga_makan = $item ['harga_servis_makan'];
        }
?>


<div class="form-container">
<h2>Edit Pemesanan Paket Wisata</h2>
<form action="proses_edit.php" method="post">

    <label for="nama_paket">Nama Paket</label>
    <select name="nama_paket" id="nama_paket" disabled>
    <?php
                $sql = "SELECT * FROM paket_wisata";

                $results = mysqli_query($conn, $sql);

                while ($data_paket = mysqli_fetch_array($results))
                {
    ?>
        <option 
        value="<?php echo $data_paket ['id_paket_wisata']?>" 

        <?php 
        
            echo selectedPaketWisata ($data_paket ['nama_paket'], $nama_paket);
        ?>
        
        >
        <?php echo $data_paket ['nama_paket']?></option>
    <?php
                }
    ?>
    </select>


    <label for="nama_pemesan">Nama Pemesan</label>
    <input type="text" name="nama_pemesan" id="nama_pemesan" value="<?php echo $nama_pemesan;?>" required>
    
    <label for="no_tlp">No Tlp</label>
    <input type="text" name="no_tlp" id="no_tlp" value="<?php echo $no_tlp;?>"required>

    <label for="tgl_pesan">Tanggal Pesan</label>
    <input type="date" name="tgl_pesan" id="tgl_pesan" value="<?php echo $tanggal_pemesanan;?>"required>

    <label for="jumlah_hari">Waktu Pelaksanakan Perjalanan</label>
    <input type="number" name="jumlah_hari" id="jumlah_hari" value="<?php echo $jumlah_hari;?>">

    <label for="">Pelayanan Paket Perjalanan</label>

    <div class="layanan_container">
    
        <div class="item-layanan">
            <label for="layanan_penginapan">Penginapan<?php echo " ".number_format($harga_penginapan, 0, ',','.');?></label>
            <input type="checkbox" name="layanan_penginapan" id="layanan_penginapan" value="<?php echo $harga_penginapan ?>" <?echo renderlayanan($akomodasi);?>>
        </div>

        <div class="item-layanan">
            <label for="layanan_transportasi">Transportasi<?php echo " ".number_format($harga_transportasi, 0, ',','.');?></label>
            <input type="checkbox" name="layanan_transportasi" id="layanan_transportasi" value="<?php echo $harga_transportasi ?>"<?echo renderlayanan($transportasi);?>>
        </div>

        <div class="item-layanan">
            <label for="layanan_makan">Service Makan <?php echo " ".number_format($harga_makan , 0, ',','.');?></label>
            <input type="checkbox" name="layanan_makan" id="layanan_makan" value="<?php echo $harga_makan  ?>" <?echo renderlayanan($makanan);?>>
        </div>
    </div> <!--end layanan_container-->
    
    <label for="jumlah_peserta">Jumlah Peserta</label>
    <input type="number" name="jumlah_peserta" id="jumlah_peserta" value="<?php echo $jumlah_peserta;?>">

    <label for="harga_paket">Harga Paket Perjalanan</label>
    <input type="text" name="harga_paket" id="harga_paket"value="<?php echo $harga_paket;?>" required>

    <label for="jumlah_tagihan">Jumlah Tagihan</label>
    <input type="text" name="jumlah_tagihan" id="jumlah_tagihan" value="<?php echo $total_tagihan;?>" required>
    

        <div class="btn-container">
            <input type="submit" value="Update">
            <button id="btn-reset">Reset</button>
        </div>
</form>
</div><!--end of form-container-->
<?php
include_once("footer.php");
?>     

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>


<script>
$(document).ready(function(){

    function perhitungan(){

        var harga_penginapan = 0;
        var harga_transportasi = 0;
        var harga_makan = 0;

        if($('#layanan_penginapan').is(':checked')){
            harga_penginapan = $('#layanan_penginapan').val();
        } 

        if($('#layanan_transportasi').is(':checked')){
            harga_transportasi = $('#layanan_transportasi').val();
        }

        if($('#layanan_makan').is(':checked')){
            harga_makan = $('#layanan_makan').val();
        }

        
        jumlah_hari = $('#jumlah_hari ').val();
        jumlah_peserta = $('#jumlah_peserta ').val();

        if(jumlah_peserta<1){
            alert("jumlah peserta minimal 1");
            $('#jumlah_peserta').val("1");
            jumlah_peserta = $('#jumlah_peserta ').val();
        }

        if(jumlah_hari<1){
            alert("jumlah hari minimal 1");
            $('#jumlah_hari').val("1");
            jumlah_hari = $('#jumlah_hari ').val();
        }
       

        var harga_paket = parseInt(harga_penginapan) + parseInt(harga_transportasi) + parseInt(harga_makan) ;

        var harga_paket_formated = harga_paket.toLocaleString ('de-DE');

        var jumlah_tagihan = harga_paket * parseInt(jumlah_hari) * parseInt(jumlah_peserta) ;
        
        var jumlah_tagihan_formated = jumlah_tagihan.toLocaleString ('de-DE');
        
            if(parseInt(harga_transportasi)==0){
                alert("wajib menyertakan paket transportasi");
            }

            $('#harga_paket').val(harga_paket_formated);
            $('#jumlah_tagihan').val(jumlah_tagihan_formated);
    }

    $("#btn-hitung").on('click', function(){
        event.preventDefault();
        perhitungan();
    })
    $("#jumlah_peserta").on('change', function(){
        perhitungan();
      
    });

    $("#jumlah_hari").on('change', function(){
        perhitungan();
      
    });

    $("#layanan_transportasi").on('change', function(){
        perhitungan();
      
    });

    $("#layanan_penginapan").on('change', function(){
        perhitungan();
      
    });

    $("#layanan_makan").on('change', function(){
        perhitungan();
      
    });
    


    $("#btn-reset").on('click', function(){
        event.preventDefault();
            $('#harga_paket').val("");
            $('#jumlah_tagihan').val("");
            $('#nama_pemesan').val("");
            $('#tgl_pesan').val("");
            $('#no_tlp').val("");
            $('#jumlah_hari').val(1);
            $('#jumlah_peserta').val(1);
            $('#layanan_makan').prop('checked', true);
            $('#layanan_penginapan').prop('checked', true);
            $('#layanan_transportasi').prop('checked', true);
    })
  });

</script>