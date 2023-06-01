
<?php
$angka1 = "";
if(isset($_GET['angka1'])){
    $angka1 = $_GET['angka1'];
}
?>

<!DOCTYPE Html>
<html>
<head>
    <title> Metode 2 </title>
    <link rel="stylesheet" href="metode.css" />
</head>
<body class="total-halaman">
    <form acttion ="metode2.php" method="get">
        <section class="input-1">
            Pendapatan : <input type="number" class="form__input" id="name" name="angka1" placeholder="" required="" />
            <br/>
            <div class="buttons-container">
                <input type="submit" name="kirim" value=" Perhitungkan ! " class="button-arounder">
            </div>
            <br/>
        </section>
    <br/>

    <br/>
    <br/>

<?php 
    if(isset($_GET['kirim'])){
        $_GET['kirim'] = "";
        }
            $total_dana_kebutuhan = ((float)$angka1 * 0.4);
            $total_dana_keinginan = ((float)$angka1 * 0.2);
            $total_dana_investasi = ((float)$angka1 * 0.4);
?>
 
        <section class="hasil-1">
            <div class="output-1">
                Total pendapatan yang anda dapatkan adalah  
                <?php 
                echo "<br/>";
                echo "Rp. " . (number_format((float)$angka1,3)); ?>
                <br/>
                <br/>
                Total dana kebutuhan anda adalah  
                <?php 
                echo "<br/>";
                echo "Rp. " . (number_format($total_dana_kebutuhan,3)); ?>
                <br/>
                Total dana keinginan anda adalah  
                <?php 
                echo "<br/>";
                echo "Rp. " . (number_format($total_dana_keinginan,3)); ?>
                <br/>
                Total dana Investasi anda adalah 
                <?php 
                echo "<br/>";
                echo "Rp. " . (number_format($total_dana_investasi,3)); ?>
            </div>
        </section>
        <section class="hasil-2">
            <div class="saran-keinginan">
                    <?php
                        if($total_dana_keinginan <= 800000){
                            echo "Diketahui budget keinginan Rp. " . (number_format($total_dana_keinginan,3));
                            echo "<br/>";
                            echo " Akan lebih baik disimpan ke dana darurat";
                        }
                        elseif($total_dana_keinginan > 800000){
                            echo "Diketahui budget keinginan Rp. " . (number_format($total_dana_keinginan,3));
                            echo "<br/>";
                            echo " Anda dapat membeli suatu barang keinginan dengan total biaya Rp. " . (number_format((float)($total_dana_keinginan * 0.5),3));
                            echo "<br/>";
                            echo "Sisa dari budget dapat ditabung kembali.";
                        }
                    ?>
            </div>
            <br/>
            <div class="saran-investasi">
                    <?php
                        if ($total_dana_investasi <= 1500000){
                            echo "Diketahui budget investasi Rp. " . (number_format($total_dana_investasi,3));
                            echo "<br/>";
                            echo " Disarankan untuk investasi ke diri sendiri";
                        }
                        elseif ($total_dana_investasi > 1500000){
                            echo "Dengan demikian dana investasi anda senilai Rp. " . (number_format($total_dana_investasi,3));
                            echo "<br/>";
                            echo " kami menyarankan untuk menggunakan instrumen investasi Reksadana";
                        }
                    ?>
            </div>
        </section>
    </html>
</body>
</html>
