<?php
class  {
    // Properti
    public $merk = "kosong";
    public $ukuran = "kosong";
    public $warna = "kosong";

    // Method
    private function getMesincuci($merk, $ukuran, $warna) {
        echo "Mesin cuci ini adalah milik: " . $merk . "<br>";
        echo "Ukurannya adalah: " . $ukuran . "<br>";
        echo "Warnanya adalah: " . $warna . "<br>";
    }

    public function getDetail() {
        $this->getMesincuci("Samsung", "80 cm", "Putih");
    }
}

// Objek mesin cuci 1
$mesincuci1 = new Mesincuci();
$mesincuci1->merk = "samsung";
$mesincuci1->ukuran = "80 cm";
$mesincuci1->warna = "putih";
var_dump($mesincuci1);
echo "<br><br><hr>";

// Objek mesin cuci 2
$mesincuci1 = new Mesincuci();
$mesincuci2->getDetail();
echo "<br><br>";
var_dump($mesincuci2);
?>
