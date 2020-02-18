<?php
//plus some getter and setter modified
class Produk {
    private $judul,
           $penulis,
           $penerbit,
             $harga,
            $diskon = 0;

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
    public function setHarga() {
        $this->harga = $harga;
    }
    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon/100);
    }
    public function getJudul() {
        return $this->judul;
    }

    public function setJudul($judul) {
        if(!is_string($judul)) {
            throw new Exception("judul harus berupa string");
        }
        return $this->judul = $judul;
    }
    public function setPenulis($penulis) {
        $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }
    public function setPenerbit($penerbit) {
        $this->penerbit = $penerbit;
    }
    public function getPenerbit() {
        return $this->penerbit = $penerbit;
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
echo "<hr>";

echo $produk->getHarga(50);
echo "<br>";
echo $produk2->getHarga(50);
echo "<br>";
echo $produk->setJudul("Da Vinci Code");
echo "<br>";
echo $produk->getPenulis();
