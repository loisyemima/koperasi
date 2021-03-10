<?php
class kendaraan{
    public $jeniskendaraan;
    public $jumlahroda;
    public $merk;
    public $bahanbakar;
    public $harga;
    public $tahunpembuatan;

function subsidi($bahanbakar, $tahunpembuatan){
    if ($bahanbakar =="premium" && $tahunpembuatan < 2005){
        return "Ya";
    }else{
        return "Tidak";
    }
}

function hargaSecond($tahunpembuatan, $harga){
    if ($tahunpembuatan >2010){
        return $harga-($harga*(20/100));
    }else
        if($tahunpembuatan >2005){
            return $harga-($harga*(30/100));
        }
     else
        if($tahunpembuatan <2005){
            return $harga-($harga*(40/100));
        }
}
}
$fortuner = new kendaraan();
$jeep = new kendaraan();

$fortuner -> bahanbakar ="premium";
$fortuner -> tahunpembuatan = 2001;
$fortuner -> harga = 200000000;

$jeep -> bahanbakar ="solar";
$jeep -> tahunpembuatan =2000;
 
echo $fortuner->hargaSecond($fortuner->tahunpembuatan, $fortuner->harga);
echo "<br />";
echo $fortuner->subsidi($fortuner->bahanbakar, $fortuner->tahunpembuatan);
echo "<hr />";
echo $jeep->subsidi($jeep->bahanbakar, $jeep->tahunpembuatan);
?>