<?php

class Produk {
    public $judul = "Buku Bagus",
           $penulis = "Yasya Indra",
           $penerbit = "Penerbit Bagus",
           $harga = 10;

    public function sayHello() {
        return "hello world";
    }

    public function getLabel() {
        return "$this->judul, $this->penulis";
    }
}

$produk1 = new Produk();
$produk1->judul = "Naruto";


$produk2 = new Produk();
$produk2->judul = "Sonic";

echo "<h1> Komik : $produk1->judul, $produk1->penulis </h1>";
echo "<br>";
echo $produk1->getLabel();