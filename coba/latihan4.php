<?php
class produk{
    public $jenis;
    public $merk;
    public $harga;
    public $lamaproduk;
    public $jumlahbeli;
    public $pajak;

    //mengecek produk sudah kedarluarsa atau belum, lama produk berdasarkan hari
    function kadaluarsa($jenis, $lamaproduk){
        if ($jenis =="makanan" && $lamaproduk > 150){
            return "kadarluarsa";
        }else{
            return "aman untuk dimakan";
        }
    }
    
    // function jumlah pembayaran
    function jumlahbayar($merk, $jumlahbeli, $harga, $pajak ){
        if ($merk == "polo"){
            return ($jumlahbeli*$harga)+($pajak/2);
        }else
            if($merk =="adidas"){
                return ($jumlahbeli*$harga)+$pajak;
            }
        
    }

    //function diskon setiap jenis
    function diskon($jenis, $harga){
        if($jenis=="makanan"){
            return $harga-($harga*(25/100));
        }else
            if($jenis=="outfit"){
                return $harga-($harga*(60/100));
        }else
            if ($jenis=="bahan pokok"){
                return $harga-($harga*(50/100));
            }
    }

    //vfunction menjumlah barang yang akan dibayar
    function bayar($jumlahbeli, $harga){
        if($jumlahbeli >0){
            return $jumlahbeli*$harga;
        } else{
            return "harap membeli barang terlebih dahulu!!";
        }
        
    }

}

$oreo = new produk();
$sepatu = new produk();
$baju = new produk();
$beras = new produk();

$oreo -> jenis ="makanan";
$oreo -> lamaproduk = 79;
$oreo -> harga = 15000;

$sepatu -> jenis = "outfit";
$sepatu -> merk = "adidas";
$sepatu -> harga = 250000;
$sepatu -> pajak = 100;
$sepatu -> jumlahbeli = 1;

$baju -> jenis = "outfit";
$baju -> merk = "polo";
$baju -> harga = 300000;
$baju -> pajak = 50;
$baju -> jumlahbeli = 3;

$beras -> jenis ="bahan pokok";
$beras -> harga = 100000;
$beras -> jumlahbeli = 4;
    
echo $oreo->kadaluarsa($oreo->jenis, $oreo->lamaproduk);
echo "<br />";
echo $oreo->diskon($oreo->jenis, $oreo->harga);
echo "<br />";
echo $oreo->bayar($oreo->jumlahbeli, $oreo->harga);
echo "<hr />";

echo $sepatu->jumlahbayar($sepatu->merk, $sepatu->jumlahbeli, $sepatu->harga, $sepatu->pajak);
echo "<br />";
echo $sepatu->diskon($sepatu->jenis, $sepatu->harga);
echo "<hr />";

echo $baju->jumlahbayar($baju->merk, $baju->jumlahbeli, $baju->harga, $baju->pajak);
echo "<br />";
echo $baju->diskon($baju->jenis, $baju->harga);
echo "<hr />";

echo $beras->diskon($beras->jenis, $beras->harga);
echo "<br/ >";
echo $beras->bayar( $beras->jumlahbeli, $beras->harga);

?>