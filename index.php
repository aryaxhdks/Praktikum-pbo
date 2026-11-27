<?php

//
require('./propertyConstant.php');

use pbo\marketplace\Produk;

//Object
$produk = new Produk();

$produk->setkode('P001')
        ->setnama('Laptop')
        ->setharga(1000000)
        ->setstok(5);

//Hasil
echo "Produk: ". $produk->getnama();
echo "<br/>";
echo "Harga: ". $produk->getharga();
echo "<br/>";
echo "Stok: ". $produk->getstok();
echo "<br/>";
echo "pajak: ".$produk->pajak() ."%";
echo "<br/>";
echo "<br/>";
echo "Total harga setelah pajak: Rp.". $produk->total();

?>