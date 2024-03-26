<?php
// buat class
class Rumah{

// properti
public $nama_pemilk = "kosong";
public $warna_rumah = "kosong";
public $merk_tv = "kosong";

// methode
public function getrumah($nama_pemilk, $warna_rumah, $merk_tv){
    echo "Rumah ini milik : " . $nama_pemilk;
    echo "</br>";
    echo "Warna rumah ini adalah " . $warna_rumah;
    echo "</br>";
    echo "Merk tv nya " . $merk_tv;

}
public function getdetail(){
    echo $this->getrumah("pak jawir","putih","samsung");
}
}
// object rumah 1
$rumah1 = new Rumah();
$rumah1->nama_pemilk = "Bu Aul";
$rumah1->warna_rumah = "Pink";
$rumah1->merk_tv = "Toshiba";
var_dump($rumah1);

echo "</br>";
echo "</br>";
echo "<hr>";

// object rumah 2
$rumah2 = new Rumah();
$rumah2->getdetail();
echo "</br>";
echo "</br>";
var_dump($rumah2);