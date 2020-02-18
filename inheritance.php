<?php

class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $lamaMain;

    public function __construct($judul, $penulis, $penerbit, $harga,$jmlHalaman = 0, $lamaMain = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->lamaMain = $lamaMain;
    }

    public function getLabel() {
        return "$this->judul, $this->penulis";
    }

    public function getInfoProduk() {
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

class Novel extends Produk {
    public function getInfoProduk() {
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman";
        return $str; 
    }
}

class Game extends Produk {
    public function getInfoProduk() {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->lamaMain} Jam";
        return $str;
    }
    
}

$produk = new Novel("Harry Potter","JK Rowling","British Publisher","300000",500,0);
$produk2 = new Game("Death Stranding","Hideo Kojima","Sony","800000",0,50);

echo $produk->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();