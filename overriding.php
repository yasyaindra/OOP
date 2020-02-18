<?php

class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga;

    public function __construct($judul, $penulis, $penerbit, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis";
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

class Novel extends Produk {
    public $jmlHalaman;
    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman) {
        parent::__construct($judul, $penulis, $penerbit, $harga, $jmlHalaman);
        $this->jmlHalaman = $jmlHalaman;
    }
    public function getInfoProduk() {
        $str =  "Novel : ". parent::getInfoProduk() ." - {$this->jmlHalaman} Halaman";
        return $str; 
    }
}

class Game extends Produk {
    public $lamaMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $lamaMain) {
        parent::__construct($judul, $penulis, $penerbit, $harga, $lamaMain);
        $this->lamaMain = $lamaMain;
    }

    public function getInfoProduk() {
        $str = "Game : ".parent::getInfoProduk()."  ~ {$this->lamaMain} Jam";
        return $str;
    }
    
}

$produk = new Novel("Harry Potter","JK Rowling","British Publisher","300000",500);
$produk2 = new Game("Death Stranding","Hideo Kojima","Sony","800000",50);

echo $produk->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();