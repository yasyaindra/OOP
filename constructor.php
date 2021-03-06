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
        return "$this->judul, $this->penulis";
    }
}

$produk = new Produk("Harry Potter","JK Rowling","British Publisher",300000);
$produk2 = new Produk("Death Stranding","Hideo Kojima","Sony",600000);

echo "Penulis : ".$produk->getLabel()."<br>";
echo "Game : ".$produk2->getLabel();